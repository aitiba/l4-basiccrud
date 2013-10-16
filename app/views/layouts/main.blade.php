<!DOCTYPE html>

<!--[if IEMobile 7]><html class="no-js iem7 oldie"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js ie7 oldie" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js ie8 oldie" lang="en"><![endif]-->
<!--[if (IE 9)&!(IEMobile)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|(gt IEMobile 7)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Panel de control</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- http://davidbcalhoun.com/2010/viewport-metatag -->
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">

  <!-- http://www.kylejlarson.com/blog/2012/iphone-5-web-design/ -->
  <meta name="viewport" content="user-scalable=0, initial-scale=1.0">


  <!-- For all browsers -->
  {{ HTML::style('css/reset.css?v=1'); }}
  {{ HTML::style('css/style.css?v=1'); }}
  {{ HTML::style('css/colors.css?v=1'); }}
  {{ HTML::style('css/print.css?v=1', array('media' => 'print')); }}
  <!-- For progressively larger displays -->
  {{ HTML::style('css/480.css?v=1', array('media' => 'only all and (min-width: 480px)')); }}
  {{ HTML::style('css/768.css?v=1', array('media' => 'only all and (min-width: 768px)')); }}
  {{ HTML::style('css/992.css?v=1', array('media' => 'only all and (min-width: 992px)')); }}
  {{ HTML::style('css/1200.css?v=1', array('media' => 'only all and (min-width: 1200px)')); }}
  <!-- For Retina displays -->
  {{ HTML::style('css/2x.css?v=1', array('media' => 'only all and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)')); }}

  <!-- Webfonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

  <!-- Additional styles -->
  {{ HTML::style('css/styles/agenda.css?v=1'); }}
  {{ HTML::style('css/styles/dashboard.css?v=1'); }}
  {{ HTML::style('css/styles/form.css?v=1'); }}
  {{ HTML::style('css/styles/modal.css?v=1'); }}
  {{ HTML::style('css/styles/progress-slider.css?v=1'); }}
  {{ HTML::style('css/styles/switches.css?v=1'); }}
  {{ HTML::style('css/styles/table.css?v=1'); }}

  {{ HTML::style('css/fullcalendar.css?v=1'); }}
  {{ HTML::style('css/fullcalendar.print.css?v=1', array('media' => 'print')); }}
  <style type="text/css">
    .dark-text-bevel, .calendar-menu > li, li.calendar-menu, .message-menu > li, li.message-menu {
      text-shadow: none;
    }
    .margintop {
       margin-top:-50px;
    }
    a, a:active, a:hover {
      color:#fff;
    }
    html .fc, .fc table {
      font-size: 1.1em;
    }
  </style>
  <!-- JavaScript at bottom except for Modernizr -->
  {{ HTML::script('js/libs/modernizr.custom.js'); }}
    {{ HTML::script('js/libs/jquery-1.9.1.min.js'); }}
  <script src="http://code.jquery.com/jquery-1.9.1.min.map"></script>

  <!-- For Modern Browsers -->

  <link rel="shortcut icon" href="/bintra/public/img/favicons/favicon.png">
  <!-- For everything else -->
  <link rel="shortcut icon" href="/bintra/public/img/favicons/favicon.ico">

  <!-- iOS web-app metas -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">

  <!-- iPhone ICON -->
  <link rel="apple-touch-icon" href="/bintra/public/img/favicons/apple-touch-icon.png" sizes="57x57">
  <!-- iPad ICON -->
  <link rel="apple-touch-icon" href="/bintra/public/img/favicons/apple-touch-icon-ipad.png" sizes="72x72">
  <!-- iPhone (Retina) ICON -->
  <link rel="apple-touch-icon" href="/bintra/public/img/favicons/apple-touch-icon-retina.png" sizes="114x114">
  <!-- iPad (Retina) ICON -->
  <link rel="apple-touch-icon" href="/bintra/public/img/favicons/apple-touch-icon-ipad-retina.png" sizes="144x144">

  <!-- iPhone SPLASHSCREEN (320x460) -->
  <link rel="apple-touch-startup-image" href="/bintra/public/img/splash/iphone.png" media="(device-width: 320px)">
  <!-- iPhone (Retina) SPLASHSCREEN (640x960) -->
  <link rel="apple-touch-startup-image" href="/bintra/public/img/splash/iphone-retina.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)">
  <!-- iPhone 5 SPLASHSCREEN (640×1096) -->
  <link rel="apple-touch-startup-image" href="/bintra/public/img/splash/iphone5.png" media="(device-height: 568px) and (-webkit-device-pixel-ratio: 2)">
  <!-- iPad (portrait) SPLASHSCREEN (748x1024) -->
  <link rel="apple-touch-startup-image" href="/bintra/public/img/splash/ipad-portrait.png" media="(device-width: 768px) and (orientation: portrait)">
  <!-- iPad (landscape) SPLASHSCREEN (768x1004) -->
  <link rel="apple-touch-startup-image" href="/bintra/public/img/splash/ipad-landscape.png" media="(device-width: 768px) and (orientation: landscape)">
  <!-- iPad (Retina, portrait) SPLASHSCREEN (2048x1496) -->
  <link rel="apple-touch-startup-image" href="/bintra/public/img/ipad-portrait-retina.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-min-device-pixel-ratio: 2)">
  <!-- iPad (Retina, landscape) SPLASHSCREEN (1536x2008) -->
  <link rel="apple-touch-startup-image" href="/bintra/public/img/ipad-landscape-retina.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-min-device-pixel-ratio: 2)">

  <!-- Microsoft clear type rendering -->
  <meta http-equiv="cleartype" content="on">

  <!-- IE9 Pinned Sites: http://msdn.microsoft.com/en-us/library/gg131029.aspx -->
  <meta name="application-name" content="Developr Admin Skin">
  <meta name="msapplication-tooltip" content="Cross-platform admin template.">
  <meta name="msapplication-starturl" content="http://www.display-inline.fr/demo/developr">
  <!-- These custom tasks are examples, you need to edit them to show actual pages -->
  <!--<meta name="msapplication-task" content="name=Agenda;action-uri=http://www.display-inline.fr/demo/developr/agenda.html;icon-uri=http://www.display-inline.fr/demo/developr/img/favicons/favicon.ico">
  <meta name="msapplication-task" content="name=My profile;action-uri=http://www.display-inline.fr/demo/developr/profile.html;icon-uri=http://www.display-inline.fr/demo/developr/img/favicons/favicon.ico">-->
</head>

<body class="clearfix with-menu with-shortcuts">

  <style type="text/css">
  a {
    background-color: red;
  }
  </style>
  <!-- Prompt IE 6 users to install Chrome Frame -->
  <!--[if lt IE 7]><p class="message red-gradient simpler">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->

  <!-- Title bar -->
  <header role="banner" id="title-bar">
    <h2>Burujabetech Kooperatiba, <a href="http://burujabetech.net">http://burujabetech.net</a></h2>
  </header>


  <!-- Main content -->
  <section role="main" id="main">

     @if(Session::has('flash_message'))
       <p class="message icon-speech green-gradient small-margin-bottom">
        <a class="close" title="Hide message" href="#">✕</a>
           {{ Session::get('flash_message') }}
       </p>
     @endif

    <div class="dashboard">
       @yield('content')
    </div>

  </section>
  <!-- End main content -->

  <!-- JAvascript Scripts -->
  <!--{{ HTML::script('js/setup.js'); }} -->

</body>
