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
  <h2>Vehicle Informations</h2>    

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

  <table class="table table-bordered">
    <thead>
      <tr>
        
        <th>Vehicle Number</th>
        <th>Road Permit</th>
        <th>Fitness</th>
        <th>Tax Token</th>
        <th>Insurance</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @if(count($vehicles) > 0)
        @foreach($vehicles as $vehicle)
           <tr>
            <td>{{$vehicle->no_car }}</td>
            <td>{{$vehicle->rp_due }}</td>
            <td>{{$vehicle->fc_due }}</td>
            <td>{{$vehicle->tt_due }}</td>
            <td>{{$vehicle->ic_due }}</td>
            <td>
              <a href='{{ url("/edit_vreg/{$vehicle->v_id}") }}' class="btn btn-success" >Update </a> |
            <a href='{{ url("/del_vreg/{$vehicle->v_id}") }}' class="btn btn-danger" >Delete </a></td>
           </tr>
           @endforeach
         @endif 
    </tbody>
  </table>
  {{$vehicles->links()}}
 
</div>


@include('footer')

</body>
</html>
