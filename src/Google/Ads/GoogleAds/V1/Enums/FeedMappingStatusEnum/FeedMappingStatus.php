<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v1/enums/feed_mapping_status.proto

namespace Google\Ads\GoogleAds\V1\Enums\FeedMappingStatusEnum;

/**
 * Possible statuses of a feed mapping.
 *
 * Protobuf type <code>google.ads.googleads.v1.enums.FeedMappingStatusEnum.FeedMappingStatus</code>
 */
class FeedMappingStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * Feed mapping is enabled.
     *
     * Generated from protobuf enum <code>ENABLED = 2;</code>
     */
    const ENABLED = 2;
    /**
     * Feed mapping has been removed.
     *
     * Generated from protobuf enum <code>REMOVED = 3;</code>
     */
    const REMOVED = 3;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeedMappingStatus::class, \Google\Ads\GoogleAds\V1\Enums\FeedMappingStatusEnum_FeedMappingStatus::class);
