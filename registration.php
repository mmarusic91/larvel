<?php
include "konfig.php";
include "head.php";
if (isset($_POST["Submit"])) {
    /**
     * prvi dio: iz mysql baze (inset into), drugi dio (values) "izmišljeni" parametri koje u idućem redu punimo vrijednostima iz posta
     */
    $insert=$conn->prepare("insert into user (ime, prezime, email, pass) VALUES (:ime1, :prezime1, :eMail1, :userPass1)");
    $insert->bindValue(":ime1", $_POST['ime']);
    $insert->bindValue(":prezime1", $_POST['prezime']);
    $insert->bindValue(":eMail1", $_POST['eMail']);
    $insert->bindValue(":userPass1", md5($_POST['userPass']));
    $insert->execute();
    /**
     * ovo gore izvršava ubacivanje u bazu,
     * ovo dolje redirecta nakon submitanja
     */
    header("Location:index.php");
}

?>
<html>
<form method="post" name="input" action="<?php echo $_SERVER['PHP_SELF'] ?>" >
    Ime:<br/>
    <input type="text" name="ime" id="ime"/><br/>
    Prezime:<br/>
    <input type="text" name="prezime" id="prezime"/><br/>
    E-mail:<br/>
    <input type="text" name="eMail" id="eMail"/><br/>
    Password:<br/>
    <input type="password" name="userPass" id="userPass"/><br/>
    Confirm password:<br/>
    <input type="password" name="conPass" id="conPass"/><br/>
    <input type="submit" name="Submit" value="insert" />
</form>
</html>
</div>

<?php
include "footer.php";
?>
