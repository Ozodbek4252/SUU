<?php
$k = 0;
foreach(session()->get('cart') as $key=>$value){
    $k++;
}
?>{{ $k }}
