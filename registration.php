<?php
include "konfig.php";
include "head.php";
?>
<html>
<form method="post" name="input" action="insert.php" >
    Ime:<br/>
    <input type="text" name="ime" id="ime"/><br/>
    Prezime:<br/>
    <input type="text" name="prezime" id="prezime"/><br/>
    E-mail:<br/>
    <input type="text" name="eMail" id="eMail"/><br/>
    Password:<br/>
    <input type="text" name="userPass" id="userPass"/><br/>
    Confirm password:<br/>
    <input type="text" name="conPass" id="conPass"/><br/>
    <input type="submit" name="Submit" value="insert" />
</form>
</html>
</div>

<?php
include "footer.php";
?>
