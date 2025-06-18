<?php include("header.php"); ?>

<?php
// require('dbconn.php');
?>

<?php
if ($_SESSION['RollNo']) {
?>

    <body>
        <!-- <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                        <i class="icon-reorder shaded"></i></a><a class="brand" href="index.php">LMS </a>
                    
                </div>
            </div>
        </div> -->
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    
                    <!--/.span3-->
                    <div class="span9">
                        <form class="form-horizontal row-fluid" action="book.php" method="post">
                            <div class="control-group">
                                <label class="control-label" for="Search"><b>Search:</b></label>
                                <div class="controls">
                                    <input type="text" id="title" name="title" placeholder="Enter Name/ID of Book" class="span8" required>
                                    <button type="submit" name="submit" class="btn">Search</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <?php
                        if (isset($_POST['submit'])) {
                            $s = $_POST['title'];
                            $sql = "select * from book where BookId='$s' or Title like '%$s%'";
                        } else
                            $sql = "select * from book order by Availability DESC";

                        $result = $conn->query($sql);
                        $rowcount = mysqli_num_rows($result);

                        if (!($rowcount))
                            echo "<br><center><h2><b><i>No Results</i></b></h2></center>";
                        else {


                        ?>
                            <table class="table" id="tables">
                                <thead>
                                    <tr>
                                        <th>Book id</th>
                                        <th>Book name</th>
                                        <th>Availability</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    //$result=$conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        $bookid = $row['BookId'];
                                        $name = $row['Title'];
                                        $avail = $row['Availability'];
                                    ?>
                                        <tr>
                                            <td><?php echo $bookid ?></td>
                                            <td><?php echo $name ?></td>
                                            <td><b><?php
                                                    if ($avail > 0)
                                                        echo "<font color=\"green\">AVAILABLE</font>";
                                                    else
                                                        echo "<font color=\"red\">NOT AVAILABLE</font>";

                                                    ?>

                                                </b></td>
                                            <td>
                                                <center><a href="bookdetails.php?id=<?php echo $bookid; ?>" class="btn btn-primary">Details</a>
                                                    <?php
                                                    if ($avail > 0)
                                                        echo "<a href=\"issue_request.php?id=" . $bookid . "\" class=\"btn btn-success\">Issue</a>";
                                                    ?>
                                                </center>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>
                                </tbody>
                            </table>
                    </div>
                    <!--/.span3-->
                    <!--/.span9-->

                    <!--/.span3-->
                    <!--/.span9-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
        <?php include "footer.php" ?>

    </body>

    </html>

<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>