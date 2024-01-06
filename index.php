<?php
session_start();

// Check if the success message is set
if (isset($_SESSION['success_message'])) {
    // Display the message
    echo '<div class="alert alert-success">' . $_SESSION['success_message'] . '</div>';

    // Unset the message
    unset($_SESSION['success_message']);
}
?>

<header class="bg-dark py-2">
    <div class="container px-2 px-lg-3 my-2">
        <div class="text-center text-white">
            <!-- <h1 class="display-4 fw-bolder"></h1> -->
            <h4>BDBookShop এ স্বাগতম !</h4>
            <p class="lead fw-normal text-white-50 mb-0">📞হটলাইন:+8801960230293</p><br>
        </div>
        <div>
        </div>

    </div>
</header>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>BDBookShop</title>
<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
</head>

<!-- Section-->
<br>
<div class="container">
    <div class="row">

        <div class="col-md-4">
            <div class="container2">
                <div class="black-box">
                    <img src="images/cover.png" class="img-fluid" alt="Book Image">
                </div>

                <div class="green-box">
                    <img src="images/qr.png" class="zoom-in-out-box" alt="qr" />
                    <style>
                    .container2 {
                        position: relative;
                    }

                    .black-box {
                        position: relative;
                    }

                    .green-box {
                        position: absolute;
                        bottom: 20px;
                        left: 150px;
                        /* left: 150px;
  top: 250px; */
                    }
                    </style>
                </div>
            </div>


            <style>
            .zoom-in-out-box {
                margin: 24px;
                width: 50px;
                height: 50px;
                background: #f50057;
                animation: zoom-in-zoom-out 1s ease infinite;
            }

            @keyframes zoom-in-zoom-out {
                0% {
                    transform: scale(1, 1.5);
                }

                50% {
                    transform: scale(2.5, 3);
                }

                100% {
                    transform: scale(1, 1.5);
                }
            }
            </style>

        </div>
        <div class="col-md-4">
            <h1>📆&#160মাত্র দুই</h1>
            <h1>সপ্তাহে দার </h1>
            <h1>&#160 &#160 &#160 করান</h1>
            <h1 style="color: black;"><mark style="background-color: yellow;">💪🏻স্থায়ী &#160বড়</mark></h1>
            <h1 style="color: black;"><mark style="background-color: #ffc0cb;">ব্যবসা📈👑</mark></h1>
        </div>

        <div class="col-md-4">
            <h2 style="color: black;"><mark style="background-color: #add8e6;">📢বইয়ের প্যাকেজটিতে ফ্রি পাচ্ছেনঃ</mark>
            </h2>

            <h3>📝14 দিনের চেকলিস্ট</h3>
            <h3>🎓বিখ্যাত ১৬ টি কোর্সের </h3>
            <h3 class="shake-animation">Free Drive Link!</h3>
            <h3>🚀Idea Bank</h3>
            <h3 class="shake-animation">⚡Ad Post + Video</h3>
            <style>
            .shake-animation {
                animation: shake 0.5s ease-in-out infinite;
            }

            @keyframes shake {
                0% {
                    transform: translateX(0);
                }

                25% {
                    transform: translateX(-5px);
                }

                50% {
                    transform: translateX(5px);
                }

                75% {
                    transform: translateX(-5px);
                }

                100% {
                    transform: translateX(0);
                }
            }
            </style>

        </div>
    </div>
</div>

<head>

    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <style>
    .custom-btn {
        background-color: red;
        color: white;
        transition: background-color 0.3s ease;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
    }

    .custom-btn:hover {
        background-color: rgb(0, 255, 0);
        cursor: pointer;
    }

    .text-div {
        margin-top: auto;
        padding: 10px;
        border-radius: 5px;
    }
    </style>
</head>

<body>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <div class="btn-group ">
                    <!-- if user not loged in -->
                    <!-- <form id="add-cart" method="GET" action="./?p=checkout">
                        <input type="hidden" name="price" value="<?php echo $inv[0]['price'] ?>">
                        <input type="hidden" name="inventory_id" value="<?php echo $inv[0]['id'] ?>">
                        <input id="inputQuantity" type="hidden" value="1" name="quantity" /> 
                        <button class="animated-button btn" type="submit">👉অর্ডার করুন👈</button> -->
<button class="animated-button btn" onclick="window.location.href='./order.php';">👉অর্ডার করুন👈</button>
                    <!-- </form> -->
                    <style>
                    /* CSS */
                    @keyframes buttonHover {
                        0% {
                            background-color: #FF0000;
                            transform: scale(1);
                        }

                        50% {
                            background-color: #ff9900;
                            transform: scale(1.2);
                        }

                        100% {
                            background-color: #FF0000;
                            transform: scale(1);
                        }
                    }

                    .animated-button {
                        background-color: #FF0000;
                        color: white;
                        border: none;
                        margin: 0px 0px 0px 40px;
                        padding: 10px 20px;
                        font-size: 16px;
                        cursor: pointer;
                        animation: buttonHover 1s infinite;
                        /* Apply animation on hover */
                    }

                    .animated-button:hover {
                        animation: none;
                        /* Disable animation on hover */
                        background-color: #FF0000;
                        transform: scale(1.2);
                    }
                    </style>
                </div>
                <p style="margin:  0px 0px 0px 70px;">⭐⭐⭐⭐⭐</p>
            </div>

            <div class="col-md-4">
                <div>
                    <p><span style="color: black;">মূল্য: </span><span style="color: red;"> <strike>৳১৫৯০/=
                                টাকা</strike></span></p>
                    <p style="color: green;">&#160 &#160 &#160 &#160 ৳৭৯৯/= টাকা
                    <p>
                    <p>💰Cash On Delivery</p>
                </div>
            </div>

            <div class="col-md-4">
                <div>
                    <p>💰Cash On Delivery
                        🏠Free Home Delivery(সারাদেশে দ্রুততম ডেলিভারি)</p>
                    <p class="shake-animation"><span style="color: black;">📞কথা বলতে চাইলে কল:</span><span
                            style="color: black; background-color: orange;">+8801960230293</span></p>
                </div>
            </div>
        </div>
    </div>

    <br>
    <div>
        <center>
            <h2 style="color: black;"><mark style="background-color: #add8e6;">✋ Success Feedbacks 😇</mark></h2>
        </center>
    </div>
    <br>
    <style>
    .customer-photo {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background-color: #ccc;
        /* Placeholder color */
        margin-right: 15px;
    }

    .customer-name {
        margin: 0;
        font-size: 18px;
    }

    .customer-address {
        margin: 5px 0 0;
        font-size: 14px;
        color: #555;
    }

    .feedback-card {
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 20px;
        width: calc(100% - 10px);
        Adjust width for 3 cards in a row with margin margin-bottom: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        box-sizing: border-box;
    }

    .feedback-text p {
        margin: 0;
        font-size: 16px;
        line-height: 1.5;
    }
    </style>
    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="feedback-card">
                        <div class="customer-info">
                            <div class="customer-photo">
                                <img class="customer-photo" src="images/prosenjit.jpg" alt="Customer Photo">
                            </div>
                            <div class="customer-details">
                                <h3 class="customer-name">Tushar Khan ⭐⭐⭐⭐⭐</h3>
                                <p class="customer-address">Mirpur, Dhaka, Bangladesh</p>
                            </div>
                        </div>
                        <div class="feedback-text">
                            <p>
                                আমার বয়স ২১,
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="feedback-card">
                        <div class="customer-info">
                            <div class="customer-photo">
                                <img class="customer-photo" src="images/prosenjit.jpg" alt="Customer Photo">
                            </div>
                            <div class="customer-details">
                                <h3 class="customer-name">John Doe ⭐⭐⭐⭐</h3>
                                <p class="customer-address">Khulna, Bangladesh</p>
                            </div>
                        </div>
                        <div class="feedback-text">
                            <p>
                                Amar age 26, 
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="feedback-card">
                        <div class="customer-info">
                            <div class="customer-photo">
                                <img class="customer-photo" src="images/prosenjit.jpg" alt="Customer Photo">
                            </div>
                            <div class="customer-details">
                                <h3 class="customer-name">Mr.x ⭐⭐⭐⭐⭐</h3>
                                <p class="customer-address">Sadar, Chittagong, Bangladesh</p>
                            </div>
                        </div>
                        <div class="feedback-text">
                            <p>
                                হ্যালো আমার বয়স ৩৫,
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>

        <div>
            <center>
                <h2 style="color: black;"><mark style="background-color: #add8e6;">📢বইয়ের প্যাকেজটিতে ফ্রি
                        পাচ্ছেনঃ</mark></h2>
            </center>
        </div>
        <br>


        <!-- <div class="card-deck">
            <div class="card">
                <img class="" src="images/prosenjit.jpg" alt="Customer Photo">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>
                </div>

            </div>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>
                </div>

            </div>
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal height
                        action.</p>
                </div>

            </div>
        </div> -->

        <style>
        /* Add some custom styles if needed */
        .product-card {
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 10px;
        }

        .customer-photo {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            background-color: #ccc;
            /* Placeholder color */
            margin-right: 15px;
        }
        </style>
        </head>

        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="row">
                                <div class="col-md-6">
                                        <img src="images/qr.png" class="img-fluid" alt="Product 1 Image">
                                    </div>
                                <div class="col-md-6">
                                    <h4>১৬ টি বিশ্বমানের ভিডিও কোর্স</h4>
                                    <p>ভিডিও কোর্সগুলোর বাজার মূল্য প্রায় ১৮ হাজার টাকা। বইটির সাথে ভিডিও কোর্সগুলো পাচ্ছেন একদম ফ্রি।
                                    শুধু মাত্র কিউয়ার কোর্ড স্ক্যান করেই সরাসরি ভিডিওগুলো দেখতে পাবেন।</p>
                                    <p>অনলাইসে যারা সফল হয়েছেন তাদের মূল্যবান বক্তব্য এবং তাদের সফল হওয়ার কৌশল পাচ্ছেন ভিডিওগুলোতে।</p>
                                    <p> ভিডিওগুলো আপনাকে সহজে অনলাইনে ব্যবসা দাড় করাতে সাহায্য করবে।</p>
                                </div>          
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="row">
                                <div class="col-md-6">
                                        <img src="images/cover.png" class="img-fluid" alt="Product 1 Image">
                                    </div>
                                <div class="col-md-6">
                                    <h4>সেলস সীট</h4>
                                    <p>২ সপ্তাহের সেলসীট আপনার ব্যবসাকে গোছালে‍া করবে।</p>
                                </div>          
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-6">
                        <div class="product-card">
                            <div class="row">
                                <div class="col-md-6">
                                        <img src="images/cover.png" class="img-fluid" alt="Product 1 Image">
                                    </div>
                                <div class="col-md-6">
                                    <h4>আইডিয়া ব্যাংক</h4>
                                    <p>আইডিয়া ব্যাংক আপনাকে সহজে এবং অল্পটাকায় ফেসবুকে স্থায়ী ব্যবসা দাড় করতে ১০০% সাহায্য করবে।</p>
                                </div>          
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-card">
                            <div class="row">
                                <div class="col-md-6">
                                        <img src="images/qr.png" class="img-fluid" alt="Product 1 Image">
                                    </div>
                                <div class="col-md-6">
                                    <h4>চেক লিস্ট</h4>
                                    <p>২ সপ্তাহের চেক লিস্ট আপনার ব্যবসাকে গোছালে‍া করবে।</p>
                                </div>          
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer>
<div class="footer">
<div class="row">
  <ul>
<a href="#"><i class="fa fa-facebook"></i></a>
<a href="#"><i class="fa fa-instagram"></i></a>
<a href="#"><i class="fa fa-youtube"></i></a>
<a href="#"><i class="fa fa-twitter"></i></a>
<ul>
</div>

<div class="row">
<ul>
<li><a href="#">Contact us</a></li>
<li><a href="#">Our Services</a></li>
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Terms & Conditions</a></li>
<li><a href="#">About</a></li>
</ul>
</div>

<div class="">
 <p class="text-center">Copyright © 2024 - All rights reserved || Developed By: BDBookShop</p>
</div>
</div>
</footer>

<style>
  body{
margin:0;
overflow-x:hidden;
}

.footer{
background:#000;
padding:30px 0px;
font-family: 'Play', sans-serif;
text-align:center;
}

.footer .row{
width:100%;
margin:1% 0%;
padding:0.6% 0%;
color:gray;
font-size:0.8em;
}

.footer .row a{
text-decoration:none;
color:gray;
transition:0.5s;
}

.footer .row a:hover{
color:#fff;
}

.footer .row ul{
width:100%;
}

.footer .row ul li{
display:inline-block;
margin:0px 30px;
}

.footer .row a i{
font-size:2em;
margin:0% 1%;
}

@media (max-width:720px){
.footer{
text-align:left;
padding:5%;
}
.footer .row ul li{
display:block;
margin:10px 0px;
text-align:left;
}
.footer .row a i{
margin:0% 3%;
}
}
  </style>
            <!-- Bootstrap JS (Optional, for certain functionalities) -->
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        </body>

        </html>

        <style>
        .book-cover {
            object-fit: contain !important;
            height: auto !important;
        }
</style>