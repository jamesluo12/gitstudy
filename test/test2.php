<?php
    $abc = mysqli_connect("php-mysql-5-7", "root", "root", "luo");
    if (!$abc) {
        die('Could not connect' . mysqli_connect_error());
    }
    $sql = "insert into user values(1, 'zhangsan', 18)";
    mysqli_query($abc, $sql);
    mysqli_close($abc);
?>