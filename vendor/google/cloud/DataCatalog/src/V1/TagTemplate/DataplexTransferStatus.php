<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datacatalog/v1/tags.proto

namespace Google\Cloud\DataCatalog\V1\TagTemplate;

use UnexpectedValueException;

/**
 * This enum describes TagTemplate transfer status to Dataplex service.
 *
 * Protobuf type <code>google.cloud.datacatalog.v1.TagTemplate.DataplexTransferStatus</code>
 */
class DataplexTransferStatus
{
    /**
     * Default value. TagTemplate and its tags are only visible and editable in
     * DataCatalog.
     *
     * Generated from protobuf enum <code>DATAPLEX_TRANSFER_STATUS_UNSPECIFIED = 0;</code>
     */
    const DATAPLEX_TRANSFER_STATUS_UNSPECIFIED = 0;
    /**
     * TagTemplate and its tags are auto-copied to Dataplex service.
     * Visible in both services. Editable in DataCatalog, read-only in Dataplex.
     * Deprecated: Individual TagTemplate migration is deprecated in favor of
     * organization or project wide TagTemplate migration opt-in.
     *
     * Generated from protobuf enum <code>MIGRATED = 1 [deprecated = true];</code>
     */
    const MIGRATED = 1;

    private static $valueToName = [
        self::DATAPLEX_TRANSFER_STATUS_UNSPECIFIED => 'DATAPLEX_TRANSFER_STATUS_UNSPECIFIED',
        self::MIGRATED => 'MIGRATED',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


