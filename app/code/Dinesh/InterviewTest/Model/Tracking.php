<?php
/**
 * Dinesh Kumar
 * 18/01/2023
 * Jira ticket url
 */
namespace Dinesh\InterviewTest\Model;

class Tracking extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dinesh\InterviewTest\Model\ResourceModel\Tracking');
    }
}
?>