<?php

// One Turn
function gameRound()
{
    global $rounds_left, $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $moved_cupboard, $has_soup, $is_hungry, $needs_to_pee;

    //Skip Turn If It's Been Used Up
    if ($rounds_left <= 0) {
        return;
    }

    printStatus();

    //Read Command And Respond
    $cmd = readline("> ");
    $cmd = strtolower($cmd);
    echo "\n";
    switch ($cmd) {
        case "help":
            printHelp();
            break;
        case "put on glasses":
            echo "Your glasses are on.";
            $wearing_glasses = TRUE;
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "put on contacts":
            echo "Your contacts are on.";
            $wearing_contacts = TRUE;
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "take off contacts":
            echo "Your contacts are off.";
            $wearing_contacts = FALSE;
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "take off glasses":
            echo "Your glasses are off.";
            $wearing_glasses = FALSE;
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "go":
            changeLocation();
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "look around":
            lookAround();
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "pee":
            pee();
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "pick mushrooms":
            pickMushrooms();
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "cook":
            cookSoup();
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "eat":
            eatSoup();
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "move cupboard":
            moveCupboard();
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "search safe":
            searchSafe();
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        case "search toilet":
            if ($location === "bathroom") {
                echo "The toilet contains an amazing secret. The bowl is filled with ordinary water, but in the tank: the golden mouse statuette. The mouse's nose seems to follow you as you move. The mouse is beautiful! You love it! You're never going to sell it! Forget Great-Aunt Natasha's emu farm!\nYOU LOSE THE GAME!!!\n\n";
                $rounds_left = 1;
            }
            // Use Up A Round
            $rounds_left = $rounds_left - 1;
            break;
        default:
            echo "Sorry, that doesn't work :( Please use one of the valid commands. You can see the list of valid commands by entering 'help'.\n";
    } // End of command switch

    echo "\nYou now have $rounds_left rounds left.\n\n";
} // End of gameRound() function
