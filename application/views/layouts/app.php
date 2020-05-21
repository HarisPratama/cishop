<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title><?= isset($title) ? $title : 'CIShop'; ?></title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/navbar-fixed/">

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>/assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- App Css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/css/app.css">

    <!-- Fontawesome css -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/libs/fontawesome/css/all.min.css">
</head>

<body>


    <!-- Navbar -->
    <?php $this->load->view('layouts/_navbar'); ?>
    <!-- end -->

    <!-- content -->
    <?php $this->load->view($page); ?>
    <!-- End -->



    <script src="<?= base_url(); ?>/assets/libs/jquery/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url(); ?>/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/js/app.js"></script>
</body>

</html>