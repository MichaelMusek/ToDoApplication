



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Customer</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
                <h1>Customer Data Insert</h1>

                <form action="dataInsert" method="post" enctype="multipart/form-data">
              @csrf
              <label for="name " class="control-label">Name:</label>
              <input type="text" name="name" class="form-control"><br>
              
              <label for="phone " class="control-label">Phone:</label>
              <input type="text" name="phone" class="form-control"><br>

              <label for="address " class="control-label">Address:</label>
              <input type="text" name="address" class="form-control"><br>

              
              <label for="t_amount " class="control-label">Total Amount:</label>
              <input type="number" name="t_amount" class="form-control"><br>

              <input type="submit" class="btn btn-primary">
            </form>
            </div>
</body>
</html>