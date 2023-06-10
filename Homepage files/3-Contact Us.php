 <html>
<head><title>Contact Us</title>
<style>
  body { 
    background:#1D2228; 
    color: #E8EAE3;
}
form { 
    max-width:420px; margin:50px auto;
 }

.feedback-input {
  color:#f1f2e7f5;
  font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
  font-size: 18px;
  border-radius: 5px;
  line-height: 22px;
  background-color: transparent;
  border:2px solid #FF6864;;
  transition: all 0.3s;
  padding: 13px;
  margin-bottom: 15px;
  width:100%;
  box-sizing: border-box;
  outline:0;
}

.feedback-input:focus { border:2px solid #E8EAE3; }

textarea {
  height: 150px;
  line-height: 150%;
  resize:vertical;
}

[type="submit"] {
  font-family: 'Montserrat', Arial, Helvetica, sans-serif;
  width: 100%;
  background:#CC6666;
  border-radius:5px;
  border:0;
  cursor:pointer;
  color:#f1f2e7f5;
  font-size:24px;
  padding-top:10px;
  padding-bottom:10px;
  transition: all 0.3s; 
  margin-top:14px;
  font-weight:700;
}
[type="submit"]:hover { 
    background:#CC4949; 
    color:#1D2228
}
</style>
</head>

<body>




    <form id="contactForm" action="comment.php" method="post" enctype="multipart/form-data">    
      <caption> <center> <h1> <img src="../Images/operator.png" width="40px">Contact Us</center></h1></caption>  
        <input id="name" name="name" type="text" class="feedback-input" placeholder="Name" required/>   
        <input id="email" name="email" type="email" class="feedback-input" placeholder="Email" required/>
        <textarea id="message"  name="message" class="feedback-input" placeholder="Comment"></textarea>
        <input type="file" name="pdfFile" id="pdfFile" accept="application/pdf" required>
        <input type="submit" value="SUBMIT"/>
      </form>

      <script>
            const contactForm = document.getElementById('contactForm');
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const messageInput = document.getElementById('message');
            const fileInput = document.getElementById('pdfFile');
          
            contactForm.addEventListener('submit', function(event) {
              event.preventDefault();
          
              // Validate the form fields
              if (validateForm()) {
                // If validation is successful, submit the form
                this.submit();
              }
            });
          
            function validateForm() {
              const name = nameInput.value;
              const email = emailInput.value;
              const message = messageInput.value;
            //   const file = fileInput.files[0];
              // Perform validation checks
              if (name.trim() === '' || email.trim() === '' || message.trim() === '') {
                alert('Please fill in all fields.');
                return false;
              }
          
              if (!validateEmail(email)) {
                alert('Please enter a valid email address.');
                return false;
              }
            //   if (file && !validateFile(file)) {
            //     alert('Please select a valid file.');
            //     return false;
            //   }
            var filePath = fileInput.value;
            var allowedExtensions = /(\.pdf)$/i;

            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type. Only PDF files are allowed.');
                fileInput.value = '';
                return false;
            }
              return true;
            }
          
            function validateEmail(email) {
              const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
              return regex.test(email);
            }
          
            // function validateFile(file) {
            //   const allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
            //   const fileExtension = file.name.split('.').pop().toLowerCase();
            //   return allowedExtensions.includes(fileExtension);
            // }
          </script>

   
</body>
</html> 