$(document).ready(function(){
    
    // signup new users
    $('#Ssignup').on('click', function() {
        var regNo = $('#SregNo').val();
        var clas = $('#Sclass').val();
        var pass = $('#Spass').val();
        var ques = $("#secQues").val();
        var ans = $("#secAns").val();

        if(regNo == '' || clas == '' || pass == '' || ques == '' || ans == ''){
            alert("Fill all the required fields pls!!!");
        } else {
            if(clas == "default"){
                alert("Select a valid class please...");
            } else {
                $('#Ssignup').val('Signing up....');
            
                $.ajax({
                    method: 'POST',
                    url: 'reg.php',
                    data: {
                        signUp: 1,
                        regNoPHP: regNo,
                        classPHP: clas,
                        passwordPHP: pass,
                        ques: ques,
                        ans: ans
                    },
                    success: function(response){
                        setTimeout(function(){
                            $('#Ssignup').val('Sign up');
                            $('#signUpFrm')[0].reset();
                            $('#replys_text').html(response);
                        }, 1000);

                        $('#pageWrap').hide();
                        $('#replyCont').show();

                        setTimeout(function(){
                            $('#replyCont').hide();
                            if(response.indexOf('Welcome') >= 0) {
                                window.location = 'index.php';
                            }
                        }, 3000);
                    },
                    dataType: 'text'
                });
            }
        }
    });
    
    $('#login').on('click', function() {
        var regNo = $('#regNo').val();
        var pass = $('#pass').val();
        var usertype = $('#usertype').val();
        
        if(regNo == '' || pass == '' || usertype == '') {
            alert("Fill in the fields pls !");
        } else {
            if(usertype == 'default'){
                alert('Select a valid usertype');
            } else {
                $('#login').val('Logging in....');
            
                $.ajax({
                    method: 'POST',
                    url: 'login.php',
                    data: {
                        login: 1,
                        regNoPHP: regNo,
                        passPHP: pass,
                        usertype: usertype
                    },
                    success: function(response){
                        setTimeout(function(){
                            $('#login').val('Log in');
                            $('#loginFrm')[0].reset();
                            $('#replys_text').html(response);
                        }, 1000);

                        $('#pageWrap').hide();
                        $('#replyCont').show();

                        setTimeout(function(){
                            $('#replyCont').hide();
                            if(response.indexOf('GRANTED') >= 0) {
                                window.location = 'acad.php';
                            } else {
                                window.location = 'index.php';
                            }
                        }, 3000);
                    },
                    dataType: 'text'
                });
            }
        }
    });

});