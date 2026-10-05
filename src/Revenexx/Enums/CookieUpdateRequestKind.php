<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CookieUpdateRequestKind implements JsonSerializable
{
    private static CookieUpdateRequestKind $COOKIE;
    private static CookieUpdateRequestKind $LOCALSTORAGE;
    private static CookieUpdateRequestKind $SESSIONSTORAGE;
    private static CookieUpdateRequestKind $INDEXEDDB;
    private static CookieUpdateRequestKind $PIXEL;

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

    public static function COOKIE(): CookieUpdateRequestKind
    {
        if (!isset(self::$COOKIE)) {
            self::$COOKIE = new CookieUpdateRequestKind('cookie');
        }
        return self::$COOKIE;
    }
    public static function LOCALSTORAGE(): CookieUpdateRequestKind
    {
        if (!isset(self::$LOCALSTORAGE)) {
            self::$LOCALSTORAGE = new CookieUpdateRequestKind('local_storage');
        }
        return self::$LOCALSTORAGE;
    }
    public static function SESSIONSTORAGE(): CookieUpdateRequestKind
    {
        if (!isset(self::$SESSIONSTORAGE)) {
            self::$SESSIONSTORAGE = new CookieUpdateRequestKind('session_storage');
        }
        return self::$SESSIONSTORAGE;
    }
    public static function INDEXEDDB(): CookieUpdateRequestKind
    {
        if (!isset(self::$INDEXEDDB)) {
            self::$INDEXEDDB = new CookieUpdateRequestKind('indexeddb');
        }
        return self::$INDEXEDDB;
    }
    public static function PIXEL(): CookieUpdateRequestKind
    {
        if (!isset(self::$PIXEL)) {
            self::$PIXEL = new CookieUpdateRequestKind('pixel');
        }
        return self::$PIXEL;
    }
}