
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>

    <!-- Navigation -->
    <?php include "includes/navbar.php"; ?>

    <!-- Page Content -->
    <div class="container">

        <!-- <div class="jumbotron">
          <img src="images/2.jpg" class="img-responsive img-thumbnail" alt="Lucky Draw">
        </div> -->

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
          <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img class="first-slide img-responsive" src="images/1.jpg" alt="First slide" style="height: 600px; width: 100%;">
            <div class="container">
              <div class="carousel-caption">
                <h1><strong>Win Carrera GTS 911</strong></h1>
                <p><strong><i>Participate now and stand a chance to win this car!</i></strong></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="second-slide img-responsive" src="images/2.jpg" alt="Second slide" style="height: 600px; width: 100%;">
            <div class="container">
              <div class="carousel-caption">
                <h1><strong>Win a ticket to Norway</strong></h1>
                <p><strong><i>Participate now and stand a chance to win a ticket to Norway!</i></strong></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="third-slide img-responsive" src="images/3.jpg" alt="Third slide" style="height: 600px; width: 100%;">
            <div class="container">
              <div class="carousel-caption">
                <h1><strong>Space Travel</strong></h1>
                <p><strong><i>Participate now and stand a chance to space travel!</i></strong></p>
              </div>
            </div>
          </div>
          <div class="item">
            <img class="fourth-slide img-responsive" src="images/4.jpg" alt="Fourth slide" style="height: 600px; width: 100%;">
            <div class="container">
              <div class="carousel-caption">
                <h1><strong>Concert</strong></h1>
                <p><strong><i>Participate now and stand a chance to win a concert ticket!</i></strong></p>
              </div>
            </div>
          </div>
          </div>
          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
          </a>
        </div>

        <hr>

        <div class="well well-lg">


          <!-- FlipClock -->
          <div class="clock" style="margin:2em;"></div>
          <div class="clck"></div>

          <script type="text/javascript">
            var clock;
            
            $(document).ready(function() {
              var clock;

              clock = $('.clock').FlipClock({
                    clockFace: 'DailyCounter',
                    autoStart: false,
                    callbacks: {
                      stop: function() {
                        $('.clck').html('The clock has stopped!')
                      }
                    }
                });
                    
                clock.setTime(220880);
                clock.setCountdown(true);
                clock.start();

            });
          </script>


          <!-- Countdown 2 -->
          <!-- <script type="text/javascript">require('jquery-countdown');</script>
          <div id="getting-started"></div>
          <script type="text/javascript">
            $('#getting-started').countdown('2019/01/01', function(event) {
              $(this).html(event.strftime('%w weeks %d days %H:%M:%S'));
            });
          </script> -->

        </div>

        <!-- <hr> -->

        <div class="page-header">
          <h2>This week's suprise... &nbsp;<small></small></h2>
        </div>

        <div class="row">

          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img class="img-responsive" src="images/carrera.jpg" alt="Carrera GTS 911">
              <div class="caption">
                <h3><strong>Carrera GTS 911</strong></h3>
                <h3>
                  <strong><code>$120,050</code></strong>
                </h3>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img class="img-responsive" src="images/space_travel.jpg" alt="Space Travel">
              <div class="caption">
                <h3><strong>Space Travel</strong></h3>
                <h3>
                  <strong><code>$250,000</code></strong>
                </h3>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img class="img-responsive" src="images/norway.jpg" alt="Norway">
              <div class="caption">
                <h3><strong>Norway Trip</strong></h3>
                <h3>
                  <strong><code>$3500</code></strong>
                </h3>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-3">
            <div class="thumbnail">
              <img class="img-responsive" src="images/concert.jpg" alt="Concert">
              <div class="caption">
                <h3><strong>Concert Ticket</strong></h3>
                <h3>
                  <strong><code>$1400</code></strong>
                </h3>
              </div>
            </div>
          </div>

        </div>

        <hr>

        <div class="page-header">
          <h2>Our Winners! &nbsp;<small>(Till date)</small></h2>
        </div>

         <div class="row" align="center">

          <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
              <img src="..." alt="...">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
              </div>
            </div>
          </div>

          <div class="col-sm-6 col-md-6">
            <div class="thumbnail">
              <img src="..." alt="...">
              <div class="caption">
                <h3>Thumbnail label</h3>
                <p>...</p>
                <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
              </div>
            </div>
          </div>

        </div>

        <hr>

        <!-- Footer -->
        <?php include "includes/footer.php"; ?>