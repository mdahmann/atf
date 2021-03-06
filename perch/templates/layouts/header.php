<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Adding SEO Tags -->
    <?php
    perch_page_attributes(array(
      'template' => 'seo.html'
    ));
    ?>
    <link rel="icon" href="favicon.ico">
    <link rel="apple-touch-icon" href="/images/apple-icon.png">
    <link rel="apple-touch-icon-precomposed" href="/images/apple-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="/images/ms-icon-144-144.png">
    <title><?php perch_pages_title(); ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <link href="/css/sass-space.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/slick.css" rel="stylesheet">
    <link href="/css/slick-theme.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/jquery.labelauty/1.0/jquery-labelauty.min.css" rel="stylesheet">
    <!-- <link href="//cdnjs.cloudflare.com/ajax/libs/formvalidation/0.6.1/css/formValidation.min.css" rel="stylesheet"> -->
    <link href="/css/custom.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '837837026361142');
    fbq('track', "PageView");</script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=837837026361142&ev=PageView&noscript=1"
    /></noscript>
    <!-- End Facebook Pixel Code -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-77384089-1', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body class="<?php
perch_page_attribute('bodyclass', array(
    'template' => 'body_attributes.html'
));
?>">

  <nav class="navbar navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <a class="navbar-brand" href="/">At&nbsp;the&nbsp;Fork</a>
            <i class="fa fa-share hide" aria-hidden="true"></i>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <?php perch_content('Navigation'); ?>
            </ul>
        </div>
        <!--/.navbar-collapse -->
    </div>
</nav>
<?php perch_content('organize'); ?>
<?php perch_content('challenge-form'); ?>
<?php perch_content('alerts'); ?>
