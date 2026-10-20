<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MarketingConsentsConsentEventsListSource implements JsonSerializable
{
    private static MarketingConsentsConsentEventsListSource $FORM;
    private static MarketingConsentsConsentEventsListSource $STOREFRONT;
    private static MarketingConsentsConsentEventsListSource $IMPORT;
    private static MarketingConsentsConsentEventsListSource $ADMIN;
    private static MarketingConsentsConsentEventsListSource $UNSUBSCRIBEHEADER;
    private static MarketingConsentsConsentEventsListSource $PREFERENCECENTRE;
    private static MarketingConsentsConsentEventsListSource $ORDER;
    private static MarketingConsentsConsentEventsListSource $COMPLAINT;
    private static MarketingConsentsConsentEventsListSource $SYSTEM;

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

    public static function FORM(): MarketingConsentsConsentEventsListSource
    {
        if (!isset(self::$FORM)) {
            self::$FORM = new MarketingConsentsConsentEventsListSource('form');
        }
        return self::$FORM;
    }
    public static function STOREFRONT(): MarketingConsentsConsentEventsListSource
    {
        if (!isset(self::$STOREFRONT)) {
            self::$STOREFRONT = new MarketingConsentsConsentEventsListSource('storefront');
        }
        return self::$STOREFRONT;
    }
    public static function IMPORT(): MarketingConsentsConsentEventsListSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new MarketingConsentsConsentEventsListSource('import');
        }
        return self::$IMPORT;
    }
    public static function ADMIN(): MarketingConsentsConsentEventsListSource
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new MarketingConsentsConsentEventsListSource('admin');
        }
        return self::$ADMIN;
    }
    public static function UNSUBSCRIBEHEADER(): MarketingConsentsConsentEventsListSource
    {
        if (!isset(self::$UNSUBSCRIBEHEADER)) {
            self::$UNSUBSCRIBEHEADER = new MarketingConsentsConsentEventsListSource('unsubscribe_header');
        }
        return self::$UNSUBSCRIBEHEADER;
    }
    public static function PREFERENCECENTRE(): MarketingConsentsConsentEventsListSource
    {
        if (!isset(self::$PREFERENCECENTRE)) {
            self::$PREFERENCECENTRE = new MarketingConsentsConsentEventsListSource('preference_centre');
        }
        return self::$PREFERENCECENTRE;
    }
    public static function ORDER(): MarketingConsentsConsentEventsListSource
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new MarketingConsentsConsentEventsListSource('order');
        }
        return self::$ORDER;
    }
    public static function COMPLAINT(): MarketingConsentsConsentEventsListSource
    {
        if (!isset(self::$COMPLAINT)) {
            self::$COMPLAINT = new MarketingConsentsConsentEventsListSource('complaint');
        }
        return self::$COMPLAINT;
    }
    public static function SYSTEM(): MarketingConsentsConsentEventsListSource
    {
        if (!isset(self::$SYSTEM)) {
            self::$SYSTEM = new MarketingConsentsConsentEventsListSource('system');
        }
        return self::$SYSTEM;
    }
}