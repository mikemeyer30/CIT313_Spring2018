$(function (){
  $("#postForm").validate({
    rules: {
      title: {
        required: true,
        minlength: 2,
        maxlength: 18
      },
      category: {
        required: true,
        minlength: 2
      },
      content: {
        required: true,
        minlength: 5,
        maxlength: 300
      }
    },
    messages: {
      title :{
        minlength: "Your title is too short.",
        maxlength: "Your title must be between 2 and 18 characters.",
        required: "You must enter a title."
      },
      category: {
        required: "You must choose a category."
      },
      content: {
        required: "You must enter content",
        minlength: "Your comment is too short.",
        maxlength: "Your comment is over 300 characters."
      }
    }
  });
});
