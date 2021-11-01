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
});