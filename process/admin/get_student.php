<?php
    include_once '../../config/config.php';

    $sql = 'SELECT *, c.class_id FROM student std, class c WHERE c.class_id = std.class_id';
    $result = mysqli_query($con, $sql);
?>
