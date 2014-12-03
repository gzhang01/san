<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet"/>

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
                        <li><a href="aboutnetwork.php">About</a>
                            <ul>
                                <li><a href="aboutnetwork.php">The Network</a></li>
                                <li><a href="conference.php">Student Activist Conference</a></li>
                                <li><a href="endorsing.php">Endorsing SAN</a></li>
                                <li><a href="team.php">The Team</a></li>
                            </ul>
                        </li>
                        <li><a href="endorsers.php">Endorsers</a></li>
                        <li><a href="news.php">News</a></li>
                        <li><a href="join.php">Join the Network</a></li>
                    </ul>
                </div>
            </div>
            
            <div id="middle">
