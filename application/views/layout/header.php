<!DOCTYPE html>
<html lang="es">
<head>
   <!-- Basic Page Needs
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <title>Cegaper</title>
   <meta name="description" content="">
   <meta name="author" content="">

   <!-- Mobile Specific Metas
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <!-- FONT
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
   <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
   <!-- CSS
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
   <link rel="stylesheet" href="<?php echo BASE_URL?>/assets/css/normalize.css">
   <link rel="stylesheet" href="<?php echo BASE_URL?>/assets/css/skeleton.css">
   <link rel="stylesheet" href="<?php echo BASE_URL?>/assets/css/custom.css">
   <link rel="stylesheet" href="<?php echo BASE_URL?>/assets/sweetalert-master/dist/sweetalert.css">
   <link rel="stylesheet" href="<?php echo BASE_URL?>/assets/sweetalert-master/themes/google/google.css">
   <!-- Favicon
   –––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <!-- slider JS files -->
    
    <script class="rs-file" src="<?php echo BASE_URL?>/assets/royalslider/jquery-1.8.3.min.js"></script>
    <script class="rs-file" src="<?php echo BASE_URL?>/assets/royalslider/jquery.royalslider.min.js"></script>
    <link class="rs-file" href="<?php echo BASE_URL?>/assets/royalslider/royalslider.css" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    
    <!-- syntax highlighter -->
    <script src="<?php echo BASE_URL?>/assets/preview-assets/js/highlight.pack.js"></script>
    <script src="<?php echo BASE_URL?>/assets/preview-assets/js/jquery-ui-1.8.22.custom.min.js"></script>
    <script> hljs.initHighlightingOnLoad();</script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    

    <!-- preview-related stylesheets -->
    <link href="<?php echo BASE_URL?>/assets/preview-assets/css/reset.css" rel="stylesheet">

    <link href="<?php echo BASE_URL?>/assets/preview-assets/css/github.css" rel="stylesheet">

    <link href="<?php echo BASE_URL?>/assets/jquery/jquery-ui.css" rel="stylesheet">
    <!-- slider stylesheets -->
    
    <link class="rs-file" href="<?php echo BASE_URL?>/assets/royalslider/skins/minimal-white/rs-minimal-white.css" rel="stylesheet">
     
    

    
    <!-- slider css -->
    <style>
      #full-width-slider {
        position:absolute;
        top:0;
        z-index:5;
  width: 100%;
  color: #000;
}
.rsImg{
   width: 100%;
   height: 100%;
}
.coloredBlock {
  padding: 12px;
  background: rgba(255,0,0,0.6);
  color: #FFF;
   width: 200px;
   left: 20%;
   top: 5%;
}
.infoBlock {
  position: absolute;
  top: 30px;
  right: 30px;
  left: auto;
  max-width: 25%;
  padding-bottom: 0;
  background: #FFF;
  background: rgba(255, 255, 255, 0.8);
  overflow: hidden;
  padding: 20px;
}
.infoBlockLeftBlack {
  color: #FFF;
  background: #000;
  background: rgba(0,0,0,0.75);
  left: 30px;
  right: auto;
}
.infoBlock h4 {
  font-size: 20px;
  line-height: 1.2;
  margin: 0;
  padding-bottom: 3px;
}
.infoBlock p {
  font-size: 14px;
  margin: 4px 0 0;
}
.infoBlock a {
  color: #FFF;
  text-decoration: underline;
}
.photosBy {
  position: absolute;
  line-height: 24px;
  font-size: 12px;
  background: #FFF;
  color: #000;
  padding: 0px 10px;
  position: absolute;
  left: 12px;
  bottom: 12px;
  top: auto;
  border-radius: 2px;
  z-index: 25; 
} 
.photosBy a {
  color: #000;
}
.fullWidth {
  max-width: 1400px;
  margin: 0 auto 24px;
}

@media screen and (min-width:960px) and (min-height:660px) {
  .heroSlider .rsOverflow,
  .royalSlider.heroSlider {
      height: 520px !important;
  }
}

@media screen and (min-width:960px) and (min-height:1000px) {
    .heroSlider .rsOverflow,
    .royalSlider.heroSlider {
        height: 660px !important;
    }
}
@media screen and (min-width: 0px) and (max-width: 800px) {
  .royalSlider.heroSlider,
  .royalSlider.heroSlider .rsOverflow {
    height: 300px !important;
  }
  .infoBlock {
    padding: 10px;
    height: auto;
    max-height: 100%;
    min-width: 40%;
    left: 5px;
    top: 5px;
    right: auto;
    font-size: 12px;
  }
  .infoBlock h3 {
     font-size: 14px;
     line-height: 17px;
  }
}

    </style>
    
    <style>
      #page-navigation { display: none; }
    </style>

</head>
<body>