<?php
/**
 * Created by PhpStorm.
 * User: Pacific Frost
 * Date: 4/7/2017
 * Time: 8:37 PM
 */
?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Start Bootstrap</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                <?php
                load_navigation_categories()
                ?>

            </ul>
            <ul class="nav navbar-right top-nav">
                <li><a href="/cms/admin/index.php">Admin</a></li>
            </ul>
        </div>
            <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>

