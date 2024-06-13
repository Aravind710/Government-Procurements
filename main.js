function matchpassword(){
    var password=document.getElementById('password').value;
    var confirmpassword=document.getElementById('cpassword').value;
    if (password==confirmpassword){
      true;
    }
    else{
      alert("Password doesn't match")
      return false;
      
    }}