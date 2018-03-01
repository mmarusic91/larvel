<?php
require_once "registration.php";
$show_form=true;
if(isset($_POST['Submit']))
{
    $validator = new FormValidator();
    $validator->addValidation("ime","req","Unesi ime.");
    $validator->addValidation("prezime","req","Unesi prezime");
    $validator->addValidation("eMail","email", "Unesi ispravan mail.");
    $validator->addValidation("eMail","req","Unesi mail.");
    if($validator->ValidateForm())
    {
        echo "<h2>Validation Success!</h2>";
        $show_form=false;
    }
    else
    {
        echo "<B>Validation Errors:</B>";
        $error_hash = $validator->GetErrors();
        foreach($error_hash as $inpname => $inp_err)
        {
          echo "<p>$inpname : $inp_err</p>\n";
        }
    }
}
if(true == $show_form)
    {
    }
?>

