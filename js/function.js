$(document).ready(function(){

  // login.phpのjs
  $('#loginBtn').click(function(){

    var mailAddress = $('#emailaddress').val();
    var password = $('#password').val();

    var maillength = mailAddress.length;
    var passlength = password.length;

    if(maillength < 1 || passlength < 1){
     //$('.login_showErrorDiv').show();
      $('.login_showErrorDiv').text("メールアドレスまたはパスワードを入力していません。");
      return false;
    }
    else{
      $('.login_showErrorDiv').empty();
    }

  });
  // signupのjs
  $('#signup_submitInfoBtn').click(function(){

    var uname = $('#signup_username').val();
    var uemail = $('#signup_email').val();
    var upassword = $('#signup_password').val();
    var confirmPassword = $('#signup_confirmPassword').val();
    var namelength = uname.length;
    var emaillength = uemail.length;
    var passwordlength = upassword.length;
    var username_mini_length = 4;
    var email_mini_length = 6;
    var password_mini_length = 6;

    if(namelength < username_mini_length){

      $('.signup_errorUsername').show();
      $('.signup_errorUsername').text("ユーザーネームは４文字以上です。");
      return false;
    }
    else{
      $('.signup_errorUsername').empty();
    }

    if(emaillength < email_mini_length){

      $('.signup_errorEmail').show();
      $('.signup_errorEmail').text("メールアドレスは６文字以上です。");
      return false;
    }
    else{
      $('.signup_errorEmail').empty();
    }

    if(passwordlength < password_mini_length){

      $('.signup_errorPassword').show();
      $('.signup_errorPassword').text("パスワードは６文字以上です。");
      return false;
    }
    else{
      $('.signup_errorPassword').empty();
    }


    if(upassword != confirmPassword){

      $('.signup_errorConfirmPassword').show();
      $('.signup_errorConfirmPassword').text("パスワードが違います。もう一度確認してください。");
      return false;
    }
    else{
      $('.signup_errorConfirmPassword').empty();
    }

  });
  //talkroomのjs
  $('#talkroom_submit').click(function(){

    var message = $('#talkroom_message').val();
    $('#talkroom_message').val("");
    $('.talkroom_talkarea').append('<div class="talkroom_talk">' + message +'</div>');
    $('.talkroom_talk').addClass("addPadding");
    send_message(message);
    message = "";

  });

});
//talkroomのajax
function send_message(message){
  $.ajax({
    type : "POST",
    url : "talkControler.php",
    data : {message : message},
    dataType : "text",
    success : function(response){
      //alert(message);
      //$('.talkroom_main').html(response);
    }
  });
}
