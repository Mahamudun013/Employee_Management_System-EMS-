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
	<div class="jumbotron" style="">

  	<h2 style="text-align: center; color: #4E6FF3;">Employee Details Info</h2><hr>
   

		<!-- <div class="empImg"> 
      <img src="images/1213.jpg" alt="no image" height="200px" width="200px" />

    </div>  -->
    <div style="margin-top: 0px;" >
           	<h2><b>Employee ID:</b>&nbsp&nbsp&nbsp{{ $employee->emp_id}}</h2>

            <h2><b>Employee Name:</b>&nbsp&nbsp&nbsp{{$employee->emp_name}}</h2>

            <h2><b>Employee Address:</b>&nbsp&nbsp&nbsp{{$employee->emp_address}}</h2>

            <h2><b>Employee Phone:</b>&nbsp&nbsp&nbsp{{$employee->emp_phn_number}} </h2>

            <!--  <img src="" height="100px" width="100px"> -->

            <h2><b>Refference Person: </b>&nbsp&nbsp&nbsp{{$employee->ref_name}}</h2>

            <h2><b>Refference Phone:</b>&nbsp&nbsp&nbsp{{$employee->ref_phn_no}}</h2>
            <br><br>
          </div>

           <div class="button">
             <a href='{{ url("/home") }}' class="btn btn-primary">Back to Home</a>
           </div><br>
             <br><br>

	</div>
</div> 

@include('footer')

</body>
</html>