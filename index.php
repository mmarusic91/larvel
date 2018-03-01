<?php
include "konfig.php";

$select = $conn->prepare("SELECT a.id, a.naslov, a.datum, u.ime, u.prezime FROM clanak a INNER JOIN user u ON a.autor = u.id ORDER BY datum DESC");
$select->execute();
$clanci = $select->fetchAll(PDO::FETCH_OBJ);

include "head.php";

?>

<table>
    <thead>
    <th>Naslov</th>
    <th>Autor</th>
    <th>Datum</th>
    </thead>
    <tbody>
    <?php
    foreach ($clanci as $clanak):
        ?>
        <tr>
            <td>
                <a href="detalji.php?id=<?php echo $clanak->id;?>">
                    <?php
                    echo $clanak->naslov;
                    ?>
                </a>

            </td>
            <td>
                <?php
                echo $clanak->ime . " " . $clanak->prezime;
                ?>
            </td>
            <td>
                <?php
                echo $clanak->datum;
                ?>
            </td>
        </tr>
    <?php
    endforeach;
    ?>


    </tbody>

</table>
<?php
    include "footer.php";
?>