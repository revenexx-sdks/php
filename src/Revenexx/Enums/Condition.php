<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Condition implements JsonSerializable
{
    private static Condition $ALWAYS;
    private static Condition $CONSTANTLIMIT;
    private static Condition $AVAILABLEBUDGET;
    private static Condition $PERSONALLIMIT;
    private static Condition $CONTACTHASROLE;
    private static Condition $CONTACTMISSINGPERMISSION;

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

    public static function ALWAYS(): Condition
    {
        if (!isset(self::$ALWAYS)) {
            self::$ALWAYS = new Condition('always');
        }
        return self::$ALWAYS;
    }
    public static function CONSTANTLIMIT(): Condition
    {
        if (!isset(self::$CONSTANTLIMIT)) {
            self::$CONSTANTLIMIT = new Condition('constantLimit');
        }
        return self::$CONSTANTLIMIT;
    }
    public static function AVAILABLEBUDGET(): Condition
    {
        if (!isset(self::$AVAILABLEBUDGET)) {
            self::$AVAILABLEBUDGET = new Condition('availableBudget');
        }
        return self::$AVAILABLEBUDGET;
    }
    public static function PERSONALLIMIT(): Condition
    {
        if (!isset(self::$PERSONALLIMIT)) {
            self::$PERSONALLIMIT = new Condition('personalLimit');
        }
        return self::$PERSONALLIMIT;
    }
    public static function CONTACTHASROLE(): Condition
    {
        if (!isset(self::$CONTACTHASROLE)) {
            self::$CONTACTHASROLE = new Condition('contactHasRole');
        }
        return self::$CONTACTHASROLE;
    }
    public static function CONTACTMISSINGPERMISSION(): Condition
    {
        if (!isset(self::$CONTACTMISSINGPERMISSION)) {
            self::$CONTACTMISSINGPERMISSION = new Condition('contactMissingPermission');
        }
        return self::$CONTACTMISSINGPERMISSION;
    }
}