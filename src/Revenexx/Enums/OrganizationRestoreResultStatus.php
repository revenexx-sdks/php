<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrganizationRestoreResultStatus implements JsonSerializable
{
    private static OrganizationRestoreResultStatus $RESTORED;

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

    public static function RESTORED(): OrganizationRestoreResultStatus
    {
        if (!isset(self::$RESTORED)) {
            self::$RESTORED = new OrganizationRestoreResultStatus('restored');
        }
        return self::$RESTORED;
    }
}