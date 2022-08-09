const form = document.getElementById('form');
const Username = document.getElementById('Username');
const Email = document.getElementById('Email');
const Password = document.getElementById('Password');
const Cpassword = document.getElementById('Cpassword');

// add event
form.addEventListener('submit',(event)=>{
    event.preventDefault();
    Validate();
})
// more Email validate
const isEmail = (Emailval) =>{
    var atSymbol = Emailval.indexof("@");
    if (atSymbol<1) return false;
    var dot = emailVal.lastIndexof('.')
    if (dot <= atSymbol +2) return false;
    if (dot=== Emailval.length - 1) returns false;// this line is use to check the dot is not put at last
    return true
    


}
// Define the validate Function
const validate = () => {
      const UsernameVal = Username.value.trim();
    const EmailVal = Email.value.trim();
    const PasswordVal = Password.value.trim();
    const CpasswordVal = password.value.trim();
}
// validate username
if(Username===""){Username,'Username cannot be blank'
    setErrorMsg(Username,'.value.trim();' )
}else if (Username,length<=2){
    setErrorMsg(Username, 'Username must contain atlest 3 characters');

}else {
    setsuccessMsg(Username);
 }

//  validate email
if(Email===""){Email,'Email cannot be blank'
    setErrorMsg(Email,'.value.trim();' )
}else if (!isEmail(Emailval)){
    setErrorMsg(Email, 'Not a valid Email');

}else {
    setsuccessMsg(Email);
 }
 function setErrorMsg(input,errormsgs)