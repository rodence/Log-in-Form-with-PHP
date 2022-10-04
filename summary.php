<?php
include 'dbc.php';

$query ="SELECT * FROM form ORDER BY date DESC LIMIT 1";

$result=mysqli_query($connect,$query);

$singleRow = mysqli_fetch_row($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrtion Information</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                This is your registration information
              </div>
              <div class="card-body">
                <b>First Name</b> : <span class="card-text"><?php echo $singleRow['0']; ?> </span><br>
                <b>Last Name</b> : <span class="card-text"><?php echo $singleRow['1']; ?> </span><br>
                <b>Address</b> :<span class="card-text"> <?php echo $singleRow['2']; ?></span><br>
                <b>Birthday</b> : <span class="card-text"><?php echo $singleRow['3']; ?> </span><br>
                <b>Phone</b> : <span class="card-text"><?php echo $singleRow['4']; ?> </span><br>
                <b>Email Name</b> : <span class="card-text"> <?php echo $singleRow['5']; ?></span><br>
                <b>School</b> : <span class="card-text"> <?php echo $singleRow['6']; ?></span><br>
                <b>Gender</b> : <span class="card-text"> <?php echo $singleRow['7']; ?></span><br>

              </div>
            </div>
        </div>
    </div>        
</div>

</body>
</html>