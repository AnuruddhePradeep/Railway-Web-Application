<!DOCTYPE html>
<html>
<head>
  <title>Parcel Transport Cost Calculator</title>
  <style>
    body {
      font-family: sans-serif;
      background-color: #222;
      color: #fff;

      background-image: url('TripImg.png');
      background-size: cover;
      background-repeat: no-repeat;
      
    }

    .container {
      width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #111;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    select,
    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: none;
      border-radius: 5px;
      background-color: #333;
      color: #fff;
    }

    button {
      background-color: #ffcc00;
      color: #222;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    button:hover {
      background-color: #e6b800;
    }

    #result {
      text-align: center;
      margin-top: 20px;
    }




    .container3 {
            display: flex;
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
    <h1>Parcel Transport Cost Calculator</h1>

    <label for="departureStation">Departure Station:</label>
    <select id="departureStation">
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

    <label for="arrivalStation">Arrival Station:</label>
    <select id="arrivalStation">
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

    <label for="item">Item:</label>
    <select id="item">
      <option value="10">Chicks in Ventilated Boxes</option>
      <option value="50">Fish accompanied by owner</option>
      <option value="100">Furniture in small Lots</option>
      <option value="50">Letters</option>
      <option value="2000">Machinary over 50kg</option>
      <option value="70">Others</option>
    </select>

    <label for="train">Train:</label>
    <select id="train">
      <option value="100">Normal Trains</option>
      <option value="200">Express/Semi Express Trains</option>
      <option value="300">Intercity Trains</option>
    </select>

    <label for="weight">Weight (Kg):</label>
    <input type="number" id="weight" value="1">

    <button onclick="calculateCost()">Calculate</button>

    <div id="result"></div>
  </div>

  <script>
    function calculateCost() {
      var departureStation = document.getElementById("departureStation").value;
      var arrivalStation = document.getElementById("arrivalStation").value;
      var item = document.getElementById("item").value;
      var train = document.getElementById("train").value;
      var weight = document.getElementById("weight").value;

      // Calculate distance based on stations (replace with actual distance calculation)
      var distance = 0; // Replace with actual distance calculation
      if (departureStation === "1" && arrivalStation === "2") {
        distance = 199.831; // Example distance
      } else if (departureStation === "2" && arrivalStation === "1") {
        distance = 199.831; // Example distance
      } 

      var cost = ( item * train * weight) / 100; // Example calculation

      document.getElementById("result").innerHTML = "Cost: Rs. " + cost.toFixed(2); // Display cost with 2 decimal places
    }
  </script>


<div class="container3">
    <div class="button-container">
       
        <a href="Home.html" class="button-container"><button>Back</button></a>
        
    </div>
</body>
</html>