<?php $this->extend('default') ; 


 $this->section('meta') ; 
 $this->endSection('meta') ; 

 
$this->section('top_js') ; 
$this->endSection('top_js') ;


$this->section('title') ; ?>

<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard </h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>

<?php 
$this->endSection('title') ; 

$this->section('breadcrumb') ; ?>

<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
                <span class="breadcrumb-item active">Dashboard</span>


<?php 

$this->endSection('breadcrumb') ; 
$this->section('content') ; 

?>

<div class="row">
    <div class="col-xl-7">
        <h1>Hello</h1>
        <h1>Hello</h1>

    </div>
</div>

<?php $this->endSection('content') ; ?>





<?php $this->section('footer_js') ; ?>

<script>
//
</script>

<?php $this->endSection('footer_js') ; ?>