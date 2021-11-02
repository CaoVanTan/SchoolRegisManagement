$(document).ready(function () {
  // Add subject
  $("#btnAddSubject").click(function () {
    $("#modelAddSubject").show();
    $("#overlayAddSubject").show();
  });

  $("#btnCancelAddSubject").click(function () {
    $("#overlayAddSubject").hide();
    $("#modelAddSubject").hide();
  });


  // Add teacher
  $("#btnAddTeacher").click(function () {
    $("#modelAddTeacher").show();
    $("#overlayAddTeacher").show();
  });

  $("#btnCancelAddTeacher").click(function () {
    $("#overlayAddTeacher").hide();
    $("#modelAddTeacher").hide();
  });


  // Add student
  $("#btnAddStudent").click(function () {
    $("#modelAddStd").show();
    $("#overlayAddStd").show();
  });

  $("#btnCancelAddStd").click(function () {
    $("#overlayAddStd").hide();
    $("#modelAddStd").hide();
  });


  // Process Login
  $('#btnLogin').click(function () {
    var userName = $('#inputUserName').val();
    var password = $('#inputPassword').val();

    if(userName == '' || password == '') {
      alert('Bạn phải nhập tài khoản và mật khẩu!');
    }
  });
});