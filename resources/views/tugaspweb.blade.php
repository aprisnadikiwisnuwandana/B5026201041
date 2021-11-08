<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tugas Week 10</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
  <form action="php" method="post">
      @csrf
    <div class="container"><br>
        <h1>Isi data di bawah ini!</h1><br>
        </div>
        <div class="container">
        <div class="form-inline">
            <label for="name" class="mb-2 mr-sm-2">Nama:</label>
            <input type="text" class="form-control mb-2 mr-sm-2" id="name" placeholder="Enter your name" name="name" required>
          </div>
            <div class="form-inline">
                  <label for="ipk" class="mb-2 mr-sm-2">IPK:</label>
                  <input type="text" class="form-control mb-2 mr-sm-2" id="ipk" placeholder="Enter IPK" name="ipk" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </body>
