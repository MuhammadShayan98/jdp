<?php $this->extend('default');


$this->section('meta');
$this->endSection('meta');


$this->section('top_js');
$this->endSection('top_js');


$this->section('title'); ?>

<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Indexing Database List </h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>

<?php
$this->endSection('title');

$this->section('breadcrumb'); ?>

<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
<span class="breadcrumb-item active">Indexing Database List</span>
<?php

$this->endSection('breadcrumb');
$this->section('content');
?>

<div class="card card-body">
    <div class="row ">

    <div class="col-md-9">
        <?php
        helper('form');

        echo form_open_multipart('index.html', 'POST');
        ?>
            <div class="input-group">
                <input type="text" name="" value="" class="form-control border-right-0 " placeholder="search" />

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
     
        <div class="col-md-3">
            <a type="button" class="btn btn-primary w-100" data-target="#add_indexing_database">Add New<i class="icon-plus3 mr-3 "></i> </a>
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





<?php $this->endSection('content'); ?>





<?php $this->section('footer_js'); ?>

<script>
    //
</script>

<?php $this->endSection('footer_js'); ?>