<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch Data</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
      <table class="table my-4">
        <thead class="table-dark">
        <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Email</th>
    </tr>
        </thead>
        <tbody>
          <?php
          $hostname = "localhost";
          $dbUser = "root";
          $dbPass = "";
          $dbName = "students";

          $conn = mysqli_connect($hostname, $dbUser, $dbPass, $dbName);

          if(!$conn) {
              die("Connection is not successfull ?");
          };

          $sql = "SELECT * FROM users";
          $result = mysqli_query($conn, $sql);

          while($row = mysqli_fetch_array($result)) {
                $id = $row["id"];
                $firstName = $row["first_name"];
                $lastName = $row["last_name"];
                $email = $row["email"];
            echo "<tr>
            <th scope ='row'>$id</th>
            <td>$firstName</td>
            <td>$lastName</td>
            <td>$email</td>
            </tr>";
          }
          ?>
        
        </tbody>
        </table>
    </div>
    <!-- link bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>