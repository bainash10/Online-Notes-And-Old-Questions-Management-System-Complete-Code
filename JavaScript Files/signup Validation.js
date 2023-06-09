function validateForm(event) {
    event.preventDefault(); // Prevent form submission
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var atposition=email.indexOf("@");  
var dotposition=email.lastIndexOf(".");
  
    if (name.trim() === "") //=== means strictly equal, trim is used to remove whitespaces
    {  
      alert("Please enter your name.");
      return;
    }

    if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length){  
        alert("Please enter a valid e-mail address \n atpostion:"+atposition+"\n dotposition:"+dotposition);  
        return false;  
        }  

    if (password.trim() === "") {
      alert("Please enter a password.");
      return;
    }
  
    // Perform further validation or submit the form data
    // ...
    // Example: Send form data to the server using AJAX
  
    alert("Signup successful!");
    document.getElementById("signupForm").reset(); // Reset the form
  }