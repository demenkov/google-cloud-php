<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/service.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [CloudChannelService.ListTransferableSkus][google.cloud.channel.v1.CloudChannelService.ListTransferableSkus]
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.ListTransferableSkusRequest</code>
 */
class ListTransferableSkusRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the reseller's account.
     * The parent takes the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $parent = '';
    /**
     * Requested page size. Server might return fewer results than requested.
     * If unspecified, at most 100 SKUs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     * Optional.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     */
    private $page_size = 0;
    /**
     * A token identifying a page of results, if other than the first one.
     * Typically obtained via
     * [ListTransferableSkusResponse.next_page_token][google.cloud.channel.v1.ListTransferableSkusResponse.next_page_token] of the previous
     * [CloudChannelService.ListTransferableSkus][google.cloud.channel.v1.CloudChannelService.ListTransferableSkus] call.
     * Optional.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     */
    private $page_token = '';
    /**
     * This token is generated by the Super Admin of the resold customer to
     * authorize a reseller to access their Cloud Identity and purchase
     * entitlements on their behalf. This token can be omitted once the
     * authorization is generated. See https://support.google.com/a/answer/7643790
     * for more details.
     *
     * Generated from protobuf field <code>string auth_token = 5;</code>
     */
    private $auth_token = '';
    /**
     * The BCP-47 language code, such as "en-US".  If specified, the
     * response will be localized to the corresponding language code. Default is
     * "en-US".
     * Optional.
     *
     * Generated from protobuf field <code>string language_code = 6;</code>
     */
    private $language_code = '';
    protected $transferred_customer_identity;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $cloud_identity_id
     *           Customer's Cloud Identity ID
     *     @type string $customer_name
     *           A reseller is required to create a customer and use the resource name of
     *           the created customer here.
     *           The customer_name takes the format:
     *           accounts/{account_id}/customers/{customer_id}
     *     @type string $parent
     *           Required. The resource name of the reseller's account.
     *           The parent takes the format: accounts/{account_id}
     *     @type int $page_size
     *           Requested page size. Server might return fewer results than requested.
     *           If unspecified, at most 100 SKUs will be returned.
     *           The maximum value is 1000; values above 1000 will be coerced to 1000.
     *           Optional.
     *     @type string $page_token
     *           A token identifying a page of results, if other than the first one.
     *           Typically obtained via
     *           [ListTransferableSkusResponse.next_page_token][google.cloud.channel.v1.ListTransferableSkusResponse.next_page_token] of the previous
     *           [CloudChannelService.ListTransferableSkus][google.cloud.channel.v1.CloudChannelService.ListTransferableSkus] call.
     *           Optional.
     *     @type string $auth_token
     *           This token is generated by the Super Admin of the resold customer to
     *           authorize a reseller to access their Cloud Identity and purchase
     *           entitlements on their behalf. This token can be omitted once the
     *           authorization is generated. See https://support.google.com/a/answer/7643790
     *           for more details.
     *     @type string $language_code
     *           The BCP-47 language code, such as "en-US".  If specified, the
     *           response will be localized to the corresponding language code. Default is
     *           "en-US".
     *           Optional.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Customer's Cloud Identity ID
     *
     * Generated from protobuf field <code>string cloud_identity_id = 4;</code>
     * @return string
     */
    public function getCloudIdentityId()
    {
        return $this->readOneof(4);
    }

    public function hasCloudIdentityId()
    {
        return $this->hasOneof(4);
    }

    /**
     * Customer's Cloud Identity ID
     *
     * Generated from protobuf field <code>string cloud_identity_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCloudIdentityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * A reseller is required to create a customer and use the resource name of
     * the created customer here.
     * The customer_name takes the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer_name = 7;</code>
     * @return string
     */
    public function getCustomerName()
    {
        return $this->readOneof(7);
    }

    public function hasCustomerName()
    {
        return $this->hasOneof(7);
    }

    /**
     * A reseller is required to create a customer and use the resource name of
     * the created customer here.
     * The customer_name takes the format:
     * accounts/{account_id}/customers/{customer_id}
     *
     * Generated from protobuf field <code>string customer_name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Required. The resource name of the reseller's account.
     * The parent takes the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the reseller's account.
     * The parent takes the format: accounts/{account_id}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Requested page size. Server might return fewer results than requested.
     * If unspecified, at most 100 SKUs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     * Optional.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Requested page size. Server might return fewer results than requested.
     * If unspecified, at most 100 SKUs will be returned.
     * The maximum value is 1000; values above 1000 will be coerced to 1000.
     * Optional.
     *
     * Generated from protobuf field <code>int32 page_size = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A token identifying a page of results, if other than the first one.
     * Typically obtained via
     * [ListTransferableSkusResponse.next_page_token][google.cloud.channel.v1.ListTransferableSkusResponse.next_page_token] of the previous
     * [CloudChannelService.ListTransferableSkus][google.cloud.channel.v1.CloudChannelService.ListTransferableSkus] call.
     * Optional.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A token identifying a page of results, if other than the first one.
     * Typically obtained via
     * [ListTransferableSkusResponse.next_page_token][google.cloud.channel.v1.ListTransferableSkusResponse.next_page_token] of the previous
     * [CloudChannelService.ListTransferableSkus][google.cloud.channel.v1.CloudChannelService.ListTransferableSkus] call.
     * Optional.
     *
     * Generated from protobuf field <code>string page_token = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

    /**
     * This token is generated by the Super Admin of the resold customer to
     * authorize a reseller to access their Cloud Identity and purchase
     * entitlements on their behalf. This token can be omitted once the
     * authorization is generated. See https://support.google.com/a/answer/7643790
     * for more details.
     *
     * Generated from protobuf field <code>string auth_token = 5;</code>
     * @return string
     */
    public function getAuthToken()
    {
        return $this->auth_token;
    }

    /**
     * This token is generated by the Super Admin of the resold customer to
     * authorize a reseller to access their Cloud Identity and purchase
     * entitlements on their behalf. This token can be omitted once the
     * authorization is generated. See https://support.google.com/a/answer/7643790
     * for more details.
     *
     * Generated from protobuf field <code>string auth_token = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->auth_token = $var;

        return $this;
    }

    /**
     * The BCP-47 language code, such as "en-US".  If specified, the
     * response will be localized to the corresponding language code. Default is
     * "en-US".
     * Optional.
     *
     * Generated from protobuf field <code>string language_code = 6;</code>
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->language_code;
    }

    /**
     * The BCP-47 language code, such as "en-US".  If specified, the
     * response will be localized to the corresponding language code. Default is
     * "en-US".
     * Optional.
     *
     * Generated from protobuf field <code>string language_code = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setLanguageCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->language_code = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransferredCustomerIdentity()
    {
        return $this->whichOneof("transferred_customer_identity");
    }

}

