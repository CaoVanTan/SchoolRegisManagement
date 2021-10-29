<section id="overlayEditTeacher" class="overlay">
    <div id="modelEditTeacher" class="container form-container">
        <form class="row justify-content-end bg-white form_content">
            <div class="form_title mb-3">Sửa Thông Tin Giảng Viên</div>
            <div class="mb-3 col-6">
                <label for="subjectID" class="form-label">Giảng viên:</label>
                <input type="text" class="form-control" id="subjectID">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectName" class="form-label">Giới tính:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Nam</option>
                    <option value="1">Nữ</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="subjectCredits" class="form-label">Ngày sinh:</label>
                <input type="date" class="form-control text-uppercase" id="subjectCredits">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectTuition" class="form-label">Địa chỉ:</label>
                <input type="text" class="form-control" id="subjectTuition">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectStart" class="form-label">Số điện thoại:</label>
                <input type="text" class="form-control" id="subjectStart">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectEnd" class="form-label">Email:</label>
                <input type="email" class="form-control" id="subjectEnd">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectName" class="form-label">Khoa:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Công nghệ thông tin</option>
                    <option value="1">Kinh tế</option>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="subjectName" class="form-label">Môn giảng dạy:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Công nghệ Web</option>
                    <option value="1">Xác xuất thống kê</option>
                </select>
            </div>
            <button type="submit" id="btnSave" class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
            <button type="button" id="btnCancelEditTeacher" class="btn btn-danger w-auto form_btn mt-3">Hủy</button>
        </form>
    </div>
</section>