<?php
include "konfig.php";

$select = $conn->prepare("SELECT a.naslov, a.datum, a.tekst, u.ime, u.prezime 
FROM clanak a INNER JOIN user u ON a.autor = u.id WHERE a.id=:id");
$select->bindValue(":id", $_GET["id"]);
$select->execute();
$clanak = $select->fetch(PDO::FETCH_OBJ);

include "head.php";
?>
<p>
    <?php
    echo $clanak->naslov;
    ?>
</p>
<p>
    <?php
    echo $clanak->tekst;
    ?>
</p>
<p>
    <?php
    echo $clanak->datum;
    ?>
</p>
<p>
    <?php
    echo $clanak->ime . " " . $clanak->prezime;
    ?>
</p>
<?php
include "footer.php";
?>