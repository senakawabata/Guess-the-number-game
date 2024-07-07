<?php
//min-number
echo "Enter the mininum number (n):\n";
$min = (int) fgets(STDIN);

//max-number
echo "Enter the maximum number (n):\n";
$max= (int) fgets(STDIN);

//
if($min > $max) {
    echo "The minimum number must be less than or equal to the maximum number.\n";
    exit(1);
}

//rannsuu
$randomNumber = rand($min, $max);

echo "Guess the number between $min and $max:\n";

//game
while(true) {
    $guess = (int) fgets(STDIN);

    if($guess < $randomNumber) {
        echo "Too low! Try again:\n";
    } elseif($guess > $randomNumber) {
        echo "Too high! Tray again:\n";
    } else {
        echo "Congratulations! You guessed the right number: $randomNumber\n";
        break;
    }
}
?>