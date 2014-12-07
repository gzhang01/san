<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

        <?php if (isset($css)): ?>
            <link href="/css/<?= htmlspecialchars($css) ?>" rel="stylesheet"/>
        <?php endif ?>

        <?php if (isset($cssarray)): ?>
            <?php 
                foreach ($cssarray as $csstp)
                {   
                    $css = htmlspecialchars($csstp);
                    print("<link href='/css/{$css}' rel='stylesheet'/>");
                }
            ?>
        <?php endif ?>

        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Student Activist Network</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>
        <script src="/easyslider1.7/js/easySlider1.7.js"></script>

        <?php if (isset($js)): ?>
            <script src="/js/<?= htmlspecialchars($js) ?>"></script>
        <?php endif ?>

        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div id="logo">
                    <a href="index.php"><img src="/img/logo.jpg" /></a>
                </div>
                <div id="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>About
                            <ul>
                                <a href="aboutnetwork.php"><li>The Network</li></a>
                                <a href="conference.php"><li>Student Activist Conference</li></a>
                                <a href="seminars.php"><li>Flash Seminars</li></a>
                                <a href="team.php"><li>Our Team</li></a>
                            </ul>
                        </li>
                        <li><a href="database.php">Database</a></li>
                        <li><a href="endorsers.php">Endorsers</a></li>
                        <li>Media
                            <ul>
                                <a href="calendar.php"><li>Calendar</li></a>
                                <!--<a href="blog.php"><li>Blog</li></a>-->
                                <a href="photos.php"><li>Photos</li></a>
                                <a href="videos.php"><li>Videos</li></a>
                            </ul>
                        </li>
                        <li>Join the Network
                            <ul>
                                <a href="support.php"><li>Show your support</li></a>
                                <a href="endorsing.php"><li>Endorsing SAN</li></a>
                                <a href="working.php"><li>Working for SAN</li></a>
                                <a href="register.php"><li>Create a New Account</li></a>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            
            <div id="middle">
