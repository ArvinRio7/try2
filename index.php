<?php
SESSION_START();

// Logging out
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: signin.php?logout');
}
?>


<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Web app using Php ">
    <meta name="author" content="John Denver Balagwis">
    <meta name="author" content="Arvin Rioflorido">
    <meta name="author" content="Rochelle Motol">
    <meta name="application-name" content="Lyrixmatch">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">


    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }
    
.dropdown {
    display: inline-block;
    position: relative;
}

.dropdown-content {
    display: none;
    position: absolute;
    width: 100%;
    overflow: auto;
    box-shadow: 0px 10px 10px 0px rgba(0, 0, 0, 0.4);
}

.dropdown:hover .dropdown-content {
    display: block;
    font-size: larger;
    text-align: center;
}

.dropdown-content a {
    display: block;
    color: #000000;
    text-decoration: none;
    font-size: larger;
}

.dropdown-content a:hover {
    color: #FFFFFF;
    background-color: #00A4BD;
}
button {
    text-align: center;
    border: 1px solid darkgray;
    margin: 5px;
    font-size: large;
}
    
    </style>


    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">
</head>
<style>
    img {
    width: 3rem;
    height: 3rem;
    transform: translate(4%, 5%);
    border: 3px solid #fff;
    display: inline;
    opacity: 100;
    padding-left: 4px;
}
</style>
<body class="d-flex h-100 text-center text-white bg-dark">

    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto p-3">
            <div>
                <h3 class="float-md-start mb-0">Encryption Application</h3>
            </div>
        </header>

         <div class="options_menu">
            <hr>
            <div class="dropdown">
                <label for="cipher_selector">Cipher</label>
                <button>Choose Method<img src="icon/DA.png"></button><br>
                <div class="dropdown-content">
                    <a href="caesar.php">Caesar Cipher</a>
                    <a href="vigenereCipher.html">Vigenere Cipher</a>
                    <a href="playfaircipher.html">Playfair Cipher</a>
                    <a href="vernam.html">Vernam Cipher</a>
                    <a href="html/Hashing/hashing.html">Hashing</a>
                </div>
            </div>

            <hr>
        </div>

        <footer class="mt-auto text-white">
            <p>Created by Group 4</p>
            <p>Daniel Padilla</p>
            <p>Uzumaki Naruto</p>
            <p>Son Guko</p>
        </footer>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>