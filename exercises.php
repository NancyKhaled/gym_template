<!-- header -->
<?php include 'header.php' ;?>
<!-- end header -->

<!-- content -->
<div class="main">
    <!-- owl carousel -->
    <div class="owl-carousel owl-theme">
        <div class="item">
            <div class="team_info text-center">
                <img src="img/6.png" alt="e1">
            </div>
        </div>
        <div class="item">
            <div class="team_info text-center">
                <img src="img/4.png" alt="e2">
            </div>
        </div>
        <div class="item">
            <div class="team_info text-center">
                <img src="img/5.png" alt="e3">
            </div>
        </div>
    </div>
    <!-- owl carousel -->

    <!-- video and info -->
    <div class="more-info">
        <div class="info">
            <a class="popup_i" data-toggle="modal" data-target="#myModal">
                <i class="fa fa-info-circle fa-2x"></i>
            </a>

            <!-- The Modal -->
            <div class="modal fade" id="myModal">
                <div class="modal-dialog">
                    <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Steps</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            Muscle: rectus abdominis
                            <br>
                            step1: lie back on the secline bench.
                            <br>
                            step2: lie back on the secline bench. return to starting position.
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="video">
            <a class="popup_v" href="video/1_1_1_1.mp4">
                <i class="fa fa-play-circle fa-2x"></i>
            </a>
        </div>
    </div>
    <!-- end video and info -->

    <!-- stopwatch -->
    <div class="stopwatch">
        <h4 class="text-center">st<i class="fa fa-stopwatch"></i>pwatch</h4>
        <time id="timer">0:00:00.00</time>
        <div class="timer_btn">
            <button id="toggle">start</button>
            <button id="clear">clear</button>
        </div>
    </div>
    <!-- end stopwatch -->
</div>
<!-- content -->

<!-- loading -->
<div class="loading-overlay">
    <div class="spinner">
        <img src="img/fitness-logo-template-design_1322-9.jpg" alt="loading">
    </div>
</div>
<!-- end loading -->

<!-- footer -->
<?php include 'footer.php' ;?>
<script src="js/stopwatch.js"></script>
<!-- end footer -->
