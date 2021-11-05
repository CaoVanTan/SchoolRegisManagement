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
  $("#btnLogin").click(function () {
    var userName = $("#inputUserName").val();
    var password = $("#inputPassword").val();

    if (userName == "" || password == "") {
      alert("Bạn phải nhập tài khoản và mật khẩu!");
    }
  });

  //
  var today = new Date();
  var date = today.getFullYear() + "-" + (today.getMonth() + 1) + "-" + today.getDate();

  var get_date_start =  $(".date_start").val();
  var get_date_end =  $(".date_end").val();

  var date_str1 = get_date_start.split("-", 10);
  if(date_str1[0] <= 10) {
    var day_start = date_str1[0].split("", 2)[1];
  } else {
    var day_start = date_str1[0];
  }

  var date_str2 = get_date_end.split("-", 10);
  if(date_str2[0] <= 10) {
    var day_end = date_str2[0].split("", 2)[1];
  } else {
    var day_end = date_str2[0];
  }

  var date_start = date_str1[2] + '-' + date_str1[1] + '-' + day_start;
  var date_end = date_str2[2] + '-' + date_str2[1] + '-' + day_end;
  console.log(date);
  console.log(date_start);
  console.log(date_end);

  if (date >= date_end || date <= date_start) {
    $(".getClass").each(function (index, element) {
      if ($(element).hasClass('register')) {
        $(element).removeClass('register').addClass('disabled');
      }
    });
    // else {
    //   $("#td_id").attr('register', 'disabled');
    }

});
