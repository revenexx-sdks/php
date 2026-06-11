<?php

namespace RevenexxAPIRevenexx\Enums;

use JsonSerializable;

class UseCases implements JsonSerializable
{
    private static UseCases $STARTER;
    private static UseCases $DATABASES;
    private static UseCases $AI;
    private static UseCases $MESSAGING;
    private static UseCases $UTILITIES;
    private static UseCases $DEVTOOLS;
    private static UseCases $AUTH;

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

    public static function STARTER(): UseCases
    {
        if (!isset(self::$STARTER)) {
            self::$STARTER = new UseCases('starter');
        }
        return self::$STARTER;
    }
    public static function DATABASES(): UseCases
    {
        if (!isset(self::$DATABASES)) {
            self::$DATABASES = new UseCases('databases');
        }
        return self::$DATABASES;
    }
    public static function AI(): UseCases
    {
        if (!isset(self::$AI)) {
            self::$AI = new UseCases('ai');
        }
        return self::$AI;
    }
    public static function MESSAGING(): UseCases
    {
        if (!isset(self::$MESSAGING)) {
            self::$MESSAGING = new UseCases('messaging');
        }
        return self::$MESSAGING;
    }
    public static function UTILITIES(): UseCases
    {
        if (!isset(self::$UTILITIES)) {
            self::$UTILITIES = new UseCases('utilities');
        }
        return self::$UTILITIES;
    }
    public static function DEVTOOLS(): UseCases
    {
        if (!isset(self::$DEVTOOLS)) {
            self::$DEVTOOLS = new UseCases('dev-tools');
        }
        return self::$DEVTOOLS;
    }
    public static function AUTH(): UseCases
    {
        if (!isset(self::$AUTH)) {
            self::$AUTH = new UseCases('auth');
        }
        return self::$AUTH;
    }
}