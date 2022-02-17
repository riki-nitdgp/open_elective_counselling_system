function check(){
flag = true;
if(add.subcode.value==""){
alert("Please Enter Subject Code")
flag = false;
add.subcode.focus()
}
else if(add.subname.value==""){
alert("Please Enter Subject Name")
flag=false;
add.subname.focus()
}
else if(add.bt.value==""){
alert("Enter No Of seat")
flag=false;
add.bt.focus()
}
else if(isNaN(add.bt.value))
{
alert("only number allowed")
flag=false;
add.bt.focus();
}
else if(add.che.value==""){
alert("Enter No Of seat")
flag=false;
add.che.focus()
}
else if(isNaN(add.che.value))
{
alert("only number allowed")
flag=false;
add.che.focus();
}
else if(add.ce.value==""){
alert("Enter No Of seat")
flag=false;
add.ce.focus()
}
else if(isNaN(add.ce.value))
{
alert("only number allowed")
flag=false;
add.ce.focus();
}
else if(add.cse.value==""){
alert("Enter No Of seat")
flag=false;
add.cse.focus()
}
else if(isNaN(add.cse.value))
{
alert("only number allowed")
flag=false;
add.cse.focus();
}
else if(add.ece.value==""){
alert("Enter No Of seat")
flag=false;
add.ece.focus()
}
else if(isNaN(add.ece.value))
{
alert("only number allowed")
flag=false;
add.ece.focus();
}
else if(add.ee.value==""){
alert("Enter No Of seat")
flag=false;
add.ee.focus()
}
else if(isNaN(add.ee.value))
{
alert("only number allowed")
flag=false;
add.ee.focus();
}
else if(add.it.value==""){
alert("Enter No Of seat")
flag=false;
add.it.focus()
}
else if(isNaN(add.it.value))
{
alert("only number allowed")
flag=false;
add.it.focus();
}
else if(add.me.value==""){
alert("Enter No Of seat")
flag=false;
add.me.focus()
}
else if(isNaN(add.me.value))
{
alert("only number allowed")
flag=false;
add.me.focus();
}
else if(add.mme.value==""){
alert("Enter No Of seat")
flag=false;
add.mme.focus()
}
else if(isNaN(add.mme.value))
{
alert("only number allowed")
flag=false;
add.mme.focus();
}
return flag;
}
function sum(){
var bt=parseInt(document.getElementById("bt").value);
var che=parseInt(document.getElementById("che").value);
var ce=parseInt(document.getElementById("ce").value);
var cse=parseInt(document.getElementById("cse").value);
var ece=parseInt(document.getElementById("ece").value);
var ee=parseInt(document.getElementById("ee").value);
var it=parseInt(document.getElementById("it").value);
var me=parseInt(document.getElementById("me").value);
var mme=parseInt(document.getElementById("mme").value);
var ansD = document.getElementById("total");
ansD.value = bt + che + cse + cse + ece + ee + it + me + mme;
}