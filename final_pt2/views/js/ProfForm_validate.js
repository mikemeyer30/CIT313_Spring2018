$(function (){
  $("#editProfile_form").validate({
    rules: {
      first_name: {
        required: true,
        minlength: 2,
        maxlength: 18

      },
      last_name: {
        required: true,
        minlength: 2
      },
      password: {
        minlength: 5,
        maxlength: 18
      },
      confirm: {
        equalTo: "#password"
      },
      email: {
        email: true
      }
    },
    messages: {
      first_name :{
        minlength: "Your name is too short.",
        maxlength: "Your name must be between 2 and 18 characters.",
        required: "You must enter your first name."
      },
      last_name: {
        minlength: "Your name is too short.",
        maxlength: "Your name must be between 2 and 18 characters.",
        required: "You must enter your last name."
      },
      password: {
        minlength: "Your password must be between 5 and 18 characters long.",
        maxlength: "Your password must be between 5 and 18 characters long."
      },
      confirm: {
        equalTo: "Your passwords must match."
      },
      email:{
        email: "Your email is not valid."
      }
    }
  });
});
