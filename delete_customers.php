<?php
    $id_incidencia=$_REQUEST["id_incidencia"];
    include "includes/bootstrap.php";
    include "includes/connexio.php";
    $sql="DELETE FROM customers WHERE id_customer=".$id_customer;
    obrirConnexioBD();
    if ($conn->query($sql) === TRUE) {
        tancarConnexioBD();
        header("Location: list_customers.php");
    } else { ?>
        <!DOCTYPE html>
        <html lang="en">
            <?php bsHead("Esborrat"); ?>
            <body>
                <div class="alert alert-danger" role="alert">
                    <h3>Error esborrant incidència</h3>
                    <p><?=$conn->error?></p>
                </div>
            </body>
        </html>
<?php
    }
    tancarConnexioBD();
?>
