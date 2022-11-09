<?php $this->extend('default');


$this->section('meta');
$this->endSection('meta');


$this->section('top_js');
$this->endSection('top_js');


$this->section('title'); ?>

<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Indexing Agency List </h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>

<?php
$this->endSection('title');

$this->section('breadcrumb'); ?>

<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
<span class="breadcrumb-item active">Indexing Agency List</span>
<?php

$this->endSection('breadcrumb');
$this->section('content');
?>

<div class="card card-body">
    <div class="row">
        <div class="col-lg-9">
        <?php
        helper('form');

        echo form_open_multipart('index.html', 'POST');
        ?>
            <div class="input-group">
                <input type="text" name="" value="" class="form-control border-right-0" placeholder="search" />

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
        <div class="col-lg-3">

            <button type="button" class="btn btn-primary w-100" data-toggle="modal" data-target="#add_indexing_agency">Add New<i class="icon-plus3 mr-3 "></i> </button>

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
                $table->setHeading('S.no', 'Indexing Agency', 'created On', 'Created By', 'Status', 'Active'),

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




<!-- Modal -->
<div class="modal fade" id="add_indexing_agency" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Indexing Agency</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body ">
                <?php
                helper('form');

                echo form_open_multipart('index.html', 'POST');
                ?>
                <div class="row">



                    <label class="col-form-label col-md-3">Agency Name</label>
                    <div class="col-md-9">
                        <input type="text" name='agency_name' class="form-control" placeholder="Enter Agency Name">
                    </div>


                </div>
            </div>
            <div class="modal-footer">

                <?php
                $btn_cnacel = array(
                    'name' => 'close',
                    'id' => 'close',
                    'class' => 'btn btn-secondary',
                    'value' => 'close',
                    'type' => 'button',
                    'data-dismiss' => 'modal',
                    'content' => "Close",
                );
                echo form_submit($btn_cnacel);

                $btn_submit = array(
                    'name' => 'add_gency',
                    'id' => 'add_agency',
                    'class' => 'btn btn-primary',
                    'value' => 'Add Agency',
                    'type' => 'submit',
                    'content' => "Add Agency<i class= 'icon-plus3 mr-3'></i>",
                );
                echo form_submit($btn_submit);
                echo form_close();
                ?>

            </div>
        </div>
    </div>
</div>

<?php $this->endSection('content'); ?>





<?php $this->section('footer_js'); ?>

<script>
    //
</script>

<?php $this->endSection('footer_js'); ?>