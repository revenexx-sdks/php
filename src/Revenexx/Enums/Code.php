<?php

namespace Revenexx\Enums;

use JsonSerializable;

class Code implements JsonSerializable
{
    private static Code $AA;
    private static Code $AN;
    private static Code $CH;
    private static Code $CI;
    private static Code $CM;
    private static Code $CR;
    private static Code $FF;
    private static Code $SF;
    private static Code $MF;
    private static Code $PS;
    private static Code $OI;
    private static Code $OM;
    private static Code $OP;
    private static Code $ON;

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

    public static function AA(): Code
    {
        if (!isset(self::$AA)) {
            self::$AA = new Code('aa');
        }
        return self::$AA;
    }
    public static function AN(): Code
    {
        if (!isset(self::$AN)) {
            self::$AN = new Code('an');
        }
        return self::$AN;
    }
    public static function CH(): Code
    {
        if (!isset(self::$CH)) {
            self::$CH = new Code('ch');
        }
        return self::$CH;
    }
    public static function CI(): Code
    {
        if (!isset(self::$CI)) {
            self::$CI = new Code('ci');
        }
        return self::$CI;
    }
    public static function CM(): Code
    {
        if (!isset(self::$CM)) {
            self::$CM = new Code('cm');
        }
        return self::$CM;
    }
    public static function CR(): Code
    {
        if (!isset(self::$CR)) {
            self::$CR = new Code('cr');
        }
        return self::$CR;
    }
    public static function FF(): Code
    {
        if (!isset(self::$FF)) {
            self::$FF = new Code('ff');
        }
        return self::$FF;
    }
    public static function SF(): Code
    {
        if (!isset(self::$SF)) {
            self::$SF = new Code('sf');
        }
        return self::$SF;
    }
    public static function MF(): Code
    {
        if (!isset(self::$MF)) {
            self::$MF = new Code('mf');
        }
        return self::$MF;
    }
    public static function PS(): Code
    {
        if (!isset(self::$PS)) {
            self::$PS = new Code('ps');
        }
        return self::$PS;
    }
    public static function OI(): Code
    {
        if (!isset(self::$OI)) {
            self::$OI = new Code('oi');
        }
        return self::$OI;
    }
    public static function OM(): Code
    {
        if (!isset(self::$OM)) {
            self::$OM = new Code('om');
        }
        return self::$OM;
    }
    public static function OP(): Code
    {
        if (!isset(self::$OP)) {
            self::$OP = new Code('op');
        }
        return self::$OP;
    }
    public static function ON(): Code
    {
        if (!isset(self::$ON)) {
            self::$ON = new Code('on');
        }
        return self::$ON;
    }
}