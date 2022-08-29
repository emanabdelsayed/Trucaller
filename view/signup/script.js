function getValues() {
    var firstName    = $('#name').val();
    var mobile       = $("#Phone").val();
    var password     = $('#password').val();

    if (
      firstName.length !== 0 &&
      mobile.length !=0 &&
      password.length !=0
    ) {
      var input = {
        userName: firstName,

        userPhone: mobile,

        userPassword: password,
        action: "save_into_db",
      };
      $.ajax({
        url: "controller.php",
        type: "POST",
        dataType: "json",
        data: input,
        success: function (response) {
          $(".success").html(response.message).show();
          $(".error").hide();
        },
        error: function (response) {
          $(".error").html("Error").show();
          $(".success").hide();
        },
      });
    }

}