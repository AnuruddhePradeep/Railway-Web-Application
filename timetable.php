<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Home.css">
    <script defer src="header.js"></script>
</head>
<body>

    <div class="container" style="padding: 0px 0 5px 0; padding-bottom: 60px;">
    <div class="nav">

		<div class="logo">
		  <img src="logo-blue.png" style="width: 350px; height: 110px; padding-bottom: 10px;">
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
	
	
	<title>Train Timetable</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            background-color: #fff;
        }
        th, td {
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        th, td {
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
    <br><br><h1>Train Timetable</h1>
    <table>
        <thead>
            <tr>
                <th>Train Number</th>
                <th>Class</th>
                <th>Departure Station</th>
                <th>Arrival Station</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
                <th>Travel Time</th>
            </tr>
        </thead>
        <tbody>
		
            <tr>
                <th>1005 Ella Odesy</th>
                <th>AC,1st,2nd,3rd,Reserved</th>
                <th>Colombo Fort</th>
                <th>Badulla</th>
                <th>8.00 AM</th>
                <th>8.00 PM</th>
                <th>12h 0m</th>
            </tr>
			
			
            <tr>
               <th>1006 Seethawaka Odesy</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Awissawella</th>
			   <th>6.00 AM</th>
			   <th>12.00PM</th>
			   <th>6h 0m</th> 
            </tr>
			
			
            <tr>
               <th>1007 Yarl Nila (Weekend)</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Jaffna KKS</th>
			   <th>8.00 PM</th>
			   <th>6.00 AM</th>
			   <th>10H 0m</th>  
			  </tr>
           
		   
		   <tr>
               <th>1007 Calipso Special</th>
			   <th>AC,1st,Reserved</th>
			   <th>Kandy</th>
			   <th>Badulla</th>
			   <th>10.00 AM</th>
			   <th>5.00 PM</th>
			   <th>7h 0m</th>  
			  </tr>
			  
			  <tr>
               <th>Rajarata Rajina</th>
			   <th>1st,2nd,3rd,Reserved</th>
			   <th>Beliatta</th>
			   <th>Anuradhapura</th>
			   <th>5.00 AM</th>
			   <th>5.00 PM</th>
			   <th>12h 0m</th>  
			  </tr>
			  
			  
			  
			  <tr>
               <th>Yarl Devi</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Galkissa Colombo Fort</th>
			   <th>Jaffna</th>
			   <th>5.00 AM</th>
			   <th>5.00 PM</th>
			   <th>12h 0m</th>  
			  </tr>
			  
			  
			  
			  <tr>
               <th>Express Jaffna</th>
			   <th>AC,1st,2nd,Reserved</th>
			   <th>Galkissa Colombo Fort</th>
			   <th>Jaffna</th>
			   <th>10.00 AM</th>
			   <th>6.00 PM</th>
				<th>8h 0m</th>			   
			  </tr>
			  
			  
			  
			  <tr>
               <th>Jaffna Nightmail</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			  <th>Galkissa Colombo Fort</th>
			   <th>Jaffna</th>
			   <th>10.00 PM</th>
			   <th>6.00 AM</th>
				<th>8h 0m</th>	
			  </tr>
			  
			  
			  <tr>
               <th>Trico Express</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Tricomalee</th>
			   <th>8.00 AM</th>
			   <th>8.00 PM</th>
			   <th>12h 0m</th>  
			  </tr>
			  
			  
			  <tr>
               <th>Trinco NightMail</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Tricomalee</th>
			   <th>10.00 PM</th>
			   <th>10.00 AM</th>
			   <th>12h 0m</th>  
			  </tr>
			  
			  
			  <tr>
               <th>Batti Express</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Batticolo</th>
			   <th>3.00 PM</th>
			   <th>3.00 AM</th>
			   <th>12h 0m</th>  
			  </tr>
			  
			  
			  
			  <tr>
               <th>Pulathisi Rajina</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Polonnaruwa</th>
			   <th>5.00 PM</th>
			   <th>12.00 AM</th>
			   <th>7h 0m</th>  
			  </tr>
			  
			  
			  
			  <tr>
               <th>Menagaya</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Batticolo</th>
			   <th>8.00 PM</th>
			   <th>8.00 AM</th>
			   <th>12h 0m</th>  
			  </tr>
			  
			  
			  <tr>
               <th>Udarata Rajina</th>
			   <th>1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Kandy</th>
			   <th>6.00 PM</th>
			   <th>10.00PM</th>
			   <th>4h 0m</th>  
			  </tr>
			  
			  
			  
			  <tr>
               <th>Ruhunu kumari</th>
			   <th>1st,2nd,3rd</th>
			   <th>Colombo Fort</th>
			   <th>Mathara</th>
			  <th>6.00 PM</th>
			   <th>10.00PM</th>
			   <th>4h 0m</th>  
			  </tr>
			  
			  
			  
			  <tr>
               <th>Galu kumari</th>
			   <th>1st,2nd,3rd</th>
			   <th>Colombo Fort</th>
			   <th>Galle</th>
			   <th>2.00 PM</th>
			   <th>5.00 PM</th>
			   <th>3h 0m</th>  
			  </tr>
			  
			  
			  
			  <tr>
               <th>Badulu Express Kumari</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Badulla</th>
			   <th>8.00 PM</th>
			   <th>8.00 AM</th>
			   <th>12h 0m</th>  
			  </tr>
			  
			  
			  
			  <tr>
               <th>Mannar Express</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Taleimannar</th>
			  <th>5.00 PM</th>
			   <th>12.00 AM</th>
			   <th>7h 0m</th>   
			  </tr>
			  
			  
			  <tr>
               <th>Puththalam Normal</th>
			   <th>1st,2nd,3rd</th>
			   <th>Colombo Fort</th>
			   <th>Puththalam</th>
			   <th>6.00 PM</th>
			   <th>10.00PM</th>
			   <th>4h 0m</th>
			  </tr>
			  
			  
			  
			  <tr>
               <th>Awissawella Normal</th>
			   <th>2nd,3rd</th>
			   <th>Awissawella</th>
			   <th>Colombo Fort</th>
			   <th>6.00 AM</th>
			   <th>8.00 AM</th>
			   <th>2h 0m</th>  
			  </tr>
			  
			  
			  <tr>
               <th>Kaluthara Office Express</th>
			   <th>1st,2nd,3rd</th>
			   <th>Colombo Fort</th>
			   <th>Kaluthara Uthura</th>
			   <th>6.00 AM</th>
			   <th>9.00 AM</th>
			   <th>3h 0m</th>  
			  </tr>
			  
			  
			  
			  <tr>
               <th>Halawatha</th>
			   <th>1st,2nd,3rd</th>
			   <th>Halawatha</th>
			   <th>Colombo Fort</th>
			   <th>3.00 AM</th>
			   <th>6.00 AM</th>
			   <th>3h 0m</th>  
			  </tr>
			  
			  
			  <tr>
               <th>Anuradhapura Normal</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Anuradhapura</th>
			     <th>5.00 PM</th>
			   <th>12.00 AM</th>
			   <th>7h 0m</th>  
			  </tr>
			  
			  
			  <tr>
               <th>Maho Normal</th>
			   <th>2nd,3rd</th>
			   <th>Colombo Fort</th>
			   <th>Kurunegala Maho</th>
			  <th>6.00 PM</th>
			   <th>10.00PM</th>
			   <th>4h 0m</th>
			  </tr>
			  
			  
			  <tr>
               <th>Kurunegala</th>
			   <th>1st,2nd,3rd</th>
			   <th>Colombo Fort</th>
			   <th>Kurunegala</th>
			    <th>2.00 PM</th>
			   <th>5.00 PM</th>
			   <th>3h 0m</th> 
			  </tr>
			  
			  
			  <tr>
               <th>Polgahawela Morning</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Polgahawela</th>
			   <th>Colombo Fort</th>
			   <th>4.00 AM</th>
			   <th>7.00 AM</th>
			   <th>3h 0m</th>  
			  </tr>
			  
			  
			  <tr>
               <th>Gampola Express</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Colombo Fort</th>
			   <th>Nawalapitiya</th>
			    <th>5.00 PM</th>
			   <th>12.00 AM</th>
			   <th>7h 0m</th>  
			  </tr>
			  
			  
			  <tr>
               <th>Mathara Office</th>
			   <th>AC,1st,2nd,3rd,Reserved</th>
			   <th>Mathara</th>
			   <th>Colombo Fort</th>
			   <th>4.00 AM</th>
			   <th>7.00 AM</th>
			   <th>3h 0m</th>  
			  </tr>
		   
		   
        </tbody>
    </table>
	
	
	<div class="footer">
		<div class="heading" >
		  <img src="logo.png" style="width: 300px; height: 100px; padding-left: 50px; padding-inline: 10px; padding-top: 50px;">
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
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	