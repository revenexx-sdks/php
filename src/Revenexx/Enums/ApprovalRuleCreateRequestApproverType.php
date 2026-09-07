<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApprovalRuleCreateRequestApproverType implements JsonSerializable
{
    private static ApprovalRuleCreateRequestApproverType $CONTACT;
    private static ApprovalRuleCreateRequestApproverType $ROLE;
    private static ApprovalRuleCreateRequestApproverType $DEFAULT;

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

    public static function CONTACT(): ApprovalRuleCreateRequestApproverType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new ApprovalRuleCreateRequestApproverType('contact');
        }
        return self::$CONTACT;
    }
    public static function ROLE(): ApprovalRuleCreateRequestApproverType
    {
        if (!isset(self::$ROLE)) {
            self::$ROLE = new ApprovalRuleCreateRequestApproverType('role');
        }
        return self::$ROLE;
    }
    public static function DEFAULT(): ApprovalRuleCreateRequestApproverType
    {
        if (!isset(self::$DEFAULT)) {
            self::$DEFAULT = new ApprovalRuleCreateRequestApproverType('default');
        }
        return self::$DEFAULT;
    }
}