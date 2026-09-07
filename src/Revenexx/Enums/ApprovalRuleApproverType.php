<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApprovalRuleApproverType implements JsonSerializable
{
    private static ApprovalRuleApproverType $CONTACT;
    private static ApprovalRuleApproverType $ROLE;
    private static ApprovalRuleApproverType $DEFAULT;

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

    public static function CONTACT(): ApprovalRuleApproverType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new ApprovalRuleApproverType('contact');
        }
        return self::$CONTACT;
    }
    public static function ROLE(): ApprovalRuleApproverType
    {
        if (!isset(self::$ROLE)) {
            self::$ROLE = new ApprovalRuleApproverType('role');
        }
        return self::$ROLE;
    }
    public static function DEFAULT(): ApprovalRuleApproverType
    {
        if (!isset(self::$DEFAULT)) {
            self::$DEFAULT = new ApprovalRuleApproverType('default');
        }
        return self::$DEFAULT;
    }
}