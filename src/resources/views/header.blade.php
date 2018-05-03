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
   .error {color: #FF0000;}
  </style>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li .active {
    float: left;
    text-decoration: none;

}

li a {
    display: block;
    color: white;
    font-size: 20px;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    float: right;
}

li a:hover:not(.active) {
    background-color: #B0E0E6;
    text-decoration: none;
}

.active{
  background-color: #cc0000;
  text-decoration: none;
}

table th,tr,td{
  text-align: center;
}

</style>
</head>
<body>
    <ul>
      <li><a class="active" href="{{ url('/home') }}">Employer Dashboard</a></li>
      <li><a href="{{url('/logout')}} ">Log out</a></li>
      <li><a href="{{ url('/create') }}">Employee Registration</a></li>
      <li><a href="{{ url('/payment') }}">Employee Payment Entry</a></li>
      <li><a href="{{ url('/pay_view') }}">Payment Details</a></li>
    </ul>