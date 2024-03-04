<?php
// Print Current Status
function printStatus()
{
    global $location, $wearing_glasses, $wearing_contacts, $has_mushrooms, $has_soup, $is_hungry, $needs_to_pee;

    echo "You are in: $location\n";

    // Write your code here:
    if ($wearing_glasses === TRUE) {
        echo "You are wearing glasses.\n";
    }
    if ($wearing_contacts === TRUE) {
        echo "You are wearing contacts.\n";
    }
    if ($has_mushrooms === TRUE) {
        echo "You are holding mushrooms.\n";
    }
    if ($has_soup === TRUE) {
        echo "You are holding a scalding-hot bowl of mushroom soup.\n";
    }
    if ($needs_to_pee === TRUE) {
        echo "You need to pee!\n";
    }
    if ($is_hungry === TRUE) {
        echo "You are hungry.\n";
    } else {
        echo "You are well-fed and energetic.\n";
    }
}
