<?php

namespace Revenexx\Enums;

use JsonSerializable;

class SubscriptionSource implements JsonSerializable
{
    private static SubscriptionSource $FORM;
    private static SubscriptionSource $STOREFRONT;
    private static SubscriptionSource $IMPORT;
    private static SubscriptionSource $ADMIN;
    private static SubscriptionSource $UNSUBSCRIBEHEADER;
    private static SubscriptionSource $PREFERENCECENTRE;
    private static SubscriptionSource $ORDER;
    private static SubscriptionSource $COMPLAINT;

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

    public static function FORM(): SubscriptionSource
    {
        if (!isset(self::$FORM)) {
            self::$FORM = new SubscriptionSource('form');
        }
        return self::$FORM;
    }
    public static function STOREFRONT(): SubscriptionSource
    {
        if (!isset(self::$STOREFRONT)) {
            self::$STOREFRONT = new SubscriptionSource('storefront');
        }
        return self::$STOREFRONT;
    }
    public static function IMPORT(): SubscriptionSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new SubscriptionSource('import');
        }
        return self::$IMPORT;
    }
    public static function ADMIN(): SubscriptionSource
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new SubscriptionSource('admin');
        }
        return self::$ADMIN;
    }
    public static function UNSUBSCRIBEHEADER(): SubscriptionSource
    {
        if (!isset(self::$UNSUBSCRIBEHEADER)) {
            self::$UNSUBSCRIBEHEADER = new SubscriptionSource('unsubscribe_header');
        }
        return self::$UNSUBSCRIBEHEADER;
    }
    public static function PREFERENCECENTRE(): SubscriptionSource
    {
        if (!isset(self::$PREFERENCECENTRE)) {
            self::$PREFERENCECENTRE = new SubscriptionSource('preference_centre');
        }
        return self::$PREFERENCECENTRE;
    }
    public static function ORDER(): SubscriptionSource
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new SubscriptionSource('order');
        }
        return self::$ORDER;
    }
    public static function COMPLAINT(): SubscriptionSource
    {
        if (!isset(self::$COMPLAINT)) {
            self::$COMPLAINT = new SubscriptionSource('complaint');
        }
        return self::$COMPLAINT;
    }
}