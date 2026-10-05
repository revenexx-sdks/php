<?php

namespace Revenexx\Enums;

use JsonSerializable;

class OrderApprovalMode implements JsonSerializable
{
    private static OrderApprovalMode $NONE;
    private static OrderApprovalMode $LIMITED;
    private static OrderApprovalMode $UNLIMITED;

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

    public static function NONE(): OrderApprovalMode
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new OrderApprovalMode('none');
        }
        return self::$NONE;
    }
    public static function LIMITED(): OrderApprovalMode
    {
        if (!isset(self::$LIMITED)) {
            self::$LIMITED = new OrderApprovalMode('limited');
        }
        return self::$LIMITED;
    }
    public static function UNLIMITED(): OrderApprovalMode
    {
        if (!isset(self::$UNLIMITED)) {
            self::$UNLIMITED = new OrderApprovalMode('unlimited');
        }
        return self::$UNLIMITED;
    }
}