const signupButton=document.getElementById('signUpButton');
const signInButton=document.getElementById('signInbutton');;
const signInForm=document.getElementById('signIn');
const signUpForm=document.getElementById('signUp');

signupButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
})

signInButton.addEventListener('click', function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
})