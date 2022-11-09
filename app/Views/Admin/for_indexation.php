<?php $this->extend('default');


$this->section('meta');
$this->endSection('meta');


$this->section('top_js'); ?>
<script src="/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="/global_assets/js/plugins/notifications/pnotify.min.js"></script>
<script src="/global_assets/js/demo_pages/form_multiselect.js"></script>

<?php $this->endSection('top_js');


$this->section('title'); ?>

<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - For Indexation </h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>

<?php
$this->endSection('title');

$this->section('breadcrumb'); ?>

<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
<span class="breadcrumb-item active">For Indexation</span>


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
                <input type="text" name="indexing_agency" class="form-control">

            </div>

            <div class="form-group">
                <label>Database Name:</label>
                <input type="text" name="database_name" class="form-control" placeholder="Database Name">
            </div>

            <div class="form-group">
                <label>Scope:</label>
                <textarea rows="5" cols="5" name="scope" class="form-control" placeholder="Enter your Scope here">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</textarea>
            </div>

            <div class="form-group">
                <label>Contact Detail:</label>
                <input type="text" name="contact_details" class="form-control" placeholder="Contact Detail">
            </div>

            <div class="form-group">
                <label>Journal:</label>
                <input type="text" name="Journal" class="form-control" placeholder="Journal">

            </div>
            <div class="form-group">
                <?php
                $table = new \CodeIgniter\View\Table();


                $template = [
                    'table_open' => '<table class="table">',

                    'thead_open'  => '<thead>',
                    $table->setHeading('Add Checklist', 'Enter Requirment', 'Compliance

                Manager Comments', 'Priority'),

                    'thead_close' => '</thead>',

                    'tbody_open'  => '<tbody>',
                    $table->addRow('1', "Is ISSN Available ", "<input type='text'/>", "1"),
                    $table->addRow('2', "Are EBMs belongs to different Region", "<input type='text'/>", "1"),
                    $table->addRow('3', "Is Journal Publish min 5 issues in a year", "<input type='text'/>", "2"),
                    $table->addRow('4', "Is Journal Publish min 5 issues in a year", "<input type='text'/>", "1"),
                    $table->addRow('5', "Is Journal Publish min 5 issues in a year", "<input type='text'/>", "3"),


                    'tbody_close' => '</tbody>',

                    'table_close' => '</table>',
                ];

                $table->setTemplate($template);
                echo $table->generate();
                ?>
            </div>

            <div class="form-group">
                <label>Complaince Manager Feedback:</label>
                <textarea rows="5" cols="5" name="complaince_manager_feedback" class="form-control" placeholder="Enter your Feedback here">
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently</textarea>
            </div>

            <div class="form-group">
                <label>Comment:</label>
                <textarea rows="5" cols="5" name="compment" class="form-control" placeholder="Enter your Comment here">
</textarea>
            </div>


            <div class="form-group row mb-0 mt-5">
                <div class="col-lg-10 ml-lg-auto">
                    <button type="submit" class="btn bg-blue ml-3">Accepted for Indexation</button>
                    <button type="submit" class="btn btn-danger">Rejected by Indexing Agency</button>
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