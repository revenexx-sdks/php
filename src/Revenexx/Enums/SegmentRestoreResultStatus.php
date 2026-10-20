<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SegmentRestoreResultStatus implements JsonSerializable
{
    private static SegmentRestoreResultStatus $RESTORED;

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

    public static function RESTORED(): SegmentRestoreResultStatus
    {
        if (!isset(self::$RESTORED)) {
            self::$RESTORED = new SegmentRestoreResultStatus('restored');
        }
        return self::$RESTORED;
    }
}