<?php

namespace Revenexx\Enums;

use JsonSerializable;

class WhatsappCategory implements JsonSerializable
{
    private static WhatsappCategory $MARKETING;
    private static WhatsappCategory $UTILITY;
    private static WhatsappCategory $AUTHENTICATION;
    private static WhatsappCategory $SERVICE;

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

    public static function MARKETING(): WhatsappCategory
    {
        if (!isset(self::$MARKETING)) {
            self::$MARKETING = new WhatsappCategory('marketing');
        }
        return self::$MARKETING;
    }
    public static function UTILITY(): WhatsappCategory
    {
        if (!isset(self::$UTILITY)) {
            self::$UTILITY = new WhatsappCategory('utility');
        }
        return self::$UTILITY;
    }
    public static function AUTHENTICATION(): WhatsappCategory
    {
        if (!isset(self::$AUTHENTICATION)) {
            self::$AUTHENTICATION = new WhatsappCategory('authentication');
        }
        return self::$AUTHENTICATION;
    }
    public static function SERVICE(): WhatsappCategory
    {
        if (!isset(self::$SERVICE)) {
            self::$SERVICE = new WhatsappCategory('service');
        }
        return self::$SERVICE;
    }
}