<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubscriptionRequestSource implements JsonSerializable
{
    private static SubscriptionRequestSource $FORM;
    private static SubscriptionRequestSource $STOREFRONT;
    private static SubscriptionRequestSource $ADMIN;
    private static SubscriptionRequestSource $PREFERENCECENTRE;

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

    public static function FORM(): SubscriptionRequestSource
    {
        if (!isset(self::$FORM)) {
            self::$FORM = new SubscriptionRequestSource('form');
        }
        return self::$FORM;
    }
    public static function STOREFRONT(): SubscriptionRequestSource
    {
        if (!isset(self::$STOREFRONT)) {
            self::$STOREFRONT = new SubscriptionRequestSource('storefront');
        }
        return self::$STOREFRONT;
    }
    public static function ADMIN(): SubscriptionRequestSource
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new SubscriptionRequestSource('admin');
        }
        return self::$ADMIN;
    }
    public static function PREFERENCECENTRE(): SubscriptionRequestSource
    {
        if (!isset(self::$PREFERENCECENTRE)) {
            self::$PREFERENCECENTRE = new SubscriptionRequestSource('preference_centre');
        }
        return self::$PREFERENCECENTRE;
    }
}