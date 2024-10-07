<?php 
//Define functions
function generatePsw($length,$repeat,$checkLetters = "",$checkNumbers = "",$checkSymbols = ""){
    // Define a string with all charakters, nr or any simbols
    $letter = 'abcdefghijklmnopqrstuvwxyz'; // Variable caontain all letters
    $number = '0123456789'; // Variable caontain all numbers
    $symbol = "!\"#$%&'()*+,-./:;=?@[\]^_{|}~"; // Variable caontain all symbols

    $allChars = ''; // Store all characters
    $randPsw = ''; // Store random letters to generate a password

    if($checkLetters === "on") $allChars .= $letter;
    if($checkNumbers === "on") $allChars .= $number;
    if($checkSymbols === "on") $allChars .= $symbol;

    if($repeat === "yes"){
        for($i = 0; $i < $length; $i++){
                $randNumber = random_int(0, strlen($allChars)-1) ;//Method to generate rand number from 0 to $allChars length-1
                $randPsw .= $allChars[$randNumber]; // Add random character in rand psw
            }
        
    }else{
        for($i = 0; $i < $length; $i++){
                $randNumber = random_int(0, strlen($allChars)-1) ;//Method to generate rand number from 0 to $allChars length-1
                if(strpos($randPsw, $allChars[$randNumber])=== false)
                $randPsw .= $allChars[$randNumber]; // Add random character in rand psw
            }
    }
    return $randPsw;
}
?>