
<!-- dashboard page -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <?php
  //checking session
    if (isset($this->session->userdata['user_data_session'])){
      //restore session
      $username = ($this->session->userdata['user_data_session']['name']);
    }else{
      //if session expired, redirect to login page.
      header("location: ".base_url());
    } ?>

    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>502 Dashboard</title>

        <!-- BEGIN: load css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/reset.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/text.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/grid.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/layout.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/nav.css" media="screen" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/select2.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/amcharts/style.css" type="text/css">
        <style type="text/css">
            #demo-side-bar{left:90%!important;display:block!important;}
            #branding .floatright{margin-right:130px!important;}
        </style>

        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="css/ie6.css" media="screen" /><![endif]-->
        <!--[if IE 7]><link rel="stylesheet" type="text/css" href="css/ie.css" media="screen" /><![endif]-->

        <!-- END: load css-->

        <!-- BEGIN: load jquery -->
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/select2.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-ui/jquery.ui.core.min.js"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>
        <!-- END: load jquery -->

        <!-- BEGIN: load script -->

        <script src="<?php echo base_url();?>assets/amcharts/amcharts.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>assets/amcharts/pie.js" type="text/javascript"></script>

        <script type="text/javascript">
            $(document).ready(function () {

              $("#select").change(function(){
                var option = $(this).find('option:selected');
                window.location.href = option.data("url");
              });
            });
        </script>

    	 <script type="text/javascript">
    	     $(window).load(function () {
    	         $('#demo-side-bar').removeAttr('style');
    	     });
       </script>

       <script>
            AmCharts.makeChart("chartdiv", {
                "type": "pie",
                "dataProvider": [{
                    "country": "Czech Republic",
                        "litres": 156.9
                }, {
                    "country": "Ireland",
                        "litres": 131.1
                }, {
                    "country": "Germany",
                        "litres": 115.8
                }, {
                    "country": "Australia",
                        "litres": 109.9
                }, {
                    "country": "Austria",
                        "litres": 108.3
                }, {
                    "country": "UK",
                        "litres": 65
                }, {
                    "country": "Belgium",
                        "litres": 50
                }],
                "titleField": "country",
                "valueField": "litres",
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "legend": {
                    "align": "center",
                    "markerType": "circle"
                }

            });
        </script>

    </head>

    <body>

        <!-- combobox script -->
      	<script type="text/javascript">
        $(document).ready(function() {
          $(".js-example-basic-single").select2();
        });
        </script>

        <div class="container_12">
            <div class="grid_12 header-repeat">
                <div id="branding">
                    <div class="floatleft">
                      <!-- logo -->
                        <img src="<?php echo base_url();?>assets/img/logo.png" alt="Logo" />
                    </div>
                    <div class="floatright">
                        <div class="floatleft">
                            <img src="<?php echo base_url();?>assets/img/img-profile.jpg" alt="Profile Pic" />
                        </div>
                        <div class="floatleft marginleft10">
                            <ul class="inline-ul floatleft">
                                <li>Hello <?php echo $username; ?></li>
                                <li><a href="<?php echo base_url();?>Logout">Logout</a></li>
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


    				<!-- company search box -->
            <div class="grid_5">
      					<select id = "select" class="js-example-basic-single">

                  <?php if (isset($select_company)){ ?>
                  <option data-url = "<?php echo base_url().'dashboard/license/'.$select_company['0']->licensenum;?>"> <?php echo $select_company['0']->name; ?> </option>
                  <?php  }
                  foreach ($companies as $company) {
                    if($company['name'] !== $select_company['0']->name){ ?>
                    <option data-url = "<?php echo base_url().'dashboard/license/'.$company['licensenum'];?>"> <?php echo $company['name']; ?> </option>
                    <?php }
                  } ?>

      					</select>
            </div>


            <!-- chart -->
            <div class="grid_10">
              <div class="box round first">
                  <h2>Pie charts - <?php if (isset($select_company)){
                    echo $select_company['0']->name;
                  } else {
                    echo  $companies['0']['name'];
                  } ?> </h2>

                  <div class="block">
                    <div id="chartdiv" style="width: 100%; height: 400px;"></div>
                  </div>
              </div>


                <div class="box round first">
                    <h2>Product Sales</h2>
                    <div class="block">
                    </div>
                </div>

                <div class="box round">
                    <h2>Figures</h2>
                    <div class="block">

                        <div class="stat-col">
                            <span>Target</span>
                            <p class="purple">70,000</p>
                        </div>

                        <div class="stat-col">
                            <span>Last Month Sales</span>
                            <p class="yellow">32,729</p>
                        </div>

                        <div class="stat-col">
                            <span>Current Month Sales</span>
                            <p class="green">63,829</p>
                        </div>

                        <div class="stat-col">
                            <span>Change</span>
                            <p class="blue">99.9%</p>
                        </div>

                        <div class="stat-col">
                            <span>Difference</span>
                            <p class="red">693.00</p>
                        </div>

                        <div class="stat-col">
                            <span>Stats with Icon</span>
                            <p class="purple">
                                <img src="<?php echo base_url();?>assets/img/icon-direction.png" alt="" />&nbsp;65,000</p>
                        </div>

                        <div class="stat-col last">
                            <span>Total</span>
                            <p class="darkblue">70,000</p>
                        </div>

                        <div class="clear">
                        </div>

                    </div>

                </div>

            </div>


            <div class="grid_5">

                <div class="box round">
                    <h2>Column on Left</h2>

                    <div class="block">

                    </div>

                </div>

            </div>

            <div class="grid_5">

                <div class="box round">

                    <h2>Right Column</h2>

                    <div class="block">

                    </div>

                </div>

            </div>

            <div class="clear">

            </div>

        </div>

        <div class="clear">

        </div>

        <div id="site_info">
            <p>Copyright <a href="#">502 Dashboard Admin</a>. All Rights Reserved.</p>
        </div>

      	<div id="demo-side-bar">
       </div>

        </div>

        <!--wrapper end-->

    	<!--Dynamically creates analytics markup-->
    </body>
</html>
