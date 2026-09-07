<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApprovalRuleUpdateRequestCondition implements JsonSerializable
{
    private static ApprovalRuleUpdateRequestCondition $ALWAYS;
    private static ApprovalRuleUpdateRequestCondition $CONSTANTLIMIT;
    private static ApprovalRuleUpdateRequestCondition $AVAILABLEBUDGET;
    private static ApprovalRuleUpdateRequestCondition $PERSONALLIMIT;
    private static ApprovalRuleUpdateRequestCondition $CONTACTHASROLE;
    private static ApprovalRuleUpdateRequestCondition $CONTACTMISSINGPERMISSION;

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

    public static function ALWAYS(): ApprovalRuleUpdateRequestCondition
    {
        if (!isset(self::$ALWAYS)) {
            self::$ALWAYS = new ApprovalRuleUpdateRequestCondition('always');
        }
        return self::$ALWAYS;
    }
    public static function CONSTANTLIMIT(): ApprovalRuleUpdateRequestCondition
    {
        if (!isset(self::$CONSTANTLIMIT)) {
            self::$CONSTANTLIMIT = new ApprovalRuleUpdateRequestCondition('constantLimit');
        }
        return self::$CONSTANTLIMIT;
    }
    public static function AVAILABLEBUDGET(): ApprovalRuleUpdateRequestCondition
    {
        if (!isset(self::$AVAILABLEBUDGET)) {
            self::$AVAILABLEBUDGET = new ApprovalRuleUpdateRequestCondition('availableBudget');
        }
        return self::$AVAILABLEBUDGET;
    }
    public static function PERSONALLIMIT(): ApprovalRuleUpdateRequestCondition
    {
        if (!isset(self::$PERSONALLIMIT)) {
            self::$PERSONALLIMIT = new ApprovalRuleUpdateRequestCondition('personalLimit');
        }
        return self::$PERSONALLIMIT;
    }
    public static function CONTACTHASROLE(): ApprovalRuleUpdateRequestCondition
    {
        if (!isset(self::$CONTACTHASROLE)) {
            self::$CONTACTHASROLE = new ApprovalRuleUpdateRequestCondition('contactHasRole');
        }
        return self::$CONTACTHASROLE;
    }
    public static function CONTACTMISSINGPERMISSION(): ApprovalRuleUpdateRequestCondition
    {
        if (!isset(self::$CONTACTMISSINGPERMISSION)) {
            self::$CONTACTMISSINGPERMISSION = new ApprovalRuleUpdateRequestCondition('contactMissingPermission');
        }
        return self::$CONTACTMISSINGPERMISSION;
    }
}