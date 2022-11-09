<?php $this->extend('default');


$this->section('meta');
$this->endSection('meta');


$this->section('top_js'); ?>
<script src="/global_assets/js/plugins/forms/styling/uniform.min.js"></script>
<script src="/global_assets/js/plugins/notifications/pnotify.min.js"></script>
<script src="/global_assets/js/demo_pages/form_multiselect.js"></script>

<?php $this->endSection('top_js');


$this->section('title'); ?>

<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Assign Journal (s)</h4>
<a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>

<?php
$this->endSection('title');

$this->section('breadcrumb'); ?>

<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
<span class="breadcrumb-item active">Assign Journal (s)</span>


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
                <input type="text" name="indexing_agency" class="form-control" placeholder="Agency Name">

            </div>

            <div class="form-group">
                <label>Database Name:</label>
                <input type="text" name="database_name" class="form-control" placeholder="Database Name">
            </div>

            <div class="form-group mt-3 ml-5">
                <button type="submit" class="btn btn-danger ">View Checklist</button>
                <button type="submit" class="btn btn-danger">View Discipline</button>

            </div>

            <div class="form-group">
                <label>Journal Accepted:</label>
                <select class="form-control multiselect-select-all" name="journal_accepted" multiple="multiple" data-fouc>
                    <option value="cmc">CMC</option>
                    <option selected value="cpd">CND</option>
                    <option value="mrmc">MRMC</option>
                    <option value="loc">LOC</option>
                </select>
            </div>

            <div class="form-group">
                <label>Journal in Review:</label>
                <select class="form-control multiselect-select-all" name="Journal_in_review" multiple="multiple" data-fouc>
                    <option selected value="cmc">CMC</option>
                    <option value="cpd">CND</option>
                    <option value="mrmc">MRMC</option>
                    <option value="loc">LOC</option>
                </select>

            </div>

            <div class="form-group">
                <label>Assign New Journal:</label>
                <select class="form-control multiselect-select-all" name="assign_journal" multiple="multiple" data-fouc>
                    <option value="cmc">CMC</option>
                    <option value="cpd">CND</option>
                    <option selected value="mrmc">MRMC</option>
                    <option selected value="loc">LOC</option>
                </select>
            </div>

            <div class="form-group row mb-0 mt-5">
                <div class="col-lg-10 ml-lg-auto">
                    <button type="submit" class="btn bg-blue ml-3">Submit</button>
                    <button type="submit" class="btn btn-danger">Cencel</button>
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