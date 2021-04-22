<?php

namespace mcvk\Dice;

use function mos\Functions\{
    redirectTo,
    renderView,
    renderTwigView,
    sendResponse,
    url
};

/**
 * Class Dice.
 */
class Dice
{
    public static function die(int $sides)
    {
        $die = rand(1, $sides);

        return $die;
    }
}
