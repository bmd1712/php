<?php
    $num = range(0,20);
    $name = ['Hoang', 'Duc', 'Dai', 'Tu'];
    array_pop($name); // xóa phần tử cuối mảng
    array_push($name,'Nghia'); // thêm 1 phần tử vào cuối mảng
    array_unshift($name,'Hung'); // thêm 1 phần tử vào đầu mảng
    array_shift($name); // xóa 1 phần tử ở đầu mảng
    //$mang = array_keys($name); // lấy ra keys của mảng
    //$mang = array_values($name); // lấy ra values của mảng
    print_r($num);
    echo '<br>';
    print_r($name);

?>