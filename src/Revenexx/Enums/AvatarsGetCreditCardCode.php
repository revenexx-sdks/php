<?php

namespace Revenexx\Enums;

use JsonSerializable;

class AvatarsGetCreditCardCode implements JsonSerializable
{
    private static AvatarsGetCreditCardCode $AMEX;
    private static AvatarsGetCreditCardCode $ARGENCARD;
    private static AvatarsGetCreditCardCode $CABAL;
    private static AvatarsGetCreditCardCode $CENCOSUD;
    private static AvatarsGetCreditCardCode $DINERS;
    private static AvatarsGetCreditCardCode $DISCOVER;
    private static AvatarsGetCreditCardCode $ELO;
    private static AvatarsGetCreditCardCode $HIPERCARD;
    private static AvatarsGetCreditCardCode $JCB;
    private static AvatarsGetCreditCardCode $MASTERCARD;
    private static AvatarsGetCreditCardCode $NARANJA;
    private static AvatarsGetCreditCardCode $TARGETASHOPPING;
    private static AvatarsGetCreditCardCode $UNIONPAY;
    private static AvatarsGetCreditCardCode $VISA;
    private static AvatarsGetCreditCardCode $MIR;
    private static AvatarsGetCreditCardCode $MAESTRO;
    private static AvatarsGetCreditCardCode $RUPAY;

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

    public static function AMEX(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$AMEX)) {
            self::$AMEX = new AvatarsGetCreditCardCode('amex');
        }
        return self::$AMEX;
    }
    public static function ARGENCARD(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$ARGENCARD)) {
            self::$ARGENCARD = new AvatarsGetCreditCardCode('argencard');
        }
        return self::$ARGENCARD;
    }
    public static function CABAL(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$CABAL)) {
            self::$CABAL = new AvatarsGetCreditCardCode('cabal');
        }
        return self::$CABAL;
    }
    public static function CENCOSUD(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$CENCOSUD)) {
            self::$CENCOSUD = new AvatarsGetCreditCardCode('cencosud');
        }
        return self::$CENCOSUD;
    }
    public static function DINERS(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$DINERS)) {
            self::$DINERS = new AvatarsGetCreditCardCode('diners');
        }
        return self::$DINERS;
    }
    public static function DISCOVER(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$DISCOVER)) {
            self::$DISCOVER = new AvatarsGetCreditCardCode('discover');
        }
        return self::$DISCOVER;
    }
    public static function ELO(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$ELO)) {
            self::$ELO = new AvatarsGetCreditCardCode('elo');
        }
        return self::$ELO;
    }
    public static function HIPERCARD(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$HIPERCARD)) {
            self::$HIPERCARD = new AvatarsGetCreditCardCode('hipercard');
        }
        return self::$HIPERCARD;
    }
    public static function JCB(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$JCB)) {
            self::$JCB = new AvatarsGetCreditCardCode('jcb');
        }
        return self::$JCB;
    }
    public static function MASTERCARD(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$MASTERCARD)) {
            self::$MASTERCARD = new AvatarsGetCreditCardCode('mastercard');
        }
        return self::$MASTERCARD;
    }
    public static function NARANJA(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$NARANJA)) {
            self::$NARANJA = new AvatarsGetCreditCardCode('naranja');
        }
        return self::$NARANJA;
    }
    public static function TARGETASHOPPING(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$TARGETASHOPPING)) {
            self::$TARGETASHOPPING = new AvatarsGetCreditCardCode('targeta-shopping');
        }
        return self::$TARGETASHOPPING;
    }
    public static function UNIONPAY(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$UNIONPAY)) {
            self::$UNIONPAY = new AvatarsGetCreditCardCode('unionpay');
        }
        return self::$UNIONPAY;
    }
    public static function VISA(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$VISA)) {
            self::$VISA = new AvatarsGetCreditCardCode('visa');
        }
        return self::$VISA;
    }
    public static function MIR(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$MIR)) {
            self::$MIR = new AvatarsGetCreditCardCode('mir');
        }
        return self::$MIR;
    }
    public static function MAESTRO(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$MAESTRO)) {
            self::$MAESTRO = new AvatarsGetCreditCardCode('maestro');
        }
        return self::$MAESTRO;
    }
    public static function RUPAY(): AvatarsGetCreditCardCode
    {
        if (!isset(self::$RUPAY)) {
            self::$RUPAY = new AvatarsGetCreditCardCode('rupay');
        }
        return self::$RUPAY;
    }
}