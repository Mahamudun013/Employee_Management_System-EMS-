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
  <h2>Notifications</h2>    

      <div class="alert alert-info">
      <?php

         foreach($item as $a=>$b){

           foreach($b as $c=>$d){
           
            if($d>0){

           echo $c." date " .$d." days to left.<br>";

         }

         
     }
     echo "<br>";
    }


?>
        

</div>
</div>

@include('footer')

</body>
</html>
