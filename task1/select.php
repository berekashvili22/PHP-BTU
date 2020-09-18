<?php
    require_once("db.php");
    $sql="SELECT * FROM `producet` WHERE 1";
    $result=$conn->query($sql);
    while ($row=$result->fetch_assoc()) {
        echo $row["product_name"];
    }

?>