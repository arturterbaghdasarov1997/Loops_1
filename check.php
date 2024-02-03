<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
       
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operator=$_POST['operator'];

        switch($operator){
            case "+":
                $result = $num1 + $num2;
                echo ($result);
                break;
            case "-":
                $result = $num1 - $num2;
                echo ($result);
                break;
            case "*":
                $result = $num1 * $num2;
                echo ($result);
                break;
            case "/":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                    echo ($result);
                } else {
                    $result = "Division by zero is not allowed";
                    echo ("Division by zero is not allowed");
                }
                break;
            default:
                $result = "Invalid operator";
                echo ("Invalid operator");
        }
    }
