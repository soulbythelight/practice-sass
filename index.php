<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app.css">
    <style type="text/css">
    .sidebar-list li a {
        position: relative;
    }
   .arrow {
     width: 0;
     height: 0;
     border-top: 10px solid transparent;
     border-bottom: 10px solid transparent;
     border-left: 10px solid green;
     position: absolute;
     left: 0px;
     display: none;
    }
    </style>
</head>
<body>
<div class="side-bar">
    <ul class="sidebar-list">
        <li><a href="#" class="active"><span class="arrow"></span>Senseney</a></li>
        <li><a href="#"><span class="arrow"></span>Dibben</a></li>
        <li><a href="#"><span class="arrow"></span>Thigpin</a></li>
        <li><a href="#"><span class="arrow"></span>Hincks</a></li>
        <li><a href="#"><span class="arrow"></span>Rumschlag</a></li>
    </ul>
</div>
<div class="content-bar">
<div class="container padding-0 margin-0 width-100">
      <nav class="navbar navbar-default width-100" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Title</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Link</a></li>
                <li><a href="#">Link</a></li>
            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</div>
</div>
</body>
</html>