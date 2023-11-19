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
    <h1 class="well">Employer Payment Entry</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form action="{{ url('update_pay',array($payments->pay_id)) }}" method="post" >
        {{csrf_field()}}
          <div class="col-sm-12">              
              <div class="form-group">
                <label>Employer Id</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Id Here.." class="form-control" 
                name="employer_id" value="{{ $payments->emp_id }}" >
              </div>


              <div class="form-group">
                <label>Car Number</label><span class="error">*</span>
                <input type="text" placeholder="Enter Car Number Here.." class="form-control" 
                name="no_car" value="{{ $payments->no_car }}" >
              </div>


              <div class="form-group">
                <label>Amount</label><span class="error">*</span>
                <input type="text" placeholder="Enter Amount Here..." class="form-control" name="amount" value="{{ $payments->amount }}" >
              </div>
              
             <button type="submit" class="btn btn-primary" name="submit">Update</button>&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="{{ url('/')}}" class="btn btn-primary">Back</a>       
          </div>
        </form> 
        </div>
  </div>
</div>

@include('footer')

</body>
</html>