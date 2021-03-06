<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.NetworksAddPeeringRequest</code>
 */
class NetworksAddPeeringRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * This field will be deprecated soon. Use exchange_subnet_routes in network_peering instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>bool auto_create_routes = 57454941;</code>
     */
    private $auto_create_routes = false;
    /**
     * Name of the peering, which should conform to RFC1035.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * Network peering parameters. In order to specify route policies for peering using import and export custom routes, you must specify all peering related parameters (name, peer network, exchange_subnet_routes) in the network_peering field. The corresponding fields in NetworksAddPeeringRequest will be deprecated soon.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkPeering network_peering = 60491311;</code>
     */
    private $network_peering = null;
    /**
     * URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *
     * Generated from protobuf field <code>string peer_network = 232190033;</code>
     */
    private $peer_network = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $auto_create_routes
     *           This field will be deprecated soon. Use exchange_subnet_routes in network_peering instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *     @type string $name
     *           Name of the peering, which should conform to RFC1035.
     *     @type \Google\Cloud\Compute\V1\NetworkPeering $network_peering
     *           Network peering parameters. In order to specify route policies for peering using import and export custom routes, you must specify all peering related parameters (name, peer network, exchange_subnet_routes) in the network_peering field. The corresponding fields in NetworksAddPeeringRequest will be deprecated soon.
     *     @type string $peer_network
     *           URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * This field will be deprecated soon. Use exchange_subnet_routes in network_peering instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>bool auto_create_routes = 57454941;</code>
     * @return bool
     */
    public function getAutoCreateRoutes()
    {
        return $this->auto_create_routes;
    }

    /**
     * This field will be deprecated soon. Use exchange_subnet_routes in network_peering instead. Indicates whether full mesh connectivity is created and managed automatically between peered networks. Currently this field should always be true since Google Compute Engine will automatically create and manage subnetwork routes between two networks when peering state is ACTIVE.
     *
     * Generated from protobuf field <code>bool auto_create_routes = 57454941;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoCreateRoutes($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_create_routes = $var;

        return $this;
    }

    /**
     * Name of the peering, which should conform to RFC1035.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the peering, which should conform to RFC1035.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Network peering parameters. In order to specify route policies for peering using import and export custom routes, you must specify all peering related parameters (name, peer network, exchange_subnet_routes) in the network_peering field. The corresponding fields in NetworksAddPeeringRequest will be deprecated soon.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkPeering network_peering = 60491311;</code>
     * @return \Google\Cloud\Compute\V1\NetworkPeering
     */
    public function getNetworkPeering()
    {
        return isset($this->network_peering) ? $this->network_peering : null;
    }

    public function hasNetworkPeering()
    {
        return isset($this->network_peering);
    }

    public function clearNetworkPeering()
    {
        unset($this->network_peering);
    }

    /**
     * Network peering parameters. In order to specify route policies for peering using import and export custom routes, you must specify all peering related parameters (name, peer network, exchange_subnet_routes) in the network_peering field. The corresponding fields in NetworksAddPeeringRequest will be deprecated soon.
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.NetworkPeering network_peering = 60491311;</code>
     * @param \Google\Cloud\Compute\V1\NetworkPeering $var
     * @return $this
     */
    public function setNetworkPeering($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\NetworkPeering::class);
        $this->network_peering = $var;

        return $this;
    }

    /**
     * URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *
     * Generated from protobuf field <code>string peer_network = 232190033;</code>
     * @return string
     */
    public function getPeerNetwork()
    {
        return $this->peer_network;
    }

    /**
     * URL of the peer network. It can be either full URL or partial URL. The peer network may belong to a different project. If the partial URL does not contain project, it is assumed that the peer network is in the same project as the current network.
     *
     * Generated from protobuf field <code>string peer_network = 232190033;</code>
     * @param string $var
     * @return $this
     */
    public function setPeerNetwork($var)
    {
        GPBUtil::checkString($var, True);
        $this->peer_network = $var;

        return $this;
    }

}

