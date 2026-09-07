<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PendingApprovalApproverType implements JsonSerializable
{
    private static PendingApprovalApproverType $CONTACT;
    private static PendingApprovalApproverType $ROLE;
    private static PendingApprovalApproverType $DEFAULT;

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

    public static function CONTACT(): PendingApprovalApproverType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new PendingApprovalApproverType('contact');
        }
        return self::$CONTACT;
    }
    public static function ROLE(): PendingApprovalApproverType
    {
        if (!isset(self::$ROLE)) {
            self::$ROLE = new PendingApprovalApproverType('role');
        }
        return self::$ROLE;
    }
    public static function DEFAULT(): PendingApprovalApproverType
    {
        if (!isset(self::$DEFAULT)) {
            self::$DEFAULT = new PendingApprovalApproverType('default');
        }
        return self::$DEFAULT;
    }
}