<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Order Now</title>
  </head>
  <body>
    <h1 class="text-center py-4 my-4">চেক আউট</h1>
    <hr><br>
    <div class="w-50 m-auto">
    <!-- The action attribute specifies the URL or file where the form data will be sent-->
    <!-- method="post" means the form data will be sent via the HTTP POST method. -->

    <form action="data.php" method="post" autocomplete="off">
        <div class="form-group">
            <label for="title">নাম:</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Enter name" Required>
        <br>
            <label for="title">মোবাইল নম্বর:</label>
            <input class="form-control" type="text" name="phone" id="phone" placeholder="Enter phone number" Required>
            <br>
            <label for="title">ডেলিভারি ঠিকানা:</label>
            <input class="form-control" type="text" name="address" id="address" placeholder="Enter delivery address" Required>
        </div><br><br>
        <h3>মূল্য:  ৳৭৯৯ টাকা</h3>
        <button class="btn btn-success">অর্ডার সম্পূর্ণ করুন</button>

    </form> 
    </div>
    
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>