<?php
    include_once '../../config/config.php';

    $sql = 'SELECT t.*, o.office_name, s.subject_name FROM teacher t, office o, subject s WHERE t.office_id = o.office_id AND t.subject_id = s.subject_id';
    $result = mysqli_query($con, $sql);
?>
