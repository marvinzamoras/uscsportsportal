<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title ;?> | USC Sports Portal</title>
    <meta name="description" content="HTML framework description">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/general.css">
    <!-- Google fonts -->
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700,300italic,400italic,500italic,700italic%7COswald:400,300,700&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.css">
    <!-- Modernizr -->
    <script type='text/javascript' src='<?php echo base_url(); ?>assets/js/libs/modernizr-2.5.3.min.js'></script>
    <!-- tinymce -->
    <link href="<?php echo base_url('/assets/css/login.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/general.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/fonts/fonts.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.js"></script>
    <script type='text/javascript' src="<?php echo base_url(); ?>assets/js/libs/modernizr-2.5.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>tinymce/js/tinymce/tinymce.min.js"> </script>
    <script type="text/javascript">
        tinymce.init({
        relative_urls: false,
        height: 500,
        width: 900,
        selector: "textarea",theme: "modern",
         menubar: false,
        plugins: [
             "advlist autolink link image charmap preview hr pagebreak",
             "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
             "table contextmenu directionality emoticons paste textcolor responsivefilemanager"
       ],
        image_class_list: [
        {title: 'Post Image', value: 'post-img'}
        ],
       toolbar1: "undo redo | bold italic underline| responsivefilemanager | link unlink | image media | print preview code ",
       
       image_advtab: true ,
       
            external_filemanager_path:"<?php echo base_url();?>filemanager/",
            filemanager_title: "Responsive Filemanager",
            external_plugins: { "filemanager" : "<?php echo base_url();?>filemanager/plugin.min.js"}

         });
    </script>
    <style>
      label {
        color: #f8f8f8;
        font-family: 'Ubuntu', serif;
        font-size: 20px;
        text-shadow: 4px 4px 4px #aaa;
      }
    </style>
    <style>
        input.EButton {
        width: 100px;
        padding: 20px;
        font-weight: bold;
        font-size: 50%;
        background: #3366CC;
        color: #FFFFFF;
        cursor: pointer;
        border: 1px solid #999999;
        border-radius: 10px;
        }
        input.EButton:hover {
        color: #FFFF00;
        background: #3366CC;
        border: 1px solid #A3A3A3;
        -webkit-box-shadow: 2px 2px 5px #666666;
        -moz-box-shadow: 2px 2px 5px #666666;
        box-shaddow: 2px 2px 5px; #666666;
        }
    </style>
    <style>
        input.DButton {
        width: 100px;
        padding: 20px;
        font-weight: bold;
        font-size: 50%;
        background: #db3c21;
        color: #FFFFFF;
        cursor: pointer;
        border: 1px solid #999999;
        border-radius: 10px;
        }
        input.DButton:hover {
        color: #FFFF00;
        background: #db3c21;
        border: 1px solid #A3A3A3;
        -webkit-box-shadow: 2px 2px 5px #666666;
        -moz-box-shadow: 2px 2px 5px #666666;
        box-shaddow: 2px 2px 5px; #666666;
        }
    </style>
   
</head>
<body>
