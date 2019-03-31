<?php 

$arg = $argv[1];
$str = 'Привет мир! Я лучший текст из всех, что ты когда-либо видел!';

$search = mb_stripos($str, $arg);
$count_result = mb_strlen(mb_substr($str, $search)); 

if ($search === false) {
    echo "нет слова";
    
} else {
    $result_right = mb_substr($str, $search + mb_strlen($arg), 10);
    $result_left = mb_substr($str, (-1 * $count_result - 10),  (-1 * $count_result));

    $left_count = mb_strlen($result_left);
    $right_count = mb_strlen($result_right);

    if ($left_count < 10) {
        $result_left .= mb_substr($str, (-1 * 10 - $left_count));
    }

    if ($right_count < 10) {
        $result_right .= mb_substr($str, 0, (10 - $right_count));
    }

    echo $result_left . ',' . "$result_right \n";
}

?>