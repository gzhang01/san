<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>
        <link href="/css/home.css" rel="stylesheet"/>

        <?php if (isset($title)): ?>
            <title><?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Student Activist Network</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/scripts.js"></script>

        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="img/favicon.ico" type="image/x-icon">

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div id="logo"><img src="/img/logo.jpg" /></div>
                <div id="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>About
                            <ul>
                                <li><a href="aboutnetwork.php">The Network</a></li>
                                <li><a href="conference.php">Student Activist Conference</a></li>
                                <li><a href="seminars.php">Flash Seminars</a></li>
                                <li><a href="team.php">Our Team</a></li>
                            </ul>
                        </li>
                        <li><a href="database.php">Database</a></li>
                        <li><a href="endorsers.php">Endorsers</a></li>
                        <li>Media
                            <ul>
                                <li><a href="calendar.php">Calendar</a></li>
                                <li><a href="blog.php">Blog</a></li>
                                <li><a href="photos.php">Photos</a></li>
                                <li><a href="videos.php">Videos</a></li>
                            </ul>
                        </li>
                        <li>Join the Network
                            <ul>
                                <li><a href="support.php">Show your support</a></li>
                                <li><a href="endorsing.php">Endorsing SAN</a></li>
                                <li><a href="working.php">Working for SAN</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
            
            <div id="middle">
