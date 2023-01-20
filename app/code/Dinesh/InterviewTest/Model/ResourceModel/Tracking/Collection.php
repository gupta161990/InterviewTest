<?php
/**
 * Dinesh Kumar
 * 18/01/2023
 * Jira ticket url
 */
namespace Dinesh\InterviewTest\Model\ResourceModel\Tracking;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * Define collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dinesh\InterviewTest\Model\Tracking', 'Dinesh\InterviewTest\Model\ResourceModel\Tracking');
		
    }

}
?>