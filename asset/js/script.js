$(document).ready(function () {

  // Model add
  $(".btnAdd").click(function () {
    $(".overlay").show();
    $(".model").show();
  });

  $(".btnCancelAdd").click(function () {
    $(".overlay").hide();
    $(".model").hide();
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