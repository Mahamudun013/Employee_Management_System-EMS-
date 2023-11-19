<nav style="border-radius: 0px;" class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" class="active" href="{{ url('/home')}}">Employee Management System</a>
    </div>
    <ul class="nav navbar-nav">
         <li><a class="active" href="{{ url('/home') }}">Home</a></li>
         <li><a href="{{url('/check')}}" ><span class="glyphicon glyphicon-envelope">
          </span> Notification </a></li>
         <li> <a href="{{ url('/pay_view') }}">Payment Details</a></li>
         <li><a href="{{ url('/vehicle_reg_view') }}"> Vehicle Info</a></li>
         <li><a href="{{ url('/create') }}">Employee Registration</a></li>
         <li><a href="{{ url('/payment') }}">Employee Payment Entry</a></li>
         <li><a href="{{ url('/car_form') }}">Vehicle Register</a></li>
         <li><a href="{{url('/logout')}}"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>


    </ul>
  </div>
</nav>
