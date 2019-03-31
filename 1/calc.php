<?php 

foreach($argv as $key => $item) {
    if (mb_stripos($item, '.')) {
        unset($item);
    } else {
        $str[$key] = filter_var($item, FILTER_SANITIZE_NUMBER_INT);
    }
}

$exp = trim(implode(' ', $str), '+- ');
$result = eval("return $exp;");

echo $exp . ' = ' . "$result \n";

?>