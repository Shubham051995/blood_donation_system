function formvalidation()
{
var bid=document.registration.blood;
var fid=document.registration.firstName;
var lid=document.registration.lastName;
var eid=document.registration.email;
var pid=document.registration.phone;
var aid=document.registration.address;
if(bloodselect(bid))
{
if(allcharacter(fid))
{
if(allLetter(lid))
{
if(ValidateEmail(eid))
{
if(allnumeric(pid))
{
if(alphanumeric(aid))
{
}
}
}
}
}
}
return false;
}
function bloodselect(bid){
if(bid.value == "0"){
alert('Please Enter your blood group');
bid.focus();
return false;
}
else{
return true;
}
}


function allcharacter(fid){
var letters=/^[A-Za-z]+$/;
if(fid.value.match(letters)){
return true;
}
else{
alert('Please Enter your first name');
fid.focus();
return false;
}
}

function allLetter(lid){
var letters=/^[A-Za-z]+$/;
if(lid.value.match(letters)){
return true;
}
else{
alert('Please Enter your last name');
lid.focus();
return false;
}
}


function ValidateEmail(eid){
var mailformat=/^\w+([\.-]>>>\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(eid.value.match(mailformat)){
return true;
}
else{
alert('Please Enter your email');
eid.focus();
return false;
}
}

function allnumeric(pid){
var letters=/^[0-9]+$/;
if(pid.value.match(letters)){
return true;
}
else{
alert('Please Enter your phone number');
pid.focus();
return false;
}
}



function letters(aid){
var letters=/^[A-Za-z]+$/;
if(aid.value.match(letters)){
return true;
}
else{
alert('Please Enter your address');
aid.focus();
return false;
}
}