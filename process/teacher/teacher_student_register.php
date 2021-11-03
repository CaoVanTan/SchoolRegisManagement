<?php 
     // Quy trình 4 bước
    // Bước 01: Đã tạo sẵn, gọi lại thôi
    include '../../config/config.php';
     //Bước 02: Thực hiện TRUY VẤN
     $sql = "SELECT s.*,c.*,su.*,l.* FROM student s, class c,subject su,list_register l  where l.std_id=s.std_id and l.subject_id=su.subject_id and c.class_id=s.class_id"  ;
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
             
             echo '<td>'.$row['std_email'].'</td>';
            
             echo '<td>'.$row['subject_name'].'</td>';
             echo '<td>'.$row['class_name'].'</td>';

             echo '</tr>';
         }
     } 
?>