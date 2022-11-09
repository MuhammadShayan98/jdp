
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php $this->renderSection('meta') ; ?>
	<?php $this->renderSection('top_js') ; ?>


	<title>JDG</title>

	

	<?php echo $this->include('includes/common_css')?>
	<?php echo $this->include('includes/common_js')?>


</head>

<body>

	

    <?php echo $this->include( 'includes\inc_top_header')?>
    
	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
        <?php echo $this->include( 'includes\inc_sidebar')?>	
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Page header -->            
			<?php echo $this->include('includes\page_title')?>
			<!-- /page header -->


			<!-- Content area -->
			<div class="content">

				<?php $this->renderSection('content') ; ?>

			</div>
			<!-- /content area -->


			<!-- Footer -->
			<?php echo $this->include('includes\inc_footer')?>
			

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->
	<?php $this->renderSection('footer_js') ; ?>
</body>
</html>
