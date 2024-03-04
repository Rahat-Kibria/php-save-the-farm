<?php
// Change player location
function changeLocation()
{
    // Write your code here:
    global $location;
    echo "Where do you want to go?\n";
    $cmd_location = strtolower(readline(">> "));
    if ($location === "kitchen" && $cmd_location === "bathroom") {
        echo "You go to: bathroom.\n";
        $location = $cmd_location;
    } elseif ($location === "kitchen" && $cmd_location === "woods") {
        echo "You follow the winding path, shivering as you make your way deep into the Terror Woods.\n";
        $location = $cmd_location;
    } elseif ($location === "woods" && $cmd_location === "kitchen") {
        echo "You go to: kitchen.\n";
        $location = $cmd_location;
    } elseif ($location === "bathroom" && $cmd_location === "kitchen") {
        echo "You go to: kitchen.\n";
        $location = $cmd_location;
    } elseif (($location === $cmd_location) || ($location === "woods" && $cmd_location === "bathroom") || ($location === "bathroom" && $cmd_location === "woods")) {
        echo "You can't go directly to there from your current location. Try going somewhere else first.\n";
    } else {
        echo "That doesn't make sense. Are you confused? Try 'look around'.\n";
    }
}
