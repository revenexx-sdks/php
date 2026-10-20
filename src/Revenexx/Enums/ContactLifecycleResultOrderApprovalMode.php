<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ContactLifecycleResultOrderApprovalMode implements JsonSerializable
{
    private static ContactLifecycleResultOrderApprovalMode $NONE;
    private static ContactLifecycleResultOrderApprovalMode $LIMITED;
    private static ContactLifecycleResultOrderApprovalMode $UNLIMITED;

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

    public static function NONE(): ContactLifecycleResultOrderApprovalMode
    {
        if (!isset(self::$NONE)) {
            self::$NONE = new ContactLifecycleResultOrderApprovalMode('none');
        }
        return self::$NONE;
    }
    public static function LIMITED(): ContactLifecycleResultOrderApprovalMode
    {
        if (!isset(self::$LIMITED)) {
            self::$LIMITED = new ContactLifecycleResultOrderApprovalMode('limited');
        }
        return self::$LIMITED;
    }
    public static function UNLIMITED(): ContactLifecycleResultOrderApprovalMode
    {
        if (!isset(self::$UNLIMITED)) {
            self::$UNLIMITED = new ContactLifecycleResultOrderApprovalMode('unlimited');
        }
        return self::$UNLIMITED;
    }
}