
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<?php
if (isset($this->session->userdata['user_data_session']))
{


 $username = ($this->session->userdata['user_data_session']['name']);

}
else{

  header("location: ".base_url());
}
?>
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>News Feed</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <style type="text/css" title="AppleStyle">
    	@import url("<?php echo base_url();?>assets/css/Weather.css");
    </style>
    <link href="<?php echo base_url();?>assets/css/twitter_style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>assets/css/feed-style.css" rel="stylesheet" type="text/css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/text.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/grid.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/layout.css" media="screen" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/nav.css" media="screen" />
    <link  rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/select2.min.css"/>

    <style>
      iframe {
        width: 100%;
        border: 0;
        min-height: 80%;
        height: 600px;
        display: flex;
      }
    </style>
    <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->

    <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->

    <!-- BEGIN: load jquery -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



    <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>

    <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
    <script src='https://cdn.rawgit.com/monkeecreate/jquery.simpleWeather/master/jquery.simpleWeather.min.js'></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>


    <!-- END: load jquery -->






    <script src="<?php echo base_url();?>assets/js/setup.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/select2.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/weather.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery.rss.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/rss-feed.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/twitterFetcher.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/exampleUsage.js"></script>
    <script src="<?php echo base_url();?>assets/js/gmail.api.js"></script>
    <script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>



	 <script type="text/javascript">

	     $(window).load(function () {

	         $('#demo-side-bar').removeAttr('style');

	     });

</script>

<style type="text/css">


#demo-side-bar{left:90%!important;display:block!important;}

#branding .floatright{margin-right:130px!important;}

</style>

	<!--Logo-->



    <div class="container_12">
        <div class="grid_12 header-repeat">
            <div id="branding">
                <div class="floatleft">
                    <img src="<?php echo base_url();?>assets/img/logo.png" alt="Logo" /></div>
                <div class="floatright">
                    <div class="floatleft">
                        <img src="<?php echo base_url();?>assets/img/img-profile.jpg" alt="Profile Pic" /></div>
                    <div class="floatleft marginleft10">
                        <ul class="inline-ul floatleft">
                            <li>Hello <?php echo $username; ?></li>

                            <li><a href="<?php echo base_url();?>">Logout</a></li>
                        </ul>
                        <br />
                        <span class="small grey">Last Login: 3 hours ago</span>
                    </div>
                </div>
                <div class="clear">
                </div>
            </div>
        </div>

<!-- menu bar -->
        <div class="grid_12">
              <ul class="nav main">
                <li class="ic-dashboard"><a href="<?php echo base_url();?>dashboard"><span>Dashboard</span></a> </li>
                <li class="ic-form-style"><a href="<?php echo base_url();?>newsfeed"><span>News Feed</span></a> </li>
            	</ul>
        </div>
				<div class="clear">
				</div>
<!-- wea -->

                  <div id='front'>
                		<img id='icon-holder'>

                		<div id='front-panel'>

                			<div id='location' class='text info' role='link' ></div>
                			<div id='top'      class='background'             ></div>

                			<div id='high'     class='text info smallinfo' aria-hidden="true"></div>
                			<div id='lo'       class='text info smallinfo' aria-hidden="true"></div>

                			<div id='temperature' aria-hidden="true">--</div>
                			<div id='humidity' aria-hidden="true">--</div>

                		<!--	<img id='degree' src='Images/degree.png' aria-hidden="true">
                			<img id='dot'    src='Images/dot.png'    aria-hidden="true">
                			-->

                			<div id='middle' class='background'>
                				<div id='middle-contents'>
                					<img id='middle-img' width='100%' height='100%' src='<?php echo base_url();?>assets/Images/weather_day_middle.png' role="presentation" alt="">
                					<img id='dayband' src='<?php echo base_url();?>assets/Images/forecast_dayband.png' role="presentation" alt="">

                					<div class="day-container col0" role="img" id="c0">
                						<div class="day-contents" aria-hidden="true">
                							<div id='day0' class='text day'></div>
                							<img id='icon0' class='smallicon'>
                							<div id='hi0' class='text hi'></div>
                							<div id='low0' class='text low low-day-color'></div>
                						</div>
                					</div>
                					<div class="day-container col1" role="img" id="c1">
                						<div class="day-contents" aria-hidden="true">
                							<div id='day1' class='text day'></div>
                							<img id='icon1' class='smallicon'>
                							<div id='hi1' class='text hi'></div>
                							<div id='low1' class='text low low-day-color'></div>
                						</div>
                					</div>
                					<div class="day-container col2" role="img" id="c2">
                						<div class="day-contents" aria-hidden="true">
                							<div id='day2' class='text day'></div>
                							<img id='icon2' class='smallicon'>
                							<div id='hi2' class='text hi'></div>
                							<div id='low2' class='text low low-day-color'></div>
                						</div>
                					</div>
                					<div class="day-container col3" role="img" id="c3">
                						<div class="day-contents" aria-hidden="true">
                							<div id='day3' class='text day'></div>
                							<img id='icon3' class='smallicon'>
                							<div id='hi3' class='text hi'></div>
                							<div id='low3' class='text low low-day-color'></div>
                						</div>
                					</div>
                					<div class="day-container col4" role="img" id="c4">
                						<div class="day-contents" aria-hidden="true">
                							<div id='day4' class='text day'></div>
                							<img id='icon4' class='smallicon'>
                							<div id='hi4' class='text hi'></div>
                							<div id='low4' class='text low low-day-color'></div>
                						</div>
                					</div>
                					<div class="day-container col5" role="img" id="c5">
                						<div class="day-contents" aria-hidden="true">
                							<div id='day5' class='text day'></div>
                							<img id='icon5' class='smallicon'>
                							<div id='hi5' class='text hi'></div>
                							<div id='low5' class='text low low-day-color'></div>
                						</div>
                					</div>

                					<img id='grid' src='<?php echo base_url();?>assets/Images/forecast_grid.png' role="presentation" alt="">
                				</div>
                			</div>
                			<div id='bottom' class='background' onclick='toggleView(event);'>
                				<div style='position:relative;'>
                					<div id='infobutton' onclick='event.stopPropagation(); event.preventDefault();'></div>
                				</div>
                			</div>
                		</div>



        </div>

        <div class="grid_5">

            <div class="box round">

                <h2>RSS FEED</h2>

                <div class="block">
                  <div id="rss-feeds"></div>



                </div>

            </div>

        </div>

        <div class="grid_5">

            <div class="box round">

                <h2>

                    Twitter FEED</h2>

                <div class="block">
                  <div id="twitter-feeds"></div>



                </div>

            </div>

        </div>

        <div class="clear">

        </div>


        <div class="grid_5">

            <div class="box round">

                <h2>

                    Gmail API</h2>

                <div class="block">
                  <button id="authorize-button" class="btn btn-primary hidden">Authorize</button>
                    <table class="table table-striped table-inbox hidden">
                    <thead>
                      <tr>
                      <th>From</th>
                      <th>Subject</th>
                      <th>Date/Time</th>
                      </tr>
                    </thead>
                    <tbody></tbody>
                    </table>



                </div>

            </div>

        </div>

        <div class="clear">

        </div>

    </div>

    <div class="clear">

    </div>

    <div id="site_info">

        <p>

            Copyright <a href="#">502 dashboard</a>. All Rights Reserved.

        </p>

    </div>

  	<div id="demo-side-bar">



   </div>

    </div>

    <!--wrapper end-->

	<!--Dynamically creates analytics markup-->



</body>

</html>
