<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Thanks | UNILAD Adventure Competition</title>
    <meta name="author" content="Alvaro Trigo Lopez" />
    <meta name="description" content="fullPage full-screen apple iphone 5c similar website. Reproducing one sigle scrolling site like Apple iPhone." />
    <meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,apple,iphone5c,iphone5s,iphone,iphone-5c,like,reproduce,similar,how to" />
    <meta name="Resource-type" content="Document" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="css/jquery.fullpage.min.css" />
    <link rel="stylesheet" type="text/css" href="css/quiz.css" />
</head>
<body>
<div id="fullpage">
    <div class="section" id="section0">
        <img src="imgs/logo-adventure.png" height="140" class="logo" />

        <h2>Thanks For Entering!</h2>
        <a href="/" class="btn">Start Again</a>
    </div>
</div>
 
<script type="text/javascript" src="js/app.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

<script type="text/javascript" src="js/jquery.fullpage.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            'verticalCentered': false,
            'css3': true,
            'sectionsColor': ['#6ec3bf'],
            'navigation': true,
            'navigationPosition': 'right',
            'navigationTooltips': ['Thanks'],
        });
    });
</script>

</body>
</html>