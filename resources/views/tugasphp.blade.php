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
    <div class="container">
        <h2>
            <?php
            $name = $_POST["name"];
            $ipk = $_POST["ipk"];
            ?>
            </h2>
            <div class="alert alert-success alert-dismissible fade show">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Sukses!</strong> <?php echo "Nama kamu adalah ";?> <?php echo $name;?> <?php echo "dengan nilai IPK ";?> <?php echo $ipk;?>.
            </div>
        </div>
    </body>
</html>
