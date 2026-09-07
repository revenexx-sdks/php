<?php

namespace Revenexx\Enums;

use JsonSerializable;

class PendingApprovalStatus implements JsonSerializable
{
    private static PendingApprovalStatus $PENDING;
    private static PendingApprovalStatus $APPROVED;
    private static PendingApprovalStatus $DECLINED;

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

    public static function PENDING(): PendingApprovalStatus
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new PendingApprovalStatus('pending');
        }
        return self::$PENDING;
    }
    public static function APPROVED(): PendingApprovalStatus
    {
        if (!isset(self::$APPROVED)) {
            self::$APPROVED = new PendingApprovalStatus('approved');
        }
        return self::$APPROVED;
    }
    public static function DECLINED(): PendingApprovalStatus
    {
        if (!isset(self::$DECLINED)) {
            self::$DECLINED = new PendingApprovalStatus('declined');
        }
        return self::$DECLINED;
    }
}