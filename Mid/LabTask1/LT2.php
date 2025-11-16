<!doctype html>
<html>
    <head>
        <title>
handle form

</title>
<style>
body {
      font-family: Arial, sans-serif;
      padding: 30px;
      background-color:#f0f8ff;
    }
 
    h2 {
      text-align: center;
      color:#003366;
    }
 
    form {
      background-color:#ffffff;
      padding: 20px;
      border-radius: 10px;
      width: 300px;
      margin: 0 auto;
      box-shadow: 0 0 10pxrgba(0,0,0,0.1);
    }
 
    input, select, button {
      width: 100%;
      padding: 8px;
      margin-top: 10px;
      border-radius: 5px;
      border: 1px solid#ccc;
    }
 
    button {
      background-color:#003366;
      color: white;
      cursor: pointer;
    }
 
    button:hover {
      background-color:#0055aa;
    }
 
    #success{
      margin-top: 20px;
      text-align: center;
      font-size: 16px;
      color:#003366;
    }
 
    #error {
      margin-top: 10px;
      color: red;
      text-align: center;
    }
  </style>
</head>
<body>
 

</head>
<body>
    
    <h2>Participant Registration Section</h2>

<form onsubmit="return handleSubmit()">
    <label>Participant Full Name:</label><br></br>
<input type ="text" id="name"><br></br>
<label>Email Address :</label><br></br>
<input type ="text" id="address"><br></br>
<label>Phone number :</label><br></br>
<input type ="number" id="phone number"><br></br>
<label>Password :</label><br></br>
<input type ="text" id="password"><br></br>
 <label>Confirm Password :</label><br></br>
<input type ="text" id="c pass"><br></br>
    <center>
    <button type="submit">register</button>
    </center>
    <div id="error"></div>
    <div id="success"></div>

    
    <script>

    function registeruser() {
        var Participant Full Name = document.getElementById("name").value.trim();
        var Email Address = document.getElementById("address").value.trim();
        var phone number = document.getElementById("phone number").value;
        var password = document.getElementById("password").value.trim();
        var confirm password = document.getElementById("c password").value.trim();
        var errorDiv = document.getElementById("error");
        var successDiv = document.getElementById("success"); 
        errorDiv.innerHTML = "";
      successDiv.innerHTML = "";  }
</script>
<h2>Activity section</h2>

<label>Activity Name</label><br></br>
<input type ="text" id="Aname"><br></br>
<label>ADD activity</label><br></br>
<input type ="number" id="phone number"><br></br>
<label>Password :</label><br></br>
<input type ="text" id="password"><br></br>
 <label>Confirm Password :</label><br></br>
<input type ="text" id="c pass"><br></br>


</body>
</html>
