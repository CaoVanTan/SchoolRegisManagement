<?php
     // Quy trình 4 bước
    // Bước 01: Đã tạo sẵn, gọi lại thôi
    include_once '../../config/config.php';
     //Bước 02: Thực hiện TRUY VẤN
     $sql = "SELECT su.subject_id,su.subject_name,su.credits,o.office_name FROM subject su,office o where o.office_id=su.office_id";
     $result = mysqli_query($con,$sql); //Lưu kết quả trả về vào result
     //Bước 03: Phân tích và xử lý kết quả
     if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
             echo '<tr>';
             echo '<th scope="row">'.$row['subject_id'].'</th>';
             echo '<td>'.$row['subject_name'].'</td>';
             echo '<td>'.$row['credits'].'</td>';
             echo '<td>'.$row['office_name'].'</td>';



             echo '<td><a href="./teacher_edit_subject.php?id='.$row['subject_id'].'"><i class="text-dark ms-2 fas fa-edit"></i></a></td>';
             echo '<td><a href="../../process/teacher/teacher_delete_subject.php?id='.$row['subject_id'].'"><i class="text-dark ms-2 fas fa-trash-alt"></i></a></td>';
             echo '</tr>';
         }
     }
?>



