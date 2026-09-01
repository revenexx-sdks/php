<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormNotifySource implements JsonSerializable
{
    private static FormNotifySource $FORM;
    private static FormNotifySource $TENANT;

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

    public static function FORM(): FormNotifySource
    {
        if (!isset(self::$FORM)) {
            self::$FORM = new FormNotifySource('form');
        }
        return self::$FORM;
    }
    public static function TENANT(): FormNotifySource
    {
        if (!isset(self::$TENANT)) {
            self::$TENANT = new FormNotifySource('tenant');
        }
        return self::$TENANT;
    }
}