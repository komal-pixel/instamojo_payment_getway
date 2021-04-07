<!DOCTYPE html>
<html>
<head>
    <title> Instamojo Payment</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container">
    <dir class="text-center">
        <h3>Instamojo Payment </h3>
    </dir>
    <form method="POST" action="Payment_proceed.php">
        <div class="row">
        <div class="col-md-6 ">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
         <div class="col-md-6">
            <label>Amount</label>
            <input type="text" name="amount" class="form-control">
        </div>
    </div>
    <div class="row">
            <div class="col-md-6 ">
            <label>Mobile_No</label>
            <input type="text" name="phone" class="form-control">
        </div>
         <div class="col-md-6">
            <label>Item</label>
            <input type="text" name="buy_name" class="form-control" value="Samsung Mobile">
        </div> 
    </div>

    <div class="row ">
        <div class="col-md-12 mt-4">
        <input type="submit" value="Payment Proceed" name="submit" class="btn btn-success" />
            
        </div>
    </div>
    </form>
</div>
</body>
</html>