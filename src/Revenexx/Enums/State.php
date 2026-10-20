<?php

namespace Revenexx\Enums;

use JsonSerializable;

class State implements JsonSerializable
{
    private static State $RUNNING;
    private static State $COMPLETED;
    private static State $FAILED;

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

    public static function RUNNING(): State
    {
        if (!isset(self::$RUNNING)) {
            self::$RUNNING = new State('running');
        }
        return self::$RUNNING;
    }
    public static function COMPLETED(): State
    {
        if (!isset(self::$COMPLETED)) {
            self::$COMPLETED = new State('completed');
        }
        return self::$COMPLETED;
    }
    public static function FAILED(): State
    {
        if (!isset(self::$FAILED)) {
            self::$FAILED = new State('failed');
        }
        return self::$FAILED;
    }
}