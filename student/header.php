<?php include "dbconn.php" ?>
<?php
if (!$_SESSION['Type'] == "Student") {
  header("Location:../index.php");
}

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!--[if IE]>
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <![endif]-->
  <!-- BOOTSTRAP CORE STYLE  -->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONT AWESOME STYLE  -->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
  <!-- CUSTOM STYLE  -->
  <link href="assets/css/style.css" rel="stylesheet" />
  <!-- GOOGLE FONT -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css" />

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LMS</title>
  <link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
  <link type="text/css" href="css/theme.css" rel="stylesheet">
  <link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
  <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
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
          <img height="150" width="150" src="assets/img/SEL_logo.png" />
        </a>
      </div>

      <div class="right-div">
        <a href="logout.php" class="btn btn-danger pull-right">LOGOUT</a>
      </div>
    </div>
  </div>
  <!-- LOGO HEADER END-->
  <section class="menu-section">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="navbar-collapse collapse">
            <ul id="menu-top" class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php" class="menu-top-active">DASHBOARD</a>
              </li>

              <li>
                <a href="book.php" class="menu-top">All Book</a>
              </li>
             
              <!-- <li>
                <a href="#" class="dropdown-toggle" id="ddlmenuItem" data-toggle="dropdown">All Books<i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu" role="menu" aria-labelledby="ddlmenuItem">
                  <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="ui.php">All Book</a>
                  <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="ui.php">Add Book</a>
                  <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="ui.php">Book Recommendation</a>
                  <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="ui.php">Currently Issued Book</a>
                  </li>
                </ul>
              </li> -->
              <li><a href="message.php">Messages</a></li>
              <li><a href="recommendations.php">Recommended Book</a></li>
              <li><a href="current.php">Currently Issued Book </a></li>
              <li><a href="history.php">Previously Issued Book</a></li>

              <!-- <li>
                  <a
                    href="#"
                    class="dropdown-toggle"
                    id="ddlmenuItem"
                    data-toggle="dropdown"
                    >UI ELEMENTS <i class="fa fa-angle-down"></i
                  ></a>
                  <ul
                    class="dropdown-menu"
                    role="menu"
                    aria-labelledby="ddlmenuItem"
                  >
                    <li role="presentation">
                      <a role="menuitem" tabindex="-1" href="ui.php"
                        >UI ELEMENTS</a
                      >
                    </li>
                    <li role="presentation">
                      <a role="menuitem" tabindex="-1" href="#">EXAMPLE LINK</a>
                    </li>
                  </ul>
                </li> -->
              <!-- <li><a href="form.php">FORMS</a></li> -->
              <!-- <li><a href="tab.php">TABS & PANELS</a></li>
                <li><a href="table.php">TABLES</a></li>
                <li><a href="blank.php">BLANK PAGE</a></li> -->
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>