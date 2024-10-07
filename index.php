<?php
require_once __DIR__."/functions.php"
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
            <?php if(isset($_GET["pswLen"]) && !empty($_GET["pswLen"])){?>
            <h5>Your generated Password is: <strong>"<?= generatePsw($_GET["pswLen"])?></strong>"</h5>
            <?php }else{?>
            <h5>No valid parameters input</h5>
            <?php }?>
        </section>
        <!-- User inputs form  -->
        <form action="" method="get" class="bg-light rounded-2 p-4 my-4">
            <div class="p-4">
                <label for="pswLen" class="form-label">Password length: </label>
                <input type="number" name="pswLen" id="pswLen" class="col-1">
            </div>
            <div class="p-4">
                <button type="submit" class="btn btn-primary">Send</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>

    </main>
</body>

</html>