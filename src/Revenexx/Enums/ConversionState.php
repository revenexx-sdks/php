<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConversionState implements JsonSerializable
{
    private static ConversionState $READY;
    private static ConversionState $SENT;
    private static ConversionState $SKIPPEDNOCONSENT;
    private static ConversionState $FAILED;

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

    public static function READY(): ConversionState
    {
        if (!isset(self::$READY)) {
            self::$READY = new ConversionState('ready');
        }
        return self::$READY;
    }
    public static function SENT(): ConversionState
    {
        if (!isset(self::$SENT)) {
            self::$SENT = new ConversionState('sent');
        }
        return self::$SENT;
    }
    public static function SKIPPEDNOCONSENT(): ConversionState
    {
        if (!isset(self::$SKIPPEDNOCONSENT)) {
            self::$SKIPPEDNOCONSENT = new ConversionState('skipped_no_consent');
        }
        return self::$SKIPPEDNOCONSENT;
    }
    public static function FAILED(): ConversionState
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ConversionState('failed');
        }
        return self::$FAILED;
    }
}