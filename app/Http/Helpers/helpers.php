<?php

function tambahKodeBarang($value, $treshold = null)
{
    return sprintf("%0". $treshold . "s", $value);
}

function format_uang($angka){
    return number_format($angka, 0, ',', '.');
}