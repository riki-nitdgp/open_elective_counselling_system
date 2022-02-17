function validateEmail() {
    var x = document.forms["regt"]["email1"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        alert("Not a valid e-mail address");
		return false;
		regt.email1.focus();
        
    }
}
function validate(){
flag = true
if(regt.name.value==""){
alert("Pls Enter Your Name")
flag=false
regt.name.focus()
}
else if(!(isNaN(regt.name.value)))
		{
		alert("only words allowed")
		flag=false
		regt.name.focus()
		
		}
else if(regt.regn.value==""){
alert("Pls Enter Your Registration No. ")
flag=false
regt.regn.focus()
}
else if(isNaN(regt.regn.value))
			{
			alert("only number allowed")
			flag=false;
			regt.regn.focus();
			}
else if(regt.regn.value.length!=8){
alert("Registration No. Format Error (8 digit Required)")
flag=false;
flag=false;
regt.regn.focus();
}

else if(regt.roll.value==""){
alert("Pls enter Your Roll No.")
flag=false
regt.regn.focus()
}
else if(regt.dob.value==""){
alert("Pls Enter Your DOB")
flag=false
regt.dob.focus()
}
else if(regt.gpa.value==""){
alert("Pls enter Your CGPA.")
flag=false
regt.gpa.focus()
}
else if (regt.sem.value==""){
alert("Select Semester")
flag =false
regt.sem.focus()
}
else if(regt.pwd.value==""){
alert("Please Enter Your Password")
flag=false;
regt.pwd.focus()
}
else if(regt.pwd.value!=regt.cpass.value){

alert("Password Dosn't Match")
flag=false;
regt.cpass.focus();
}
return flag;
}