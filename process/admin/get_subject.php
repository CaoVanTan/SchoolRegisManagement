<?php
    include_once '../../config/config.php';

    $sql = 'SELECT s.*, o.office_name FROM subject s, office o WHERE s.office_id = o.office_id';
    $result = mysqli_query($con, $sql);
?>
