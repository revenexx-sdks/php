<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Kind implements JsonSerializable
{
    private static Kind $COOKIE;
    private static Kind $LOCALSTORAGE;
    private static Kind $SESSIONSTORAGE;
    private static Kind $INDEXEDDB;
    private static Kind $PIXEL;

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

    public static function COOKIE(): Kind
    {
        if (!isset(self::$COOKIE)) {
            self::$COOKIE = new Kind('cookie');
        }
        return self::$COOKIE;
    }
    public static function LOCALSTORAGE(): Kind
    {
        if (!isset(self::$LOCALSTORAGE)) {
            self::$LOCALSTORAGE = new Kind('local_storage');
        }
        return self::$LOCALSTORAGE;
    }
    public static function SESSIONSTORAGE(): Kind
    {
        if (!isset(self::$SESSIONSTORAGE)) {
            self::$SESSIONSTORAGE = new Kind('session_storage');
        }
        return self::$SESSIONSTORAGE;
    }
    public static function INDEXEDDB(): Kind
    {
        if (!isset(self::$INDEXEDDB)) {
            self::$INDEXEDDB = new Kind('indexeddb');
        }
        return self::$INDEXEDDB;
    }
    public static function PIXEL(): Kind
    {
        if (!isset(self::$PIXEL)) {
            self::$PIXEL = new Kind('pixel');
        }
        return self::$PIXEL;
    }
}