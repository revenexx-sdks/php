<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketingConsentsSubscriptionsRequestSource implements JsonSerializable
{
    private static MarketingConsentsSubscriptionsRequestSource $FORM;
    private static MarketingConsentsSubscriptionsRequestSource $STOREFRONT;
    private static MarketingConsentsSubscriptionsRequestSource $ADMIN;
    private static MarketingConsentsSubscriptionsRequestSource $PREFERENCECENTRE;

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

    public static function FORM(): MarketingConsentsSubscriptionsRequestSource
    {
        if (!isset(self::$FORM)) {
            self::$FORM = new MarketingConsentsSubscriptionsRequestSource('form');
        }
        return self::$FORM;
    }
    public static function STOREFRONT(): MarketingConsentsSubscriptionsRequestSource
    {
        if (!isset(self::$STOREFRONT)) {
            self::$STOREFRONT = new MarketingConsentsSubscriptionsRequestSource('storefront');
        }
        return self::$STOREFRONT;
    }
    public static function ADMIN(): MarketingConsentsSubscriptionsRequestSource
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new MarketingConsentsSubscriptionsRequestSource('admin');
        }
        return self::$ADMIN;
    }
    public static function PREFERENCECENTRE(): MarketingConsentsSubscriptionsRequestSource
    {
        if (!isset(self::$PREFERENCECENTRE)) {
            self::$PREFERENCECENTRE = new MarketingConsentsSubscriptionsRequestSource('preference_centre');
        }
        return self::$PREFERENCECENTRE;
    }
}