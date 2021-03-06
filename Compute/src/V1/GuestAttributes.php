<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A guest attributes entry.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.GuestAttributes</code>
 */
class GuestAttributes extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Type of the resource. Always compute#guestAttributes for guest attributes entry.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = '';
    /**
     * The path to be queried. This can be the default namespace ('/') or a nested namespace ('/\/') or a specified key ('/\/\')
     *
     * Generated from protobuf field <code>string query_path = 100155708;</code>
     */
    private $query_path = '';
    /**
     * [Output Only] The value of the requested queried path.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GuestAttributesValue query_value = 157570874;</code>
     */
    private $query_value = null;
    /**
     * [Output Only] Server-defined URL for this resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     */
    private $self_link = '';
    /**
     * The key to search for.
     *
     * Generated from protobuf field <code>string variable_key = 164364828;</code>
     */
    private $variable_key = '';
    /**
     * [Output Only] The value found for the requested key.
     *
     * Generated from protobuf field <code>string variable_value = 124582382;</code>
     */
    private $variable_value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#guestAttributes for guest attributes entry.
     *     @type string $query_path
     *           The path to be queried. This can be the default namespace ('/') or a nested namespace ('/\/') or a specified key ('/\/\')
     *     @type \Google\Cloud\Compute\V1\GuestAttributesValue $query_value
     *           [Output Only] The value of the requested queried path.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for this resource.
     *     @type string $variable_key
     *           The key to search for.
     *     @type string $variable_value
     *           [Output Only] The value found for the requested key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Type of the resource. Always compute#guestAttributes for guest attributes entry.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * [Output Only] Type of the resource. Always compute#guestAttributes for guest attributes entry.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * The path to be queried. This can be the default namespace ('/') or a nested namespace ('/\/') or a specified key ('/\/\')
     *
     * Generated from protobuf field <code>string query_path = 100155708;</code>
     * @return string
     */
    public function getQueryPath()
    {
        return $this->query_path;
    }

    /**
     * The path to be queried. This can be the default namespace ('/') or a nested namespace ('/\/') or a specified key ('/\/\')
     *
     * Generated from protobuf field <code>string query_path = 100155708;</code>
     * @param string $var
     * @return $this
     */
    public function setQueryPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->query_path = $var;

        return $this;
    }

    /**
     * [Output Only] The value of the requested queried path.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GuestAttributesValue query_value = 157570874;</code>
     * @return \Google\Cloud\Compute\V1\GuestAttributesValue
     */
    public function getQueryValue()
    {
        return isset($this->query_value) ? $this->query_value : null;
    }

    public function hasQueryValue()
    {
        return isset($this->query_value);
    }

    public function clearQueryValue()
    {
        unset($this->query_value);
    }

    /**
     * [Output Only] The value of the requested queried path.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.GuestAttributesValue query_value = 157570874;</code>
     * @param \Google\Cloud\Compute\V1\GuestAttributesValue $var
     * @return $this
     */
    public function setQueryValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\GuestAttributesValue::class);
        $this->query_value = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for this resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * [Output Only] Server-defined URL for this resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * The key to search for.
     *
     * Generated from protobuf field <code>string variable_key = 164364828;</code>
     * @return string
     */
    public function getVariableKey()
    {
        return $this->variable_key;
    }

    /**
     * The key to search for.
     *
     * Generated from protobuf field <code>string variable_key = 164364828;</code>
     * @param string $var
     * @return $this
     */
    public function setVariableKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->variable_key = $var;

        return $this;
    }

    /**
     * [Output Only] The value found for the requested key.
     *
     * Generated from protobuf field <code>string variable_value = 124582382;</code>
     * @return string
     */
    public function getVariableValue()
    {
        return $this->variable_value;
    }

    /**
     * [Output Only] The value found for the requested key.
     *
     * Generated from protobuf field <code>string variable_value = 124582382;</code>
     * @param string $var
     * @return $this
     */
    public function setVariableValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->variable_value = $var;

        return $this;
    }

}

