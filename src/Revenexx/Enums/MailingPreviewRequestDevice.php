<?php

namespace Revenexx\Enums;

use JsonSerializable;

class MailingPreviewRequestDevice implements JsonSerializable
{
    private static MailingPreviewRequestDevice $DESKTOP;
    private static MailingPreviewRequestDevice $MOBILE;

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

    public static function DESKTOP(): MailingPreviewRequestDevice
    {
        if (!isset(self::$DESKTOP)) {
            self::$DESKTOP = new MailingPreviewRequestDevice('desktop');
        }
        return self::$DESKTOP;
    }
    public static function MOBILE(): MailingPreviewRequestDevice
    {
        if (!isset(self::$MOBILE)) {
            self::$MOBILE = new MailingPreviewRequestDevice('mobile');
        }
        return self::$MOBILE;
    }
}