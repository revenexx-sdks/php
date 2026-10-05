<?php

namespace Revenexx\Enums;

use JsonSerializable;

class NoteRequestVisibility implements JsonSerializable
{
    private static NoteRequestVisibility $INTERNAL;
    private static NoteRequestVisibility $CUSTOMER;

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

    public static function INTERNAL(): NoteRequestVisibility
    {
        if (!isset(self::$INTERNAL)) {
            self::$INTERNAL = new NoteRequestVisibility('internal');
        }
        return self::$INTERNAL;
    }
    public static function CUSTOMER(): NoteRequestVisibility
    {
        if (!isset(self::$CUSTOMER)) {
            self::$CUSTOMER = new NoteRequestVisibility('customer');
        }
        return self::$CUSTOMER;
    }
}