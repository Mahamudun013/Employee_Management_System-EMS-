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
  <h2>Employer Payment Entrys</h2>    

        @if(session('info'))
           <div class="alert alert-success">
            {{session('info')}}
           </div>
         @endif

     <form action='{{ url("/search_pay_details") }}' method="post" 
       enctype="multipart/form-data">
          {{csrf_field()}}
       <div class="input-group">
         <input type="text" size="4" style="width:200px;" class="form-control" 
         placeholder="Ex: 2018-05-02" name="search">
                
        <button class="btn btn-primary" type="submit"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </form>
    <br>
        

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SL</th>
        <th>Emp ID</th>
        <th>Car Number</th>
        <th>Amount</th>
        <th>Due</th>
        <th>Due Payment</th>
        <th>Total Due</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @if(count($payments) > 0)
        @foreach($payments as $payment)
           <tr>
            
            <td>{{ $no++ }}</td>
            <td>{{$payment->emp_id }}</td>
            <td>{{$payment->no_car }}</td>
            <td>{{$payment->amount }}</td>
            <td>{{$payment->remaining }}</td>
            <td>{{$payment->paying_owed_amount }}</td>
            <td>{{$payment->total_paying_owed_am }}</td>
            <td>{{$payment->date }}</td>
            <td><a href='{{ url("/edit_pay/{$payment->pay_id}") }}' class="btn btn-success" >Update </a> |
            <a href='{{ url("/del/{$payment->pay_id}") }}' class="btn btn-danger" >Delete </a></td>
           </tr>
           @endforeach
         @endif 
    </tbody>
  </table>
   <div class="alert alert-success">
         <b>Total Amount = {{$total_amount }}</b>
  </div>
 
</div>

@include('footer')

</body>
</html>
