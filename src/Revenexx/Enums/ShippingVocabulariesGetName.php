<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ShippingVocabulariesGetName implements JsonSerializable
{
    private static ShippingVocabulariesGetName $CARRIERSTATUSES;
    private static ShippingVocabulariesGetName $MATRIXBASES;
    private static ShippingVocabulariesGetName $PRICINGTYPES;
    private static ShippingVocabulariesGetName $SERVICELEVELS;
    private static ShippingVocabulariesGetName $WEIGHTUNITS;

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

    public static function CARRIERSTATUSES(): ShippingVocabulariesGetName
    {
        if (!isset(self::$CARRIERSTATUSES)) {
            self::$CARRIERSTATUSES = new ShippingVocabulariesGetName('carrier-statuses');
        }
        return self::$CARRIERSTATUSES;
    }
    public static function MATRIXBASES(): ShippingVocabulariesGetName
    {
        if (!isset(self::$MATRIXBASES)) {
            self::$MATRIXBASES = new ShippingVocabulariesGetName('matrix-bases');
        }
        return self::$MATRIXBASES;
    }
    public static function PRICINGTYPES(): ShippingVocabulariesGetName
    {
        if (!isset(self::$PRICINGTYPES)) {
            self::$PRICINGTYPES = new ShippingVocabulariesGetName('pricing-types');
        }
        return self::$PRICINGTYPES;
    }
    public static function SERVICELEVELS(): ShippingVocabulariesGetName
    {
        if (!isset(self::$SERVICELEVELS)) {
            self::$SERVICELEVELS = new ShippingVocabulariesGetName('service-levels');
        }
        return self::$SERVICELEVELS;
    }
    public static function WEIGHTUNITS(): ShippingVocabulariesGetName
    {
        if (!isset(self::$WEIGHTUNITS)) {
            self::$WEIGHTUNITS = new ShippingVocabulariesGetName('weight-units');
        }
        return self::$WEIGHTUNITS;
    }
}