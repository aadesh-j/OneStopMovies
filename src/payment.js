

//"use strict"; //no global variables in functions


//pop1 = document.getElementById("popcornSmallQty").innerHTML = sessionStorage.getItem("popcornSmallQty");
function capitaliseFirstLetter(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
  }
  
  function validate(){
      var result = true;
      var fullname = document.getElementById("fname").value;
      console.log("name is: " + fullname);
      capitaliseFirstLetter(fullname);
      console.log("name is: " + capitaliseFirstLetter(fullname));
  
      var email = document.getElementById("email").value;
      console.log("email is: " + email);
  
      var city = document.getElementById("city").value;
      console.log("city is: " + city);
      capitaliseFirstLetter(city);
      console.log("city is: " + capitaliseFirstLetter(city));
  
      
      var phone = document.getElementById("phone").value;
      console.log("number is: " + phone);
  
  
      //validate email and phone
      var checkMail = document.getElementById("checkmail").checked;
      var checkPhone = document.getElementById("checkphone").checked;
      
      
      if (checkMail == true ) {
          if (!email){
                console.log("no value email : " + email);
  
              document.getElementById("email_msg").innerHTML = "Please fill this in";
  
      
           return false;
          }
      }
      else if (checkPhone == true ) {
          if (!phone){
              console.log("no value phone : " + phone);
  
              document.getElementById("phone_msg").innerHTML = "Please fill this in";
  
          return false;
          }
      }
      else {
          return true;
      }
      
      return result; 
  
  }
  
  
  
  
  
  
  function init() {
      var checkForm = document.getElementById("checkout");// get ref to the HTML element
      checkForm.onsubmit = validate; // register the event listener
  }
  window.onload = init;
  