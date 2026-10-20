<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormContactOutcome implements JsonSerializable
{
    private static FormContactOutcome $FOUND;
    private static FormContactOutcome $MOVED;
    private static FormContactOutcome $CREATED;
    private static FormContactOutcome $SKIPPED;
    private static FormContactOutcome $FAILED;

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

    public static function FOUND(): FormContactOutcome
    {
        if (!isset(self::$FOUND)) {
            self::$FOUND = new FormContactOutcome('found');
        }
        return self::$FOUND;
    }
    public static function MOVED(): FormContactOutcome
    {
        if (!isset(self::$MOVED)) {
            self::$MOVED = new FormContactOutcome('moved');
        }
        return self::$MOVED;
    }
    public static function CREATED(): FormContactOutcome
    {
        if (!isset(self::$CREATED)) {
            self::$CREATED = new FormContactOutcome('created');
        }
        return self::$CREATED;
    }
    public static function SKIPPED(): FormContactOutcome
    {
        if (!isset(self::$SKIPPED)) {
            self::$SKIPPED = new FormContactOutcome('skipped');
        }
        return self::$SKIPPED;
    }
    public static function FAILED(): FormContactOutcome
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new FormContactOutcome('failed');
        }
        return self::$FAILED;
    }
}