function validateForm(event) {
    event.preventDefault(); // Prevent form submission
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
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

  
    alert("Signup successful!");
    document.getElementById("contactForm").reset(); // Reset the form
  }