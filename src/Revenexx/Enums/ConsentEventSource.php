<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentEventSource implements JsonSerializable
{
    private static ConsentEventSource $FORM;
    private static ConsentEventSource $STOREFRONT;
    private static ConsentEventSource $IMPORT;
    private static ConsentEventSource $ADMIN;
    private static ConsentEventSource $UNSUBSCRIBEHEADER;
    private static ConsentEventSource $PREFERENCECENTRE;
    private static ConsentEventSource $ORDER;
    private static ConsentEventSource $COMPLAINT;
    private static ConsentEventSource $SYSTEM;

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

    public static function FORM(): ConsentEventSource
    {
        if (!isset(self::$FORM)) {
            self::$FORM = new ConsentEventSource('form');
        }
        return self::$FORM;
    }
    public static function STOREFRONT(): ConsentEventSource
    {
        if (!isset(self::$STOREFRONT)) {
            self::$STOREFRONT = new ConsentEventSource('storefront');
        }
        return self::$STOREFRONT;
    }
    public static function IMPORT(): ConsentEventSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new ConsentEventSource('import');
        }
        return self::$IMPORT;
    }
    public static function ADMIN(): ConsentEventSource
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new ConsentEventSource('admin');
        }
        return self::$ADMIN;
    }
    public static function UNSUBSCRIBEHEADER(): ConsentEventSource
    {
        if (!isset(self::$UNSUBSCRIBEHEADER)) {
            self::$UNSUBSCRIBEHEADER = new ConsentEventSource('unsubscribe_header');
        }
        return self::$UNSUBSCRIBEHEADER;
    }
    public static function PREFERENCECENTRE(): ConsentEventSource
    {
        if (!isset(self::$PREFERENCECENTRE)) {
            self::$PREFERENCECENTRE = new ConsentEventSource('preference_centre');
        }
        return self::$PREFERENCECENTRE;
    }
    public static function ORDER(): ConsentEventSource
    {
        if (!isset(self::$ORDER)) {
            self::$ORDER = new ConsentEventSource('order');
        }
        return self::$ORDER;
    }
    public static function COMPLAINT(): ConsentEventSource
    {
        if (!isset(self::$COMPLAINT)) {
            self::$COMPLAINT = new ConsentEventSource('complaint');
        }
        return self::$COMPLAINT;
    }
    public static function SYSTEM(): ConsentEventSource
    {
        if (!isset(self::$SYSTEM)) {
            self::$SYSTEM = new ConsentEventSource('system');
        }
        return self::$SYSTEM;
    }
}