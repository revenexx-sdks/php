<?php

namespace Revenexx\Enums;

use JsonSerializable;

class ReviewsReviewsCreateSource implements JsonSerializable
{
    private static ReviewsReviewsCreateSource $ADMIN;
    private static ReviewsReviewsCreateSource $IMPORT;

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

    public static function ADMIN(): ReviewsReviewsCreateSource
    {
        if (!isset(self::$ADMIN)) {
            self::$ADMIN = new ReviewsReviewsCreateSource('admin');
        }
        return self::$ADMIN;
    }
    public static function IMPORT(): ReviewsReviewsCreateSource
    {
        if (!isset(self::$IMPORT)) {
            self::$IMPORT = new ReviewsReviewsCreateSource('import');
        }
        return self::$IMPORT;
    }
}