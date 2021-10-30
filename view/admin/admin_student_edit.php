<section id="overlayEditStd" class="overlay">
    <div id="modelEditStd" class="container form-container">
        <form class="row justify-content-start bg-white form_content">
            <div class="form_title mb-3">Sửa Thông Tin Sinh Viên</div>
            <div class="mb-3 col-6">
                <label for="subjectID" class="form-label">Mã sinh viên:</label>
                <input type="text" class="form-control" id="subjectID">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectID" class="form-label">Tên sinh viên:</label>
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
            <div class="mb-3 col-6 d-block">
                <label for="subjectName" class="form-label">Lớp:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>61TH1</option>
                    <option value="1">61TH2</option>
                </select>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" id="btnSave" class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
                <button type="button" id="btnCancelEditStd" class="btn btn-danger w-auto form_btn mt-3">Hủy</button>
            </div>
        </form>
    </div>
</section>