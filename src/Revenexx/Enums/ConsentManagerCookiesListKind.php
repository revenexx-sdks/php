<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentManagerCookiesListKind implements JsonSerializable
{
    private static ConsentManagerCookiesListKind $COOKIE;
    private static ConsentManagerCookiesListKind $LOCALSTORAGE;
    private static ConsentManagerCookiesListKind $SESSIONSTORAGE;
    private static ConsentManagerCookiesListKind $INDEXEDDB;
    private static ConsentManagerCookiesListKind $PIXEL;

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

    public static function COOKIE(): ConsentManagerCookiesListKind
    {
        if (!isset(self::$COOKIE)) {
            self::$COOKIE = new ConsentManagerCookiesListKind('cookie');
        }
        return self::$COOKIE;
    }
    public static function LOCALSTORAGE(): ConsentManagerCookiesListKind
    {
        if (!isset(self::$LOCALSTORAGE)) {
            self::$LOCALSTORAGE = new ConsentManagerCookiesListKind('local_storage');
        }
        return self::$LOCALSTORAGE;
    }
    public static function SESSIONSTORAGE(): ConsentManagerCookiesListKind
    {
        if (!isset(self::$SESSIONSTORAGE)) {
            self::$SESSIONSTORAGE = new ConsentManagerCookiesListKind('session_storage');
        }
        return self::$SESSIONSTORAGE;
    }
    public static function INDEXEDDB(): ConsentManagerCookiesListKind
    {
        if (!isset(self::$INDEXEDDB)) {
            self::$INDEXEDDB = new ConsentManagerCookiesListKind('indexeddb');
        }
        return self::$INDEXEDDB;
    }
    public static function PIXEL(): ConsentManagerCookiesListKind
    {
        if (!isset(self::$PIXEL)) {
            self::$PIXEL = new ConsentManagerCookiesListKind('pixel');
        }
        return self::$PIXEL;
    }
}