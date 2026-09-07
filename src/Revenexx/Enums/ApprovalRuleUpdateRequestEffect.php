<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ApprovalRuleUpdateRequestEffect implements JsonSerializable
{
    private static ApprovalRuleUpdateRequestEffect $PENDINGORDER;
    private static ApprovalRuleUpdateRequestEffect $PREVENT;
    private static ApprovalRuleUpdateRequestEffect $SENDEMAIL;

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

    public static function PENDINGORDER(): ApprovalRuleUpdateRequestEffect
    {
        if (!isset(self::$PENDINGORDER)) {
            self::$PENDINGORDER = new ApprovalRuleUpdateRequestEffect('pendingOrder');
        }
        return self::$PENDINGORDER;
    }
    public static function PREVENT(): ApprovalRuleUpdateRequestEffect
    {
        if (!isset(self::$PREVENT)) {
            self::$PREVENT = new ApprovalRuleUpdateRequestEffect('prevent');
        }
        return self::$PREVENT;
    }
    public static function SENDEMAIL(): ApprovalRuleUpdateRequestEffect
    {
        if (!isset(self::$SENDEMAIL)) {
            self::$SENDEMAIL = new ApprovalRuleUpdateRequestEffect('sendEmail');
        }
        return self::$SENDEMAIL;
    }
}