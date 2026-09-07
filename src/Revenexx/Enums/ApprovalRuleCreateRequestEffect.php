<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApprovalRuleCreateRequestEffect implements JsonSerializable
{
    private static ApprovalRuleCreateRequestEffect $PENDINGORDER;
    private static ApprovalRuleCreateRequestEffect $PREVENT;
    private static ApprovalRuleCreateRequestEffect $SENDEMAIL;

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

    public static function PENDINGORDER(): ApprovalRuleCreateRequestEffect
    {
        if (!isset(self::$PENDINGORDER)) {
            self::$PENDINGORDER = new ApprovalRuleCreateRequestEffect('pendingOrder');
        }
        return self::$PENDINGORDER;
    }
    public static function PREVENT(): ApprovalRuleCreateRequestEffect
    {
        if (!isset(self::$PREVENT)) {
            self::$PREVENT = new ApprovalRuleCreateRequestEffect('prevent');
        }
        return self::$PREVENT;
    }
    public static function SENDEMAIL(): ApprovalRuleCreateRequestEffect
    {
        if (!isset(self::$SENDEMAIL)) {
            self::$SENDEMAIL = new ApprovalRuleCreateRequestEffect('sendEmail');
        }
        return self::$SENDEMAIL;
    }
}