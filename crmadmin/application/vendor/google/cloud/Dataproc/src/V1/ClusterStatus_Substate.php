<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

/**
 * Protobuf enum <code>Google\Cloud\Dataproc\V1\ClusterStatus\Substate</code>
 */
class ClusterStatus_Substate
{
    /**
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * The cluster is known to be in an unhealthy state
     * (for example, critical daemons are not running or HDFS capacity is
     * exhausted).
     * Applies to RUNNING state.
     *
     * Generated from protobuf enum <code>UNHEALTHY = 1;</code>
     */
    const UNHEALTHY = 1;
    /**
     * The agent-reported status is out of date (may occur if
     * Cloud Dataproc loses communication with Agent).
     * Applies to RUNNING state.
     *
     * Generated from protobuf enum <code>STALE_STATUS = 2;</code>
     */
    const STALE_STATUS = 2;
}

