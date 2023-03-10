<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/lineage/v1/lineage.proto

namespace Google\Cloud\DataCatalog\Lineage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for
 * [SearchLinks][google.cloud.datacatalog.lineage.v1.Lineage.SearchLinks].
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.lineage.v1.SearchLinksResponse</code>
 */
class SearchLinksResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of links for a given asset. Can be empty if the asset has no
     * relations of requested type (source or target).
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.lineage.v1.Link links = 1;</code>
     */
    private $links;
    /**
     * The token to specify as `page_token` in the subsequent call to get the next
     * page. Omitted if there are no more pages in the response.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\DataCatalog\Lineage\V1\Link>|\Google\Protobuf\Internal\RepeatedField $links
     *           The list of links for a given asset. Can be empty if the asset has no
     *           relations of requested type (source or target).
     *     @type string $next_page_token
     *           The token to specify as `page_token` in the subsequent call to get the next
     *           page. Omitted if there are no more pages in the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\Lineage\V1\Lineage::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of links for a given asset. Can be empty if the asset has no
     * relations of requested type (source or target).
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.lineage.v1.Link links = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * The list of links for a given asset. Can be empty if the asset has no
     * relations of requested type (source or target).
     *
     * Generated from protobuf field <code>repeated .google.cloud.datacatalog.lineage.v1.Link links = 1;</code>
     * @param array<\Google\Cloud\DataCatalog\Lineage\V1\Link>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLinks($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\DataCatalog\Lineage\V1\Link::class);
        $this->links = $arr;

        return $this;
    }

    /**
     * The token to specify as `page_token` in the subsequent call to get the next
     * page. Omitted if there are no more pages in the response.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * The token to specify as `page_token` in the subsequent call to get the next
     * page. Omitted if there are no more pages in the response.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

