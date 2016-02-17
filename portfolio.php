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
    <!-- <link rel="stylesheet" href="css/sidebar-left.css">  -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
</head>
<body>
  <aside class="sidebar-left">
    <a class="company-logo" href="#">KIW</a>
    <div class="social-links-top">
      <a href="#"><i class="fa fa-linkedin-square"></i></a>
      <a href="#"><i class="fa fa-github-square"></i></a>
      <a href="#"><i class="fa fa-twitter-square"></i></a>
    </div>
    <div class="sidebar-links">
      <a class="link-blue " href="./index.php"><i class="fa fa-home"></i>Home</a>
      <a class="link-red" href="./resume.php"><i class="fa fa-file-text-o"></i>Resume</a>
      <a class="link-yellow selected" href="./portfolio.php"><i class="fa fa-folder-o"></i>Projects</a>
      <a class="link-green" href="./contact.php"><i class="fa fa-envelope-o"></i>Contact</a>
    </div>
    <div class="social-links-bottom">
      <a href="#"><i class="fa fa-linkedin-square"></i></a>
      <a href="#"><i class="fa fa-github-square"></i></a>
      <a href="#"><i class="fa fa-twitter-square"></i></a>
    </div>
  </aside>

  <main id="portfolio-page" class="main-content">
    <div class="section group">
      <div class="col span_3_of_3">

        <div class="project_box">
          <h2 class="project_title">X-ray Surveyor Website</h2>
          <p class="project_bio">Website for a science workshop held in DC, Oct 2015.</p>
          <p class="project_pic"><img src="img/xraySurveyor.jpg" alt="" /></p>
          <p class="project_skills">JQuery, JS, HTML, CSS, Responsive Design</p>
        </div>

        <div class="project_box">
          <h2 class="project_title">The Crystal Beth</h2>
          <p class="project_bio">Crystal Beth is a comedian in NYC.</p>
          <p class="project_pic"><img src="img/catpic.jpg" alt="" /></p>
          <p class="project_skills">Wordpress, Responsive Design</p>
        </div>

        <div class="project_box">
          <h2 class="project_title">HRXS2015</h2>
          <p class="project_bio">Website for a conference</p>
          <p class="project_pic"><img src="img/hrxs.jpg" alt="" /></p>
          <p class="project_skills">HTML, CSS, JS, Responsive Design</p>
        </div>

        <div class="project_box">
          <h2 class="project_title">Pack Weight</h2>
          <p class="project_bio">A simple Javascript pack weight calculator</p>
          <p class="project_pic"><img src="img/packweight.jpg" alt="" /></p>
          <p class="project_skills">HTML, CSS, JS, Responsive Design</p>
        </div>

        <div class="project_box">
          <h2 class="project_title">Developer's Tool Box</h2>
          <p class="project_bio">My most google-ed for tools while building websites.</p>
      		<p class="project_pic"><img src="img/pwGenerator.jpg" alt="" /></p>
          <p class="project_skills">Laravel, PHP, HTML, CSS, JS</p>
        </div>

        <div class="project_box">
          <h2 class="project_title">Chandra Data Tables</h2>
          <p class="project_bio">A better way to list all of Chandra's observed targets.</p>
          <p class="project_pic"><img src="img/datatables.jpg" alt="" /></p>
          <p class="project_skills">JQuery</p>
        </div>

        <div class="project_box">
          <h2 class="project_title">CARE</h2>
          <p class="project_bio">A Catabase. For CARE Wildcat Rescue.</p>
          <p class="project_pic"><img src="img/catpic.jpg" alt="" /></p>
          <p class="project_skills">Laravel</p>
        </div>

        <div class="project_box">
          <h2 class="project_title">Review Helper</h2>
          <p class="project_bio">A tool for visualizing time allocations for the Chandra Space Telescope.</p>
          <p class="project_pic"><img src="img/catpic.jpg" alt="" /></p>
          <p class="project_skills">D3, Javascript, PHP, Databases</p>
        </div>

        <div class="project_box">
          <h2 class="project_title">Chandra Bubbles</h2>
          <p class="project_bio">A visualization of the first 15 years of proposals approved for the Chandra Space Telescope</p>
          <p class="project_pic"><img src="img/bubbles.jpg" alt="" /></p>
          <p class="project_skills">D3, Javascript</p>
        </div>
      </div> <!-- Close span_3_of_3 -->
    </div> <!-- Close section group -->
<?php echo $time?>
  </main>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
