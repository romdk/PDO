<?php

    function affQtt(){
        $qtt = 0;
        foreach($_SESSION['products'] as $index => $product){
            $qtt += $product['qtt'];
        }
        return $qtt;
    }
?>