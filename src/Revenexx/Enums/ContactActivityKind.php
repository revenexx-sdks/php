<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactActivityKind implements JsonSerializable
{
    private static ContactActivityKind $NOTE;
    private static ContactActivityKind $CALL;
    private static ContactActivityKind $EMAIL;
    private static ContactActivityKind $MEETING;
    private static ContactActivityKind $VISIT;
    private static ContactActivityKind $TASK;

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

    public static function NOTE(): ContactActivityKind
    {
        if (!isset(self::$NOTE)) {
            self::$NOTE = new ContactActivityKind('note');
        }
        return self::$NOTE;
    }
    public static function CALL(): ContactActivityKind
    {
        if (!isset(self::$CALL)) {
            self::$CALL = new ContactActivityKind('call');
        }
        return self::$CALL;
    }
    public static function EMAIL(): ContactActivityKind
    {
        if (!isset(self::$EMAIL)) {
            self::$EMAIL = new ContactActivityKind('email');
        }
        return self::$EMAIL;
    }
    public static function MEETING(): ContactActivityKind
    {
        if (!isset(self::$MEETING)) {
            self::$MEETING = new ContactActivityKind('meeting');
        }
        return self::$MEETING;
    }
    public static function VISIT(): ContactActivityKind
    {
        if (!isset(self::$VISIT)) {
            self::$VISIT = new ContactActivityKind('visit');
        }
        return self::$VISIT;
    }
    public static function TASK(): ContactActivityKind
    {
        if (!isset(self::$TASK)) {
            self::$TASK = new ContactActivityKind('task');
        }
        return self::$TASK;
    }
}