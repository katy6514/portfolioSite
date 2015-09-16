<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title></title>
    <meta http-equiv="content-language" content="en-US"/>
    <meta name="keywords" content="" />
    <meta name="creator" content=""/>
    <meta name="description" content=""/>
    <meta name="subject" content=""/>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- Responsive and mobile friendly stuff -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <!-- Style Files -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sidebar-left.css"> <!-- Resource style -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
    <aside class="sidebar-left">
        <a class="company-logo" href="#">KIW</a>
        <div class="sidebar-links">
            <a class="link-blue " href="./index.php"><i class="fa fa-home"></i>Home</a>
            <a class="link-red " href="./resume.php"><i class="fa fa-file-text-o"></i>Resume</a>
            <a class="link-yellow " href="./portfolio.php"><i class="fa fa-folder-o"></i>Projects</a>
            <a class="link-green selected" href="./contact.php"><i class="fa fa-envelope-o"></i>Contact</a>
        </div>
        <div class="social-links">
          <a href="#"><i class="fa fa-twitter-square"></i></a>
          <a href="#"><i class="fa fa-linkedin-square"></i></a>
          <a href="#"><i class="fa fa-github-square"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
    </aside>

    <main id="contact-page" class="main-content">
      <?php include './incl/send_form_email.php';?>
          <h1>Let's chat.</h1>


                      <!-- <div class="section group">
                          <div class="col span_3_of_3"> -->

      <form name="contactform" method="post" action="contact.php">

          <table id="contact_table">
              <tr>
                  <td >
                      <label for="first_name">First Name *</label>
                  </td>
                  <td >
                      <input  type="text" name="first_name" maxlength="50" size="30">
                  </td>
              </tr>

              <tr>
                  <td >
                      <label for="last_name">Last Name *</label>
                  </td>
                  <td >
                      <input  type="text" name="last_name" maxlength="50" size="30">
                  </td>
              </tr>

              <tr>
                  <td >
                      <label for="email">Email Address *</label>
                  </td>
                  <td >
                      <input  type="text" name="email" maxlength="80" size="30">
                  </td>
              </tr>

              <tr>
                  <td >
                      <label for="telephone">Telephone Number</label>
                  </td>
                  <td >
                      <input  type="text" name="telephone" maxlength="30" size="30">
                  </td>
              </tr>

              <tr>
                  <td >
                      <label for="comments">Comments *</label>
                  </td>
                  <td >
                      <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                  </td>
              </tr>

              <tr>
                  <td colspan="2" style="text-align:center">
					<button class="btn btn-1 btn-1f">Send</button>
					<!-- <button class="btn btn-7 btn-7b"><i class="fa fa-arrow-right"></1>Send message</button> -->
                      <!-- <input type="submit" value="Submit">   <a href="http://www.freecontactform.com/email_form.php">Email Form</a> -->
                  </td>
              </tr>
          </table>

      </form>
    </main>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
