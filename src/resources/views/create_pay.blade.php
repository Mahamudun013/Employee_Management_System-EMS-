@include('header')

<div class="container">
    <h1 class="well">Employer Payment Entry</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form action="{{ url('/pay')}}" method="post">
       	{{csrf_field()}}
          <div class="col-sm-12">              
              <div class="form-group">
                <label>Employer Id</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Id Here.." class="form-control" 
                name="employer_id" required>
              </div>


              <div class="form-group">
                <label>Car Number</label><span class="error">*</span>
                <input type="text" placeholder="Enter Car Number Here.." class="form-control" 
                name="no_car" required>
              </div>


              <div class="form-group">
                <label>amount</label><span class="error">*</span>
                <input type="text" placeholder="Enter Amount Here..." class="form-control" name="amount" required>
              </div>
              
             <div class="form-group">
             <label>Owed Amount</label><span class="error">*</span>
             <input type="text" placeholder="Enter owing Amount Here.." class="form-control" name="remaining" required>
             </div>  
             
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp&nbsp&nbsp&nbsp&nbsp
            <button type="reset" class="btn btn-danger" name="reset">Reset</button>      
          </div>
        </form> 
        </div>
  </div>
</div>
</body>
</html>