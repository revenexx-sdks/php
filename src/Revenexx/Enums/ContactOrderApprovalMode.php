<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactOrderApprovalMode implements JsonSerializable
{
    private static ContactOrderApprovalMode $NONE;
    private static ContactOrderApprovalMode $LIMITED;
    private static ContactOrderApprovalMode $UNLIMITED;

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

    public static function NONE(): ContactOrderApprovalMode
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ContactOrderApprovalMode('none');
        }
        return self::$NONE;
    }
    public static function LIMITED(): ContactOrderApprovalMode
    {
        if (!isset(self::$LIMITED)) {
            self::$LIMITED = new ContactOrderApprovalMode('limited');
        }
        return self::$LIMITED;
    }
    public static function UNLIMITED(): ContactOrderApprovalMode
    {
        if (!isset(self::$UNLIMITED)) {
            self::$UNLIMITED = new ContactOrderApprovalMode('unlimited');
        }
        return self::$UNLIMITED;
    }
}