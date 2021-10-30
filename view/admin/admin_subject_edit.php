<section id="overlayEditSubject" class="overlay">
    <div id="modelEditSubject" class="container form-container">
        <form class="row justify-content-end bg-white form_content">
            <div class="form_title mb-3">Sửa Thông Tin Môn Học</div>
            <div class="mb-3 col-6">
                <label for="subjectID" class="form-label">Mã môn học:</label>
                <input type="text" class="form-control" id="subjectID">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectName" class="form-label">Môn học:</label>
                <input type="text" class="form-control" id="subjectName">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectCredits" class="form-label">Số tín chỉ:</label>
                <input type="number" class="form-control" id="subjectCredits">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectTuition" class="form-label">Học phí:</label>
                <input type="text" class="form-control" id="subjectTuition">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectStart" class="form-label">Ngày bắt đầu:</label>
                <input type="date" class="form-control text-uppercase" id="subjectStart">
            </div>
            <div class="mb-3 col-6">
                <label for="subjectEnd" class="form-label">Ngày kết thúc:</label>
                <input type="date" class="form-control text-uppercase" id="subjectEnd">
            </div>
            <button type="submit" id="btnSave" class="btn btn-primary w-auto form_btn mt-3">Lưu lại</button>
            <button type="button" id="btnCancelEdit" class="btn btn-danger w-auto form_btn mt-3">Hủy</button>
        </form>
    </div>
</section>