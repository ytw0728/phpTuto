<?php
$grades = array('egoing'=>10, 'k8805'=>6, 'sorialgi'=>80);
foreach($grades as $key => $value){
    echo "key: {$key} value:{$value}<br />";
}

#  foreach 문은 $grades 위치의 배열에 담긴 요소의 숫자(갯수)만큼 반복문을 실행한다.

# 반복문이 실행될때 마다 요소의 키값을 $key 자리의 변수에 요소의 값을 $value 자리의 변수에 할당해서 반복문 안에 접근할 수 있다.
?>