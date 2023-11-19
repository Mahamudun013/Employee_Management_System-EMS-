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

  @if(session('checkInfo'))
           <div style="margin-top:20px;" class="alert alert-danger">
            <b>{{session('checkInfo')}}</b>
           </div>
         @endif

    <h1 class="well">Employer Registration Form</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form  method="post" action="{{url('/store') }}" enctype="multipart/form-data">
       	{{csrf_field()}}
          <div class="col-sm-12">              
              <div class="form-group">
                <label>Employer Id</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Id Here.." class="form-control" 
                name="employer_id" required>
              </div>


              <div class="form-group">
                <label>Employer Name</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Name Here.." class="form-control" 
                name="employer_name" required>
              </div>


              <div class="form-group">
                <label>Address</label><span class="error">*</span>
                <textarea placeholder="Enter Address Here..." class="form-control" name="address"> </textarea>
              </div>
              
            

            <div class="form-group">
             <label>Phone Number</label><span class="error">*</span>
             <input type="text" placeholder="Enter Phone Number Here.." class="form-control" 
             name="phone_number" required>
             </div>  

             <div class="form-group">
             <label>Refference Name</label><span class="error">*</span>
             <input type="text" placeholder="Enter Refference Name Here.." class="form-control" 
             name="ref_name" required>
             </div>  

             <div class="form-group">
             <label>Refference person Phone</label><span class="error">*</span>
             <input type="text" placeholder="Enter Phone Number Here.." class="form-control" 
             name="ref_phone_number" required>
             </div>  

            <div class="form-group">
              <label>Employer Picture</label><span class="error">* (jpg, jpeg, png, gif) [size: less than 2 MB]</span>
              <input type="file" placeholder="" class="form-control" name="upload_image" >
            </div> 


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