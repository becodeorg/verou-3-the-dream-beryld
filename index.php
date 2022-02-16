<?php

    $currencies = [
        "USD" => 0.88,
        "HKD" => 0.11,
        "CAD" => 0.69,
        "AUD" => 0.63,
        "BRL" => 0.17,
        "CNY" => 0.14,
        "CHF" => 0.95,
        ]; 

    $result = "";
    if (isset($_POST['currencyD']) && isset($_POST['Amount'])){

        $currency = $_POST['currencyD'];
        $amount = $_POST['Amount'];
    };
//    var_dump($currencies);


    // for($i = 0; $i <= count($currencies); $i++){

    // }




if ($currency != 'euro'){
    if ($currency=="USD") {
        $result = ($amount * 0.88);
        echo  "$amount $currency in euro = $result";
    }
    if ($currency == "HKD"){
        $result = ($amount * 0.11);
        echo "$amount $currency in euro = $result";
    }
    if ($currency == "BRL"){
        $result = ($amount *0.17);
        echo "$amount $currency in euro = $result";
    }
    if($currency =="CNY"){
        $result = ($amount * 0.14);
        echo "$amount $currency in euro = $result";
    }
    if($currency == "CHF"){
        $result = ($amount *0.95);
        echo "$amount $currency in euro = $result";
    }
}
//     else if ($currency == euro{
//         echo "$currency is not in our Database, please try another one";}
// }





    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="destination">Enter your currency : </label>
        <input type="text" name="currencyD" id="destination">
        <br>
        <label for="amount"> Enter the amount you want to change</label>
        <input type="text" name="Amount" id="Amount">
        <input type="submit">
    </form>






</body>
</html>