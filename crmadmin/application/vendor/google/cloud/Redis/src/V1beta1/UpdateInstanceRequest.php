<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/redis/v1beta1/cloud_redis.proto

namespace Google\Cloud\Redis\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for [UpdateInstance][google.cloud.redis.v1beta1.CloudRedis.UpdateInstance].
 *
 * Generated from protobuf message <code>google.cloud.redis.v1beta1.UpdateInstanceRequest</code>
 */
class UpdateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field may only include these
     * fields from [Instance][CloudRedis.Instance]:
     * * `display_name`
     * * `labels`
     * * `memory_size_gb`
     * * `redis_config`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
     */
    private $update_mask = null;
    /**
     * Required. Update description.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1beta1.Instance instance = 2;</code>
     */
    private $instance = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Redis\V1Beta1\CloudRedis::initOnce();
        parent::__construct();
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field may only include these
     * fields from [Instance][CloudRedis.Instance]:
     * * `display_name`
     * * `labels`
     * * `memory_size_gb`
     * * `redis_config`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
     * @return \Google\Protobuf\FieldMask
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field. The elements of the repeated paths field may only include these
     * fields from [Instance][CloudRedis.Instance]:
     * * `display_name`
     * * `labels`
     * * `memory_size_gb`
     * * `redis_config`
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. Update description.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1beta1.Instance instance = 2;</code>
     * @return \Google\Cloud\Redis\V1beta1\Instance
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * Required. Update description.
     * Only fields specified in update_mask are updated.
     *
     * Generated from protobuf field <code>.google.cloud.redis.v1beta1.Instance instance = 2;</code>
     * @param \Google\Cloud\Redis\V1beta1\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Redis\V1beta1\Instance::class);
        $this->instance = $var;

        return $this;
    }

}

