<?php $this->extend('default');


$this->section('meta');
$this->endSection('meta');


$this->section('top_js'); ?>
<script src="/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="/global_assets/js/plugins/notifications/pnotify.min.js"></script>
<script src="/global_assets/js/demo_pages/form_multiselect.js"></script>

<?php $this->endSection('top_js');


$this->section('title'); ?>

<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Add Indexing Database </h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>

<?php
$this->endSection('title');

$this->section('breadcrumb'); ?>

<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
<span class="breadcrumb-item active">Add Indexing Database</span>


<?php

$this->endSection('breadcrumb');
$this->section('content');

?>

<div class="content ">
    <div class="row col-md-10">
        <div class="card-body card">
            <?php
            helper('form');
            echo form_open_multipart('index.html', 'POST');
            ?>
            <div class="form-group">
                <label>Indexing Agency:</label>
                <select name="indexing_agency" class="form-control">
                    <option selected value="elseiver">Elseiver</option>
                    <option value="google">Google</option>
                    <option value="Thomas Reader">Thomas Reader</option>
                </select>
            </div>

            <div class="form-group">
                <label>Database Name:</label>
                <input type="text" name="database_name" class="form-control" placeholder="Database Name">
            </div>

            <div class="form-group">
                <label>Scope:</label>
                <textarea rows="5" cols="5" name="scope" class="form-control" placeholder="Enter your Scope here"></textarea>
            </div>

            <div class="form-group">
                <label>Contact Detail:</label>
                <input type="text" name="contact_details" class="form-control" placeholder="Contact Detail">
            </div>

            <div class="form-group">
                <label>Discipline:</label>
                <select class="form-control multiselect-select-all" name="discipline" multiple="multiple" data-fouc>
                    <option value="medical">Medical</option>
                    <option value="engineering">Engineering</option>
                    <option value="parma">Parma</option>
                    <option value="Socail Sci">Socail Science</option>
                </select>
            </div>
            <div class="form-group">

                <?php
                $table = new \CodeIgniter\View\Table();


                $template = [
                    'table_open' => '<table class="table">',

                    'thead_open'  => '<thead>',
                    $table->setHeading('Add Checklist', 'Enter Requirment', 'Priority'),

                    'thead_close' => '</thead>',

                    'tbody_open'  => '<tbody>',
                    $table->addRow('1', "<input type='text'/>", "<input type='number'  />"),
                    $table->addRow('2', "<input type='text'/>", "<input type='number'  />"),
                    $table->addRow('3', "<input type='text'/>", "<input type='number' />"),
                    $table->addRow('4', "<input type='text'/>", "<input type='number'  />"),


                    'tbody_close' => '</tbody>',

                    'table_close' => '</table>',
                ];

                $table->setTemplate($template);
                echo $table->generate();
                ?>
                <div class="form-group row mb-0 mt-3">
                    <div class="col-lg-10 ml-lg-auto">
                    <button type="submit" class=" btn btn-secondary  ml-1">Add More  <i class="icon-plus3 mr-3 "></i> </button>
                    <button type="remove" class="btn btn-danger">Cancel</button>
                    </div>
                </div>



            </div>
            <div class="form-group row mb-0 mt-5">
                <div class="col-lg-10 ml-lg-auto">
                    <button type="cancel" class="btn btn-light">Cancel</button>
                    <button type="submit" class="btn bg-blue ml-3">Submit <i class="icon-paperplane ml-2"></i></button>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>

    </div>
</div>

<?php $this->endSection('content'); ?>





<?php $this->section('footer_js'); ?>

<script>
    //
</script>

<?php $this->endSection('footer_js'); ?>