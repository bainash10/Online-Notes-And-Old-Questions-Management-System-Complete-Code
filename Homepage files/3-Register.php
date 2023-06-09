<!DOCTYPE html>
<html>
<head>
  <title>Signup Page</title>
  <style>
    Body {  
  font-family: Calibri, Helvetica, sans-serif;  
  background-color: #1D2228;  
  color: #E8EAE3;
}  
    .container {
    width: 400px;
     margin: 0 auto;
    padding: 20px;
    border: 1px solid #eb807d;
    border-radius: 10px;
  }
  
  h2 {
    text-align: center;
  }
  
  form {
    display: flex;
    flex-direction: column;
  }
  
  label {
    margin-bottom: 10px;
  }
  
  input, button {
    margin-bottom: 15px;
    padding: 8px;
    font-size: 16px;
  }
  
  button {
    background-color: #eb807d;
    color: black;
    border: none;
    cursor: pointer;
  }
  
  button:hover {
    background-color: #da6864;
  }
    </style>
</head>
<body>
  <div class="container">
    <h2>Signup Form</h2>
    <form id="signupForm" onsubmit="validateForm(event)" method="POST">
      <label for="name">Name:</label>
      <input type="text" id="name" required>

      <label for="email">Email:</label>
      <input type="email" id="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" required>

      <button type="submit">Sign Up</button>
    </form>
  </div>

  <script src="/JavaScript Files/signup Validation.js"></script>
</body>
</html>