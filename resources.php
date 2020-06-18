<?php include("header.php") ?>
<!DOCTYPE html>
<html>
<head>
    <title>Onco — Resources</title>
</head>
<body>

<div class="ui very thin sidebar inverted vertical menu">
    <a href="dashboard.php" class="item sidebar-element" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <i class="home icon"></i>
    </a>

    <a href="resources.php" class="item sidebar-element selected-sidebar-element" data-toggle="tooltip" data-placement="right" title="Resources">
        <i class="clipboard icon"></i>
    </a>

    <a href="assignment.php" class="item sidebar-element" data-toggle="tooltip" data-placement="right" title="Assignment">
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

    <!--        Input-->
    <div class="classroom-body">

        <br>
        <div class="container">
            <h1 class="service-page-heading">Onco Resources</h1>
            <div class="row">
                <!--                <h1 class="service-page-heading">Onco Resources</h1>-->
                <div class="col-md-3 search-drop-align">
                    <div class="ui category search">
                        <div class="ui icon input">
                            <input id="dropdown-search" class="prompt" type="text" placeholder="Search Subject...">
                            <i class="search icon"></i>
                        </div>
                        <div class="results"></div>
                    </div>
                </div>

                <div class="col-md-3">
                    <button onclick="searchContent();" class="ui primary button">
                        Go
                    </button>
                </div>

            </div>
        </div>


        <!--        Tabs-->
        <br>
        <!--        <hr>-->
        <br>
        <div class="resources-tab">
            <div class="ui top attached tabular menu">
                <a class="item" data-tab="resource-data-tab">Notes</a>
                <a class="item" data-tab="previous-year-data-tab">Previous Year</a>
            </div>

            <div id="resource-data-tab" class="ui bottom attached tab segment" data-tab="resource-data-tab">
                <div id="resouce-tab" class="ui huge relaxed selection divided list">

                    <div class="item">
                        <div class="content">
                            <img class="empty-list" src="resources/img/list-is-empty.png">
                            <br>
                            <br>
                            <div class="header empty-list-header">Sorry, Nothing to show here.</div>
                        </div>
                    </div>
                </div>

                <div class="ui primary big tertiary animated button disabled next-resource" tabindex="0">
                    <div class="visible content">Next</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </div>

                <div class="ui primary big tertiary right floated animated button disabled prev-resource" tabindex="0">
                    <div class="visible content">Previous</div>
                    <div class="hidden content">
                        <i class="left arrow icon"></i>
                    </div>
                </div>

            </div>


            <div id="previous-year-data-tab" class="ui bottom attached tab segment" data-tab="previous-year-data-tab">
                <div id="previous-year-tab" class="ui huge relaxed selection divided list">

                    <div class="item">
                        <div class="content">
                            <img class="empty-list" src="resources/img/list-is-empty.png">
                            <br>
                            <br>
                            <div class="header empty-list-header">Sorry, Nothing to show here.</div>
                        </div>
                    </div>
                </div>

                <div class="ui primary big tertiary animated button disabled next-previous-year" tabindex="0">
                    <div class="visible content">Next</div>
                    <div class="hidden content">
                        <i class="right arrow icon"></i>
                    </div>
                </div>

                <div class="ui primary big tertiary right floated animated button disabled prev-previous-year" tabindex="0">
                    <div class="visible content">Previous</div>
                    <div class="hidden content">
                        <i class="left arrow icon"></i>
                    </div>
                </div>

            </div>
        </div>


        <!--        Chart-->
<!--        <br>-->
<!--        <br>-->
<!--        <br>-->
<!--        <br>-->
<!--        <br>-->
<!--        <br>-->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="col-md-6">-->
<!--                    <div>-->
<!--                        <canvas id="barChart"></canvas>-->
<!--                    </div>-->
<!--                </div>-->
<!---->
<!--                <div class="col-md-6">-->
<!--                    <canvas id="oilChart" width="600" height="400"></canvas>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->

<?php include("script.php"); ?>
<script src="js/Classroom-Module/classroom_resources.js"></script>
</body>
</html>