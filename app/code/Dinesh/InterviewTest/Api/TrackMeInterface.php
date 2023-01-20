<?php
/**
 * Dinesh Kumar
 * 18/01/2023
 * Jira ticket url
 */
namespace Dinesh\InterviewTest\Api;

interface TrackMeInterface {
	 /**
     * save tracking information
     * @return \Dinesh\InterviewTest\Api\Data\TrackMeInterface
     */
	public function save();
	
	/**
     * return all the tracked information list
     * @return \Dinesh\InterviewTest\Api\Data\TrackingSearchResultsInterface
     */
	public function getList();

}
?>