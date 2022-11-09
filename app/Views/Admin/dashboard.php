<?php $this->extend('default');


$this->section('meta'); ?>
<style>
    .inset-0 {
        inset: 0;
    }

    .dashboard-card {
        min-height: 100px;
    }

    .dashboard-anchor {
        display: flex;
        justify-content: center;
        align-items: center;

    }
</style>
<?php
$this->endSection('meta');


$this->section('top_js');
$this->endSection('top_js');


$this->section('title'); ?>

<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard </h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>

<?php
$this->endSection('title');

$this->section('breadcrumb'); ?>

<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
<span class="breadcrumb-item active"><?php $session = session();
                                        echo  $session->get('role_name'); ?></span>
<?php

$this->endSection('breadcrumb');
$this->section('content');
?>

<div class="row" style="justify-content: space-evenly;">
    <div class="col-md-4 px-5 mb-5">
        <div class="dashboard-card border position-relative rounded shadow">
            <a href="#" class="position-absolute inset-0 dashboard-anchor bg-primary">
                <h3 class="text-center mb-0"> 10 <br /> Pending </h3>
            </a>
        </div>
    </div>
    <div class="col-md-4 px-5 mb-5">
        <div class="dashboard-card border position-relative rounded shadow">
            <a href="#" class="position-absolute inset-0 dashboard-anchor bg-secondary">
                <h3 class="text-center mb-0"> 10 <br /> In Process </h3>
            </a>
        </div>
    </div>
    <div class="col-md-4 px-5 mb-5">
        <div class="dashboard-card border position-relative rounded shadow">
            <a href="#" class="position-absolute inset-0 dashboard-anchor bg-success">
                <h3 class="text-center mb-0"> 10 <br /> In Review </h3>
            </a>
        </div>
    </div>
    <div class="col-md-4 px-5 mb-5">
        <div class="dashboard-card border position-relative rounded shadow">
            <a href="#" class="position-absolute inset-0 dashboard-anchor bg-warning">
                <h3 class="text-center mb-0"> 10 <br /> For Indexation </h3>
            </a>
        </div>
    </div>
    <div class="col-md-4 px-5 mb-5">
        <div class="dashboard-card border position-relative rounded shadow">
            <a href="#" class="position-absolute inset-0 dashboard-anchor bg-danger">
                <h3 class="text-center mb-0"> 10 <br /> Completed </h3>
            </a>
        </div>
    </div>
</div>

<?php $this->endSection('content'); ?>





<?php $this->section('footer_js'); ?>

<script>
    //
</script>

<?php $this->endSection('footer_js'); ?>