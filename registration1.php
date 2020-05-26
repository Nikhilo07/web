
<!DOCTYPE html>
<html>
<head>
<title>Form site</title>
<style type="text/css">
  body{
    padding: 0;
    margin: 0;
  }
  .row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 90%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=radio]
{
  display: flex;
  justify-content: space-around;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}



/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
@media (max-width: 740px) {

  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
 <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="connect.php" method="post">

        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="phone"><i class="fa fa-telephone"></i> Phone No.</label>
            <input type="text" id="phone" name="phone" placeholder="+91">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">
            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
            <label for="service"><i class="fa fa-institution"></i> Service</label>
            <input type="text" id="service" name="service" value="Home Repair & Maintenance">
             <label for="service1"><i class="fa fa-institution"></i>Type of Service</label>
            Electrician:<input type="radio" id="service1" name="service1" value="Electrician">
            Carpenter:<input type="radio" id="service1" name="service1" value="Carpenter">
            Plumber:<input type="radio" id="service1" name="service1" value="Plumber">
            Handy Man:<input type="radio" id="service1" name="service1" value="Handy">
            Tiles & Service:<input type="radio" id="service1" name="service1" value="Tiles">
            Others:<input type="radio" id="service" name="service1 " value="Others"><br>

            
          </div>

         

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Service address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn" name="submit1">
      </form>
    </div>
  </div>

  

</body>
</html>

