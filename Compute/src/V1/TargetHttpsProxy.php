<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Target HTTPS Proxy resource.
 * Google Compute Engine has two Target HTTPS Proxy resources:
 * * [Global](/compute/docs/reference/rest/{$api_version}/targetHttpsProxies) * [Regional](https://cloud.google.com/compute/docs/reference/rest/{$api_version}/regionTargetHttpsProxies)
 * A target HTTPS proxy is a component of GCP HTTPS load balancers.
 * * targetHttpsProxies are used by external HTTPS load balancers. * regionTargetHttpsProxies are used by internal HTTPS load balancers.
 * Forwarding rules reference a target HTTPS proxy, and the target proxy then references a URL map. For more information, read Using Target Proxies and  Forwarding rule concepts. (== resource_for {$api_version}.targetHttpsProxies ==) (== resource_for {$api_version}.regionTargetHttpsProxies ==)
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.TargetHttpsProxy</code>
 */
class TargetHttpsProxy extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. A URL referring to a networksecurity.AuthorizationPolicy resource that describes how the proxy should authorize inbound traffic. If left blank, access will not be restricted by an authorization policy.
     * Refer to the AuthorizationPolicy resource for additional details.
     * authorizationPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     * Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>string authorization_policy = 33945528;</code>
     */
    private $authorization_policy = '';
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = '';
    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     */
    private $description = '';
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     */
    private $id = '';
    /**
     * [Output Only] Type of resource. Always compute#targetHttpsProxy for target HTTPS proxies.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     */
    private $kind = '';
    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     */
    private $name = '';
    /**
     * This field only applies when the forwarding rule that references this target proxy has a loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     * When this field is set to true, Envoy proxies set up inbound traffic interception and bind to the IP address and port specified in the forwarding rule. This is generally useful when using Traffic Director to configure Envoy as a gateway or middle proxy (in other words, not a sidecar proxy). The Envoy proxy listens for inbound requests and handles requests when it receives them.
     * The default is false.
     *
     * Generated from protobuf field <code>bool proxy_bind = 17590126;</code>
     */
    private $proxy_bind = false;
    /**
     * Specifies the QUIC override policy for this TargetHttpsProxy resource. This setting determines whether the load balancer attempts to negotiate QUIC with clients. You can specify NONE, ENABLE, or DISABLE.
     * - When quic-override is set to NONE, Google manages whether QUIC is used.
     * - When quic-override is set to ENABLE, the load balancer uses QUIC when possible.
     * - When quic-override is set to DISABLE, the load balancer doesn't use QUIC.
     * - If the quic-override flag is not specified, NONE is implied.
     * -
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetHttpsProxy.QuicOverride quic_override = 188141741;</code>
     */
    private $quic_override = 0;
    /**
     * [Output Only] URL of the region where the regional TargetHttpsProxy resides. This field is not applicable to global TargetHttpsProxies.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     */
    private $region = '';
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     */
    private $self_link = '';
    /**
     * Optional. A URL referring to a networksecurity.ServerTlsPolicy resource that describes how the proxy should authenticate inbound traffic.
     * serverTlsPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     * If left blank, communications are not encrypted.
     * Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>string server_tls_policy = 27389810;</code>
     */
    private $server_tls_policy = '';
    /**
     * URLs to SslCertificate resources that are used to authenticate connections between users and the load balancer. At least one SSL certificate must be specified. Currently, you may specify up to 15 SSL certificates.
     *
     * Generated from protobuf field <code>repeated string ssl_certificates = 97571087;</code>
     */
    private $ssl_certificates;
    /**
     * URL of SslPolicy resource that will be associated with the TargetHttpsProxy resource. If not set, the TargetHttpsProxy resource has no SSL policy configured.
     *
     * Generated from protobuf field <code>string ssl_policy = 26754757;</code>
     */
    private $ssl_policy = '';
    /**
     * A fully-qualified or valid partial URL to the UrlMap resource that defines the mapping from URL to the BackendService. For example, the following are all valid URLs for specifying a URL map:
     * - https://www.googleapis.compute/v1/projects/project/global/urlMaps/url-map
     * - projects/project/global/urlMaps/url-map
     * - global/urlMaps/url-map
     *
     * Generated from protobuf field <code>string url_map = 98585228;</code>
     */
    private $url_map = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $authorization_policy
     *           Optional. A URL referring to a networksecurity.AuthorizationPolicy resource that describes how the proxy should authorize inbound traffic. If left blank, access will not be restricted by an authorization policy.
     *           Refer to the AuthorizationPolicy resource for additional details.
     *           authorizationPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     *           Note: This field currently has no impact.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type string $description
     *           An optional description of this resource. Provide this property when you create the resource.
     *     @type string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of resource. Always compute#targetHttpsProxy for target HTTPS proxies.
     *     @type string $name
     *           Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *     @type bool $proxy_bind
     *           This field only applies when the forwarding rule that references this target proxy has a loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     *           When this field is set to true, Envoy proxies set up inbound traffic interception and bind to the IP address and port specified in the forwarding rule. This is generally useful when using Traffic Director to configure Envoy as a gateway or middle proxy (in other words, not a sidecar proxy). The Envoy proxy listens for inbound requests and handles requests when it receives them.
     *           The default is false.
     *     @type int $quic_override
     *           Specifies the QUIC override policy for this TargetHttpsProxy resource. This setting determines whether the load balancer attempts to negotiate QUIC with clients. You can specify NONE, ENABLE, or DISABLE.
     *           - When quic-override is set to NONE, Google manages whether QUIC is used.
     *           - When quic-override is set to ENABLE, the load balancer uses QUIC when possible.
     *           - When quic-override is set to DISABLE, the load balancer doesn't use QUIC.
     *           - If the quic-override flag is not specified, NONE is implied.
     *           -
     *     @type string $region
     *           [Output Only] URL of the region where the regional TargetHttpsProxy resides. This field is not applicable to global TargetHttpsProxies.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $server_tls_policy
     *           Optional. A URL referring to a networksecurity.ServerTlsPolicy resource that describes how the proxy should authenticate inbound traffic.
     *           serverTlsPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     *           If left blank, communications are not encrypted.
     *           Note: This field currently has no impact.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $ssl_certificates
     *           URLs to SslCertificate resources that are used to authenticate connections between users and the load balancer. At least one SSL certificate must be specified. Currently, you may specify up to 15 SSL certificates.
     *     @type string $ssl_policy
     *           URL of SslPolicy resource that will be associated with the TargetHttpsProxy resource. If not set, the TargetHttpsProxy resource has no SSL policy configured.
     *     @type string $url_map
     *           A fully-qualified or valid partial URL to the UrlMap resource that defines the mapping from URL to the BackendService. For example, the following are all valid URLs for specifying a URL map:
     *           - https://www.googleapis.compute/v1/projects/project/global/urlMaps/url-map
     *           - projects/project/global/urlMaps/url-map
     *           - global/urlMaps/url-map
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. A URL referring to a networksecurity.AuthorizationPolicy resource that describes how the proxy should authorize inbound traffic. If left blank, access will not be restricted by an authorization policy.
     * Refer to the AuthorizationPolicy resource for additional details.
     * authorizationPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     * Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>string authorization_policy = 33945528;</code>
     * @return string
     */
    public function getAuthorizationPolicy()
    {
        return $this->authorization_policy;
    }

    /**
     * Optional. A URL referring to a networksecurity.AuthorizationPolicy resource that describes how the proxy should authorize inbound traffic. If left blank, access will not be restricted by an authorization policy.
     * Refer to the AuthorizationPolicy resource for additional details.
     * authorizationPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     * Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>string authorization_policy = 33945528;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthorizationPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->authorization_policy = $var;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return $this->creation_timestamp;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * An optional description of this resource. Provide this property when you create the resource.
     *
     * Generated from protobuf field <code>string description = 154502140;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>string id = 3355;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of resource. Always compute#targetHttpsProxy for target HTTPS proxies.
     *
     * Generated from protobuf field <code>string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * [Output Only] Type of resource. Always compute#targetHttpsProxy for target HTTPS proxies.
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
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
     *
     * Generated from protobuf field <code>string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the resource. Provided by the client when the resource is created. The name must be 1-63 characters long, and comply with RFC1035. Specifically, the name must be 1-63 characters long and match the regular expression `[a-z]([-a-z0-9]*[a-z0-9])?` which means the first character must be a lowercase letter, and all following characters must be a dash, lowercase letter, or digit, except the last character, which cannot be a dash.
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
     * This field only applies when the forwarding rule that references this target proxy has a loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     * When this field is set to true, Envoy proxies set up inbound traffic interception and bind to the IP address and port specified in the forwarding rule. This is generally useful when using Traffic Director to configure Envoy as a gateway or middle proxy (in other words, not a sidecar proxy). The Envoy proxy listens for inbound requests and handles requests when it receives them.
     * The default is false.
     *
     * Generated from protobuf field <code>bool proxy_bind = 17590126;</code>
     * @return bool
     */
    public function getProxyBind()
    {
        return $this->proxy_bind;
    }

    /**
     * This field only applies when the forwarding rule that references this target proxy has a loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     * When this field is set to true, Envoy proxies set up inbound traffic interception and bind to the IP address and port specified in the forwarding rule. This is generally useful when using Traffic Director to configure Envoy as a gateway or middle proxy (in other words, not a sidecar proxy). The Envoy proxy listens for inbound requests and handles requests when it receives them.
     * The default is false.
     *
     * Generated from protobuf field <code>bool proxy_bind = 17590126;</code>
     * @param bool $var
     * @return $this
     */
    public function setProxyBind($var)
    {
        GPBUtil::checkBool($var);
        $this->proxy_bind = $var;

        return $this;
    }

    /**
     * Specifies the QUIC override policy for this TargetHttpsProxy resource. This setting determines whether the load balancer attempts to negotiate QUIC with clients. You can specify NONE, ENABLE, or DISABLE.
     * - When quic-override is set to NONE, Google manages whether QUIC is used.
     * - When quic-override is set to ENABLE, the load balancer uses QUIC when possible.
     * - When quic-override is set to DISABLE, the load balancer doesn't use QUIC.
     * - If the quic-override flag is not specified, NONE is implied.
     * -
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetHttpsProxy.QuicOverride quic_override = 188141741;</code>
     * @return int
     */
    public function getQuicOverride()
    {
        return $this->quic_override;
    }

    /**
     * Specifies the QUIC override policy for this TargetHttpsProxy resource. This setting determines whether the load balancer attempts to negotiate QUIC with clients. You can specify NONE, ENABLE, or DISABLE.
     * - When quic-override is set to NONE, Google manages whether QUIC is used.
     * - When quic-override is set to ENABLE, the load balancer uses QUIC when possible.
     * - When quic-override is set to DISABLE, the load balancer doesn't use QUIC.
     * - If the quic-override flag is not specified, NONE is implied.
     * -
     *
     * Generated from protobuf field <code>.google.cloud.compute.v1.TargetHttpsProxy.QuicOverride quic_override = 188141741;</code>
     * @param int $var
     * @return $this
     */
    public function setQuicOverride($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Compute\V1\TargetHttpsProxy\QuicOverride::class);
        $this->quic_override = $var;

        return $this;
    }

    /**
     * [Output Only] URL of the region where the regional TargetHttpsProxy resides. This field is not applicable to global TargetHttpsProxies.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * [Output Only] URL of the region where the regional TargetHttpsProxy resides. This field is not applicable to global TargetHttpsProxies.
     *
     * Generated from protobuf field <code>string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>string self_link = 187779341;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return $this->self_link;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
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
     * Optional. A URL referring to a networksecurity.ServerTlsPolicy resource that describes how the proxy should authenticate inbound traffic.
     * serverTlsPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     * If left blank, communications are not encrypted.
     * Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>string server_tls_policy = 27389810;</code>
     * @return string
     */
    public function getServerTlsPolicy()
    {
        return $this->server_tls_policy;
    }

    /**
     * Optional. A URL referring to a networksecurity.ServerTlsPolicy resource that describes how the proxy should authenticate inbound traffic.
     * serverTlsPolicy only applies to a global TargetHttpsProxy attached to globalForwardingRules with the loadBalancingScheme set to INTERNAL_SELF_MANAGED.
     * If left blank, communications are not encrypted.
     * Note: This field currently has no impact.
     *
     * Generated from protobuf field <code>string server_tls_policy = 27389810;</code>
     * @param string $var
     * @return $this
     */
    public function setServerTlsPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_tls_policy = $var;

        return $this;
    }

    /**
     * URLs to SslCertificate resources that are used to authenticate connections between users and the load balancer. At least one SSL certificate must be specified. Currently, you may specify up to 15 SSL certificates.
     *
     * Generated from protobuf field <code>repeated string ssl_certificates = 97571087;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSslCertificates()
    {
        return $this->ssl_certificates;
    }

    /**
     * URLs to SslCertificate resources that are used to authenticate connections between users and the load balancer. At least one SSL certificate must be specified. Currently, you may specify up to 15 SSL certificates.
     *
     * Generated from protobuf field <code>repeated string ssl_certificates = 97571087;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSslCertificates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->ssl_certificates = $arr;

        return $this;
    }

    /**
     * URL of SslPolicy resource that will be associated with the TargetHttpsProxy resource. If not set, the TargetHttpsProxy resource has no SSL policy configured.
     *
     * Generated from protobuf field <code>string ssl_policy = 26754757;</code>
     * @return string
     */
    public function getSslPolicy()
    {
        return $this->ssl_policy;
    }

    /**
     * URL of SslPolicy resource that will be associated with the TargetHttpsProxy resource. If not set, the TargetHttpsProxy resource has no SSL policy configured.
     *
     * Generated from protobuf field <code>string ssl_policy = 26754757;</code>
     * @param string $var
     * @return $this
     */
    public function setSslPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->ssl_policy = $var;

        return $this;
    }

    /**
     * A fully-qualified or valid partial URL to the UrlMap resource that defines the mapping from URL to the BackendService. For example, the following are all valid URLs for specifying a URL map:
     * - https://www.googleapis.compute/v1/projects/project/global/urlMaps/url-map
     * - projects/project/global/urlMaps/url-map
     * - global/urlMaps/url-map
     *
     * Generated from protobuf field <code>string url_map = 98585228;</code>
     * @return string
     */
    public function getUrlMap()
    {
        return $this->url_map;
    }

    /**
     * A fully-qualified or valid partial URL to the UrlMap resource that defines the mapping from URL to the BackendService. For example, the following are all valid URLs for specifying a URL map:
     * - https://www.googleapis.compute/v1/projects/project/global/urlMaps/url-map
     * - projects/project/global/urlMaps/url-map
     * - global/urlMaps/url-map
     *
     * Generated from protobuf field <code>string url_map = 98585228;</code>
     * @param string $var
     * @return $this
     */
    public function setUrlMap($var)
    {
        GPBUtil::checkString($var, True);
        $this->url_map = $var;

        return $this;
    }

}

