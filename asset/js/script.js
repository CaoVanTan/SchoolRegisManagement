$(document).ready(function () {
  // Add subject
  $("#btnAddSubject").click(function () {
    $("#modelAddSubject").show();
    $("#overlayAddSubject").show();
  });

  $("#btnCancelAdd").click(function () {
    $("#overlayAddSubject").hide();
    $("#modelAddSubject").hide();
  });

  // Edit subject
  $("#btnEditSubject").click(function () {
    $("#modelEditSubject").show();
    $("#overlayEditSubject").show();
  });

  $("#btnCancelEdit").click(function () {
    $("#overlayEditSubject").hide();
    $("#modelEditSubject").hide();
  });

  // Delete subject
  $("#btnDelSubject").click(function () {
    $("#modelDelSubject").show();
    $("#overlayDelSubject").show();
  });

  $("#btnCancelDel").click(function () {
    $("#overlayDelSubject").hide();
    $("#modelDelSubject").hide();
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

  // Edit teacher
  $("#btnEditTeacher").click(function () {
    $("#modelEditTeacher").show();
    $("#overlayEditTeacher").show();
  });

  $("#btnCancelEditTeacher").click(function () {
    $("#overlayEditTeacher").hide();
    $("#modelEditTeacher").hide();
  });

  // Delete teacher
  $("#btnDelTeacher").click(function () {
    $("#modelDelTeacher").show();
    $("#overlayDelTeacher").show();
  });

  $("#btnCancelDelTeacher").click(function () {
    $("#overlayDelTeacher").hide();
    $("#modelDelTeacher").hide();
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

  // Edit student
  $("#btnEditStd").click(function () {
    $("#modelEditStd").show();
    $("#overlayEditStd").show();
  });

  $("#btnCancelEditStd").click(function () {
    $("#overlayEditStd").hide();
    $("#modelEditStd").hide();
  });

  // Delete student
  $("#btnDelStd").click(function () {
    $("#modelDelStd").show();
    $("#overlayDelStd").show();
  });

  $("#btnCancelDelStd").click(function () {
    $("#overlayDelStd").hide();
    $("#modelDelStd").hide();
  });
});
