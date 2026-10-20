<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketingConsentsSubscriptionsListSource implements JsonSerializable
{
    private static MarketingConsentsSubscriptionsListSource $FORM;
    private static MarketingConsentsSubscriptionsListSource $STOREFRONT;
    private static MarketingConsentsSubscriptionsListSource $IMPORT;
    private static MarketingConsentsSubscriptionsListSource $ADMIN;
    private static MarketingConsentsSubscriptionsListSource $UNSUBSCRIBEHEADER;
    private static MarketingConsentsSubscriptionsListSource $PREFERENCECENTRE;
    private static MarketingConsentsSubscriptionsListSource $ORDER;
    private static MarketingConsentsSubscriptionsListSource $COMPLAINT;

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

    public static function FORM(): MarketingConsentsSubscriptionsListSource
    {
        if (!isset(self::$FORM)) {
            self::$FORM = new MarketingConsentsSubscriptionsListSource('form');
        }
        return self::$FORM;
    }
    public static function STOREFRONT(): MarketingConsentsSubscriptionsListSource
    {
        if (!isset(self::$STOREFRONT)) {
            self::$STOREFRONT = new MarketingConsentsSubscriptionsListSource('storefront');
        }
        return self::$STOREFRONT;
    }
    public static function IMPORT(): MarketingConsentsSubscriptionsListSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new MarketingConsentsSubscriptionsListSource('import');
        }
        return self::$IMPORT;
    }
    public static function ADMIN(): MarketingConsentsSubscriptionsListSource
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new MarketingConsentsSubscriptionsListSource('admin');
        }
        return self::$ADMIN;
    }
    public static function UNSUBSCRIBEHEADER(): MarketingConsentsSubscriptionsListSource
    {
        if (!isset(self::$UNSUBSCRIBEHEADER)) {
            self::$UNSUBSCRIBEHEADER = new MarketingConsentsSubscriptionsListSource('unsubscribe_header');
        }
        return self::$UNSUBSCRIBEHEADER;
    }
    public static function PREFERENCECENTRE(): MarketingConsentsSubscriptionsListSource
    {
        if (!isset(self::$PREFERENCECENTRE)) {
            self::$PREFERENCECENTRE = new MarketingConsentsSubscriptionsListSource('preference_centre');
        }
        return self::$PREFERENCECENTRE;
    }
    public static function ORDER(): MarketingConsentsSubscriptionsListSource
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new MarketingConsentsSubscriptionsListSource('order');
        }
        return self::$ORDER;
    }
    public static function COMPLAINT(): MarketingConsentsSubscriptionsListSource
    {
        if (!isset(self::$COMPLAINT)) {
            self::$COMPLAINT = new MarketingConsentsSubscriptionsListSource('complaint');
        }
        return self::$COMPLAINT;
    }
}