<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/common/offline_user_data.proto

namespace Google\Ads\GoogleAds\V11\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * User data holding user identifiers and attributes.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.common.UserData</code>
 */
class UserData extends \Google\Protobuf\Internal\Message
{
    /**
     * User identification info. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.UserIdentifier user_identifiers = 1;</code>
     */
    private $user_identifiers;
    /**
     * Additional transactions/attributes associated with the user.
     * Required when updating store sales data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.TransactionAttribute transaction_attribute = 2;</code>
     */
    protected $transaction_attribute = null;
    /**
     * Additional attributes associated with the user. Required when updating
     * customer match attributes. These have an expiration of 540 days.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.UserAttribute user_attribute = 3;</code>
     */
    protected $user_attribute = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Ads\GoogleAds\V11\Common\UserIdentifier>|\Google\Protobuf\Internal\RepeatedField $user_identifiers
     *           User identification info. Required.
     *     @type \Google\Ads\GoogleAds\V11\Common\TransactionAttribute $transaction_attribute
     *           Additional transactions/attributes associated with the user.
     *           Required when updating store sales data.
     *     @type \Google\Ads\GoogleAds\V11\Common\UserAttribute $user_attribute
     *           Additional attributes associated with the user. Required when updating
     *           customer match attributes. These have an expiration of 540 days.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Common\OfflineUserData::initOnce();
        parent::__construct($data);
    }

    /**
     * User identification info. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.UserIdentifier user_identifiers = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUserIdentifiers()
    {
        return $this->user_identifiers;
    }

    /**
     * User identification info. Required.
     *
     * Generated from protobuf field <code>repeated .google.ads.googleads.v11.common.UserIdentifier user_identifiers = 1;</code>
     * @param array<\Google\Ads\GoogleAds\V11\Common\UserIdentifier>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUserIdentifiers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Ads\GoogleAds\V11\Common\UserIdentifier::class);
        $this->user_identifiers = $arr;

        return $this;
    }

    /**
     * Additional transactions/attributes associated with the user.
     * Required when updating store sales data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.TransactionAttribute transaction_attribute = 2;</code>
     * @return \Google\Ads\GoogleAds\V11\Common\TransactionAttribute|null
     */
    public function getTransactionAttribute()
    {
        return $this->transaction_attribute;
    }

    public function hasTransactionAttribute()
    {
        return isset($this->transaction_attribute);
    }

    public function clearTransactionAttribute()
    {
        unset($this->transaction_attribute);
    }

    /**
     * Additional transactions/attributes associated with the user.
     * Required when updating store sales data.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.TransactionAttribute transaction_attribute = 2;</code>
     * @param \Google\Ads\GoogleAds\V11\Common\TransactionAttribute $var
     * @return $this
     */
    public function setTransactionAttribute($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V11\Common\TransactionAttribute::class);
        $this->transaction_attribute = $var;

        return $this;
    }

    /**
     * Additional attributes associated with the user. Required when updating
     * customer match attributes. These have an expiration of 540 days.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.UserAttribute user_attribute = 3;</code>
     * @return \Google\Ads\GoogleAds\V11\Common\UserAttribute|null
     */
    public function getUserAttribute()
    {
        return $this->user_attribute;
    }

    public function hasUserAttribute()
    {
        return isset($this->user_attribute);
    }

    public function clearUserAttribute()
    {
        unset($this->user_attribute);
    }

    /**
     * Additional attributes associated with the user. Required when updating
     * customer match attributes. These have an expiration of 540 days.
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.common.UserAttribute user_attribute = 3;</code>
     * @param \Google\Ads\GoogleAds\V11\Common\UserAttribute $var
     * @return $this
     */
    public function setUserAttribute($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V11\Common\UserAttribute::class);
        $this->user_attribute = $var;

        return $this;
    }

}

