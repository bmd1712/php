<?php
    $name = 'Bui Minh Duc';
    $school = 'Ngo Quyen';
    echo strrev($name); // đảo ngược ký tự nhằm kiểm tra xem có đối xứng hay không
    echo strtolower($name); // in thường các ký tự
    echo strtoupper($name); // in hoa các ký tự
    echo str_replace('Ngo', 'Bap', $school); // tìm kiếm và thay thế
    if(str_starts_with(strtolower($name), 'bui' )){ // kiểm tra từ đầu tiên trong chuỗi
        echo 'họ Bùi';
    }
    if(str_ends_with(strtolower($name), 'duc' )){ // kiểm tra từ đầu tiên trong chuỗi
        echo 'tên là Đức';
    }
    echo htmlentities("$name");
    printf('so tien la %d', 100);
?>