<!DOCTYPE html>

<style>


body {
    background-image: url(airplane05.jpg);
    background-size:cover;
}

.box {
        background-color: snow;
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
   
       <form  action = "passsengers_details01.php" class = "box" method="post">    
    <div id="i1">
    <h1>ENTER THE DETAILS OF THE PASSENGERS </h1>
    </div>
    <div id="i2">
        <h3>NAME</h3>
        <input type="text" id="i2" placeholder="Name" name="name" value="">
    </div>
    
    <div id="i2">
        <h3>AGE</h3>
        <input type="number" id="i2" placeholder="Age" name="age" value="">
    </div>


    <div id="i2">
        <h3>Gender</h3>
        <input type="text" id="i2" placeholder=" Gender" name="gender" value="">
    </div>
    

   <button type class = "i3">

        Add Passenger
    </button>
    
    <button type="submit" class = "i4">
        NEXT ------>
    </button>
    

    
    </form>

</body>
</html>