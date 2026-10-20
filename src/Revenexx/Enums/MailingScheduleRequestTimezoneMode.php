<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingScheduleRequestTimezoneMode implements JsonSerializable
{
    private static MailingScheduleRequestTimezoneMode $TENANT;
    private static MailingScheduleRequestTimezoneMode $RECIPIENT;

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

    public static function TENANT(): MailingScheduleRequestTimezoneMode
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new MailingScheduleRequestTimezoneMode('tenant');
        }
        return self::$TENANT;
    }
    public static function RECIPIENT(): MailingScheduleRequestTimezoneMode
    {
        if (!isset(self::$RECIPIENT)) {
            self::$RECIPIENT = new MailingScheduleRequestTimezoneMode('recipient');
        }
        return self::$RECIPIENT;
    }
}