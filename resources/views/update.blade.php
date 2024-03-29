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
    <h1 class="well">Employer Registration Form</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form  method="post" action="{{ url('update',array($employers->emp_id)) }}" enctype="multipart/form-data">    
       	{{ csrf_field() }}
      
          <div class="col-sm-12">              
              <div class="form-group">    
                <label>Employer Id</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Id Here.." class="form-control" 
                name="employer_id" value="{{ $employers->emp_id }} " >
              </div>


              <div class="form-group">
                <label>Employer Name</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Name Here.." class="form-control" 
                name="employer_name" value="<?php echo "$employers->emp_name"; ?>" >
              </div>


              <div class="form-group">
                <label>Address</label><span class="error">*</span>
                <textarea placeholder="Enter Address Here..." class="form-control" name="address"><?php echo "$employers->emp_address"; ?>
                </textarea>
              </div>
              
            

            <div class="form-group">
             <label>Phone Number</label><span class="error">*</span>
             <input type="text" placeholder="Enter Phone Number Here.." class="form-control" 
             name="phone_number" value="<?php echo "$employers->emp_phn_number"; ?>" >
             </div>  

             <div class="form-group">
             <label>Refference Name</label><span class="error">*</span>
             <input type="text" placeholder="Enter Refference Name Here.." class="form-control" 
             name="ref_name" value="<?php echo "$employers->ref_name"; ?>" >
             </div>  

             <div class="form-group">
             <label>Refference person Phone</label><span class="error">*</span>
             <input type="text" placeholder="Enter Phone Number Here.." class="form-control" 
             name="ref_phone_number" value="<?php echo "$employers->ref_phn_no"; ?>" >
             </div>  

            <!-- <div class="form-group">
              <label>Employer Picture</label><span class="error">* (jpg, jpeg, png, gif) [size: less than 2 MB]</span>
              <input type="file" placeholder="Upload here" class="form-control" name="upload_image" value="">
            </div>  -->

              

            <button type="submit" class="btn btn-primary" name="submit">Update</button>&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="{{ url('/home')}}" class="btn btn-primary">Back</a>  
          </div>
        </form> 
        </div>
  </div>
</div>

@include('footer')

</body>
</html>