<?php
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
       
        $num1=$_POST['num1'];
        $num2=$_POST['num2'];
        $operator=$_POST['operator'];

        switch($operator){
            case "+":
                $result = $num1 + $num2;
                break;
            case "-":
                $result = $num1 - $num2;
                break;
            case "*":
                $result = $num1 * $num2;
                break;
            case "/":
                if ($num2 != 0) {
                    $result = $num1 / $num2;
                } else {
                    $result = "Division by zero is not allowed";
                }
                break;
            default:
                $result = "Invalid operator";
        }
    }