<!DOCTYPE html>
<html class="no-js">

<head>
    <title>Patient Signup</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS links -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/main.css" class="color-switcher-link">
    <link rel="stylesheet" href="css/shop.css">
    <link rel="stylesheet" type="text/css" href="./css/inbox.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

    <style>
        .inpbox {
            border: 1px solid #ddd;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }
        input, textarea {
            width: 90%;
            outline: none;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <div class="preloader_image"></div>
    </div>

    <div id="canvas">
        <div id="box_wrapper">

            <!-- Header -->
            <?php include('./comnpages/header.php'); ?>

            <section class="page_breadcrumbs ls ms section_padding_25 bg_image">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2 class="small">Patient SignUp</h2>
                        </div>
                    </div>
                    <ol class="breadcrumb bottom_breadcrumbs">
                        <li><a href="./">Home</a></li>
                        <li class="active">Patient SignUp</li>
                    </ol>
                </div>
            </section>

            <section class="ls columns_padding_25 section_padding_top_100 section_padding_bottom_100">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="module-header">Registration</h3>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8 to_animate" data-animation="scaleAppear">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <!-- Name -->
                                    <div class="col-sm-12">
                                        <div class="inpbox">
                                            &nbsp <i class="fa fa-user highlight2"></i>
                                            <input type="text" name="name" placeholder="Full Name" required>
                                        </div>
                                    </div>

                                    <!-- Image (Optional) -->
                                    <div class="col-sm-6">
                                        <div class="inpbox">
                                            &nbsp <i class="fas fa-image highlight2"></i>
                                            <input type="file" name="image" accept="image/*">
                                        </div>
                                    </div>

                                    <!-- Email -->
                                    <div class="col-sm-6">
                                        <div class="inpbox">
                                            &nbsp <i class="fa fa-envelope highlight2"></i>
                                            <input type="email" name="emailid" placeholder="Email Address" required>
                                        </div>
                                    </div>

                                    <!-- Contact -->
                                    <div class="col-sm-6">
                                        <div class="inpbox">
                                            &nbsp <i class="fa fa-phone highlight2"></i>
                                            <input type="text" name="contact" placeholder="Contact Number" pattern="[0-9]{10}" maxlength="10" required>
                                        </div>
                                    </div>

                                    <!-- Password -->
                                    <div class="col-sm-6">
                                        <div class="inpbox">
                                            &nbsp <i class="fas fa-key highlight2"></i>
                                            <input type="password" name="password" placeholder="Password" minlength="6" required>
                                        </div>
                                    </div>

                                    <!-- Gender -->
                                    <div class="col-sm-12">
                                        <center>
                                            <label><input type="radio" name="gender" value="Male" required> Male</label>
                                            &nbsp;&nbsp;
                                            <label><input type="radio" name="gender" value="Female" required> Female</label>
                                        </center>
                                    </div>

                                    <!-- Address -->
                                    <div class="col-sm-12">
                                        <div class="form-group bottommargin_0 inpbox">
                                            <textarea rows="3" name="address" placeholder="Address" required></textarea>
                                        </div>
                                    </div>

                                    <!-- Submit Button -->
                                    <div class="col-sm-12 bottommargin_0">
                                        <div>
                                            <button type="submit" id="contact_form_submit" name="submit" class="theme_button color2 wide_button margin_0">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="col-md-4 to_animate mt-4" data-animation="scaleAppear">
                            <img src="images/register.jpg" style="width:100%; height:360px;">
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <?php include('./comnpages/footer.php'); ?>

        </div>
    </div>

    <!-- JS -->
    <script src="js/compressed.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<?php 
include "dbconfigure.php";

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $emailid = trim($_POST['emailid']);
    $contact = trim($_POST['contact']);
    $password = trim($_POST['password']);
    $gender = $_POST['gender'];
    $address = trim($_POST['address']);

    // Image upload (optional)
    $image = "";
    if (!empty($_FILES['image']['name'])) {
        $image = "images/Patients/" . basename($_FILES['image']['name']);
        move_uploaded_file($_FILES['image']['tmp_name'], $image);
    } else {
        $image = "images/Patients/default.png"; // optional default placeholder
    }

    // Ensure all required fields are filled
    if (!empty($name) && !empty($emailid) && !empty($contact) && !empty($password) && !empty($gender) && !empty($address)) {
        $query = "INSERT INTO patient (patientname, image, gender, emailid, contact, password, address)
                  VALUES ('$name', '$image', '$gender', '$emailid', '$contact', '$password', '$address')";
        $n = my_iud($query);

        if ($n == 1) {
            echo '<script>alert("Signup Successful"); window.location="patientlogin.php";</script>';
        } else {
            echo '<script>alert("Something went wrong, please try again.");</script>';
        }
    } else {
        echo '<script>alert("Please fill in all the required fields.");</script>';
    }
}
?>
