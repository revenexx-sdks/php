<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApprovalRuleCondition implements JsonSerializable
{
    private static ApprovalRuleCondition $ALWAYS;
    private static ApprovalRuleCondition $CONSTANTLIMIT;
    private static ApprovalRuleCondition $AVAILABLEBUDGET;
    private static ApprovalRuleCondition $PERSONALLIMIT;
    private static ApprovalRuleCondition $CONTACTHASROLE;
    private static ApprovalRuleCondition $CONTACTMISSINGPERMISSION;

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

    public static function ALWAYS(): ApprovalRuleCondition
    {
        if (!isset(self::$ALWAYS)) {
            self::$ALWAYS = new ApprovalRuleCondition('always');
        }
        return self::$ALWAYS;
    }
    public static function CONSTANTLIMIT(): ApprovalRuleCondition
    {
        if (!isset(self::$CONSTANTLIMIT)) {
            self::$CONSTANTLIMIT = new ApprovalRuleCondition('constantLimit');
        }
        return self::$CONSTANTLIMIT;
    }
    public static function AVAILABLEBUDGET(): ApprovalRuleCondition
    {
        if (!isset(self::$AVAILABLEBUDGET)) {
            self::$AVAILABLEBUDGET = new ApprovalRuleCondition('availableBudget');
        }
        return self::$AVAILABLEBUDGET;
    }
    public static function PERSONALLIMIT(): ApprovalRuleCondition
    {
        if (!isset(self::$PERSONALLIMIT)) {
            self::$PERSONALLIMIT = new ApprovalRuleCondition('personalLimit');
        }
        return self::$PERSONALLIMIT;
    }
    public static function CONTACTHASROLE(): ApprovalRuleCondition
    {
        if (!isset(self::$CONTACTHASROLE)) {
            self::$CONTACTHASROLE = new ApprovalRuleCondition('contactHasRole');
        }
        return self::$CONTACTHASROLE;
    }
    public static function CONTACTMISSINGPERMISSION(): ApprovalRuleCondition
    {
        if (!isset(self::$CONTACTMISSINGPERMISSION)) {
            self::$CONTACTMISSINGPERMISSION = new ApprovalRuleCondition('contactMissingPermission');
        }
        return self::$CONTACTMISSINGPERMISSION;
    }
}