<?php
// require('dbconn.php');
?>
<?php include("header.php"); ?>

<?php
if ($_SESSION['RollNo'] != 'ADMIN') {
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
                        <form class="form-horizontal row-fluid" action="current.php" method="post">
                            <div class="control-group">
                                <label class="control-label" for="Search"><b>Search:</b></label>
                                <div class="controls">
                                    <input type="text" id="title" name="title" placeholder="Enter Book Name/Book Id." class="span8" required>
                                    <button type="submit" name="submit" class="btn">Search</button>
                                </div>
                            </div>
                        </form>
                        <br>
                        <?php
                        $rollno = $_SESSION['RollNo'];
                        if (isset($_POST['submit'])) {
                            $s = $_POST['title'];
                            $sql = "select * from record,book where RollNo = '$rollno' and Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.Bookid = record.BookId and (record.BookId='$s' or Title like '%$s%')";
                        } else
                            $sql = "select * from record,book where RollNo = '$rollno' and Date_of_Issue is NOT NULL and Date_of_Return is NULL and book.Bookid = record.BookId";

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
                                        <th>Issue Date</th>
                                        <th>Due date</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php







                                    //$result=$conn->query($sql);
                                    while ($row = $result->fetch_assoc()) {
                                        $bookid = $row['BookId'];
                                        $name = $row['Title'];
                                        $issuedate = $row['Date_of_Issue'];
                                        $duedate = $row['Due_Date'];
                                        $renewals = $row['Renewals_left'];

                                    ?>

                                        <tr>
                                            <td><?php echo $bookid ?></td>
                                            <td><?php echo $name ?></td>
                                            <td><?php echo $issuedate ?></td>
                                            <td><?php echo $duedate ?></td>
                                            <td>
                                                <center>
                                                    <?php
                                                    if ($renewals)
                                                        echo "<a href=\"renew_request.php?id=" . $bookid . "\" class=\"btn btn-success\">Renew</a>";
                                                    ?>
                                                    <a href="return_request.php?id=<?php echo $bookid; ?>" class="btn btn-primary">Return</a>

                                                    <a href='<?php echo $bookid ?>.pdf' class="btn btn-primary" target='_blank'>Read</a>

                                                    <button id="playButton" class="btn btn-danger">Play Audio</button>

                                                    <audio id="audioPlayer" src="<?php echo $bookid ?>.mp3" preload="auto" ></audio>



                                                </center>
                                            </td>
                                        </tr>
                                <?php }
                                } ?>



                                </tbody>
                            </table>
                    </div>
                    <!--/.span9-->


                    <div class="col-md-12">

                        <?php

                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            echo "";
                        }


                        ?>

                    </div>
                </div>
            </div>
            <!--/.container-->

        </div>
       

        <?php include "footer.php" ?>



        <script>
            // Get references to the button and audio element
            var playButton = document.getElementById("playButton");
            var audioPlayer = document.getElementById("audioPlayer");

            // Add a click event listener to the button
            playButton.addEventListener("click", function() {
                // Check if audio is currently playing; if so, pause it
                if (audioPlayer.paused) {
                    audioPlayer.play();
                    playButton.textContent = "Pause Audio";
                } else {
                    audioPlayer.pause();
                    playButton.textContent = "Play Audio";
                }
            });
        </script>




    </body>

    </html>

<?php } else {
    echo "<script type='text/javascript'>alert('Access Denied!!!')</script>";
} ?>