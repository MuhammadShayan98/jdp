<?php $this->extend('default');


$this->section('meta');
$this->endSection('meta');


$this->section('top_js'); ?>
<script src="/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="/global_assets/js/plugins/notifications/pnotify.min.js"></script>
<script src="/global_assets/js/demo_pages/form_multiselect.js"></script>

<?php $this->endSection('top_js');


$this->section('title'); ?>

<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Start Work </h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>

<?php
$this->endSection('title');

$this->section('breadcrumb'); ?>

<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
<span class="breadcrumb-item active">Start Work</span>


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
                <select class="form-control multiselect-select-all" name="journal" multiple="multiple" data-fouc>
                    <option value="cmc">CMC</option>
                    <option value="cpd">CND</option>
                    <option selected value="mrmc">MRMC</option>
                    <option selected value="loc">LOC</option>
                </select>

            </div>
            <?php
          
            echo form_open_multipart('index.html', 'POST');
            ?>
            <div class="form-group">
                <?php
                $table = new \CodeIgniter\View\Table();


                $template = [
                    'table_open' => '<table class="table">',

                    'thead_open'  => '<thead>',
                    $table->setHeading('Add Checklist', 'Requirment', 'Comments (If any)', 'Action'),

                    'thead_close' => '</thead>',

                    'tbody_open'  => '<tbody>',
                    $table->addRow('1', "Is ISSN Available ", "<input type='text'/>", "<input type='checkbox' id='action1' name='action1' value='action1'><label for='action1'> Action </label>"),

                    $table->addRow('2', "Are EBMs belongs to different Region", "<input type='text'/>", "<input type='checkbox' id='action2' name='action2' value='action2'> <label for='action2'> Action </label>"),

                    $table->addRow('3', "Is Journal Publish min 5 issues in a year", "<input type='text'/>", "<input type='checkbox' id='action3' name='action3' value='action3'> <label for='action3'> Action </label>"),

                    $table->addRow('4', "Is Journal Publish min 5 issues in a year", "<input type='text'/>", "<input type='checkbox' id='action4' name='action4' value='action4'> <label for='action4'> Action </label>"),

                    $table->addRow('5', "Is Journal Publish min 5 issues in a year", "<input type='text'/>", "<input type='checkbox' id='action5' name='action5' value='action5'> <label for='action5'> Action </label>"),



                    'tbody_close' => '</tbody>',

                    'table_close' => '</table>',
                ];

                $table->setTemplate($template);
                echo $table->generate();
                ?>
            </div>


            <div class="form-group row col-lg-9 mx-auto justify-content-between mb-0 mt-5">

                <span>
                    <button type="submit" class="btn btn-secondary-light">Back</button>
                    <button type="submit" class="btn bg-blue ml-3">Save </button>
                </span>
                <?php echo form_close(); ?>
                <button type="submit" class="btn bg-info ml-3">Marked Completed </button>
                <?php echo form_close(); ?>


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