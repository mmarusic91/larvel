<?php
include "konfig.php";
include "head.php";
?>
<style type="text/css">

    body {font-family:Arial, Sans-Serif;}

    #container {width:300px; margin:0 auto;}

    /* Nicely lines up the labels. */
    form label {display:inline-block; width:140px;}

    /* You could add a class to all the input boxes instead, if you like. That would be safer, and more backwards-compatible */
    form input[type="text"],
    form input[type="password"] {width:160px;}

    form .line {clear:both;}
    form .line.submit {text-align:center;}

</style>
</head>
<body>
<div id="container">
    <form>
        <h1>Registriraj se!</h1>
        <div class="line"><label for="ime">Ime *: </label><input type="text" id="ime" /></div>
        <div class="line"><label for="prezime">Prezime *: </label><input type="text" id="prezime" /></div>
        <div class="line"><label for="email">E-mail *: </label><input type="text" id="email" /></div>
        <div class="line"><label for="pass">Lozinka *: </label><input type="password" id="pass" /></div>
        <div class="line"><label for="conPass">Potvrdi lozinku *: </label><input type="password" id="conPass" /></div>
        <div class="line submit"><input type="submit" value="Submit" /></div>
    </form>
</div>
<?php
include "footer.php";
?>
