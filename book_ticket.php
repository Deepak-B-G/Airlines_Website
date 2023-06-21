<!DOCTYPE html>
<style>

  body {
      background-image: url(airplane2.webp);
  }
    
    .form {
        background-color: black;
        height: 550px;
        width: 700px;
        margin:auto;
        padding: 20px;
        opacity: 0.75;
    }
    
    #text3 {
        color: white;
        text-align: left;
    }
  

    
    #input #input-group {
        width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        color:white
    }
    #input1 #input-group {
        width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        color:white
    }
    #input2 #input-group {
        width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        color:white
    }
    #input4 #input-group {
        width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        color:white
    }
    #input-type {
        width: 300px;
        margin: 5px;
        border-top:none;
        border-left: none;
        border-right:none;
        outline:none;
        background: transparent;
        color:white;
    }
    #input3 h3{
        border-bottom: 2px solid blue;
        width:210px;
        padding: 5px;
        
    }
    .button {
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
.button1 {
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
    <div class="container">
    <form action="book_ticket01.php" class= "form" method = "post">
    <form action="connect.php" method="post">
       <div id="input3">
           <h3 style="color: white;">BOOKING DETAILS</h3>
       </div>
      
       <div id="input">
        
           <select id="input-group" name="f" style="background: black;">
            <option value="">FROM</option>
            <option value="Banglore">Banglore</option>
            <option value="Chennai">Chennai</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="New Delhi">New Delhi</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Lucknow">Lucknow</option>
           </select>
      

           <select id="input-group" name="t"style="background: black;">
            <option value="">TO</option>
            <option value="Banglore">Banglore</option>
            <option value="Chennai">Chennai</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="New Delhi">New Delhi</option>
            <option value="Mumbai">Mumbai</option>  
            <option value="Kolkata">Kolkata</option>
            <option value="Lucknow">Lucknow</option>
           </select>
    </div>
    <br>
    <div id="input1">
      
        <select id="input-type" name="SEATING" style="background: black;">
            <option value="SELECT SEATING">SELECT SEATING</option>
            <option value="Economy-class">Economy-class</option>
            <option value="Premium Economy-class">Premium Economy-class</option>
            <option value="First-Class">First-Class</option>
            <option value="Business-class">Business-class</option>
        </select>
    </div>

    <p id="text3">
    <input type="radio" id="text3" name="TRIPTYPE" value="Round trip">ROUND TRIP
    <input type="radio" id="text3" name="TRIPTYPE" value="One-way trip">ONE-WAY TRIP
    </p>
    <div id="input3">
     <h3 style="color: white;">DEPARTURE </h3>
     </div>
    <input type = "date" id = "input-type" name ="DATE" value = "Date" placeholder="Date"> 

    <br><br>
    
     <div id="input2">
         <input type="number" id="input-group" placeholder="Adult" name="PEOPLE">
         <input type="number" id="input-group" placeholder="Children(2-11years)"  name="PEOPLE">
         <input type="number" id="input-group" placeholder="infant(under 2years)" name="PEOPLE">
     </div>
     <div id="input3">
        <h3 style="color: white;">PERSONAL DETAILS</h3>
     </div>
     <div id="input4">
        <input type="number" id="input-group" placeholder="Mobile Number" name="NUMBER">
        <input type="email" id="input-group" placeholder="Email" name="EMAIL">
     </div>
     <div id="input4">
         <input type = "text" id="input-group" placeholder="Promo code">
     </div>
     <div>
         
        <button type="submit" class="button">Select Seat</button>
        
        <button type="reset" class="button1">Clear </button>
     </div>
    </form>
    </div>
</body>