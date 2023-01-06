<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
   <div class="container">
   <form class="row g-3" action="auth.php"  method="POST">
  <div class="col-md-6">
  <label for="inputName" class="form-label">Name</label>
    <input type="text" class="form-control" id="inputName" required name="name">
  </div>
  <div class="col-md-6">
    <label for="inputDept" class="form-label">Department</label>
    <select id="inputDept" class="form-select" name="department" >
      <option selected>Sindhi</option>
      <option>Computer Science</option>
      <option>Information Technology</option>
      <option>English</option>
      <option>Computer Science</option>
    </select>
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Sector 3, Sukkur TownShip" required name="address">
  </div>


  <div class="col-md-2">
    <label for="inputBatch" class="form-label">Batch</label>
    <input type="text" class="form-control" id="inputBatch" required maxlength="4" value="<?php echo date("Y");?>"  name="batch">
  </div>

  <div class="col-md-2">
    <label for="inputRoll" class="form-label">Roll No</label>
    <input type="text" class="form-control" id="inputRoll" name="roll_no">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="upload">Insert</button>
  </div>
</form>


   </div>












    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>