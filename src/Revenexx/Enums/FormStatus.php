<?php

namespace Revenexx\Enums;

use JsonSerializable;

class FormStatus implements JsonSerializable
{
    private static FormStatus $DRAFT;
    private static FormStatus $LIVE;
    private static FormStatus $ARCHIVED;

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

    public static function DRAFT(): FormStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new FormStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function LIVE(): FormStatus
    {
        if (!isset(self::$LIVE)) {
            self::$LIVE = new FormStatus('live');
        }
        return self::$LIVE;
    }
    public static function ARCHIVED(): FormStatus
    {
        if (!isset(self::$ARCHIVED)) {
            self::$ARCHIVED = new FormStatus('archived');
        }
        return self::$ARCHIVED;
    }
}