<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Reason implements JsonSerializable
{
    private static Reason $LEFTCOMPANY;
    private static Reason $MISUSE;
    private static Reason $CUSTOMERREQUEST;
    private static Reason $OTHER;

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

    public static function LEFTCOMPANY(): Reason
    {
        if (!isset(self::$LEFTCOMPANY)) {
            self::$LEFTCOMPANY = new Reason('left_company');
        }
        return self::$LEFTCOMPANY;
    }
    public static function MISUSE(): Reason
    {
        if (!isset(self::$MISUSE)) {
            self::$MISUSE = new Reason('misuse');
        }
        return self::$MISUSE;
    }
    public static function CUSTOMERREQUEST(): Reason
    {
        if (!isset(self::$CUSTOMERREQUEST)) {
            self::$CUSTOMERREQUEST = new Reason('customer_request');
        }
        return self::$CUSTOMERREQUEST;
    }
    public static function OTHER(): Reason
    {
        if (!isset(self::$OTHER)) {
            self::$OTHER = new Reason('other');
        }
        return self::$OTHER;
    }
}