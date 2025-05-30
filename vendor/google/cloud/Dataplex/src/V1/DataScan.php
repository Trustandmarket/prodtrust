<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/datascans.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a user-visible job which provides the insights for the related
 * data source.
 * For example:
 * * Data Quality: generates queries based on the rules and runs against the
 *   data to get data quality check results.
 * * Data Profile: analyzes the data in table(s) and generates insights about
 *   the structure, content and relationships (such as null percent,
 *   cardinality, min/max/mean, etc).
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.DataScan</code>
 */
class DataScan extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The relative resource name of the scan, of the form:
     * `projects/{project}/locations/{location_id}/dataScans/{datascan_id}`,
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Output only. System generated globally unique ID for the scan. This ID will
     * be different if the scan is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $uid = '';
    /**
     * Optional. Description of the scan.
     * * Must be between 1-1024 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $description = '';
    /**
     * Optional. User friendly display name.
     * * Must be between 1-256 characters.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $display_name = '';
    /**
     * Optional. User-defined labels for the scan.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $labels;
    /**
     * Output only. Current state of the DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $state = 0;
    /**
     * Output only. The time when the scan was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The time when the scan was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Required. The data source for DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataSource data = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data = null;
    /**
     * Optional. DataScan execution settings.
     * If not specified, the fields in it will use their default values.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan.ExecutionSpec execution_spec = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $execution_spec = null;
    /**
     * Output only. Status of the data scan execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan.ExecutionStatus execution_status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $execution_status = null;
    /**
     * Output only. The type of DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanType type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $type = 0;
    protected $spec;
    protected $result;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The relative resource name of the scan, of the form:
     *           `projects/{project}/locations/{location_id}/dataScans/{datascan_id}`,
     *           where `project` refers to a *project_id* or *project_number* and
     *           `location_id` refers to a GCP region.
     *     @type string $uid
     *           Output only. System generated globally unique ID for the scan. This ID will
     *           be different if the scan is deleted and re-created with the same name.
     *     @type string $description
     *           Optional. Description of the scan.
     *           * Must be between 1-1024 characters.
     *     @type string $display_name
     *           Optional. User friendly display name.
     *           * Must be between 1-256 characters.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Optional. User-defined labels for the scan.
     *     @type int $state
     *           Output only. Current state of the DataScan.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time when the scan was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time when the scan was last updated.
     *     @type \Google\Cloud\Dataplex\V1\DataSource $data
     *           Required. The data source for DataScan.
     *     @type \Google\Cloud\Dataplex\V1\DataScan\ExecutionSpec $execution_spec
     *           Optional. DataScan execution settings.
     *           If not specified, the fields in it will use their default values.
     *     @type \Google\Cloud\Dataplex\V1\DataScan\ExecutionStatus $execution_status
     *           Output only. Status of the data scan execution.
     *     @type int $type
     *           Output only. The type of DataScan.
     *     @type \Google\Cloud\Dataplex\V1\DataQualitySpec $data_quality_spec
     *           Settings for a data quality scan.
     *     @type \Google\Cloud\Dataplex\V1\DataProfileSpec $data_profile_spec
     *           Settings for a data profile scan.
     *     @type \Google\Cloud\Dataplex\V1\DataDiscoverySpec $data_discovery_spec
     *           Settings for a data discovery scan.
     *     @type \Google\Cloud\Dataplex\V1\DataQualityResult $data_quality_result
     *           Output only. The result of a data quality scan.
     *     @type \Google\Cloud\Dataplex\V1\DataProfileResult $data_profile_result
     *           Output only. The result of a data profile scan.
     *     @type \Google\Cloud\Dataplex\V1\DataDiscoveryResult $data_discovery_result
     *           Output only. The result of a data discovery scan.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Datascans::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The relative resource name of the scan, of the form:
     * `projects/{project}/locations/{location_id}/dataScans/{datascan_id}`,
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The relative resource name of the scan, of the form:
     * `projects/{project}/locations/{location_id}/dataScans/{datascan_id}`,
     * where `project` refers to a *project_id* or *project_number* and
     * `location_id` refers to a GCP region.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. System generated globally unique ID for the scan. This ID will
     * be different if the scan is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Output only. System generated globally unique ID for the scan. This ID will
     * be different if the scan is deleted and re-created with the same name.
     *
     * Generated from protobuf field <code>string uid = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setUid($var)
    {
        GPBUtil::checkString($var, True);
        $this->uid = $var;

        return $this;
    }

    /**
     * Optional. Description of the scan.
     * * Must be between 1-1024 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Optional. Description of the scan.
     * * Must be between 1-1024 characters.
     *
     * Generated from protobuf field <code>string description = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. User friendly display name.
     * * Must be between 1-256 characters.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Optional. User friendly display name.
     * * Must be between 1-256 characters.
     *
     * Generated from protobuf field <code>string display_name = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Optional. User-defined labels for the scan.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Optional. User-defined labels for the scan.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. Current state of the DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Output only. Current state of the DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.State state = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Output only. The time when the scan was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The time when the scan was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The time when the scan was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The time when the scan was last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 8 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Required. The data source for DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataSource data = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataplex\V1\DataSource|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     * Required. The data source for DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataSource data = 9 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataplex\V1\DataSource $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataSource::class);
        $this->data = $var;

        return $this;
    }

    /**
     * Optional. DataScan execution settings.
     * If not specified, the fields in it will use their default values.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan.ExecutionSpec execution_spec = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataplex\V1\DataScan\ExecutionSpec|null
     */
    public function getExecutionSpec()
    {
        return $this->execution_spec;
    }

    public function hasExecutionSpec()
    {
        return isset($this->execution_spec);
    }

    public function clearExecutionSpec()
    {
        unset($this->execution_spec);
    }

    /**
     * Optional. DataScan execution settings.
     * If not specified, the fields in it will use their default values.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan.ExecutionSpec execution_spec = 10 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataplex\V1\DataScan\ExecutionSpec $var
     * @return $this
     */
    public function setExecutionSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataScan\ExecutionSpec::class);
        $this->execution_spec = $var;

        return $this;
    }

    /**
     * Output only. Status of the data scan execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan.ExecutionStatus execution_status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataScan\ExecutionStatus|null
     */
    public function getExecutionStatus()
    {
        return $this->execution_status;
    }

    public function hasExecutionStatus()
    {
        return isset($this->execution_status);
    }

    public function clearExecutionStatus()
    {
        unset($this->execution_status);
    }

    /**
     * Output only. Status of the data scan execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScan.ExecutionStatus execution_status = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataScan\ExecutionStatus $var
     * @return $this
     */
    public function setExecutionStatus($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataScan\ExecutionStatus::class);
        $this->execution_status = $var;

        return $this;
    }

    /**
     * Output only. The type of DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanType type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Output only. The type of DataScan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataScanType type = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\DataScanType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Settings for a data quality scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec data_quality_spec = 100;</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualitySpec|null
     */
    public function getDataQualitySpec()
    {
        return $this->readOneof(100);
    }

    public function hasDataQualitySpec()
    {
        return $this->hasOneof(100);
    }

    /**
     * Settings for a data quality scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualitySpec data_quality_spec = 100;</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualitySpec $var
     * @return $this
     */
    public function setDataQualitySpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualitySpec::class);
        $this->writeOneof(100, $var);

        return $this;
    }

    /**
     * Settings for a data profile scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileSpec data_profile_spec = 101;</code>
     * @return \Google\Cloud\Dataplex\V1\DataProfileSpec|null
     */
    public function getDataProfileSpec()
    {
        return $this->readOneof(101);
    }

    public function hasDataProfileSpec()
    {
        return $this->hasOneof(101);
    }

    /**
     * Settings for a data profile scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileSpec data_profile_spec = 101;</code>
     * @param \Google\Cloud\Dataplex\V1\DataProfileSpec $var
     * @return $this
     */
    public function setDataProfileSpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataProfileSpec::class);
        $this->writeOneof(101, $var);

        return $this;
    }

    /**
     * Settings for a data discovery scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoverySpec data_discovery_spec = 102;</code>
     * @return \Google\Cloud\Dataplex\V1\DataDiscoverySpec|null
     */
    public function getDataDiscoverySpec()
    {
        return $this->readOneof(102);
    }

    public function hasDataDiscoverySpec()
    {
        return $this->hasOneof(102);
    }

    /**
     * Settings for a data discovery scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoverySpec data_discovery_spec = 102;</code>
     * @param \Google\Cloud\Dataplex\V1\DataDiscoverySpec $var
     * @return $this
     */
    public function setDataDiscoverySpec($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataDiscoverySpec::class);
        $this->writeOneof(102, $var);

        return $this;
    }

    /**
     * Output only. The result of a data quality scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityResult data_quality_result = 200 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataQualityResult|null
     */
    public function getDataQualityResult()
    {
        return $this->readOneof(200);
    }

    public function hasDataQualityResult()
    {
        return $this->hasOneof(200);
    }

    /**
     * Output only. The result of a data quality scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataQualityResult data_quality_result = 200 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataQualityResult $var
     * @return $this
     */
    public function setDataQualityResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataQualityResult::class);
        $this->writeOneof(200, $var);

        return $this;
    }

    /**
     * Output only. The result of a data profile scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult data_profile_result = 201 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataProfileResult|null
     */
    public function getDataProfileResult()
    {
        return $this->readOneof(201);
    }

    public function hasDataProfileResult()
    {
        return $this->hasOneof(201);
    }

    /**
     * Output only. The result of a data profile scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataProfileResult data_profile_result = 201 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataProfileResult $var
     * @return $this
     */
    public function setDataProfileResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataProfileResult::class);
        $this->writeOneof(201, $var);

        return $this;
    }

    /**
     * Output only. The result of a data discovery scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoveryResult data_discovery_result = 202 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Dataplex\V1\DataDiscoveryResult|null
     */
    public function getDataDiscoveryResult()
    {
        return $this->readOneof(202);
    }

    public function hasDataDiscoveryResult()
    {
        return $this->hasOneof(202);
    }

    /**
     * Output only. The result of a data discovery scan.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.DataDiscoveryResult data_discovery_result = 202 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Dataplex\V1\DataDiscoveryResult $var
     * @return $this
     */
    public function setDataDiscoveryResult($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\DataDiscoveryResult::class);
        $this->writeOneof(202, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getSpec()
    {
        return $this->whichOneof("spec");
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

}

