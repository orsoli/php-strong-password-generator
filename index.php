<?php
// Import files
require_once __DIR__."/functions.php";

if(isset($_GET["pswLen"]) && is_numeric($_GET["pswLen"])){
    session_start(); // Start session
    $_SESSION['password'] = generatePsw($_GET["pswLen"],$_GET["repeat"],$_GET["checkLetters"],$_GET["checkNumbers"],$_GET["checkSymbols"]);
}else{

    var_dump("Invalid Inputs"); 
}
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <!-- Meta data  -->
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='author' content='Orsol Filaj'>
    <meta name='description' content='PHP Strong Password Generator'>
    <!-- Title  -->
    <title>PHP Strong Password Generator</title>
    <!-- Link Bootstrap Css -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css'>
    <!-- Link Bootstrap icons  -->
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css'>
    <!-- Link font Awesome  -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css'
        integrity='sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=='
        crossorigin='anonymous' referrerpolicy='no-referrer'>

    <!-- Style  CSS -->
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- Container  -->
    <main class='container mx-auto py-4'>
        <!-- Title  -->
        <div class="title text-center my-3">
            <h1 class="text-light">Strong Password Generator</h1>
        </div>
        <!-- Receive pssw section  -->
        <section class="bg-info rounded-2 p-4">
            <?php if(isset($_SESSION) && !empty($_SESSION)){ ?>
            <h5>Your generated Password is: <strong><i><?= $_SESSION['password'] ?></i></strong></h5>
            <?php }else{?>
            <h5>No valid parameters input</h5>
            <?php }?>
        </section>
        <!-- User inputs form  -->
        <form action="" method="get" class="bg-light rounded-2 p-4 my-4">
            <div class="d-flex justify-content-between p-4">
                <div>
                    <p>Password length:</p>
                    <p>Allow repetition of one or more characters:</p>
                </div>
                <div>
                    <!-- Password length  -->
                    <div class="form">
                        <input type="number" name="pswLen" id="pswLen" class="w-50 mb-3">
                    </div>
                    <!-- Radios form  -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="repeat" value="yes" id="repeat">
                        <label class="form-check-label" for="repeat">
                            Yes
                        </label>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="radio" name="repeat" value="no" id="noRepeat" checked>
                        <label class="form-check-label" for="noRepeat">
                            No
                        </label>
                    </div>
                    <!-- Check form  -->
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkLetters" id="checkLetters">
                        <label class="form-check-label" for="checkLetters">
                            Letters
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkNumbers" id="checkNumbers" checked>
                        <label class="form-check-label" for="checkNumbers">
                            Numbers
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="checkSymbols" id="checkSymbols">
                        <label class="form-check-label" for="checkSymbols">
                            Symbols
                        </label>
                    </div>
                </div>
            </div>

            <div class="p-4">
                <button type="submit" class="btn btn-primary">Send</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>

    </main>
</body>

</html>