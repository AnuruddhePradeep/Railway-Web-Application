<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Home.css">
    <script defer src="header.js"></script>


    <style>
      body {
        background-image: url('tarin3.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        opacity: 1.0; 
      }



   /*payment button*/

   .container4 {
           
            justify-content: space-around;
        }

        .button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        button {
            background-color: #004080;
            color: #FFD700;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
        }

      
    </style>








</head>
<body>


  <div class="container">
    <div class="nav" >

        <div class="logo">
          <img src="logo-blue.png" style="width: 350px; height: 110px;">
        </div>
          
          <div class="sril">
		      
		      
		       <a href="Home.html">Home</a>
             <a href="timetable.html">Timetable</a>
              <a href="visitSL.html">Visit Sri Lanka</a>
              <a href="Booking.html">Booking</a>
              <a href="Feedback.html">Feedback</a>
          </div>
      </div>
	
      <p></br></br></br></br></br></br></br></br></p>
	
	    <center>
        <form action="action_page.php" method="POST"><br><br><br><br><br>
            
          <center><h1 style="color:rgb(247, 244, 83)">Register Form</style></h1></center> <br><br>
         
          <label for="fname"style="color: blue;"><H3>Name</H3></label> 
         <input type="text" id="fname" name="firstname" placeholder="Your name.."style="height:30px;width:500px">
        </br>
         <br>
		 
		 
		 <label for="fname"style="color: blue;"><H3>NIC Number</H3></label> 
         <input type="text" id="NIC" name="NIC" placeholder="Your NIC.."style="height:30px;width:500px">
        </br>
         <br>
		 
		 <label for="fname"style="color: blue;"><H3>Phone Number</H3></label> 
         <input type="text" id="pnum" name="pnum" placeholder="Your Mobile Number.."style="height:30px;width:500px">
        </br>
         <br>
		 
		 
		 
         <label for="email" style="color: blue;"><H3>Email</H3></label>
         <input type="text" id="email" name="email" placeholder="Your Email.."style="height:30px;width:500px">
          </br><br>
		  
		  
            <label for="depature"style="color: blue;"><H3>Depature Station</H3></label>
           <select id="depature" name="depature"style="height:30px;width:500px">
          
          <option value="anuradhapura">Anuradhapura</option>
           <option value="badulla">Badulla</option>
           <option value="batticloa">Batticloa</option>
           <option value="colombo">Colombo</option>
           <option value="galle">Galle</option>
           <option value="gampaha">Gampaha</option>
           <option value="Beliatta">Beliatta</option>
           <option value="kalutara">Kalutara</option>
           <option value="Kandy">Kandy</option>
             <option value="kilinochchi">Kilinochchi</option>
            <option value="kurunagala">Kurunagala</option>
            <option value="mannar">Mannar</option>
             <option value="matara">Matara</option>
             <option value="Polgahawela">Polgahawela</option>
             <option value="Halawatha">Halawatha</option>
              <option value="Pattipola">Pattipola</option>
             <option value="polonnaruwa">Polonnaruwa</option>
              <option value="puttalam">Puttalam</option>
             <option value="Haputale">Haputale</option>
             <option value="tricomalee">Tricomalee</option>
             <option value="vavuniya">Vavuniya</option>
			 
			
			 </select>
			  </br></br>
			 
			 
            <label for="Arrival"style="color: blue;"><H3>Arrival Station</H3></label>
           <select id="Arrival" name="Arrival"style="height:30px;width:500px">
          
          <option value="anuradhapura">Anuradhapura</option>
           <option value="badulla">Badulla</option>
           <option value="batticloa">Batticloa</option>
           <option value="colombo">Colombo</option>
           <option value="galle">Galle</option>
           <option value="gampaha">Gampaha</option>
           <option value="Beliatta">Beliatta</option>
           <option value="kalutara">Kalutara</option>
           <option value="Kandy">Kandy</option>
             <option value="kilinochchi">Kilinochchi</option>
            <option value="kurunagala">Kurunagala</option>
            <option value="mannar">Mannar</option>
             <option value="matara">Matara</option>
             <option value="Polgahawela">Polgahawela</option>
             <option value="Halawatha">Halawatha</option>
              <option value="Pattipola">Pattipola</option>
             <option value="polonnaruwa">Polonnaruwa</option>
              <option value="puttalam">Puttalam</option>
             <option value="Haputale">Haputale</option>
             <option value="tricomalee">Tricomalee</option>
             <option value="vavuniya">Vavuniya</option>
			 
			 
			 </select>
			 </br></br>
					   
		<label for="seats" style="color: blue;"><H3>Number Of Seats Your Booking</H3></label>
         <input type="text" id="seats" name="seats" placeholder="Number of Seats..."style="height:30px;width:500px">
          <br><br>
		  
             
          
            

        </br></br></br> 
        <a href="#">
          <H3><input type="submit"  value="Submit"style="background-color: aqua; padding:15px 30px;
            font-size: 15px;
            font-weight: bold;
            border-radius: 10px;
            border:3px solid green;
            outline:1px solid red;
            background-color: coral;">
        </H3> </a>
         </form>
        
          
        </center>
	
	
	
        <div class="container4">
          <div class="button-container">
              <a href="payment.html" class="button-container"><button>Payment</button></a>
              
	
	
	
	
	
	
	
          <div class="footer">
            <div class="heading" >
              <img src="logo.png" style="width: 300px; height: 100px; padding-right: 5000px; padding-inline: 10px; padding-top: 50px;">
          </div>
                
                <div class="content" style="padding-left: 300px;">
                  
                  <div class="services" style="top: 250px;">
                    <h4 style="color: red;">Services</h4>
                    <p><a href="#">Seats Booking</a></p>
                    <p><a href="#">Parsal Transport</a></p>
                    <p><a href="#">Express Trains</a></p>
                    <p><a href="#">Normal Trains</a></p>
                  </div>
        
                  <div class="social-media">
                    <h4 style="color: red;">Social</h4>
                    
                  
                    <p>
                      <a href="#"
                        ><i class="fab fa-twitter"></i> Twitter</a
                      >
                    </p>
                    
                    <p>
                      <a href="#"
                        ><i class="fab fa-facebook"></i> Facebook</a
                      >
                    </p>
              
                    <p>
                      <a href="#"
                        ><i class="fab fa-instagram"></i> Instagram</a
                      >
                    </p>
                  </div>
              
              
              
                  <div class="links">
                    <h4 style="color: red;">Quick links</h4>
                    <p><a href="https://www.sltb.lk/">S.L.T.B</a></p>
                    <p><a href="https://www.sltda.gov.lk/en">Tourisum Board</a></p>
                    <p><a href="https://www.srilankan.com/en_uk/go?gad_source=1&gclid=CjwKCAjwgdayBhBQEiwAXhMxtpdKJJxErSc8sxnyf0Sj3pCl18OAu7qc1eHCxWlPCYuD4nZIdHMrNBoCCYkQAvD_BwE">Srilankan AirLine</a></p>
                    <p><a href="https://www.transport.gov.lk/">Transeport Department</a></p>
                  </div>
              
              
              
                  <div class="details">
                    <h4 style="color: red;">Address</h4>
                    <p>
                      PO Box 355, Maradana, <br />
                      Colombo 10, Srilanka  
                    </p>
                    <h4>Mobile</h4>
                    <p>011-1222589</p>
                    <h4>Email</h4>
                    <p>srilankanrailway@gmail.com</p>
                  </div>
                </div> 
            
        
      
             <!-- <div class="foot">-->
                
              <footer>
              <p>  © 2024 Sri Lankan Railway All Rights Reserver. </p>
              </footer>
            <!--</div>-->
            </div>
          </div>
      
	
</body>
</html>
	
	
	
	
	