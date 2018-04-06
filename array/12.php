<?php
$li = ['a', 'b', 'c', 'd', 'e', 'z'];
array_splice($li, 2, 0, 'B');
var_dump($li);

# 특정 인덱스 뒤에 추가함 
?>