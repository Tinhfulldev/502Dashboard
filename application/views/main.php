<!DOCTYPE html>
<html>
<head>
<title>502 Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->


<link href="<?php echo base_url();?>assets1/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>assets1/css/thin-admin.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>assets1/css/font-awesome.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>assets1/style/style.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets1/style/dashboard.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets3/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
 <link href="<?php echo base_url();?>assets/css/twitter_style.css" rel="stylesheet" type="text/css" />
<style type="text/css" title="AppleStyle">
  @import url("<?php echo base_url();?>assets/css/Weather.css");
</style>
<style>
  iframe {
    width: 100%;
    border: 0;
    min-height: 100%;

  }
  .modal-body{
    overflow:auto;
    -webkit-overflow-scrolling:touch;
    height: 600px;
  }

</style>

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->


</head>
<body>

<?php $this->load->view('topbar'); ?>
<div class="wrapper">
  <?php $this->load->view('navbar');
  ?>
  <div class="page-content">
    <div class="content container">
  <?php
  //$this->load->view('dashboard1');
  $this->load->view('newsfeed1');
  $this->load->view('gmailcontainer');?>
</div>
</div>
</div>
<div class="bottom-nav footer"> 2017 &copy; 502 Dashboard by Tinh Nguyen. </div>



  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="<?php echo base_url();?>assets1/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets1/js/bootstrap.min.js"></script>


  <script type="text/javascript" src="<?php echo base_url();?>assets1/js/smooth-sliding-menu.js"></script>

  <script src="<?php echo base_url();?>assets3/sparkline/jquery.sparkline.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets3/sparkline/jquery.customSelect.min.js" ></script>
  <script src='<?php echo base_url();?>assets/js/jquery-2.1.3.min.js'></script>
  <script src='<?php echo base_url();?>assets/js/jquery.simpleWeather.min.js'></script>
  <script src="<?php echo base_url();?>assets/js/weather.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.rss.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/rss-feed.js"></script>
  <script src="<?php echo base_url();?>assets/js/moment-2.8.4.min.js"></script>


  <script src="<?php echo base_url();?>assets1/js/select-checkbox.js"></script>
  <script src="<?php echo base_url();?>assets/js/gmail.api.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/twitterFetcher.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>assets/js/exampleUsage.js"></script>
  <script src="https://apis.google.com/js/client.js?onload=handleClientLoad"></script>


  <!--switcher html start-->
  <!-- <div class="demo_changer active" style="right: 0px;">
    <div class="demo-icon"></div>
    <div class="form_holder">
      <div class="predefined_styles"> <a class="styleswitch" rel="a" href=""><img alt="" src="images/a.jpg"></a> <a class="styleswitch" rel="b" href=""><img alt="" src="images/b.jpg"></a> <a class="styleswitch" rel="c" href=""><img alt="" src="images/c.jpg"></a> <a class="styleswitch" rel="d" href=""><img alt="" src="images/d.jpg"></a> <a class="styleswitch" rel="e" href=""><img alt="" src="images/e.jpg"></a> <a class="styleswitch" rel="f" href=""><img alt="" src="images/f.jpg"></a> <a class="styleswitch" rel="g" href=""><img alt="" src="images/g.jpg"></a> <a class="styleswitch" rel="h" href=""><img alt="" src="images/h.jpg"></a> <a class="styleswitch" rel="i" href=""><img alt="" src="images/i.jpg"></a> <a class="styleswitch" rel="j" href=""><img alt="" src="images/j.jpg"></a> </div>
    </div>
  </div> -->
  <div class="demo_changer active" style="right: 0px;">
                  <div class="demo-icon"></div>
                  <div class="form_holder">


                      <div class="predefined_styles">
                          <a class="styleswitch" rel="a" href=""><img alt="" src="<?php echo base_url();?>assets1/images/a.jpg"></a>
                          <a class="styleswitch" rel="b" href=""><img alt="" src="<?php echo base_url();?>assets1/images/b.jpg"></a>
                          <a class="styleswitch" rel="c" href=""><img alt="" src="<?php echo base_url();?>assets1/images/c.jpg"></a>
                          <a class="styleswitch" rel="d" href=""><img alt="" src="<?php echo base_url();?>assets1/images/d.jpg"></a>
                          <a class="styleswitch" rel="e" href=""><img alt="" src="<?php echo base_url();?>assets1/images/e.jpg"></a>
                          <a class="styleswitch" rel="f" href=""><img alt="" src="<?php echo base_url();?>assets1/images/f.jpg"></a>
                          <a class="styleswitch" rel="g" href=""><img alt="" src="<?php echo base_url();?>assets1/images/g.jpg"></a>
                          <a class="styleswitch" rel="h" href=""><img alt="" src="<?php echo base_url();?>assets1/images/h.jpg"></a>
                          <a class="styleswitch" rel="i" href=""><img alt="" src="<?php echo base_url();?>assets1/images/i.jpg"></a>
                          <a class="styleswitch" rel="j" href=""><img alt="" src="<?php echo base_url();?>assets1/images/j.jpg"></a>
                      </div>

                  </div>
              </div>

  <!--switcher html end-->
  <script src="<?php echo base_url();?>assets3/switcher/switcher.js"></script>
  <script src="<?php echo base_url();?>assets3/switcher/moderziner.custom.js"></script>
  <link href="<?php echo base_url();?>assets3/switcher/switcher.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets3/switcher/switcher-defult.css" rel="stylesheet">
  <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets3/switcher/a.css" title="a" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets3/switcher/b.css" title="b" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets3/switcher/c.css" title="c" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets3/switcher/d.css" title="d" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets3/switcher/e.css" title="e" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets3/switcher/f.css" title="f" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets3/switcher/g.css" title="g" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets3/switcher/h.css" title="h" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets3/switcher/i.css" title="i" media="all" />
  <link rel="alternate stylesheet" type="text/css" href="<?php echo base_url();?>assets3/switcher/j.css" title="j" media="all" />

</body>
</html>
