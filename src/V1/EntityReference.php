<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/lineage/v1/lineage.proto

namespace Google\Cloud\DataCatalog\Lineage\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The soft reference to everything you can attach a lineage event to.
 *
 * Generated from protobuf message <code>google.cloud.datacatalog.lineage.v1.EntityReference</code>
 */
class EntityReference extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Fully Qualified Name of the entity. Useful for referencing
     * entities that aren't represented as GCP resources, for example, tables in
     * Dataproc Metastore API.
     * Examples:
     *   * `bigquery:dataset.project_id.dataset_id`
     *   * `bigquery:table.project_id.dataset_id.table_id`
     *   * `pubsub:project_id.topic_id`
     *   * `dataproc_metastore:projectId.locationId.instanceId.databaseId.tableId`
     *
     * Generated from protobuf field <code>string fully_qualified_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $fully_qualified_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fully_qualified_name
     *           Required. Fully Qualified Name of the entity. Useful for referencing
     *           entities that aren't represented as GCP resources, for example, tables in
     *           Dataproc Metastore API.
     *           Examples:
     *             * `bigquery:dataset.project_id.dataset_id`
     *             * `bigquery:table.project_id.dataset_id.table_id`
     *             * `pubsub:project_id.topic_id`
     *             * `dataproc_metastore:projectId.locationId.instanceId.databaseId.tableId`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datacatalog\Lineage\V1\Lineage::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Fully Qualified Name of the entity. Useful for referencing
     * entities that aren't represented as GCP resources, for example, tables in
     * Dataproc Metastore API.
     * Examples:
     *   * `bigquery:dataset.project_id.dataset_id`
     *   * `bigquery:table.project_id.dataset_id.table_id`
     *   * `pubsub:project_id.topic_id`
     *   * `dataproc_metastore:projectId.locationId.instanceId.databaseId.tableId`
     *
     * Generated from protobuf field <code>string fully_qualified_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getFullyQualifiedName()
    {
        return $this->fully_qualified_name;
    }

    /**
     * Required. Fully Qualified Name of the entity. Useful for referencing
     * entities that aren't represented as GCP resources, for example, tables in
     * Dataproc Metastore API.
     * Examples:
     *   * `bigquery:dataset.project_id.dataset_id`
     *   * `bigquery:table.project_id.dataset_id.table_id`
     *   * `pubsub:project_id.topic_id`
     *   * `dataproc_metastore:projectId.locationId.instanceId.databaseId.tableId`
     *
     * Generated from protobuf field <code>string fully_qualified_name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setFullyQualifiedName($var)
    {
        GPBUtil::checkString($var, True);
        $this->fully_qualified_name = $var;

        return $this;
    }

}

