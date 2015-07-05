<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app.css">
</head>
<body>
<div class="side-bar">
    <ul class="sidebar-name">
        <li><a href="#"><span style="color:#4FC1EE !important;">Fin</span>dash</a></li>
    </ul>
    <ul class="sidebar-list">
        <li><a href="#" class="active"><span class="arrow"></span>Senseney</a></li>
        <li><a href="#"><span class="arrow"></span>Dibben</a></li>
        <li><a href="#"><span class="arrow"></span>Thigpin</a></li>
        <li><a href="#"><span class="arrow"></span>Hincks</a></li>
        <li><a href="#"><span class="arrow"></span>Rumschlag</a></li>
    </ul>
</div>
<div class="content-bar">
    <div class="container margin-reset padding-reset padding-all-0 margin-all-0 width-100">
          <nav class="navbar navbar-default width-100 margin-all-0 padding-all-0" role="navigation">
            <div class="navbar-header" style="margin-top:5px;">
                    <button type="button" class="navbar-toggle" style="display: inline-block; margin-left:5px;" id="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
            </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><button class="btn btn-round btn-gray">Isela Lucarell</button></a></li>
                    <li><a href="#"> <button class="btn btn-lightblue btn-round">Logout</button></a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>

        <div class="row well">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 margin-all-5">
                    <h3>Hello World :) </h3>
                    <h4>My first SASS</h4>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript">
    $(function(){
        $('#navbar-toggle').click(function(){
            $('.side-bar').toggle('slide');
        });
    });
</script>
</body>
</html>