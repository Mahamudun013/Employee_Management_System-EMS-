@include('header')

<div class="container">
    <h1 class="well">Employer Payment Entry</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form action="{{ url('update_pay',array($payments->pay_id)) }}" method="post">
       	{{csrf_field()}}
          <div class="col-sm-12">              
              <div class="form-group">
                <label>Employer Id</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Id Here.." class="form-control" 
                name="employer_id" value="{{ $payments->emp_id }}" required>
              </div>


              <div class="form-group">
                <label>Car Number</label><span class="error">*</span>
                <input type="text" placeholder="Enter Car Number Here.." class="form-control" 
                name="no_car" value="{{ $payments->no_car }}" required>
              </div>


              <div class="form-group">
                <label>Amount</label><span class="error">*</span>
                <input type="text" placeholder="Enter Amount Here..." class="form-control" name="amount" value="{{ $payments->amount }}" required>
              </div>
              
             <div class="form-group">
             <label>Owed Amount</label><span class="error">*</span>
             <input type="text" placeholder="Enter owing Amount Here.." class="form-control" name="remaining" value="{{ $payments->remaining }}" required>
             </div>  

              <div class="form-group">
                <label>Total Amount</label><span class="error">*</span>
                <input type="text" placeholder="Enter Amount Here..." class="form-control" name="total_amount" value="{{ $payments->total_amount }}" required>
              </div>
              
             
             
             <button type="submit" class="btn btn-primary" name="submit">Update</button>&nbsp&nbsp&nbsp&nbsp&nbsp
            <a href="{{ url('/pay_view')}}" class="btn btn-primary">Back</a>       
          </div>
        </form> 
        </div>
  </div>
</div>
</body>
</html>