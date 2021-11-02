<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/teacher_menu.php';
?>

<main class="d-flex justify-content-end">
    <div class="col-10">
        <div class="container">
            <div class="row justify-content-between">

                <h1 class="text-center">Thông tin Khóa học</h1>
                <a href="teacher_add_subject.php" class="btn btn-success "><i class="fas fa-user-plus"></i> Thêm thông tin Khóa học</a>

                <table class="table mt-5 border border-1 table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Mã môn học</th>
                            <th scope="col">Tên môn học</th>
                            <th scope="col">Khoa</th>
                            <th scope="col">Sửa</th>
                            <th scope="col">Xóa</th>
                            

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            
                            include '../../process/teacher/teacher_subject_information_model.php'; 
                        
                        
                        ?>
                 
                    </tbody>
                </table>


            </div>
        </div>
    </div>

</main>

<?php
include '../../partials-front/footer.php';
?>