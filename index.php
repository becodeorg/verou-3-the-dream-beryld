<?php
    $result = "";
    if (isset($_POST['currencyD'])){

        $currency = $_POST['currencyD'];
    };

//   echo $currency;


if ($currency != 'euro'){
    if ($currency=="USD") {
        $result = (1 * 0.88);
        echo  "One $currency in euro : $result";
    }
}




    ?>