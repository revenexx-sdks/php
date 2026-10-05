<?php

namespace Revenexx\Enums;

use JsonSerializable;

class DirectOrderStatus implements JsonSerializable
{
    private static DirectOrderStatus $PLACING;
    private static DirectOrderStatus $COMMITPENDING;
    private static DirectOrderStatus $COMMITREFUSED;
    private static DirectOrderStatus $COMMITTED;
    private static DirectOrderStatus $SETTLED;
    private static DirectOrderStatus $ABANDONED;

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

    public static function PLACING(): DirectOrderStatus
    {
        if (!isset(self::$PLACING)) {
            self::$PLACING = new DirectOrderStatus('placing');
        }
        return self::$PLACING;
    }
    public static function COMMITPENDING(): DirectOrderStatus
    {
        if (!isset(self::$COMMITPENDING)) {
            self::$COMMITPENDING = new DirectOrderStatus('commit_pending');
        }
        return self::$COMMITPENDING;
    }
    public static function COMMITREFUSED(): DirectOrderStatus
    {
        if (!isset(self::$COMMITREFUSED)) {
            self::$COMMITREFUSED = new DirectOrderStatus('commit_refused');
        }
        return self::$COMMITREFUSED;
    }
    public static function COMMITTED(): DirectOrderStatus
    {
        if (!isset(self::$COMMITTED)) {
            self::$COMMITTED = new DirectOrderStatus('committed');
        }
        return self::$COMMITTED;
    }
    public static function SETTLED(): DirectOrderStatus
    {
        if (!isset(self::$SETTLED)) {
            self::$SETTLED = new DirectOrderStatus('settled');
        }
        return self::$SETTLED;
    }
    public static function ABANDONED(): DirectOrderStatus
    {
        if (!isset(self::$ABANDONED)) {
            self::$ABANDONED = new DirectOrderStatus('abandoned');
        }
        return self::$ABANDONED;
    }
}