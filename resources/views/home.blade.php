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
       #bdy{
       
       }
       #contact{
        margin-bottom: 1px;
       }

  </style>
</head>
<body id="bdy">

@include('header')

<div class="container">
  <h2>Employee's info</h2>    

        @if(session('info'))
           <div class="alert alert-success">
            {{session('info')}}
           </div>
         @endif

        @if(session('delinfo'))
           <div class="alert alert-danger">
            {{session('delinfo')}}
           </div>
         @endif

         <!-- <form action="" method="post" enctype="multipart/form-data">
           <input type="text" name="emp_search" class="form-group" placeholder="Search by ID">
           <button type="submit" name="submit" class="btn btn-primary"><i class="glyphicon glyphicon-search"></i></button>

         </form> -->

    <form action="{{url('/emp_search')}}" method="post" enctype="multipart/form-data">
          {{csrf_field()}}
      <div class="input-group">
         <input type="text" size="4" style="width:200px;" class="form-control" placeholder="Search by ID" name="empSearchId">
                
        <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </form>
      <br>


       
  <table class="table table-bordered" width="">
    <thead>
      <tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
        <th>Emp Photos</th>
        <th>Address</th>
        <th>phone</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @if(count($employers) > 0)
        @foreach($employers as $employer)
           <tr>
            <td>{{$employer->emp_id }}</td>
            <td>{{$employer->emp_name }}</td>
            <td><img src="public/{{ $employer->emp_pic }}"  style="border-radius:50%;" 
              height="100px"  width="120px"/>
            <br>
             </td>
            <td>{{$employer->emp_address }}</td>
            <td>{{$employer->emp_phn_number }}</td>
            <td> <a href='{{ url("/details/{$employer->emp_id}") }}' class="btn btn-primary">Details </a> |
             <a href='{{ url("/edit/{$employer->emp_id}") }}' class="btn btn-success">Update </a> |
              <a href='{{ url("/delete/{$employer->emp_id}") }}' class="btn btn-danger" >Delete </a></td>
           </tr>
           @endforeach
         @endif  
    </tbody>
  </table>
    {{$employers->links()}}
</div>

@include('footer')
</body>

</html>
