
$(window).on('load', function () {
    
    $('#signUpForm').hide();
    $('#logInForm').show();
    $('.title').hide();
    $('#invalidLogin').hide();
    $('.logInContainer').hide();
    $('.cover').addClass("fade-out");
    setTimeout(function() {$('.cover').hide();}, 800);

    $('.logoAtLogIn').addClass("rotate-scale-up");

    setTimeout(function() {
        $('.logoAtLogIn').removeClass("rotate-scale-up");
        $('.logoAtLogIn').addClass("puff-out-center");
    }, 1000);
    setTimeout(function() {
        $('.logoAtLogIn').hide();
    }, 2000);
    setTimeout(function() {
        $('.logInContainer').show();
        $('.logInContainer').css("opacity", 0);
        $('.title').show();
        $('.title').addClass("typewriter");
        
        
    }, 2000);
    setTimeout(function() {
        $('.logInContainer').show();
        $('.logInContainer').addClass("fade-in");
    }, 4800);
  }) 

function createdAccount()
{
    $('#invalidLogin').html("account created successfully.");
    $('#invalidLogin').show();
}


function incorrectLogIn()
{
    $('#invalidLogin').html("invalid login, try again.");
    $('#invalidLogin').show();
}

function incorrectSignUp()
{
    $('#invalidLogin').html("invalid username or password, try again.");
    $('#invalidLogin').show();
}

function userChangeMode()
{
    if ($('#signUpForm').is(":visible"))
    {
        $("#mode").html("sign in.");
        $("#signUpForm").hide();
        $("#logInForm").show();
    }
    else //IF LOG IN FORM IS VISIBLE
    {
        $("#mode").html("log in.");
        $("#signUpForm").show();
        $("#logInForm").hide();
    }
    

}
