<!DOCTYPE html>   
<html>   
<head>  
<title> Login Page </title>  
<style>   
#rcorners1 {
background: #E8EAE3;
border-radius: 16px;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
backdrop-filter: blur(5.3px);
-webkit-backdrop-filter: blur(5.3px);
border: 1px solid rgba(255, 255, 255, 0.46);
padding: 40px;
  width: 35%;
  height: 50%;
}
Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #1D2228;  
}  
button {   
       background-color: #eb807d;   
       width: 20%;  
        color: rgb(0, 0, 0);   
        padding: 15px;   
        margin: 10px 0px;   
        border: none;   
        cursor: pointer;   
         }   
 input[type=email]{   
        width: 40%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid rgb(0, 0, 0);   
        box-sizing: border-box;   
    }  
 input[type=password] {   
        width: 40.5%;   
        margin: 8px 0;  
        padding: 12px 20px;   
        display: inline-block;   
        border: 2px solid rgb(0, 0, 0);   
        box-sizing: border-box;   
    }  
 button:hover {   
        opacity: 0.7;   
    }   
  .regbtn {   
        width: auto;   
        padding: 10px 18px;  
        margin: 10px 5px;  
    }   

    a{
            text-decoration: none;
         }
            a:link /* unvisited link */
            {
            color: black;
            } 
            
            a:visited /* visited link */
            {
            color: black;
            }    
     
</style>   
</head>    

<body>    
    <center> <h1 style="color: #E8EAE3;">Login Form </h1> </center>  
    <center> 
    <form id="loginForm" onsubmit="validateForm(event)" method="POST">  
        <div id ="rcorners1">   
            <label>Email : </label>   
            <input type="email" placeholder="Enter Email" id="email" required>  <br>
            <label>Password : </label>   
            <input type="password" placeholder="Enter Password" id="password" required>  <br>
            <input type="checkbox" checked="checked"> Remember me   
            <button type="submit">Login</button>   <br>
            <button type="button" class="regbtn"><a href="3-Register.html" target="_blank">Sign Up</a></button>   
            <script src="/JavaScript Files/Mail To.js"></script>
            Forgot <a href="#" onclick="sendEmail()"> password? </a>   
        
    </form>  
  </div>   
    <script src="/JavaScript Files/login Validation.js"></script>  

</center> 
</body>     
</html>  