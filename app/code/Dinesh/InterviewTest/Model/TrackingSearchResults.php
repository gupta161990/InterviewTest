<?php
/**
 * Dinesh Kumar
 * 19/01/2023
 * Jira ticket url
 */
declare(strict_types=1);

namespace Dinesh\InterviewTest\Model;

use Dinesh\InterviewTest\Api\Data\TrackingSearchResultsInterface;
use Magento\Framework\Api\SearchResults;

/**
 * Service Data Object with results.
 */
class TrackingSearchResults extends SearchResults implements TrackingSearchResultsInterface
{
}
