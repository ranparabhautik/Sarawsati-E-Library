<?php
// require('dbconn.php');
?>
<?php include("header.php"); ?>

<?php 
if ($_SESSION['RollNo']) {
    ?>

<!DOCTYPE html>
<html lang="en">

    
    <body>
     
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                  
                    <!--/.span3-->
                    
                    <div class="span9">

                        <div class="content">
                            <div class="btn-controls">
                                <div class="btn-box-row row-fluid">
                                    <a href="findbook.php" class="btn-box big span4"><i class=" icon-search"></i><b>Find Book</b>
                                    </a>
                                </div>
                            </div>
                            <!--/.module-->
                        </div>
                        
                        <!--/.content-->
                    </div>
                
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
<?php include "footer.php" ?>
      
    </body>

</html>

<?php }
else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>