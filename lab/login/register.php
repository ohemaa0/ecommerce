<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- <link rel="stylesheet" href="../css/login.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


<form action="register_process.php" method="POST" class="row g-3">

    <!-- <div class="title">Register</div> -->
    <h2 class="font-weight-bold">Register</h2>


        <!-- <span class="font-weight-normal" style="color: red; display: none;"></span> -->

    <div class="col-md-5">
    <label for="name" class="form-label">Name</label>
    <input type="name" name="name" class="form-control" placeholder="Enter your  name" id="name">
  </div>
  <div class="col-md-5">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" placeholder="Enter your email" id="email">
  </div>
  <div class="col-md-5">
    <label for="phone" class="form-label">Number</label>
    <input type="phone"  name="phone" class="form-control" placeholder="Enter your number" id="phone">
  </div>
  <div class="col-md-5">
    <label for="password" class="form-label">Password</label>
    <input type="password"  name="password" class="form-control" placeholder="Enter password" id="password">
  </div>
  <div class="col-md-5">
    <label for="password" class="form-label">Confirm Password</label>
    <input type="password" name="cpassword"  class="form-control" placeholder="Re-enter password" id="cpassword">
  </div>
  <div class="col-5">
    <label for="address" class="form-label">Address</label>
    <input type="text"  name="address" class="form-control" id="address" placeholder="1234 Main St">
  </div>
  <div class="col-5">
    <label for="address" class="form-label">City</label>
    <input type="text"  name="city" class="form-control" id="city" placeholder="City">
  </div>
  <div class="col-md-5">
    <label for="country" class="form-label">Country</label>
    <input type="text"  name="country" class="form-control" id="country">
  </div>
  <div class="form-group">
    <label></label>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
       I agree to the terms and conditions
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="addcustomer">Submit</button>
  </div>
</form>

  


    <!-- <div class="container">
        <div class="title">Register</div>
        <form actio="#">
            <div class="user-info">
                <div class="inputbox">
                    <span class="details">Name</span>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Number</span>
                    <input type="text" placeholder="Enter your number" required>
                </div>
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="text" placeholder="Enter your name" required>
                </div>
                <div class="input-box">
                    <span class="details">Country</span>
                    <input type="text" placeholder="Enter your country" required>
                </div>
                <div class="input-box">
                    <span class="details">Password</span>
                    <input type="text" placeholder="Enter your password" required>
                </div>
                <div class="input-box">
                    <span class="details">Confirm Password</span>
                    <input type="text" placeholder="Re-enter password" required>
                </div>
            </div>

            <div class="gender-info">
                <span class="gender-title"></span>
                <div class="category">
                    <label for="">
                        <span class="dot one"></span>
                        <span class="gender">Male</span>
                    </label>
                    <label for="">
                        <span class="dot one"></span>
                        <span class="gender">Female</span>
                    </label>
                </div>
            </div>

            <div class="button">
                <input type="submit" value="Register">
            </div>
        </form>
    </div> -->
</body>
</html>
