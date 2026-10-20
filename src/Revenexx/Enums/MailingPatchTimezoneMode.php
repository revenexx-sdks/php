<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingPatchTimezoneMode implements JsonSerializable
{
    private static MailingPatchTimezoneMode $TENANT;
    private static MailingPatchTimezoneMode $RECIPIENT;

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

    public static function TENANT(): MailingPatchTimezoneMode
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new MailingPatchTimezoneMode('tenant');
        }
        return self::$TENANT;
    }
    public static function RECIPIENT(): MailingPatchTimezoneMode
    {
        if (!isset(self::$RECIPIENT)) {
            self::$RECIPIENT = new MailingPatchTimezoneMode('recipient');
        }
        return self::$RECIPIENT;
    }
}