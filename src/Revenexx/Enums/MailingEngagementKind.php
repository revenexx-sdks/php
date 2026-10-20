<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingEngagementKind implements JsonSerializable
{
    private static MailingEngagementKind $DELIVERED;
    private static MailingEngagementKind $OPENED;
    private static MailingEngagementKind $CLICKED;
    private static MailingEngagementKind $BOUNCED;
    private static MailingEngagementKind $COMPLAINED;
    private static MailingEngagementKind $UNSUBSCRIBED;

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

    public static function DELIVERED(): MailingEngagementKind
    {
        if (!isset(self::$DELIVERED)) {
            self::$DELIVERED = new MailingEngagementKind('delivered');
        }
        return self::$DELIVERED;
    }
    public static function OPENED(): MailingEngagementKind
    {
        if (!isset(self::$OPENED)) {
            self::$OPENED = new MailingEngagementKind('opened');
        }
        return self::$OPENED;
    }
    public static function CLICKED(): MailingEngagementKind
    {
        if (!isset(self::$CLICKED)) {
            self::$CLICKED = new MailingEngagementKind('clicked');
        }
        return self::$CLICKED;
    }
    public static function BOUNCED(): MailingEngagementKind
    {
        if (!isset(self::$BOUNCED)) {
            self::$BOUNCED = new MailingEngagementKind('bounced');
        }
        return self::$BOUNCED;
    }
    public static function COMPLAINED(): MailingEngagementKind
    {
        if (!isset(self::$COMPLAINED)) {
            self::$COMPLAINED = new MailingEngagementKind('complained');
        }
        return self::$COMPLAINED;
    }
    public static function UNSUBSCRIBED(): MailingEngagementKind
    {
        if (!isset(self::$UNSUBSCRIBED)) {
            self::$UNSUBSCRIBED = new MailingEngagementKind('unsubscribed');
        }
        return self::$UNSUBSCRIBED;
    }
}