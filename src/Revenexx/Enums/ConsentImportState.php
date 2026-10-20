<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ConsentImportState implements JsonSerializable
{
    private static ConsentImportState $RUNNING;
    private static ConsentImportState $COMPLETED;
    private static ConsentImportState $FAILED;

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

    public static function RUNNING(): ConsentImportState
    {
        if (!isset(self::$RUNNING)) {
            self::$RUNNING = new ConsentImportState('running');
        }
        return self::$RUNNING;
    }
    public static function COMPLETED(): ConsentImportState
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new ConsentImportState('completed');
        }
        return self::$COMPLETED;
    }
    public static function FAILED(): ConsentImportState
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new ConsentImportState('failed');
        }
        return self::$FAILED;
    }
}