<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingWriteTimezoneMode implements JsonSerializable
{
    private static MailingWriteTimezoneMode $TENANT;
    private static MailingWriteTimezoneMode $RECIPIENT;

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

    public static function TENANT(): MailingWriteTimezoneMode
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new MailingWriteTimezoneMode('tenant');
        }
        return self::$TENANT;
    }
    public static function RECIPIENT(): MailingWriteTimezoneMode
    {
        if (!isset(self::$RECIPIENT)) {
            self::$RECIPIENT = new MailingWriteTimezoneMode('recipient');
        }
        return self::$RECIPIENT;
    }
}