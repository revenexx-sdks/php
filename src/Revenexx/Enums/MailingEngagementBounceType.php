<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingEngagementBounceType implements JsonSerializable
{
    private static MailingEngagementBounceType $HARD;
    private static MailingEngagementBounceType $SOFT;

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

    public static function HARD(): MailingEngagementBounceType
    {
        if (!isset(self::$HARD)) {
            self::$HARD = new MailingEngagementBounceType('hard');
        }
        return self::$HARD;
    }
    public static function SOFT(): MailingEngagementBounceType
    {
        if (!isset(self::$SOFT)) {
            self::$SOFT = new MailingEngagementBounceType('soft');
        }
        return self::$SOFT;
    }
}