<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?= $title; ?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?= base_url('assets'); ?>/img/brand/favicon.ico">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
    <!-- Page plugins -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/sweetalert2/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/vendor/select2/dist/css/select2.min.css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?= base_url('assets'); ?>/css/argon.css?v=1.1.0" type="text/css">
</head>

<body>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>