<?php

namespace Revenexx\Enums;

use JsonSerializable;

class CookieCreateRequestKind implements JsonSerializable
{
    private static CookieCreateRequestKind $COOKIE;
    private static CookieCreateRequestKind $LOCALSTORAGE;
    private static CookieCreateRequestKind $SESSIONSTORAGE;
    private static CookieCreateRequestKind $INDEXEDDB;
    private static CookieCreateRequestKind $PIXEL;

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

    public static function COOKIE(): CookieCreateRequestKind
    {
        if (!isset(self::$COOKIE)) {
            self::$COOKIE = new CookieCreateRequestKind('cookie');
        }
        return self::$COOKIE;
    }
    public static function LOCALSTORAGE(): CookieCreateRequestKind
    {
        if (!isset(self::$LOCALSTORAGE)) {
            self::$LOCALSTORAGE = new CookieCreateRequestKind('local_storage');
        }
        return self::$LOCALSTORAGE;
    }
    public static function SESSIONSTORAGE(): CookieCreateRequestKind
    {
        if (!isset(self::$SESSIONSTORAGE)) {
            self::$SESSIONSTORAGE = new CookieCreateRequestKind('session_storage');
        }
        return self::$SESSIONSTORAGE;
    }
    public static function INDEXEDDB(): CookieCreateRequestKind
    {
        if (!isset(self::$INDEXEDDB)) {
            self::$INDEXEDDB = new CookieCreateRequestKind('indexeddb');
        }
        return self::$INDEXEDDB;
    }
    public static function PIXEL(): CookieCreateRequestKind
    {
        if (!isset(self::$PIXEL)) {
            self::$PIXEL = new CookieCreateRequestKind('pixel');
        }
        return self::$PIXEL;
    }
}