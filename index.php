<?php

    if(isset($_POST['submit'])){

        if(empty($_POST['firstName'])){

            $fast_a = 'First Name is Required.';

        }  else{

            $first_name = $_POST['firstName'];

        }

        if(empty($_POST['lestName'])){

            $lese_b = 'Lest Name is Required.';

        }  else{

            $lest_name = $_POST['lestName'];

        }

        if(empty($_POST['yourEmail'])){

            $mail_m = 'Your email is Required.';

        }  else{

            $your_email = $_POST['yourEmail'];

        }
        
        $your_mass = $_POST['yourMass'];


        if(!empty($first_name) && !empty($lest_name) && !empty($your_email)){

            $massege = '<h2>' . $first_name . ' ' . ' ' . $lest_name . '</h2>' . '<h5>'. $your_email . '</h5>' . '<p>' . $your_mass .'</p>';

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

            // More headers
            $headers .= 'From: <info@freelancerdaud.com>' . "\r\n";
            $headers .= 'Cc: admin@freelancerdaud.com' . "\r\n";

            $mail = mail('freelancerdaud@gmail.com','FD Contact Form', $massege, $headers );

            if($mail){

                $success = 'Mail Sand Success.';
            }



        }


               

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta-Tag-Start -->
    <meta charset="UTF-8">
    <meta name="description" content="I AM FREELANCER DAUD">
    <meta name="keywords" content="HTML, CSS, JAVASCRIPT, JQUERY, PHP">
    <meta name="author" content="FREELANCER DAUD">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Meta-Tag-End -->
    <!--Website-Title-->
    <title>Demo</title>
    <!-- Link-favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/Fevicon/freeLancer-Daud.png">
    <!-- Link-Bootstrap-Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-v4.4.1.min.css">
    <!-- Link-Font-Awesome-Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome-v5.12.0.all.min.css">
    <!-- Link-Default-Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/default.css">
    <!-- Link-Main-Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <!-- Link-Responsive-Css -->
    <link rel="stylesheet" type="text/css" href="assets/css/Responsive.css">
</head>

<body>
    <!-- Header Start -->
    <header class="text-center">
        <h1> Contact form PHP</h1>
    </header>
    <!-- Header End -->

    <!-- Main Start  -->
    <main>
        <section class="contate mt-200 mb-200">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4"></div>
                    <div class="col-xl-6">
                        <div class="title text-center">
                            <h3>Contact Us</h3>
                        </div>
                        <br><br>
                        <div class="contact_form">
                            <form action="" method="post">
                                <label for="">First name *</label> <br>
                                <input type="text" value="<?php if(isset($first_name)){echo $first_name;} ?>" name="firstName" id="" Required placeholder="first name">
                                <br>
                                <span><?php if(isset($fast_a)){echo $fast_a;} ?> </span>
                                <br>
                                <label for="">lest name *</label> <br>
                                <input value="<?php if(isset($lest_name)){echo $lest_name;} ?>" type="text" name="lestName" id="" Required placeholder="lest name">
                                <br>
                                <p> <?php if(isset($lese_b)){ echo $lese_b; } ?> </p>
                                <br>
                                <label for="">Your Mail *</label> <br>
                                <input value="<?php if(isset($your_email)){echo $your_email;} ?>" type="email" name="yourEmail" id="" Required placeholder="meil name">
                                <br>
                                <p> <?php if(isset($mail_m)){ echo $mail_m; } ?> </p>
                                <br>
                                <label for="">Your Massege</label> 
                                <br>
                                <textarea name="yourMass" id="" cols="30" rows="10" placeholder="your massege"><?php if(isset($your_mass)){echo $your_mass;} ?></textarea>
                                <br>
                                <br>
                                <input type="submit" name="submit" id="" value="Sand Me">
                                <br>
                                <br>
                            </form>
                        </div>
                        <br><br>
                        <div class="success">
                            <?php if(isset($success)){echo $success;} ?>
                        </div>
                    </div>
                    <div class="col-xl-2"></div>
                </div>
            </div>
        </section>



    </main>
    <!-- Main End -->

    <!-- Footer Start -->
    <footer></footer>
    <!-- Footer End -->

    <!-- Js-here-Start -->

    <script src="assets/js/jQuery-v3.4.1.js"></script>
    <script src="assets/js/jQuery-v3.4.1-ajax.js"></script>
    <!-- Link-Popper-JS -->
    <script src="assets/js/popper-v2019.min.js"></script>
    <!-- Link-Bootstrap-JS -->
    <script src="assets/js/bootstrap-v4.4.1.min.js"></script>
    <!-- Link-Font-awesome-JS -->
    <script src="assets/js/fontawesome-v5.12.0.all.min.js"></script>
    <!-- Link-MAIN-JS -->
    <script src="assets/js/main.js"></script>
    <!-- Js-here-End -->
</body>

</html>