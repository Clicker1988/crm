<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/videointelligence/v1/video_intelligence.proto

namespace Google\Cloud\VideoIntelligence\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Video context and/or feature-specific parameters.
 *
 * Generated from protobuf message <code>google.cloud.videointelligence.v1.VideoContext</code>
 */
class VideoContext extends \Google\Protobuf\Internal\Message
{
    /**
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video
     * is treated as a single segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment segments = 1;</code>
     */
    private $segments;
    /**
     * Config for LABEL_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.LabelDetectionConfig label_detection_config = 2;</code>
     */
    private $label_detection_config = null;
    /**
     * Config for SHOT_CHANGE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ShotChangeDetectionConfig shot_change_detection_config = 3;</code>
     */
    private $shot_change_detection_config = null;
    /**
     * Config for EXPLICIT_CONTENT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ExplicitContentDetectionConfig explicit_content_detection_config = 4;</code>
     */
    private $explicit_content_detection_config = null;
    /**
     * Config for FACE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.FaceDetectionConfig face_detection_config = 5;</code>
     */
    private $face_detection_config = null;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Videointelligence\V1\VideoIntelligence::initOnce();
        parent::__construct();
    }

    /**
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video
     * is treated as a single segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment segments = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSegments()
    {
        return $this->segments;
    }

    /**
     * Video segments to annotate. The segments may overlap and are not required
     * to be contiguous or span the whole video. If unspecified, each video
     * is treated as a single segment.
     *
     * Generated from protobuf field <code>repeated .google.cloud.videointelligence.v1.VideoSegment segments = 1;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\VideoSegment[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSegments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\VideoIntelligence\V1\VideoSegment::class);
        $this->segments = $arr;

        return $this;
    }

    /**
     * Config for LABEL_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.LabelDetectionConfig label_detection_config = 2;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\LabelDetectionConfig
     */
    public function getLabelDetectionConfig()
    {
        return $this->label_detection_config;
    }

    /**
     * Config for LABEL_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.LabelDetectionConfig label_detection_config = 2;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\LabelDetectionConfig $var
     * @return $this
     */
    public function setLabelDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\LabelDetectionConfig::class);
        $this->label_detection_config = $var;

        return $this;
    }

    /**
     * Config for SHOT_CHANGE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ShotChangeDetectionConfig shot_change_detection_config = 3;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\ShotChangeDetectionConfig
     */
    public function getShotChangeDetectionConfig()
    {
        return $this->shot_change_detection_config;
    }

    /**
     * Config for SHOT_CHANGE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ShotChangeDetectionConfig shot_change_detection_config = 3;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\ShotChangeDetectionConfig $var
     * @return $this
     */
    public function setShotChangeDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\ShotChangeDetectionConfig::class);
        $this->shot_change_detection_config = $var;

        return $this;
    }

    /**
     * Config for EXPLICIT_CONTENT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ExplicitContentDetectionConfig explicit_content_detection_config = 4;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\ExplicitContentDetectionConfig
     */
    public function getExplicitContentDetectionConfig()
    {
        return $this->explicit_content_detection_config;
    }

    /**
     * Config for EXPLICIT_CONTENT_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.ExplicitContentDetectionConfig explicit_content_detection_config = 4;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\ExplicitContentDetectionConfig $var
     * @return $this
     */
    public function setExplicitContentDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\ExplicitContentDetectionConfig::class);
        $this->explicit_content_detection_config = $var;

        return $this;
    }

    /**
     * Config for FACE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.FaceDetectionConfig face_detection_config = 5;</code>
     * @return \Google\Cloud\VideoIntelligence\V1\FaceDetectionConfig
     */
    public function getFaceDetectionConfig()
    {
        return $this->face_detection_config;
    }

    /**
     * Config for FACE_DETECTION.
     *
     * Generated from protobuf field <code>.google.cloud.videointelligence.v1.FaceDetectionConfig face_detection_config = 5;</code>
     * @param \Google\Cloud\VideoIntelligence\V1\FaceDetectionConfig $var
     * @return $this
     */
    public function setFaceDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\VideoIntelligence\V1\FaceDetectionConfig::class);
        $this->face_detection_config = $var;

        return $this;
    }

}

