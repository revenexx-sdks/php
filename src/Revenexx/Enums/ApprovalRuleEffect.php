<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApprovalRuleEffect implements JsonSerializable
{
    private static ApprovalRuleEffect $PENDINGORDER;
    private static ApprovalRuleEffect $PREVENT;
    private static ApprovalRuleEffect $SENDEMAIL;

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

    public static function PENDINGORDER(): ApprovalRuleEffect
    {
        if (!isset(self::$PENDINGORDER)) {
            self::$PENDINGORDER = new ApprovalRuleEffect('pendingOrder');
        }
        return self::$PENDINGORDER;
    }
    public static function PREVENT(): ApprovalRuleEffect
    {
        if (!isset(self::$PREVENT)) {
            self::$PREVENT = new ApprovalRuleEffect('prevent');
        }
        return self::$PREVENT;
    }
    public static function SENDEMAIL(): ApprovalRuleEffect
    {
        if (!isset(self::$SENDEMAIL)) {
            self::$SENDEMAIL = new ApprovalRuleEffect('sendEmail');
        }
        return self::$SENDEMAIL;
    }
}