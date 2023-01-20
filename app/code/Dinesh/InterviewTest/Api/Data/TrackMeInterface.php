<?php
/**
 * Dinesh Kumar
 * 19/01/2023
 * Jira ticket url
 */
namespace Dinesh\InterviewTest\Api\Data;

interface TrackMeInterface
{

	const TRACKING_ID = 'tracking_id';
	const SKU = 'sku';
    const TRACKING_MESSAGE = 'tracking_message';
	const MESSAGE = 'message';
	const TRACKING_CODE = 'tracking_code';
	const CODE = 'code';
	const CREATED_AT = 'created_at';
	
    /**
     * Get TrackingId.
     *
     * @return int|null
     */
    public function getTrackingId();

    /**
     * Set TrackingId.
     *
     * @param int $tracking_id
     *
     * @return \Dinesh\InterviewTest\Api\Data\TrackMeInterface
     */
    public function setTrackingId($tracking_id);

    /**
     * Get Sku.
     *
     * @return string|null
     */
    public function getSku();

    /**
     * Set Sku.
     *
     * @param string $sku
     *
     * @return \Dinesh\InterviewTest\Api\Data\TrackMeInterface
     */
    public function setSku($sku);

    /**
     * Get trackingMessage.
     *
     * @return string|null
     */
    public function getTrackingMessage();

    /**
     * Set trackingMessage.
     *
     * @param string $tracking_message
     *
     * @return \Dinesh\InterviewTest\Api\Data\TrackMeInterface
     */
    public function setMessage($message);
	
	
	/**
     * Get trackingMessage.
     *
     * @return string|null
     */
    public function getMessage();

    /**
     * Set trackingMessage.
     *
     * @param string $tracking_message
     *
     * @return \Dinesh\InterviewTest\Api\Data\TrackMeInterface
     */
    public function setTrackingMessage($tracking_message);
	
	/**
     * Get trackingCode.
     *
     * @return string|null
     */
    public function getTrackingCode();


    /**
     * Set tracking_code.
     *
     * @param string $tracking_code
     *
     * @return \Dinesh\InterviewTest\Api\Data\TrackMeInterface
     */
    public function setCode($code);
	
	/**
     * Get trackingCode.
     *
     * @return string|null
     */
    public function getCode();


    /**
     * Set tracking_code.
     *
     * @param string $tracking_code
     *
     * @return \Dinesh\InterviewTest\Api\Data\TrackMeInterface
     */
    public function setTrackingCode($tracking_code);
	
	/**
     * Get CreatedAt.
     *
     * @return string|null
     */
    public function getCreatedAt();

    /**
     * Set CreatedAt.
     *
     * @param date $created_at
     *
     * @return \Dinesh\InterviewTest\Api\Data\TrackMeInterface
     */
    public function setCreatedAt($created_at);
	
}