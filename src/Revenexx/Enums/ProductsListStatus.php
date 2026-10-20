<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ProductsListStatus implements JsonSerializable
{
    private static ProductsListStatus $DRAFT;
    private static ProductsListStatus $INPROGRESS;
    private static ProductsListStatus $INREVIEW;
    private static ProductsListStatus $RELEASED;
    private static ProductsListStatus $PHASEOUT;
    private static ProductsListStatus $BLOCKED;

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

    public static function DRAFT(): ProductsListStatus
    {
        if (!isset(self::$DRAFT)) {
            self::$DRAFT = new ProductsListStatus('draft');
        }
        return self::$DRAFT;
    }
    public static function INPROGRESS(): ProductsListStatus
    {
        if (!isset(self::$INPROGRESS)) {
            self::$INPROGRESS = new ProductsListStatus('in_progress');
        }
        return self::$INPROGRESS;
    }
    public static function INREVIEW(): ProductsListStatus
    {
        if (!isset(self::$INREVIEW)) {
            self::$INREVIEW = new ProductsListStatus('in_review');
        }
        return self::$INREVIEW;
    }
    public static function RELEASED(): ProductsListStatus
    {
        if (!isset(self::$RELEASED)) {
            self::$RELEASED = new ProductsListStatus('released');
        }
        return self::$RELEASED;
    }
    public static function PHASEOUT(): ProductsListStatus
    {
        if (!isset(self::$PHASEOUT)) {
            self::$PHASEOUT = new ProductsListStatus('phase_out');
        }
        return self::$PHASEOUT;
    }
    public static function BLOCKED(): ProductsListStatus
    {
        if (!isset(self::$BLOCKED)) {
            self::$BLOCKED = new ProductsListStatus('blocked');
        }
        return self::$BLOCKED;
    }
}