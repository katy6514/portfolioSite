<!doctype html>
<html class="no-js" lang="">
<head>
     <!--[if lt IE 9]>
    	  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
     <![endif]-->
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

    <div id="rhWrapper">

        <header>
            <h1>Review Helper</h1>

            <h3>A time visualization tool for the Chandra Space Telescope</h3>


        </header>

        <main>

            <p>The video below is an overview of some of the features of Review Helper. Review Helper was made to be used by conference organizers during Chandra's yearly time allocation committee meeting where it is decided which scientific proposals are awarded with observing time on the telescope. There are 13 science areas in which a proposal for time may be made, each of these is referred to as a &ldquo;panel.&rdquo; Sitting on each panel are a dozen or so expert astronomers brought in from around the world to discuss the relative merits of each proposal and grade them accordingly. Each panel has various quotas to work with: (time, difficulty contraints, joint time with other telescopes, etc.) and their goal is to grade proposals on their scientific merit and maximise the amount of science that can be completed within their alloted time.</p>

            <p> The tool is broken down into three sections:</p>

            <p><span class="bold">Review Summary</span>: Contains overall balances for every quota across the entire meeting. Clicking on a new allocation will display which panels are over/under that allocation.</p>

            <p><span class="bold">Panel Details</span>: Each vertical bar in this section represents each panel and contains every proposal in each panel ordered by grade given by the panel. Proposals are colored green if they were approved for time by the panel, grey if they panel thinks they should get time even though they had run out of time to award, and red if the panel has decided they proposal should not get time. The height of each proposal bar represents the amount of telescope time the proposal was made for. Hovering over each proposal yields more information about that proposal.</p>

            <p><span class="bold">Proposal Details</span>: Occasionally after the review meeting is completed, further edits may be made to proposal details (a proposal has become scientifically unfeasible, the observations are no longer needed, appropriate requests from the primary observer, more time has become available, etc...). The third section of Review Helper is for the purpose of previewing such edits to the database of observations.</p>

            <iframe src="https://player.vimeo.com/video/157525389?title=0&byline=0&portrait=0" width="500" height="478" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen style="margin-left:20%;"></iframe>


            <p>The tool displays the details of Panel 1 proposals by default, other panels can be selected from the drop-down menu. To demonstrate this part of the tool, the highest-ranked proposal in Panel one (proposaed by Ayres) has its status changed from &ldquo;Y&rdquo; (for approved) to &ldquo;G&rdquo; (for grey-area). It also has its time increased form 23 kiloseconds to 50 kiloseconds. Saving the changes updates the page with the new data, and we can see in the Panel Details section of the tool, the Ayres proposal has been changed to gray and is taller (more time). Once more, we increase the time to 200 ksec and change the status to &ldquo;N&rdquo;, saving the edits to refresh the page and see the changes.</p>

            <p>Clicking the &ldquo;Reset Fields&rdquo; button reverts to the values last-saved, and &ldquo;Undo All Changes&rdquo; reverts to the original values determined by the committee.</p>
        </main>

    </div>
</body>
</html>
