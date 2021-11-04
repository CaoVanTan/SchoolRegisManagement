<?php
include '../../partials-front/header.php';
include '../../partials-front/header_nav.php';
include '../../partials-front/teacher_menu.php';


include '../../process/teacher/teacher_information.php';
?>

<main class="d-flex justify-content-end">
    <div class="col-10">
        <div class="container">
            <div class="row justify-content-between">

                <h1 class="text-center">Thông tin Giảng viên</h1>


                
                <div class="row ">
                    <div class="col-12">
                        <div class="ms-2 mb-3 row">
                            <label class="col-sm-2 ">Mã giảng viên:</label>
                            <div class="col-sm-8">
                                <input type="text" readonly value="<?php echo $row['teacher_id'] ?> " class="form-control"
                                    >
                            </div>
                        </div>
                        <div class="ms-2 mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Tên giảng viên: </label>
                            <div class="col-sm-8">
                                <input type="text" readonly value="<?php echo $row['teacher_name'] ?> "
                                    class="form-control" >
                            </div>
                        </div>
                        <div class="ms-2 mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Giới tính: </label>
                            <div class="col-sm-8">
                                <input type="text" readonly value="<?php 
                                $gender;
                                if($row['teacher_gender']){
                                    $gender='Nam';
                                }else{
                                    $gender='Nữ';
                                }
                                echo $gender ?> "
                                    class="form-control" >
                            </div>
                        </div>
                        <div class="ms-2 mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Ngày sinh: </label>
                            <div class="col-sm-8">
                                <input type="text" readonly value="<?php echo $row['teacher_birthday'] ?> "
                                    class="form-control" >
                            </div>
                        </div>
                        <div class="ms-2 mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Địa chỉ: </label>
                            <div class="col-sm-8">
                                <input type="text" readonly value="<?php echo $row['teacher_address'] ?> "
                                    class="form-control" >
                            </div>
                        </div>
                        <div class="ms-2 mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Số điện thoại: </label>
                            <div class="col-sm-8">
                                <input type="text" readonly value="<?php echo $row['teacher_phone'] ?> "
                                    class="form-control" >
                            </div>
                        </div>
                        <div class="ms-2 mb-3 row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email: </label>
                            <div class="col-sm-8">
                                <input type="text" readonly value="<?php echo $row['teacher_email'] ?> "
                                    class="form-control" >
                            </div>
                        </div>


                    </div>
                </div>
            </div>

</main>

<?php
include '../../partials-front/footer.php';
?>