<?php
include '../partials-front/header.php';
include '../partials-front/header_nav.php';
include '../partials-front/teacher_menu.php';
?>

<main class="d-flex justify-content-end">
    <div class="col-10">
        <div class="container">
            <div class="row justify-content-between">

                <h1 class="text-center">Thông tin Khóa học</h1>
                <a href="#" class="btn btn-success"><i class="fas fa-user-plus"></i> Thêm thông tin Khóa học</a>

                <table class="table mt-5 border border-1 table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Mã môn học</th>
                            <th scope="col">Tên môn học</th>
                            <th scope="col">Tín chỉ</th>
                            <th scope="col">Học phí(1 tín)</th>
                            <th scope="col">Thời gian bắt đầu</th>
                            <th scope="col">Thời gian kết thúc</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            
                            include '../model/teacher_subject_information_model.php'; 
                        
                        
                        ?>
                 
                    </tbody>
                </table>


            </div>
        </div>
    </div>

</main>

<?php
include '../partials-front/footer.php';
?>