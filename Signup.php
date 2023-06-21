<!DOCTYPE html>
<style>

body {
    background-image: url(airplane03.png);
    background-size: cover;
}
   
.form {
        background-color: aliceblue;
        height: 700px;
        width: 700px;
        margin:auto;
        padding: 20px;
        opacity: 0.7;
    }
#i1 {
     color: black;
     text-align: center;

} 
#i2 {
        width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        color:black;
} 
#i3 {
        width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        color:black;
} 
#i4 {
        width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        color:black;
}
.i5 {
  background-color: yellow; 
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  opacity: 0.7;
}
.i6 {
  background-color: blue; 
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  opacity: 0.7;
}
</style>

<body>
        <form action="signup01.php" class= "form" method = "post">
        <div id="i1">
            <h1>SIGN UP</h1>
        </div>
        <div id="i2">
            <h3>First Name</h3>
            <input type="text" id="i2" placeholder="First Name" name="firstname">
            <h3>last Name</h3>
            <input type="text" id="i2" placeholder="Last Name"name="lastname">
            <h3>Mobile Number</h3>
            <input type="number" id="i2" placeholder="Mobile Number"name="number">
        </div>
        <div id="i3">
            <h3>Email</h3>
            <input type="email" id="i3" placeholder="Email"name="email">
        </div>
        <div id ="i4">
            <h3>Password</h3>
            <input type="password" id="i4" placeholder="Password"name="password">
        </div>
        <label>
            <input type="checkbox"> Remember Me
        </label>
        <div>
            <a href="airlines.php">
                <button type="submit" class="i5">Submit </button>
            </a>
           
            <button type ="clear" class="i6">Clear </button>
        </div>
        <div>  
           <h3>Have an account? <a href="Login.php">Log in</a></h3> 
        </div>
     
    </form>
   
</body>