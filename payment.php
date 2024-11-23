<!DOCTYPE html>
<html>
<head>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f4f4f4;

  background-image: url('why1.png');
  background-size: cover;
  background-repeat: no-repeat;
      
}

.container {
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

.image-container {
  width: 20%;
  float: left;
  margin-right: 20px;
}

.image-container img {
  width: 100%;
}

.form-container {
  width: 45%;
  float: left;
}

.form-container label {
  display: block;
  margin-bottom: 5px;
}

.form-container input[type="text"],
.form-container input[type="email"],
.form-container input[type="password"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

.form-container input[type="submit"] {
  background-color: #007bff;
  color: #fff;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.form-container input[type="submit"]:hover {
  background-color: #0056b3;
}

.form-container p {
  text-align: center;
  margin-top: 10px;
}

.clear {
  clear: both;
}




/*payment button*/



</style>
</head>
<body>

<div class="container">
  <h1>Book Your Tickets</h1>

  <div class="image-container">
    <img src="ticket-booking.png" alt="Train Station">
  </div>

  <div class="form-container">
    <label for="email">Your Email</label>
    <input type="email" id="email" name="email" placeholder="email@example.com" required>

    <label for="card-number">Card Number</label>
    <input type="text" id="card-number" name="card-number" placeholder="Card Number" required>

    <div style="display: flex; justify-content: space-between;">
      <div>
        <label for="expiry">Expires</label>
        <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
      </div>
      <div>
        <label for="cvc">CVC</label>
        <input type="password" id="cvc" name="cvc" placeholder="CVC" required>
      </div>
    </div>

    <label for="holder-name">Holder Name</label>
    <input type="text" id="holder-name" name="holder-name" placeholder="Name on Card" required>

  <a href="success.html"> <input type="submit" value="Pay Now"></a>


     <!--<input type="submit" value="Pay Now" id="pay-now">
	<div id="payment-status">-->







    <p>Payments are secure and encrypted.</p>
  </div>

  <div class="clear"></div>
</div>

</body>
</html>