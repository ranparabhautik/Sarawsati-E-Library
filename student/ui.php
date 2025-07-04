﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
  <title>FREE RESPONSIVE HORIZONTAL ADMIN</title>
  <!-- BOOTSTRAP CORE STYLE  -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONT AWESOME STYLE  -->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLE  -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- GOOGLE FONT -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
  <div class="navbar navbar-inverse set-radius-zero">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php">

          <img src="assets/img/logo.png" />
        </a>

      </div>

      <div class="right-div">
        <a href="#" class="btn btn-info pull-right">LOG ME OUT</a>
      </div>
    </div>
  </div>
  <!-- LOGO HEADER END-->
  <section class="menu-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="navbar-collapse collapse ">
            <ul id="menu-top" class="nav navbar-nav navbar-right">
              <li><a href="index.php">DASHBOARD</a></li>

              <li><a href="form.php">FORMS</a></li>
              <li>
                <a href="#" class="dropdown-toggle menu-top-active" id="ddlmenuItem" data-toggle="dropdown">UI ELEMENTS <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="ui.php">UI ELEMENTS</a></li>
                  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">EXAMPLE LINK</a></li>
                </ul>
              </li>
              <li><a href="tab.php">TABS & PANELS</a></li>
              <li><a href="table.php">TABLES</a></li>
              <li><a href="blank.php">BLANK PAGE</a></li>

            </ul>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- MENU SECTION END-->
  <div class="content-wrapper">
    <div class="container">
      <div class="row pad-botm">
        <div class="col-md-12">
          <h4 class="header-line">UI ELEMENTS</h4>

        </div>

      </div>
      <div class="row">

        <div class="col-md-7">
          <div class="panel panel-default">
            <div class="panel-heading">
              Simple Buttons Examples
            </div>

            <div class="panel-body">

              <h4>Default Button</h4>
              <a href="#" class="btn btn-default">default</a>
              <a href="#" class="btn btn-primary">primary</a>
              <a href="#" class="btn btn-danger">danger</a>
              <a href="#" class="btn btn-success">success</a>
              <a href="#" class="btn btn-info">info</a>
              <a href="#" class="btn btn-warning">warning</a>


              <h4>Mini Button</h4>
              <a href="#" class="btn btn-default btn-xs">default</a>
              <a href="#" class="btn btn-primary btn-xs">primary</a>
              <a href="#" class="btn btn-danger btn-xs">danger</a>
              <a href="#" class="btn btn-success btn-xs">success</a>
              <a href="#" class="btn btn-info btn-xs">info</a>
              <a href="#" class="btn btn-warning btn-xs">warning</a>


              <h4>Small Button</h4>
              <a href="#" class="btn btn-default btn-sm">default</a>
              <a href="#" class="btn btn-primary btn-sm">primary</a>
              <a href="#" class="btn btn-danger btn-sm">danger</a>
              <a href="#" class="btn btn-success btn-sm">success</a>
              <a href="#" class="btn btn-info btn-sm">info</a>
              <a href="#" class="btn btn-warning btn-sm">warning</a>


              <h4>Large Button</h4>

              <a href="#" class="btn btn-default btn-lg">default</a>
              <a href="#" class="btn btn-primary btn-lg">primary</a>
              <a href="#" class="btn btn-danger btn-lg">danger</a>
              <a href="#" class="btn btn-success btn-lg">success</a>
              <a href="#" class="btn btn-info btn-lg">info</a>


            </div>
          </div>
        </div>
        <div class="col-md-5">
          <div class="panel panel-default">
            <div class="panel-heading">
              Button Dropdowns
            </div>

            <div class="panel-body">
              <h4>Simple Button Dropdown Examples </h4>
              <div style="margin-top: 10px;">

                <div class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Action <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div style="margin:5px;" class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle">Danger <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div style="margin:5px;" class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Danger <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
              <div>

                <div class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-success dropdown-toggle">Success <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-info dropdown-toggle">Info <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">Default <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>

              <h4>Split Button Dropdown Examples </h4>

              <div style="margin:5px;" class="btn-toolbar">

                <div class="btn-group">
                  <button class="btn btn-primary">Action</button>
                  <button data-toggle="dropdown" class="btn btn-primary dropdown-toggle"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button class="btn btn-danger">Danger</button>
                  <button data-toggle="dropdown" class="btn btn-danger dropdown-toggle"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button class="btn btn-warning">Warning</button>
                  <button data-toggle="dropdown" class="btn btn-warning dropdown-toggle"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
              <div style="margin:5px;" class="btn-toolbar">

                <div class="btn-group">
                  <button class="btn btn-success">Success</button>
                  <button data-toggle="dropdown" class="btn btn-success dropdown-toggle"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button class="btn btn-info">Info</button>
                  <button data-toggle="dropdown" class="btn btn-info dropdown-toggle"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>
              <div style="margin:5px;" class="btn-toolbar">
                <div class="btn-group">
                  <button class="btn btn-default">Default</button>
                  <button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
              </div>


              <h4>Buttons With Icons</h4>

              <button class="btn btn-default"><i class=" fa fa-refresh "></i> Update</button>
              <button class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
              <button class="btn btn-danger"><i class="fa fa-pencil"></i> Delete</button>




            </div>
          </div>
        </div>
      </div>
      <!-- /. ROW  -->

      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              Simple Progress Bars
            </div>

            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% Complete</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% Complete (warning)</span>
                </div>
              </div>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <span class="sr-only">80% Complete</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              Stripped Progress Bars
            </div>

            <div class="panel-body">
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                  <span class="sr-only">20% Complete</span>
                </div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span class="sr-only">60% Complete (warning)</span>
                </div>
              </div>
              <div class="progress progress-striped">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                  <span class="sr-only">80% Complete</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /. ROW  -->
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              Animated Progress Bars
            </div>

            <div class="panel-body">
              <div class="progress progress-striped active">
                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                  <span class="sr-only">40% Complete (success)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              Stacked Progress Bars
            </div>

            <div class="panel-body">
              <div class="progress">
                <div class="progress-bar progress-bar-success" style="width: 35%">
                  <span class="sr-only">35% Complete (success)</span>
                </div>
                <div class="progress-bar progress-bar-warning" style="width: 20%">
                  <span class="sr-only">20% Complete (warning)</span>
                </div>
                <div class="progress-bar progress-bar-danger" style="width: 10%">
                  <span class="sr-only">10% Complete (danger)</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /. ROW  -->
      <div class="row">
        <div class="col-md-6">

          <!--  Modals-->
          <div class="panel panel-default">
            <div class="panel-heading">
              Modals Example
            </div>
            <div class="panel-body">
              <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                Click Launch Demo Modal
              </button>
              <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title" id="myModalLabel">Modal title Here</h4>
                    </div>
                    <div class="modal-body">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End Modals-->

        </div>
        <div class="col-md-6">

          <div class="alert alert-danger">
            <strong>ALERT EXAMPLE :</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          </div>

        </div>
      </div>
      <!-- /. ROW  -->
    </div>
  </div>
  <!-- CONTENT-WRAPPER SECTION END-->
  <section class="footer-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          &copy; 2014 Yourdomain.com |<a href="http://www.binarytheme.com/" target="_blank"> Designed by : binarytheme.com</a>
        </div>

      </div>
    </div>
  </section>
  <!-- FOOTER SECTION END-->
  <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
  <!-- CORE JQUERY  -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS  -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- CUSTOM SCRIPTS  -->
  <script src="assets/js/custom.js"></script>
</body>

</html>