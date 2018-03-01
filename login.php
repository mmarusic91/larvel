<?php
include "konfig.php";
include "head.php";
if (isset($_SESSION['prijavljen'])) {
    header("Location:index.php");
}

if (isset($_POST["Submit"])) {
    /**
     * 1 red: provjeravam poklapaju li se podaci iz forme s podacima iz mysql baze,
     * 2 i 3 red: parametrima pridružujemo vrijednosti
     * 4 izvršavamo
     * 5 u varijablu user smo spremili gore navedeno
     *   */
    $select=$conn->prepare("select * from user WHERE email=:eMail1 AND pass=:userPass1");
    $select->bindValue(":eMail1", $_POST['eMail']);
    $select->bindValue(":userPass1", md5($_POST['userPass']));
    $select->execute();
    $user=$select->fetch(PDO::FETCH_OBJ);
    if ($user!=null){
        session_start();
        $_SESSION['prijavljen']=$user;
        header("Location:index.php");
    }
    else {
        echo "Neispravni podaci!";
    }
}

?>
<html>
<form method="post" name="input" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
    E-mail:<br/>
    <input type="text" name="eMail" id="eMail"/><br/>
    Password:<br/>
    <input type="text" name="userPass" id="userPass"/><br/>
    <input type="submit" name="Submit" value="insert" />
</form>

<?php
include "footer.php";
?>