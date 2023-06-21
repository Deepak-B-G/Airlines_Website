<!DOCTYPE html>
<script>
    function chkpassword() {
        var a = document.getElementById("initial").value;

        if(a == ""){
            document.getElementById("messages").innerHTML="-----Please fill the password";
            return false;
        }
    }
</script>
</script>
<style>


body {
    background-image: url(airplane4.jpg);
    background-size:cover;
}

.box {
        background-color: lavenderblush;
        height: 500px;
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
#initial {
        width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        color:black;
    }
#second {
        width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        color:black;
    }
    
.i3 {
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
.i4 {
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
p {
    font-size: 14;
    color: black;
}


</style>

<body>

    <div class="container">
   
       <form onsubmit = "return  chkpassword()" action="login01.php" class= "box" method = "post">
    <div id="i1">
    <h1>LOGIN </h1>
    </div>
    <div id="i2">
        <h3>Email</h3>
        <input type="email" id="i2" placeholder="Email" name="email" value="">
    </div>
    
    <div id="i2">
        <h3>Password</h3>
        <input type="password" id="initial" placeholder="Password" name="password" value="">
    </div>


    <div id="i2">
        <h3>Repeat Password</h3>
        <input type="password" id="second" placeholder=" Repeat Password" name="repeatPassword" value="">
    </div>
    <br><br>
    <span id ="meassages">   </span>
    <br><br>

    <div>
        <input type="submit" class="i3" value="Login" name=" ">
        <button type ="clear" class="i4">Clear </button>
    </div>
    
    
    <div id="i4">
        <h3>Don't have an account? <a href="Signup.php">Sign in</a></h3>
    </div>
    </form>
    </form>
</div>
</body>
</html>