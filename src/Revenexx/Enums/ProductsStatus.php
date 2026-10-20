<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductsStatus implements JsonSerializable
{
    private static ProductsStatus $DRAFT;
    private static ProductsStatus $INPROGRESS;
    private static ProductsStatus $INREVIEW;
    private static ProductsStatus $RELEASED;
    private static ProductsStatus $PHASEOUT;
    private static ProductsStatus $BLOCKED;

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

    public static function DRAFT(): ProductsStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new ProductsStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function INPROGRESS(): ProductsStatus
    {
        if (!isset(self::$INPROGRESS)) {
            self::$INPROGRESS = new ProductsStatus('in_progress');
        }
        return self::$INPROGRESS;
    }
    public static function INREVIEW(): ProductsStatus
    {
        if (!isset(self::$INREVIEW)) {
            self::$INREVIEW = new ProductsStatus('in_review');
        }
        return self::$INREVIEW;
    }
    public static function RELEASED(): ProductsStatus
    {
        if (!isset(self::$RELEASED)) {
            self::$RELEASED = new ProductsStatus('released');
        }
        return self::$RELEASED;
    }
    public static function PHASEOUT(): ProductsStatus
    {
        if (!isset(self::$PHASEOUT)) {
            self::$PHASEOUT = new ProductsStatus('phase_out');
        }
        return self::$PHASEOUT;
    }
    public static function BLOCKED(): ProductsStatus
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new ProductsStatus('blocked');
        }
        return self::$BLOCKED;
    }
}