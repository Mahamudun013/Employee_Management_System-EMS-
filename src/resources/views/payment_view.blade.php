@include('header')

<div class="container">
  <h2>Employee's Payment Entrys</h2>    

        @if(session('info'))
           <div class="alert alert-success">
            {{session('info')}}
           </div>
         @endif

  <table class="table table-bordered" width="90%">
    <thead>
      <tr>
        <th>Emp ID</th>
        <th>Car Number</th>
        <th>Amount</th>
        <th>Owing Amount</th>
        <th>Total Amount</th>
        <th>Date-Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @if(count($payments) > 0)
        @foreach($payments as $payment)

           <tr>
            <td>{{$payment->emp_id }}</td>
            <td>{{$payment->no_car }}</td>
            <td>{{$payment->amount }}</td>
            <td>{{$payment->remaining }}</td>
            <td>{{$payment->total_amount }}</td>
            <td>{{$payment->date }}</td>
            <td><a href='{{ url("/edit_pay/{$payment->pay_id}") }}' class="btn btn-success" >Update </a> |
            <a href='{{ url("/del/{$payment->pay_id}") }}' class="btn btn-danger" >Delete </a></td>
           </tr>
           @endforeach
         @endif 
    </tbody>
  </table>
    {{$payments->links()}}
</div>

</body>
</html>
