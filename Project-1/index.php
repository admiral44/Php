<?php include("./conn/conn.php") ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <style>
    * {
      margin: 0%;
      padding: 0%;
      box-sizing: border-box;
    }
  </style>

  <title>Home</title>
</head>

<body>
  <?php include("./navBar/navbar.php");?>
  
  <h1>All USER INFORMATION</h1>

  <div class="container">

    <table class="table table-hover text-center">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Number</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>

        <?php
        $sql = " SELECT `p_name`, `p_no`, `p_email` FROM `Personal_info` ";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          $no = 1;
          while ($row = $result->fetch_assoc()) {
        ?>

            <tr>
              <th><?php echo $no; ?></th>
              <td><?php echo $row["p_name"]; ?></td>
              <td><?php echo $row["p_no"]; ?> </td>
              <td><?php echo $row["p_email"]; ?> </td>
            </tr>

          <?php
            $no++;
          }
        } else {
          ?>
          <tr>
            <td>
              <p>0 Result Found</p>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>
<?php $conn->close(); ?>