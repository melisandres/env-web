<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exo4</title>
</head>
<body>
    <?php 

    include  'exo3.php';

    /*This test checks if the player has any guesses left.
    It is run early in the main function.
    It is triggered if a value is submitted 
    despite having no guesses left.

    If the player does have guesses left (including being on their last guess), 
    there is no output, and they may continue playing. 
    With no guesses left, submitting a new character triggers a message.*/
    echo "<br/>";
    echo "===========================================";
    echo "<br/>";

    echo "<h2>Test 1</h2>";
    echo "<h3>Check if the player has any guesses left:</h3>";
    $gLeft1 = 1;
    $gLeft2 = 0;
    $mys = "this is a test string";
    echo "test one (".$gLeft1." guess left):";
    checkGuessesLeft($mys, $gLeft1);
    echo "<br/>";
    echo "test two (".$gLeft2." guesses left):";
    checkGuessesLeft($mys, $gLeft2);
    echo "<br/>";




    /*This test verifies the answer string.
    to ensure that it doesn't contain so many alphabetic
    characters that the game is a certain win. 
    If it determines that the answer string is not good, 
    it will echo an error message, 
    but it will not prohibit the game from continuing.
    If the answerstring is good, there is no output.*/
    echo "<br/>";
    echo "===========================================";
    echo "<br/>";

    echo "<h2>Test 2</h2>";
    echo "<h3>Check how many alphabetic chars are NOT contained in the answer string:</h3>";
    $ans1 ="The quick lazy fox jumped over the red fence.";
    $ans2 ="Be cool."; 
    $gLeft = 7;
    echo "test one (answer =  ".$ans1."):";
    checkAnswerString($ans1, $gLeft);
    echo "<br/>";
    echo "test two (answer =  ".$ans2."):";
    checkAnswerString($ans2, $gLeft);
    echo "<br/>";



    /*This test checks verifies if the input is empty, 
    just in case this might cause an issue. 
    If the value submitted is an empty string,  
    it will echo an error message. 
    Otherwise, there is no output.*/
    echo "<br/>";
    echo "===========================================";
    echo "<br/>";

    echo "<h2>Test 3</h2>";
    echo "<h3>Check if the input is an empty string:</h3>";
    $char1 ="a";
    $char2 =""; 
    $mys = "Another test sentence.";
    $gLeft = 3;
    echo "test one (input is = ".$char1."):";
    checkForEmptyString($mys, $char1, $gLeft);
    echo "<br/>";
    echo "test two (input is = ".$char2."):";
    checkForEmptyString($mys, $char2, $gLeft);
    echo "<br/>";



    /*This test checks if the character submitted 
    was previously guessed. It does so by checking an 
    array that is updated every time a guess is made. 
    If the guess was previously made, 
    a message is echoed out to the player. 
    Otherwise, there is no output.*/
    echo "<br/>";
    echo "===========================================";
    echo "<br/>";

    echo "<h2>Test 4</h2>";
    echo "<h3>Check if the input was guessed previously:</h3>";
    $alphaP = array("a"=>"goodGuess", "b"=>"unguessed","c"=>"unguessed","d"=>"unguessed","e"=>"unguessed","f"=>"unguessed","g"=>"unguessed","h"=>"unguessed","i"=>"unguessed","j"=>"unguessed","k"=>"unguessed","l"=>"unguessed","m"=>"unguessed","n"=>"unguessed","o"=>"unguessed","p"=>"unguessed","q"=>"unguessed","r"=>"unguessed","s"=>"unguessed","t"=>"unguessed","u"=>"unguessed","v"=>"unguessed","w"=>"unguessed","x"=>"unguessed","y"=>"unguessed","z"=>"unguessed");
    $char1 ="z";
    $char2 ="a"; 
    $ans = "A final test sentence.";
    $mys = "A ___a_ ____ ________.";
    $gLeft = 3;
    echo "test one (input is = ".$char1."):";
    checkIfAlreadyGuessed($alphaP, $char1, $ans, $mys, $gLeft);
    echo "<br/>";
    echo "test two (input is = ".$char2."):";
    checkIfAlreadyGuessed($alphaP, $char2, $ans, $mys, $gLeft);
    echo "<br/>";



    ?>
</body>
</html>