<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApprovalRuleUpdateRequestApproverType implements JsonSerializable
{
    private static ApprovalRuleUpdateRequestApproverType $CONTACT;
    private static ApprovalRuleUpdateRequestApproverType $ROLE;
    private static ApprovalRuleUpdateRequestApproverType $DEFAULT;

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

    public static function CONTACT(): ApprovalRuleUpdateRequestApproverType
    {
        if (!isset(self::$CONTACT)) {
            self::$CONTACT = new ApprovalRuleUpdateRequestApproverType('contact');
        }
        return self::$CONTACT;
    }
    public static function ROLE(): ApprovalRuleUpdateRequestApproverType
    {
        if (!isset(self::$ROLE)) {
            self::$ROLE = new ApprovalRuleUpdateRequestApproverType('role');
        }
        return self::$ROLE;
    }
    public static function DEFAULT(): ApprovalRuleUpdateRequestApproverType
    {
        if (!isset(self::$DEFAULT)) {
            self::$DEFAULT = new ApprovalRuleUpdateRequestApproverType('default');
        }
        return self::$DEFAULT;
    }
}