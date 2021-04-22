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
class GraphicalDice
{
    public static function graphicalDice()
    {
        $die = rand(1, 6);
        echo "<div class='die'><p class='die-text'>" . $die . "<p></div>";
    }
}
