<?php
if ($_POST["submit"]) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $phone = $_POST['phone'];
  $from = 'Contact Form';
  $to = '20tibbygt06@gmail.com';
  $subject = 'Message from Contact Form';

  $body ="From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";
  // Check if name has been entered
  if (!$_POST['name']) {
    $errName = 'Please enter your name';
  }

  // Check if email has been entered and is valid
  if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $errEmail = 'Please enter a valid email address';
  }

  //Check if message has been entered
  if (!$_POST['message']) {
    $errMessage = 'Please enter your message';
  }
  //Check if simple anti-bot test is correct
  if (!$_POST['phone']) {
    $errPhone = 'Please enter your phone number';
  }
  // If there are no errors, send the email
  if (!$errName && !$errEmail && !$errMessage && !$errPhone) {
    if (mail ($to, $subject, $body, $from)) {
      $result='<div class="alert alert-success">Thank You! We will be in touch</div>';
    } else {
      $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="We are the Almighty Alpha Chapter of Sigma Lambda Beta residing at the University of Iowa">
  <meta name="author" content="Uiowa Betas">

  <!-- Facebook -->
  <meta property="og:site_name" content="UiowaBetas.com">
  <meta property="og:title" content="Contact - Sigma Lambda Beta - Alpha Chapter">
  <meta property="og:url" content="http://uiowabetas.com/">
  <meta property="og:image" content="http://uiowabetas.com/img/other/crest.png">
  <meta property="og:description" content="We are the Almighty Alpha Chapter of Sigma Lambda Beta residing at the University of Iowa">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@uiowabetas">
  <meta name="twitter:site" content="http://uiowabetas.com/">
  <meta name="twitter:title" content="Contact - Sigma Lambda Beta - Alpha Chapter">
  <meta name="twitter:description" content="We are the Almighty Alpha Chapter of Sigma Lambda Beta residing at the University of Iowa">
  <meta name="twitter:image:src" content="http://uiowabetas.com/img/other/crest.png">
  <title>Contact - Sigma Lambda Beta - Alpha Chapter</title>

  <!-- Bootstrap Core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  <!-- Custom CSS -->
  <link href="css/business-casual.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

  <!-- Fonts -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
  <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
        <a class="navbar-brand" href="/">Uiowa Betas</a>
      </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="about.html">About Us</a>
          </li>
          <li>
            <a href="recruitment.html">Recruitment</a>
          </li>
          <li>
            <a href="brothers.html">Brothers</a>
          </li>
          <li>
            <a href="gallery.html">Gallery</a>
          </li>
          <li>
            <a href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <div class="brand2">Contact Us
        </div>
      </div>
    </div>
  </div>

  <div class="container">

    <div class="row">
      <div class="box">
        <div class="col-lg-12">
          <hr>
          <h2 class="intro-text text-center">Contact
                        <strong>Information</strong>
                    </h2>
          <hr>
        </div>
        <div class="col-md-8">
          <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2980.662801415132!2d-91.538361!3d41.66302700000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x87e441f2fa61ac15%3A0xe11011416d6f1868!2sIowa+Memorial+Union!5e0!3m2!1sen!2sus!4v1422251167321" width="100%"
          height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="no" style="border:0"></iframe>
        </div>
        <div class="col-md-4">
          <p>You can best reach us by contacting our chapter president: Adan Ramirez</p>
          <p><strong>Phone: </strong>
            <a href="tel:+1-773-480-4059" style="color: #000; text-decoration:none;">(773) 480-4059</a> </p>
          <p><strong>Email: </strong>
            <a href="mailto:Adan-Ramirez@uiowa.edu" style="color: #000; text-decoration:none;">Adan-Ramirez@uiowa.edu</a>
            </strong>
          </p>
          <p><strong>Fraternity Website: </strong>
            <a href="http://www.sigmalambdabeta.com" style="color: #000; text-decoration:none;">SigmaLambdaBeta.com</a>
            </strong>
          </p>
          <h2 class="intro-text text-center">Social
            <strong>Media</strong>
          </h2>
          <div class="text-center">
            <a class="sociallinks" target="_blank" href="https://www.facebook.com/UiowaBetas"><i class="fa fa-facebook fa-3x"></i></a><a class="sociallinks" target="_blank" href="https://www.twitter.com/UiowaBetas"><i class="fa fa-twitter fa-3x"></i></a>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>

    <div class="row">
      <div class="box">
        <div class="col-lg-12">
          <hr>
          <h2 class="intro-text text-center">Lets
                        <strong>Talk</strong>
                    </h2>
          <hr>
          <p>Leave us a message...</p>
          <form role="form" method="post" action="contact.php">
            <div class="row">
              <div class="form-group col-lg-4">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                <?php echo "<p class='text-danger'>$errName</p>";?>
              </div>
              <div class="form-group col-lg-4">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                <?php echo "<p class='text-danger'>$errEmail</p>";?>
              </div>
              <div class="form-group col-lg-4">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control" id="phone" name="phone" placeholder="(XXX) XXX-XXXX" value="<?php echo htmlspecialchars($_POST['phone']); ?>">
                <?php echo "<p class='text-danger'>$errPhone</p>";?>
              </div>
              <div class="clearfix"></div>
              <div class="form-group col-lg-12">
                <label for="message">Your Message</label>
                <textarea class="form-control" rows="6" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
                <?php echo "<p class='text-danger'>$errMessage</p>";?>
              </div>
              <div class="form-group col-lg-12">
                <input id="submit" name="submit" type="submit" value="Send" class="btn btn-default">
              </div>
              <div class="form-group">
                <div class="col-sm-12">
                  <?php echo $result; ?>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <p>Copyright &copy; UiowaBetas 2015</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- jQuery Version 1.11.0 -->
  <script src="js/jquery-1.11.0.js"></script>

  <!-- Bootstrap Core JavaScript -->
  <script src="js/bootstrap.min.js"></script>

</body>

</html>
