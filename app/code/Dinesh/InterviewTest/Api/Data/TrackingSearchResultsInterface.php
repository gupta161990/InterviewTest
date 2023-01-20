<?php
/**
 * Dinesh Kumar
 * 19/01/2023
 * Jira ticket url
 */
namespace Dinesh\InterviewTest\Api\Data;

/**
 * Interface for customer search results.
 * @api
 * @since 100.0.2
 */
interface TrackingSearchResultsInterface
{
    /**
     * Get All Tracking Item list.
     *
     * @return \Dinesh\InterviewTest\Api\Data\TrackMeInterface[]
     */
    public function getItems();

    /**
     * Get Tracking Item
     *
     * @param \Dinesh\InterviewTest\Api\Data\TrackMeInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
