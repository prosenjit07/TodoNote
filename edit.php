<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>ToDo'S List App!</title>
</head>

<body>
  <h1 class="text-center py-4 my-4">Update Yout ToDo'S List</h1>
  <?php
                include 'database.php';
                $id=$_GET['id'];
                $sql="SELECT * FROM customer WHERE id=".$id;

                $result = mysqli_query($conn, $sql);

                if($result){   
                    $row=mysqli_fetch_assoc($result);
                    $id=$row['Id'];
                    $name=$row['Name'];
                    $phone=$row['Number'];
                    $address=$row['Address'];
                }
            ?>
  <div class="w-50 m-auto">
    <form action="editaction.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="title">Name</label>
        <input class="form-control" type="text" name="name" id="name" value="<?php global $name; echo $name ?>" placeholder="Edit Here"
          Required>
        <label for="note">Phone Number</label>
        <input class="form-control" type="text" name="phone" id="phone" value="<?php global $phone; echo $phone ?>" placeholder="Edit Here"
          Required>
        <label for="note">Address</label>
        <input class="form-control" type="text" name="address" id="address" value="<?php global $address; echo $address ?>" placeholder="Edit Here"
          Required>
          <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
      </div><br>
      <button class="btn btn-success">Update ToDo'S</button>
    </form>
  </div> 
  <!-- Optional JavaScript; choose one of the two! -->
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
    crossorigin="anonymous"></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>