<?php
/**
 * Dinesh Kumar
 * 18/01/2023
 * Jira ticket url
 */
namespace Dinesh\InterviewTest\Model\ResourceModel;

class Tracking extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('tracking', 'tracking_id');
    }
}
?>