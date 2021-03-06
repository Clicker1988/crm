<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/bigquery/datatransfer/v1/transfer.proto

namespace Google\Cloud\BigQuery\DataTransfer\V1;

/**
 * DEPRECATED. Represents data transfer type.
 *
 * Protobuf enum <code>Google\Cloud\Bigquery\Datatransfer\V1\TransferType</code>
 */
class TransferType
{
    /**
     * Invalid or Unknown transfer type placeholder.
     *
     * Generated from protobuf enum <code>TRANSFER_TYPE_UNSPECIFIED = 0;</code>
     */
    const TRANSFER_TYPE_UNSPECIFIED = 0;
    /**
     * Batch data transfer.
     *
     * Generated from protobuf enum <code>BATCH = 1;</code>
     */
    const BATCH = 1;
    /**
     * Streaming data transfer. Streaming data source currently doesn't
     * support multiple transfer configs per project.
     *
     * Generated from protobuf enum <code>STREAMING = 2;</code>
     */
    const STREAMING = 2;
}

