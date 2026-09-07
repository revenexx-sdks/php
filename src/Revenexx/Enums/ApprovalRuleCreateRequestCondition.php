<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApprovalRuleCreateRequestCondition implements JsonSerializable
{
    private static ApprovalRuleCreateRequestCondition $ALWAYS;
    private static ApprovalRuleCreateRequestCondition $CONSTANTLIMIT;
    private static ApprovalRuleCreateRequestCondition $AVAILABLEBUDGET;
    private static ApprovalRuleCreateRequestCondition $PERSONALLIMIT;
    private static ApprovalRuleCreateRequestCondition $CONTACTHASROLE;
    private static ApprovalRuleCreateRequestCondition $CONTACTMISSINGPERMISSION;

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

    public static function ALWAYS(): ApprovalRuleCreateRequestCondition
    {
        if (!isset(self::$ALWAYS)) {
            self::$ALWAYS = new ApprovalRuleCreateRequestCondition('always');
        }
        return self::$ALWAYS;
    }
    public static function CONSTANTLIMIT(): ApprovalRuleCreateRequestCondition
    {
        if (!isset(self::$CONSTANTLIMIT)) {
            self::$CONSTANTLIMIT = new ApprovalRuleCreateRequestCondition('constantLimit');
        }
        return self::$CONSTANTLIMIT;
    }
    public static function AVAILABLEBUDGET(): ApprovalRuleCreateRequestCondition
    {
        if (!isset(self::$AVAILABLEBUDGET)) {
            self::$AVAILABLEBUDGET = new ApprovalRuleCreateRequestCondition('availableBudget');
        }
        return self::$AVAILABLEBUDGET;
    }
    public static function PERSONALLIMIT(): ApprovalRuleCreateRequestCondition
    {
        if (!isset(self::$PERSONALLIMIT)) {
            self::$PERSONALLIMIT = new ApprovalRuleCreateRequestCondition('personalLimit');
        }
        return self::$PERSONALLIMIT;
    }
    public static function CONTACTHASROLE(): ApprovalRuleCreateRequestCondition
    {
        if (!isset(self::$CONTACTHASROLE)) {
            self::$CONTACTHASROLE = new ApprovalRuleCreateRequestCondition('contactHasRole');
        }
        return self::$CONTACTHASROLE;
    }
    public static function CONTACTMISSINGPERMISSION(): ApprovalRuleCreateRequestCondition
    {
        if (!isset(self::$CONTACTMISSINGPERMISSION)) {
            self::$CONTACTMISSINGPERMISSION = new ApprovalRuleCreateRequestCondition('contactMissingPermission');
        }
        return self::$CONTACTMISSINGPERMISSION;
    }
}