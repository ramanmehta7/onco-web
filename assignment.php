<?php include("header.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Onco — Assignment</title>
</head>
<body>

<div class="ui very thin sidebar inverted vertical menu">
    <a href="dashboard.php" class="item sidebar-element" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <i class="home icon"></i>
    </a>

    <a href="resources.php" class="item sidebar-element" data-toggle="tooltip" data-placement="right" title="Resources">
        <i class="clipboard icon"></i>
    </a>

    <a href="assignment.php" class="item sidebar-element selected-sidebar-element" data-toggle="tooltip" data-placement="right" title="Assignment">
        <i class="briefcase icon"></i>
    </a>

    <a href="updates.php" class="item sidebar-element" data-toggle="tooltip" data-placement="right" title="Updates">
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

    <div class="classroom-body">

        <h1 class="service-page-heading service-page-heading-margin">Onco Assignment</h1>
        <br>

        <div class="resources-tab">
            <div class="ui top attached tabular menu">
                <a class="item" data-tab="first">Classwork</a>
                <a class="item" data-tab="second">Stream</a>
            </div>

            <div class="ui bottom attached tab segment" data-tab="first">

                <!--            Resources Tab Content-->
                <div class="ui huge relaxed selection divided list">

                    <div class="item">
                        <a class="ui red ribbon label">Pending</a> <br>
                        <div class="ui massive feed">
                            <div class="event">
                                <div class="label">
                                    <img src="resources/img/multicultural_communities.jpg">
                                </div>

                                <div class="content">
                                    <div class="summary">
                                        <a class="user">
                                            Teacher Name
                                        </a>
                                        <div class="date">
                                            1 Hour Ago
                                        </div>
                                        <br>
                                        <p class="list-content"> The work to be submitted. The task for the
                                            students. </p>
                                        <div class="ui large animated button" tabindex="0">
                                            <div class="visible content">Upload</div>
                                            <div class="hidden content">
                                                <i class="arrow circle up icon"></i>
                                            </div>
                                        </div>

                                        <!--                                        comments on work for future-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <a class="ui teal ribbon label">Completed</a> <br>
                        <div class="ui massive feed">
                            <div class="event">
                                <div class="label">
                                    <img src="resources/img/multicultural_communities.jpg">
                                </div>

                                <div class="content">
                                    <div class="summary">
                                        <a class="user">
                                            Teacher Name
                                        </a>
                                        <div class="date">
                                            1 Hour Ago
                                        </div>
                                        <br>
                                        <p class="list-content"> The work to be submitted. The task for the
                                            students. </p>
                                        <div class="ui large animated button" tabindex="0">
                                            <div class="visible content">Upload</div>
                                            <div class="hidden content">
                                                <i class="arrow circle up icon"></i>
                                            </div>
                                        </div>

                                        <!--                                        comments for future-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <a class="ui red ribbon label">Pending</a> <br>
                        <div class="ui massive feed">
                            <div class="event">
                                <div class="label">
                                    <img src="resources/img/multicultural_communities.jpg">
                                </div>

                                <div class="content">
                                    <div class="summary">
                                        <a class="user">
                                            Teacher Name
                                        </a>
                                        <div class="date">
                                            1 Hour Ago
                                        </div>
                                        <br>
                                        <p class="list-content"> The work to be submitted. The task for the
                                            students. </p>
                                        <div class="ui large animated button" tabindex="0">
                                            <div class="visible content">Upload</div>
                                            <div class="hidden content">
                                                <i class="arrow circle up icon"></i>
                                            </div>
                                        </div>

                                        <!--                                        comments for future-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="ui bottom attached tab segment" data-tab="second">

                <div class="ui huge relaxed selection divided list">

                    <!--                    UPLOADED FILE VIEW-->

                    <div class="item">
                        <div class="ui massive feed">
                            <div class="event">
                                <div class="label">
                                    <img src="resources/img/multicultural_communities.jpg">
                                </div>

                                <div class="content">
                                    <div class="summary">
                                        <a class="user">
                                            Teacher Name
                                        </a>
                                        <div class="date">
                                            1 Hour Ago
                                        </div>
                                        <br>
                                        <p class="list-content"> This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.</p>


                                        <!--                                    comments for future-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="ui massive feed">
                            <div class="event">
                                <div class="label">
                                    <img src="resources/img/multicultural_communities.jpg">
                                </div>

                                <div class="content">
                                    <div class="summary">
                                        <a class="user">
                                            Teacher Name
                                        </a>
                                        <div class="date">
                                            1 Hour Ago
                                        </div>
                                        <br>
                                        <p class="list-content"> This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well. </p>


                                        <!--                                comments for future-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="ui massive feed">
                            <div class="event">
                                <div class="label">
                                    <img src="resources/img/multicultural_communities.jpg">
                                </div>

                                <div class="content">
                                    <div class="summary">
                                        <a class="user">
                                            Teacher Name
                                        </a>
                                        <div class="date">
                                            1 Hour Ago
                                        </div>
                                        <br>
                                        <p class="list-content"> This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well.
                                            This is the concept. Do this, that learn it well. </p>

                                        <!--                                comments for future-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

<?php include("script.php"); ?>
<script src="js/Classroom-Module/assignment.js"></script>
</body>
</html>