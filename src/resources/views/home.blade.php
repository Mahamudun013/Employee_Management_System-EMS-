@include('header')

<div class="container">
  <h2>Employee's info</h2>    

        @if(session('info'))
           <div class="alert alert-success">
            {{session('info')}}
           </div>
         @endif

  <table class="table table-bordered" width="">
    <thead>
      <tr>
        <th>Employee ID</th>
        <th>Employee Name</th>
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
            <td>{{$employer->emp_address }}</td>
            <td>{{$employer->emp_phn_number }}</td>
            <td> <a href='{{ url("/edit/{$employer->emp_id}") }}' class="btn btn-success">Update </a> |
              <a href='{{ url("/delete/{$employer->emp_id}") }}' class="btn btn-danger" >Delete </a></td>
           </tr>
           @endforeach
         @endif  
    </tbody>
  </table>
    {{$employers->links()}}
</div>
</body>
</html>
