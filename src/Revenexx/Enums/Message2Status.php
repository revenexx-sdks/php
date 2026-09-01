<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Message2Status implements JsonSerializable
{
    private static Message2Status $DRAFT;
    private static Message2Status $PROCESSING;
    private static Message2Status $SCHEDULED;
    private static Message2Status $SENT;
    private static Message2Status $FAILED;

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

    public static function DRAFT(): Message2Status
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new Message2Status('draft');
        }
        return self::$DRAFT;
    }
    public static function PROCESSING(): Message2Status
    {
        if (!isset(self::$PROCESSING)) {
            self::$PROCESSING = new Message2Status('processing');
        }
        return self::$PROCESSING;
    }
    public static function SCHEDULED(): Message2Status
    {
        if (!isset(self::$SCHEDULED)) {
            self::$SCHEDULED = new Message2Status('scheduled');
        }
        return self::$SCHEDULED;
    }
    public static function SENT(): Message2Status
    {
        if (!isset(self::$SENT)) {
            self::$SENT = new Message2Status('sent');
        }
        return self::$SENT;
    }
    public static function FAILED(): Message2Status
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new Message2Status('failed');
        }
        return self::$FAILED;
    }
}