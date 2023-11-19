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

     .empImg{

       float: right;   
       }

  </style>
</head>
<body>

@include('header')

<div class="container">
    <h1 class="well">Employer Registration Form</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form  method="post" action="{{ url('') }}">    
       	{{ csrf_field() }}
      
          <div class="col-sm-12">              
              <div class="form-group">    
                <label>Employer Id</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Id Here.." class="form-control" 
                name="employer_id" value="{{ $employers['emp_id'] }} " >
              </div>


              <div class="form-group">
                <label>Employer Name</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Name Here.." class="form-control" 
                name="employer_name" value="<?php echo "$employers->emp_name"; ?>" >
              </div>


              <div class="form-group">
                <label>Address</label><span class="error">*</span>
                <textarea placeholder="Enter Address Here..." class="form-control" name="address"> 
                    <?php echo "$employers->emp_address"; ?>
                </textarea>
              </div>
              
            

            

              


            <button type="submit" class="btn btn-primary" name="submit">Update</button>&nbsp&nbsp&nbsp&nbsp&nbsp
            <button type="reset" class="btn btn-danger" name="reset">Reset</button>      
          </div>
        </form> 
        </div>
  </div>
</div>

@include('footer')
</body>
</html>