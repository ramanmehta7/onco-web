<?php include("header.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Onco — Updates</title>
</head>
<body>

<div class="ui very thin sidebar inverted vertical menu">
    <a href="dashboard.php" class="item sidebar-element" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <i class="home icon"></i>
    </a>

    <a href="resources.php" class="item sidebar-element" data-toggle="tooltip" data-placement="right" title="Resources">
        <i class="clipboard icon"></i>
    </a>

    <a href="assignment.php" class="item sidebar-element" data-toggle="tooltip" data-placement="right" title="Assignment">
        <i class="briefcase icon"></i>
    </a>

    <a href="updates.php" class="item sidebar-element selected-sidebar-element" data-toggle="tooltip" data-placement="right" title="Updates">
        <i class="comment alternate icon"></i>
    </a>
</div>


<div class="pusher">

    <h1 class="onco-title" data-heading="N">ONCO</h1>
    <div class="menu-icon-toggle menu-icon-text">
        <button id="menu-toggle-button">
            <i class="bars icon"></i>
            Menu
        </button>
    </div>

    <br>
    <br>
    <br>
    <br>

    <!--        Input-->
    <div class="classroom-body">

        <!--        Feed-->
        <h1 class="service-page-heading service-page-heading-margin">Onco Updates</h1>
        <br>
        <div class="container">
            <div class="ui massive feed">
                <div class="event">
                    <div class="label">
                        <img src="resources/img/multicultural_communities.jpg">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a class="user">
                                Elliot Fu
                            </a> added you as a friend
                            <div class="date">
                                1 Hour Ago
                            </div>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 4 Likes
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="resources/img/business.jpg">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Helen Troy</a> added <a>2 new illustrations</a>
                            <div class="date">
                                4 days ago
                            </div>
                        </div>
                        <div class="extra images">
                            <a><img src="resources/img/multitask.jpg"></a>
                            <a><img src="resources/img/unite.png"></a>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 1 Like
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="resources/img/classroom_teacher.png">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a class="user">
                                Jenny Hess
                            </a> added you as a friend
                            <div class="date">
                                2 Days Ago
                            </div>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 8 Likes
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="resources/img/banner.png">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Joe Henderson</a> posted on his page
                            <div class="date">
                                3 days ago
                            </div>
                        </div>
                        <div class="extra text">
                            Ours is a life of constant reruns. We're always circling back to where we'd we started, then
                            starting all over again. Even if we don't run extra laps that day, we surely will come back
                            for
                            more of the same another day soon.
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 5 Likes
                            </a>
                        </div>
                    </div>
                </div>
                <div class="event">
                    <div class="label">
                        <img src="resources/img/community.jpg">
                    </div>
                    <div class="content">
                        <div class="summary">
                            <a>Justen Kitsune</a> added <a>2 new photos</a> of you
                            <div class="date">
                                4 days ago
                            </div>
                        </div>
                        <div class="extra images">
                            <a><img src="resources/img/welcome_banner.png"></a>
                            <a><img src="resources/img/college_building.jpg"></a>
                        </div>
                        <div class="meta">
                            <a class="like">
                                <i class="like icon"></i> 41 Likes
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("script.php"); ?>
<script src="js/Classroom-Module/classroom_updates.js"></script>
</body>
</html>