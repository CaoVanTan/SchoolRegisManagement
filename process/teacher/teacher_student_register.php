<?php 
     // Quy trình 4 bước
    // Bước 01: Đã tạo sẵn, gọi lại thôi
    include '../../config/config.php';
     //Bước 02: Thực hiện TRUY VẤN
     $sql = "SELECT s.std_id,s.std_name,s.std_gender,s.std_birthday,s.std_phone,s.std_email,s.std_address,s.std_pass,c.class_name,su.subject_name FROM student s, class c, subject su WHERE s.class_id=c.class_id and su.office_id=c.office_id";
     $result = mysqli_query($con,$sql); //Lưu kết quả trả về vào result
     //Bước 03: Phân tích và xử lý kết quả
     $gender;
     if(mysqli_num_rows($result)>0){
         while($row=mysqli_fetch_assoc($result)){
             echo '<tr>';
             echo '<th scope="row">'.$row['std_id'].'</th>';
             echo '<td>'.$row['std_name'].'</td>';
             if($row['std_gender']){
                $gender='Nam';
            }else{
                $gender='Nữ';
            }
             echo '<td>'.$gender.'</td>';
             echo '<td>'.$row['std_birthday'].'</td>';
             echo '<td>'.$row['std_phone'].'</td>';
             echo '<td>'.$row['std_email'].'</td>';
             echo '<td>'.$row['std_address'].'</td>';
             echo '<td>'.$row['subject_name'].'</td>';
             echo '<td>'.$row['class_name'].'</td>';

             echo '</tr>';
         }
     } 
?>