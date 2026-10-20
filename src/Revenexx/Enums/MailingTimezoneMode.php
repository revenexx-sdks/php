<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingTimezoneMode implements JsonSerializable
{
    private static MailingTimezoneMode $TENANT;
    private static MailingTimezoneMode $RECIPIENT;

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

    public static function TENANT(): MailingTimezoneMode
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new MailingTimezoneMode('tenant');
        }
        return self::$TENANT;
    }
    public static function RECIPIENT(): MailingTimezoneMode
    {
        if (!isset(self::$RECIPIENT)) {
            self::$RECIPIENT = new MailingTimezoneMode('recipient');
        }
        return self::$RECIPIENT;
    }
}