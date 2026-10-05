<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CookieKind implements JsonSerializable
{
    private static CookieKind $COOKIE;
    private static CookieKind $LOCALSTORAGE;
    private static CookieKind $SESSIONSTORAGE;
    private static CookieKind $INDEXEDDB;
    private static CookieKind $PIXEL;

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

    public static function COOKIE(): CookieKind
    {
        if (!isset(self::$COOKIE)) {
            self::$COOKIE = new CookieKind('cookie');
        }
        return self::$COOKIE;
    }
    public static function LOCALSTORAGE(): CookieKind
    {
        if (!isset(self::$LOCALSTORAGE)) {
            self::$LOCALSTORAGE = new CookieKind('local_storage');
        }
        return self::$LOCALSTORAGE;
    }
    public static function SESSIONSTORAGE(): CookieKind
    {
        if (!isset(self::$SESSIONSTORAGE)) {
            self::$SESSIONSTORAGE = new CookieKind('session_storage');
        }
        return self::$SESSIONSTORAGE;
    }
    public static function INDEXEDDB(): CookieKind
    {
        if (!isset(self::$INDEXEDDB)) {
            self::$INDEXEDDB = new CookieKind('indexeddb');
        }
        return self::$INDEXEDDB;
    }
    public static function PIXEL(): CookieKind
    {
        if (!isset(self::$PIXEL)) {
            self::$PIXEL = new CookieKind('pixel');
        }
        return self::$PIXEL;
    }
}