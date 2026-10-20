<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AudienceImportState implements JsonSerializable
{
    private static AudienceImportState $DONE;
    private static AudienceImportState $PARTIAL;
    private static AudienceImportState $FAILED;

    private string $value;

    private function __construct(string $value)
    {
        $this->value = $value;
    }

    public function __toString(): string
    {
        return $this->value;
    }

    public function jsonSerialize(): string
    {
        return $this->value;
    }

    public static function DONE(): AudienceImportState
    {
        if (!isset(self::$DONE)) {
            self::$DONE = new AudienceImportState('done');
        }
        return self::$DONE;
    }
    public static function PARTIAL(): AudienceImportState
    {
        if (!isset(self::$PARTIAL)) {
            self::$PARTIAL = new AudienceImportState('partial');
        }
        return self::$PARTIAL;
    }
    public static function FAILED(): AudienceImportState
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new AudienceImportState('failed');
        }
        return self::$FAILED;
    }
}