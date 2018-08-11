<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dialogflow/v2/intent.proto

namespace Google\Cloud\Dialogflow\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The suggestion chip message that the user can tap to quickly post a reply
 * to the conversation.
 *
 * Generated from protobuf message <code>google.cloud.dialogflow.v2.Intent.Message.Suggestion</code>
 */
class Intent_Message_Suggestion extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The text shown the in the suggestion chip.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     */
    private $title = '';

    public function __construct() {
        \GPBMetadata\Google\Cloud\Dialogflow\V2\Intent::initOnce();
        parent::__construct();
    }

    /**
     * Required. The text shown the in the suggestion chip.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Required. The text shown the in the suggestion chip.
     *
     * Generated from protobuf field <code>string title = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->title = $var;

        return $this;
    }

}

