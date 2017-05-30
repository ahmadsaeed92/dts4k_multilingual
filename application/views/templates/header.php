<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title><?php echo $title; ?></title>
        <!-- Bootstrap core CSS -->
        <link href=<?php echo asset_url() . "css/bootstrap.min.css"; ?> rel="stylesheet">
        <!-- Font-Awesome CSS -->
        <link href=<?php echo asset_url() . "css/font-awesome.min.css"; ?> rel="stylesheet">
        <!-- Style CSS -->
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href=<?php echo asset_url() . "css/jquery-ui.css"; ?>>
        <link rel="stylesheet" type="text/css" href=<?php echo asset_url() . "css/jquery-ui-timepicker-addon.css"; ?>>
        <link href=<?php echo asset_url() . "css/jquery.mCustomScrollbar.css" ?> rel="stylesheet">
        <link href=<?php echo asset_url() . "css/style.css" ?> rel="stylesheet">
        <?php if (strpos($this->uri->segment(1, 0), "comparison") !== FALSE): ?>
            <link href=<?php echo asset_url() . "css/defaultTheme.css" ?> rel="stylesheet">
            <link href=<?php echo asset_url() . "css/myTheme.css" ?> rel="stylesheet">
        <?php endif;
        ?>
        <link rel="apple-touch-icon" sizes="57x57" href=<?php echo asset_url() . "images/favicon/apple-icon-57x57.png"; ?>>
        <link rel="apple-touch-icon" sizes="60x60" href=<?php echo asset_url() . "images/favicon/apple-icon-60x60.png"; ?>>
        <link rel="apple-touch-icon" sizes="72x72" href=<?php echo asset_url() . "images/favicon/apple-icon-72x72.png"; ?>>
        <link rel="apple-touch-icon" sizes="76x76" href=<?php echo asset_url() . "images/favicon/apple-icon-76x76.png"; ?>>
        <link rel="apple-touch-icon" sizes="114x114" href=<?php echo asset_url() . "images/favicon/apple-icon-114x114.png"; ?>>
        <link rel="apple-touch-icon" sizes="120x120" href=<?php echo asset_url() . "images/favicon/apple-icon-120x120.png"; ?>>
        <link rel="apple-touch-icon" sizes="144x144" href=<?php echo asset_url() . "images/favicon/apple-icon-144x144.png"; ?>>
        <link rel="apple-touch-icon" sizes="152x152" href=<?php echo asset_url() . "images/favicon/apple-icon-152x152.png"; ?>>
        <link rel="apple-touch-icon" sizes="180x180" href=<?php echo asset_url() . "images/favicon/apple-icon-180x180.png"; ?>>
        <link rel="icon" type="image/png" sizes="192x192"  href=<?php echo asset_url() . "images/favicon/android-icon-192x192.png"; ?>>
        <link rel="icon" type="image/png" sizes="32x32" href=<?php echo asset_url() . "images/favicon/favicon-32x32.png"; ?>>
        <link rel="icon" type="image/png" sizes="96x96" href=<?php echo asset_url() . "images/favicon/favicon-96x96.png"; ?>>
        <link rel="icon" type="image/png" sizes="16x16" href=<?php echo asset_url() . "images/favicon/favicon-16x16.png"; ?>>
    </head>