<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Instance flexibility Policy allowing a mixture of VM shapes and provisioning
 * models.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.InstanceFlexibilityPolicy</code>
 */
class InstanceFlexibilityPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Defines how the Group selects the provisioning model to ensure
     * required reliability.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.InstanceFlexibilityPolicy.ProvisioningModelMix provisioning_model_mix = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $provisioning_model_mix = null;
    /**
     * Optional. List of instance selection options that the group will use when
     * creating new VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelection instance_selection_list = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $instance_selection_list;
    /**
     * Output only. A list of instance selection results in the group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelectionResult instance_selection_results = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $instance_selection_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\ProvisioningModelMix $provisioning_model_mix
     *           Optional. Defines how the Group selects the provisioning model to ensure
     *           required reliability.
     *     @type array<\Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelection>|\Google\Protobuf\Internal\RepeatedField $instance_selection_list
     *           Optional. List of instance selection options that the group will use when
     *           creating new VMs.
     *     @type array<\Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelectionResult>|\Google\Protobuf\Internal\RepeatedField $instance_selection_results
     *           Output only. A list of instance selection results in the group.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Defines how the Group selects the provisioning model to ensure
     * required reliability.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.InstanceFlexibilityPolicy.ProvisioningModelMix provisioning_model_mix = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\ProvisioningModelMix|null
     */
    public function getProvisioningModelMix()
    {
        return $this->provisioning_model_mix;
    }

    public function hasProvisioningModelMix()
    {
        return isset($this->provisioning_model_mix);
    }

    public function clearProvisioningModelMix()
    {
        unset($this->provisioning_model_mix);
    }

    /**
     * Optional. Defines how the Group selects the provisioning model to ensure
     * required reliability.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.InstanceFlexibilityPolicy.ProvisioningModelMix provisioning_model_mix = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\ProvisioningModelMix $var
     * @return $this
     */
    public function setProvisioningModelMix($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\ProvisioningModelMix::class);
        $this->provisioning_model_mix = $var;

        return $this;
    }

    /**
     * Optional. List of instance selection options that the group will use when
     * creating new VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelection instance_selection_list = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceSelectionList()
    {
        return $this->instance_selection_list;
    }

    /**
     * Optional. List of instance selection options that the group will use when
     * creating new VMs.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelection instance_selection_list = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<\Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelection>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstanceSelectionList($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelection::class);
        $this->instance_selection_list = $arr;

        return $this;
    }

    /**
     * Output only. A list of instance selection results in the group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelectionResult instance_selection_results = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstanceSelectionResults()
    {
        return $this->instance_selection_results;
    }

    /**
     * Output only. A list of instance selection results in the group.
     *
     * Generated from protobuf field <code>repeated .google.cloud.dataproc.v1.InstanceFlexibilityPolicy.InstanceSelectionResult instance_selection_results = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelectionResult>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstanceSelectionResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dataproc\V1\InstanceFlexibilityPolicy\InstanceSelectionResult::class);
        $this->instance_selection_results = $arr;

        return $this;
    }

}

