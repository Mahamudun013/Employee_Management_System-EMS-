<!DOCTYPE html>
<html>
<head>
  <title>EMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
     table th,tr,td{

        text-align: center;
     }

  </style>
</head>
<body>
  
@include('header')

<div class="container">
    <h1 class="well">Employee Payment Entry</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form action="{{ url('/pay')}}" method="post">
        {{csrf_field()}}
          <div class="col-sm-12">              
              <div class="form-group">
                <label>Employee Id</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employee Id Here.." class="form-control" 
                name="employer_id" required>
              </div>


              <div class="form-group">
                <label>Vehicle Number</label><span class="error">*</span>
                <input type="text" placeholder="Enter Vehicle Number Here.." class="form-control" 
                name="no_car" required>
              </div>


              <div class="form-group">
                <label>Amount</label><span class="error">*</span>
                <input type="text" placeholder="Enter Amount Here..." class="form-control" name="amount" required>
              </div>
              
             <!-- <div class="form-group">
             <label>Owed Amount</label><span class="error">*</span>
             <input type="text" placeholder="Enter owing Amount Here.." class="form-control" name="remaining" required>
             </div>  --> 
             
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp&nbsp&nbsp&nbsp&nbsp
            <button type="reset" class="btn btn-danger" name="reset">Reset</button>      
          </div>
        </form> 
        </div>
  </div>
</div>

@include('footer')

</body>
</html>