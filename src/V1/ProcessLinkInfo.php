<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/lineage/v1/lineage.proto

namespace Google\Cloud\DataCatalog\Lineage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Link details.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.lineage.v1.ProcessLinkInfo</code>
 */
class ProcessLinkInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the link in the format of
     * `projects/{project}/locations/{location}/links/{link}`.
     *
     * Generated from protobuf field <code>string link = 1;</code>
     */
    protected $link = '';
    /**
     * The start of the first event establishing this link-process tuple.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     */
    protected $start_time = null;
    /**
     * The end of the last event establishing this link-process tuple.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    protected $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $link
     *           The name of the link in the format of
     *           `projects/{project}/locations/{location}/links/{link}`.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           The start of the first event establishing this link-process tuple.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The end of the last event establishing this link-process tuple.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\Lineage\V1\Lineage::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the link in the format of
     * `projects/{project}/locations/{location}/links/{link}`.
     *
     * Generated from protobuf field <code>string link = 1;</code>
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * The name of the link in the format of
     * `projects/{project}/locations/{location}/links/{link}`.
     *
     * Generated from protobuf field <code>string link = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->link = $var;

        return $this;
    }

    /**
     * The start of the first event establishing this link-process tuple.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * The start of the first event establishing this link-process tuple.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * The end of the last event establishing this link-process tuple.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The end of the last event establishing this link-process tuple.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

