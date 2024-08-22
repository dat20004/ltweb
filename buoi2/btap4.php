<?php

function sumArray($arr) {
    return array_sum($arr);
}

function maxArray($arr) {
    return max($arr);
}

function minArray($arr) {
    return min($arr);
}

function sortArrayAscending($arr) {
    sort($arr);
    return $arr;
}

function searchInArray($arr, $value) {
    return in_array($value, $arr);
}
?>