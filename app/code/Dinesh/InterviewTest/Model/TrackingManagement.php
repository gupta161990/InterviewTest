<?php
/**
 * Dinesh Kumar
 * 19/01/2023
 * Jira ticket url
 */
namespace Dinesh\InterviewTest\Model;

use Dinesh\InterviewTest\Api\TrackMeInterface;
use Dinesh\InterviewTest\Model\Tracking;
use Dinesh\InterviewTest\Model\TrackingFactory;
use Dinesh\InterviewTest\Api\Data\TrackingSearchResultsInterfaceFactory;
use Magento\Framework\Exception\InputException;


class TrackingManagement implements TrackMeInterface
{
	protected $_request;
	
	protected $_tracking;
	
	protected $_trackingFactory;
	
	protected $_trackingSearchResultsInterfaceFactory;
	
    public function __construct(
        \Magento\Framework\Webapi\Rest\Request $request,
		Tracking $tracking,
		TrackingFactory $trackingFactory,
		TrackingSearchResultsInterfaceFactory $trackingSearchResultsInterfaceFactory
    ) {
        $this->_request = $request;
		$this->_tracking = $tracking;
		$this->_trackingFactory = $trackingFactory;
		$this->_trackingSearchResultsInterfaceFactory = $trackingSearchResultsInterfaceFactory;
    }
	
	/**
     * save tracking information
     * @return array
     */
	public function save(){
		
		$body = $this->_request->getBodyParams();
		
		if(isset($body['sku']) && isset($body['price'])) {
			$sku = $body['sku'];
			$price = $body['price'];
		} else {
			 $error = array();
			 if(!isset($body['sku'])) {
				$error['sku']="%sku%";
			 }
			 if(!isset($body['price'])) {
				$error['price']="%price%";
			 }
			 throw InputException::requiredField($error);
		}
		
		$trackingCode = "XXXX".sprintf("%06d", mt_rand(1, 999999));
		
		$this->_tracking->setSku($sku);
		
		$this->_tracking->setTrackingCode($trackingCode);
		
		$this->_tracking->setTrackingMessage('Tracking Successful');
		
		$this->_tracking->save();

		$responseData = $this->_trackingFactory->create();
		$responseData->setMessage($this->_tracking->getTrackingMessage());
		$responseData->setCode($this->_tracking->getTrackingCode());

        return $responseData;
	}
	 
	/**
     * get list of tracking list
     * @return array
     */
	public function getList()
	{
		$responseData = $this->_trackingSearchResultsInterfaceFactory->create();
		
		$trackingCollection = $this->_tracking->getCollection();
		
		$dataArray = [];
		
		foreach($trackingCollection as $track) {
			$data = [];
			$data['sku'] = $track->getData('sku');
			$data['tracking_code'] = $track->getData('tracking_code');
			$data['tracking_message'] = $track->getData('tracking_message');
			$data['created_at'] = $track->getData('created_at'); 
			
			array_push($dataArray,$data);
		}
		$response = $responseData->setItems($dataArray);
		
        return $response;
	}
}