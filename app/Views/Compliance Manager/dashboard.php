<?php $this->extend('default') ; 


 $this->section('meta') ; ?>
 <style>
    .inset-0{
        inset: 0;
    }
    .dashboard-card{
        min-height: 80px;
    }
    .dashboard-anchor{
    display: flex;
    justify-content: center;
    align-items: center;

    }
 </style>
<?php
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

<div class="row" >
   <div class="col-md-3 px-4">
    <div class="dashboard-card border position-relative rounded shadow">
        <a href="#" class="position-absolute inset-0 dashboard-anchor bg-primary">
           <h3 class="text-center mb-0"> 10 <br /> Pending </h3>
        </a>
    </div>
   </div>
   <div class="col-md-3 px-4">
    <div class="dashboard-card border position-relative rounded shadow">
        <a href="#" class="position-absolute inset-0 dashboard-anchor bg-secondary">
        <h3 class="text-center mb-0"> 10 <br /> In Process </h3>
        </a>
    </div>
   </div>
   <div class="col-md-3 px-4">
    <div class="dashboard-card border position-relative rounded shadow">
        <a href="#" class="position-absolute inset-0 dashboard-anchor bg-success">
        <h3 class="text-center mb-0"> 10 <br /> In Review </h3>
        </a>
    </div>
   </div>
  
   <div class="col-md-3 px-4">
    <div class="dashboard-card border position-relative rounded shadow">
        <a href="#" class="position-absolute inset-0 dashboard-anchor bg-danger">
        <h3 class="text-center mb-0"> 10 <br /> Completed </h3>
        </a>
    </div>
   </div>
</div>

<div class="card card-body mt-5">
<div class="col-md-3">
            <h3> Indexing Database List </h3>
</div>
    <div class="row ">

    <div class="col-md-9">
        <?php
        helper('form');

        echo form_open_multipart('index.html', 'POST');
        ?>
            <div class="input-group">
                <input type="text" name="" value="" class="form-control border-right-0 " placeholder="search" />

                <select class="form-control" name="search_db" >
                    <option selected value="pending">Pending</option>
                    <option value="in_process">In Process</option>
                    <option value="in_review">In Review</option>
                    <option value="completed">Completed</option>
                </select>
                <span class="input-group-append">
                    <?php $btn_search = array(
                        'name' => 'search',
                        'id' => 'search',
                        'class' => 'btn bg-teal',
                        'value' => 'Search',
                        'type' => 'submit',
                        'content' => "Search",
                    );
                    echo form_submit($btn_search);
                    ?>
                </span>
            </div>
            <?php echo form_close(); ?>
        </div>
     
       
    </div>
    </div>



<div class="card">
    <div class="card">


        <div class="table-responsive">
            <?php
            $table = new \CodeIgniter\View\Table();


            $template = [
                'table_open' => '<table class="table">',

                'thead_open'  => '<thead>',
                $table->setHeading('S.no', 'Indexing Agency', 'Database', 'created On', 'Created By', 'Status', 'Active', 'Assign'),

                'thead_close' => '</thead>',

                'tbody_open'  => '<tbody>',
                'tbody_close' => '</tbody>',

                'table_close' => '</table>',
            ];

            $table->setTemplate($template);
            echo $table->generate();
            ?>

        </div>
    </div>
</div>




<?php $this->endSection('content') ; ?>





<?php $this->section('footer_js') ; ?>

<script>
//
</script>

<?php $this->endSection('footer_js') ; ?>