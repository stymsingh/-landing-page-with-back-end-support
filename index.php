<?php

   if(isset($_POST[submit])){
   $from = $_POST['email'];
   $to = 'singhsatyam1221@gmail.com';
   $subject='Email Signup';
   $body = 'PLease subscribe me to the email-list';
     if(!$_POST['email'])
      {
          $emailError = '<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
          Please enter a valid email address</div>';
      }

      if(!$emailError){
        if(mail($to, $subject, $body, $from)){
          $result='<div class="text-success"><i class="fa fa-check" aria-hidden="true"></i> Thank You we\'ll keep you updated</div>';
        }
        else{
          $result='<div class="text-danger"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Error , try again later</div>';
        }
      }
  }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Tinos" rel="stylesheet">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
</head>

<body>
  <section id="logo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <img src="images/my-logo.png" class="img-fluid text-center d-block mx-auto" alt="">
        </div>
      </div>
    </div>
  </section>

  <section id="intro">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="text-center ">
            We're working hard. We're ready to launch in
          </p>
        </div>
      </div>
    </div>
  </section>

  <section id="counter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="counter text-center"></div>
        </div>
      </div>
    </div>
  </section>

  <section id="icons">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="icon text-center">
            <ul class="list-inline">
              <a href="https://twitter.com/">
              <li class="list-inline-item"> <i class="fa twitter fa-twitter-square fa-4x " aria-hidden="true"></i></li>
              </a>
              <a href="https://www.whatsapp.com/">
              <li class="list-inline-item"> <i class="fa whatsapp fa-whatsapp fa-4x " aria-hidden="true"></i></li>
              </a>
              <a href="https://www.facebook.com/profile.php?id=100013531503413">
              <li class="list-inline-item"><i class="fa facebook fa-facebook fa-4x " aria-hidden="true"></i></li>
              </a>
              <a href="https://www.instagram.com/satyam1245/">
              <li class="list-inline-item"><i class="fa instagram fa-instagram fa-4x " aria-hidden="true"></i></li>
              </a>
              <a href="https://www.linkedin.com/in/satyam-singh-763666126/">
              <li class="list-inline-item"><i class="fa linkedin fa-linkedin-square fa-4x" aria-hidden="true"></i></li></a>
            </ul>
          </div>

          <section id="signup">
            <div class="container">
              <div class="row justify-content-center">
                <div class="col-md-12">
                  <form class="form-inline text-center" role="form" method="post" action="#signup">
                    <input type="email" class="input form-control form-control-sm" name="email" placeholder="Enter Email" style="width:290px; height:30px;" />
                    <button type="submit" class="btn btn-signup btn-sm" name="submit" value="send">Submit</button>
                  </form>
                    <?php  $emailError; ?>
                    <?php  $result; ?>
                </div>
              </div>
            </div>
          </section>

        </div>
      </div>
    </div>
  </section>

</body>

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.slim.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>

<!-- script files for the counter clock -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>

<script>
  $(function() {
    $('.counter').countdown({
      date: "November 29, 2017 06:00:00"
    });
  });
</script>

</html>
