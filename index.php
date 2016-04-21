<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="author license" href="jameshood118@gmail.com">
    <link rel="shortcut icon" href="favicon.ico">
    <meta name="google-site-verification" content="g33cCL3Zejco00mObr5iDhwZwaNfo-ttj_I3IQINO-c" />
    <META NAME="description" CONTENT="PHP Web Developer, MySQL, HTML, CSS, Javascript, Flash, Actionscript 2.0/3.0">
    <META NAME="author" CONTENT="James Hood">
    <META NAME="ROBOTS" CONTENT="ALL">
    <title>The Portfolio of James Hood</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="sticky-footer-navbar.css" rel="stylesheet">

</head>

<body>
    <?php include_once("includes/analyticstracking.php") ?>
        <?php include("includes/menu.php"); ?>

            <div class="jumbotron">
                <div class="container">
                    <img src="../images/gallerybanner.png" title="Portfolio of James Hood" class="headtop center img-responsive" />
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 box blogbox">
                        <p>Update: 2016.04.19 - I have begun the process of updating my portfolio to be responsive, using Bootstrap. I have been using Bootstrap for the last 3 months while working at Chicos FAS. I recall looking at it way back when it first came out, I also looked at it again while working at the School District of Lee County. We were using Kendo UI at the time but some of our newer projects were being developed using Bootstrap. </p>
                        <p>I have pared down the site a little bit, and have changed it to match this new direction, I will continue to make improvements</p>
                    </div>
                    <div class="col-lg-6 box blogbox">
                        <p>Welcome to my portfolio, This website is to represent myself to the corporate world, and as such this site contains my artwork, and my web development work. It also happens to contain various side projects: Music, various video/audio projects I will work on from time to time, and other side projects. I also use this site as a means to test out code that I am working on, or have been tasked to do.</p>
                        <p>I am an outside the box kind of thinker. I am not set in my ways, nor have I had "the rules of the internet" engraved in my head. If something doesn't work, I find another solution, learn it, and apply it. My methods have always been 'work on it until it works without issues'. I love getting down deep into code and figuring out the logic.</p>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container">
                    <p class="text-muted">
                        <?php include("includes/bottommenu.php"); ?>
                            <?php include("includes/footer.php"); ?>
                    </p>
                </div>
            </footer>
            <BR>
            <BR>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>

</html>