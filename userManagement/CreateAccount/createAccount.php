<!DOCTYPE html>
<?php 
$cat = $_GET['cat'];
echo ('register as a '.$cat);
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<div class="logo">
  <img src="../../assets/img/logo.png" alt="">
</div>
<div class="wrapper">
    <div class="title">
      Create account
    </div>
    <form action="createAccountController.php?cat=<?php echo $cat?>" method="POST" name="createAccount" onsubmit="return(validate())">
    <div class="form">
       <div class="inputfield">
          <label>Full Name</label>
          <input type="text" class="input" name="fullname" id="fullname" placeholder="Full Name">
       </div>
        <div class="inputfield">
          <label>NIC</label>
          <input type="text" class="input" name="NIC" id="NIC" placeholder="NIC">
       </div>
       <div class="inputfield">
           <label>Address</label>
           <textarea class="textarea" name="address" id="address" placeholder="Address"></textarea>
        </div>
       <div class="inputfield">
         <label>E-mail Address</label>
         <input type="text" class="input" name="email" id="email" placeholder="e-mail" >
      </div>
       <!-- <div class="inputfield">
         <label>Account Catagory</label>
         <div class="custom_select">
           <select>
             <option value="Farmer" id="farmer-cat">Farmer</option>
             <option value="Buyer" id="buyer-cat">Buyer</option>
             <option value="delivery person" id="delivery-cat">delivery person</option>
           </select>
         </div>
      </div> -->
      
      <div class="inputfield">
          <label>Telephone Number</label>
          <input type="text" class="input" name="tpno" id="tpno" placeholder="Telephone number" >
       </div>
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password" id="password" placeholder="password">
       </div>
      <div class="inputfield">
          <label>Re-enter Password</label>
          <input type="password" class="input" name="password2" id="password2">
       </div>
      <div class="inputfield terms">
      <p>I agree all the terms and conditions</p>
          <label class="check">
            <input type="checkbox" id="terms" name="terms">
            <span class="checkmark"></span>
          </label>
          
       </div>
      <div class="submit-btn">
        <input type="submit" value="SIGN IN" class="btn">
      </div>
</form>
    <div>
    <div class="socials">
      <a href="#" class="button"><img src="../../assets/img/fb.png" width="30" height="30" alt="facebook"></a>
      <a href="#" class="button"><img src="../../assets/img/google.png" width="30" height="30" alt="google"></a>
      <a href="#" class="button"><img src="../../assets/img/twitter.png" width="30" height="30" alt="tweeter"></a>
    </div>
    </div>

  </div>

</div>

<script>
  var car =  '<?php echo($cat); ?>' ;
  alert("you are registering as a " + car);
  
  function validate(){  
  
  var name=document.createAccount.fullname.value;
  var NIC=document.createAccount.NIC.value;
  var address = document.createAccount.address.value;
  var email=document.createAccount.email.value;
  var tpno=document.createAccount.tpno.value;
  var password=document.createAccount.password.value; 
  var password2 = document.createAccount.password2.value; 
  
 
  if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
  }else if (NIC==null || NIC==""){  
  alert("please enter NIC number");  
  return false; 
  }else if (address==null || address==""){  
  alert("please enter address");  
  return false; 
  }else if (email==null || email==""){  
  alert("please enter email address");  
  return false; 
  }else if (tpno==null || tpno==""){  
  alert("please enter tpno");  
  return false; 
  }else if (password==null || password==""){  
  alert("please enter password");  
  return false; 
  }else if (password2==null || password2==""){  
  alert("please enter password again");  
  return false; 
  }
  if(document.getElementById("terms").checked == false){
    alert("please agree to the terms and conditions");  
    return false;
  }
  
  if(password==password2){  
  return true;  
  }  
  else{  
  alert("password does not match");  
  return false;  
  }  
  }  
  
</script>

</body>
</html>
