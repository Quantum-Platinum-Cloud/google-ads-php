<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v10/errors/user_data_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V10\Errors;

class UserDataError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
5google/ads/googleads/v10/errors/user_data_error.protogoogle.ads.googleads.v10.errors"�
UserDataErrorEnum"�
UserDataError
UNSPECIFIED 
UNKNOWN-
)OPERATIONS_FOR_CUSTOMER_MATCH_NOT_ALLOWED
TOO_MANY_USER_IDENTIFIERS
USER_LIST_NOT_APPLICABLEB�
#com.google.ads.googleads.v10.errorsBUserDataErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v10/errors;errors�GAA�Google.Ads.GoogleAds.V10.Errors�Google\\Ads\\GoogleAds\\V10\\Errors�#Google::Ads::GoogleAds::V10::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

