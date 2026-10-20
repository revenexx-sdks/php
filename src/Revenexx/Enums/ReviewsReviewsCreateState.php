<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReviewsReviewsCreateState implements JsonSerializable
{
    private static ReviewsReviewsCreateState $PENDING;
    private static ReviewsReviewsCreateState $PUBLISHED;

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

    public static function PENDING(): ReviewsReviewsCreateState
    {
        if (!isset(self::$PENDING)) {
            self::$PENDING = new ReviewsReviewsCreateState('pending');
        }
        return self::$PENDING;
    }
    public static function PUBLISHED(): ReviewsReviewsCreateState
    {
        if (!isset(self::$PUBLISHED)) {
            self::$PUBLISHED = new ReviewsReviewsCreateState('published');
        }
        return self::$PUBLISHED;
    }
}