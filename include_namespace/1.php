<?php
include 'abc.php';
echo welcome();

#외부 파일 로드 방법 4가지
/*
1. include
2. include_once
3. require
4. require_once

include 와 require 차이는 파일 로드 시도 했을 때 에러에 대해
include 는 워닝을
require 은 fatal error 를 일으킨다.

즉 require은 include 보다 더 엄격한 로드방법이다.
*/

# _once 는 파일을 로드할때 단 한번만 로드하면 된다는 의미.
?>