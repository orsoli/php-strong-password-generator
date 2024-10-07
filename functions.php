<?php 
//Define functions
function generatePsw($length){
    // Define a string with all charakters, nr or any simbols
    $letters = 'abcdefghijklmnopqrstuvwxyz';
    $number = '0123456789';
    
    $allChars = $letters.$number;//Create a string contain required strings
    
    $randPsw = ''; // Store random letters to generate a password
    for($i = 0; $i < $length; $i++){
        $randNumber = random_int(0, strlen($allChars)-1) ;//Method to generate rand number from 0 to $allChars length-1
        $randPsw .= $allChars[$randNumber]; // Add random character in rand psw
    }
    return $randPsw;
}
?>