function validFname(){
  var fname=document.f1.fname.value; 
  if((fname==null)||(fname==""))
    {
      
      document.getElementById("fname1").innerHTML = "Enter first name";
      //document.f1.fname.value="";
      document.getElementById("fname1").className = "mess"; 
      return false;
    }
  if((fname.length<6)||(fname.length>16))
    {
      
      document.getElementById("fname1").innerHTML ="length of name should be greater than 6 and less than 16";
      //document.f1.fname.value="";
      document.getElementById("fname1").className = "mess"; 
      return false;
    }
  else
    {
      document.getElementById("fname1").innerHTML ="Correct &#x2714;"
      document.getElementById("fname1").className = "cmess"; 
      return false;
    }  
}

function validLname()
{
  var lname=document.f1.lname.value; 
  if((lname==null)||(lname==""))
    {
      document.getElementById("lname1").innerHTML = "Enter last name";
      //document.f1.lname.value="";
      document.getElementById("lname1").className = "mess"; 
      return false;
    }
  if((lname.length<6)||(lname.length>16))
    {
      
      document.getElementById("lname1").innerHTML ="length of name should be greater than 6 and less than 16";
      //document.f1.lname.value="";
      document.getElementById("lname1").className = "mess"; 
      return false;
    }
  else
    {
      document.getElementById("lname1").innerHTML ="Correct &#x2714;"
      document.getElementById("lname1").className = "cmess"; 
      return true;
    }

}

function validAge1()
{
  var age=document.f1.age.value; 
  for(i=0;i<age.length;i++)
    {
      var ch=age.charAt(i);
      if((ch<"0")||(ch>"9"))
       {
        document.getElementById("age1").innerHTML="Age must be in digits only";
        //document.f1.age.value="";
        document.getElementById("age1").className = "mess";
        return false;
       }
    }
  if((age==null)||(age==""))
    {
      document.getElementById("age1").innerHTML = "Enter age";
      //document.f1.age.value="";
      document.getElementById("age1").className = "mess"; 
      return false;
    }
  if((age<10) || (age>50))
    {
      document.getElementById("age1").innerHTML = "Age restricted between 10 and 49 inclusive";
      //document.f1.age.value="";
      document.getElementById("age1").className = "mess"; 
      return false;
    }
  
   
  
  else
    {
      document.getElementById("age1").innerHTML ="Correct &#x2714;"
      document.getElementById("age1").className = "cmess"; 
      return true;
    }

}

function validEmail()
{
  var email=document.f1.email.value; 
  var atpos=email.indexOf('@');
  var dotpos=email.lastIndexOf(".");
  if(atpos<1 || dotpos<(atpos+2) || dotpos+2>=email.length)
    {
      document.getElementById("email1").innerHTML = "Enter valid email";
      //document.f1.email.value="";
      document.getElementById("email1").className = "mess"; 
      return false;
    }
  else
    {
      document.getElementById("email1").innerHTML ="Correct &#x2714;"
      document.getElementById("email1").className = "cmess"; 
      return true;
    }

}

function validPhone()
{
  var pno=document.f1.pno.value;
  for(i=0;i<pno.length;i++)
    {
      var ch=pno.charAt(i);
      if((ch<"0")||(ch>"9"))
      {
        document.getElementById("pno1").innerHTML = "Enter valid PhoneNo contains characters";
        //document.f1.pno.value="";
        document.getElementById("pno1").className = "mess"; 
        return false;
      }
    } 
  if((pno=="")||(pno==null))
    {
      document.getElementById("pno1").innerHTML = "Enter Phone no";
      //document.f1.pno.value="";
      document.getElementById("pno1").className = "mess"; 
      return false;
      
    }
  if(pno.length<10)
    {
      document.getElementById("pno1").innerHTML = "";
      //document.f1.pno.value="";
      document.getElementById("pno1").className = "mess"; 
      return false;
    }
   
  else{
    document.getElementById("pno1").innerHTML ="Correct &#x2714;"
    document.getElementById("pno1").className = "cmess"; 
    return true;

  }
  

}

function validPass()
{
  var pwd=document.f1.pwd.value;
  if(pwd=="")
    {
      document.getElementById("pwd1").innerHTML = "Enter Password";
      //document.f1.pwd.value="";
      document.getElementById("pwd1").className = "mess"; 
      return false;
      
    }
  if(pwd.length<6)
    {
      document.getElementById("pwd1").innerHTML = "Minimum more than 6 characters required";
      //document.f1.pwd.value="";
      document.getElementById("pwd1").className = "mess"; 
      return false;
    }
  else{
    document.getElementById("pwd1").innerHTML ="Fits the password criteria "
    document.getElementById("pwd1").className = "cmess"; 
    return true; 
    } 

}

function validRpass()
{
  var pwd=document.f1.pwd.value;
  var rpwd=document.f1.rpwd.value;
  if(pwd=="")
    {
      document.getElementById("rpwd1").innerHTML = "Enter Password First";
      //document.f1.rpwd.value="";
      document.getElementById("rpwd1").className = "mess"; 
      return false;
      
    }
  if((rpwd=="")||(rpwd==null))
    {
      document.getElementById("rpwd1").innerHTML = "Enter Confirm Password";
      //document.f1.rpwd.value="";
      document.getElementById("rpwd1").className = "mess"; 
      return false;
    }
  if(pwd!=rpwd){
      document.getElementById("rpwd1").innerHTML = "Password Not Matching";
      //document.f1.rpwd.value="";
      document.getElementById("rpwd1").className = "mess"; 
      return false;
    }
  else{
    document.getElementById("rpwd1").innerHTML ="Password matches"
    document.getElementById("rpwd1").className = "cmess"; 
    return true; 
    }   

}

function validField()
{
  var pwd=document.f1.pwd.value;
  var rpwd=document.f1.rpwd.value;
  if ((document.f1.gender[0].checked==false)&&(document.f1.gender[1].checked==false)) 
    {
      alert("Choose your gender");
      document.getElementById("gen1").innerHTML ="Choose your gender";
    }
  
 if ((document.f1.chb[0].checked==false)&&(document.f1.chb[1].checked==false)&&(document.f1.chb[2].checked==false)&&(document.f1.chb[3].checked==false))
    {
      alert("Choose your Hobbies");
      document.getElementById("hob1").innerHTML ="Choose your hobbies";
      
    }
    
  if(f1.ddbl.selectedIndex==0)
    {
      alert("Select Country");
      document.getElementById("count1").innerHTML ="Select Country"
     
    }
    
  if (f1.terms.checked==false)
    {
      alert("Check The Terms & Condition Box");
      document.getElementById("term1").innerHTML ="You have not accepted the Terms and Conditions";
  
    }
    else
    {
      document.getElementById("gen1").innerHTML ="OK";
      document.getElementById("hob1").innerHTML ="OK";
      document.getElementById("count1").innerHTML ="OK";
      document.getElementById("term1").innerHTML ="OK";


    }

}


function next_step1() {
document.getElementById("first1").style.display = "none";
document.getElementById("second1").style.display = "block";
document.getElementById("active1").className="yo";
document.getElementById("active2").className="activeg yo";
}
// Function that executes on click of first previous button.
function prev_step1() {
document.getElementById("first1").style.display = "block";
document.getElementById("second1").style.display = "none";
document.getElementById("active1").className="activeg yo";
document.getElementById("active2").className="yo";
}
// Function that executes on click of second next button.
function next_step2() {
document.getElementById("second1").style.display = "none";
document.getElementById("third1").style.display = "block";
document.getElementById("active2").className="yo";
document.getElementById("active3").className="activeg yo";
}
// Function that executes on click of second previous button.
function prev_step2() {
document.getElementById("third1").style.display = "none";
document.getElementById("second1").style.display = "block";
document.getElementById("active2").className="activeg yo";
document.getElementById("active3").className="yo";

}
