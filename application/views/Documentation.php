<?php include('header.php');?>
<div class="sidebar">
	<div class="doc-wrapper">
		<div class="container">
			<div id="doc-header" class="doc-header text-center">
				<h1 class="doc-title"><i class="icon fa fa-paper-plane"></i> Quick Start</h1>
				<div class="meta"><i class="far fa-clock"></i> Last updated: August 30th, 2019</div>
			</div>
			<div class="doc-body row">
				<div class="doc-content col-md-9 col-12 order-1">
					<div class="content-inner">
						<?php if($content){ ?>
							<?= $content->text; ?>
						<?php } else { ?>	
							<div>
								<h4 class="jumbotron">Record Not Found!</h4>
							</div>
						<?php } ?>
					</div>
				</div>
				<div class="doc-sidebar col-md-3 col-12 order-0 d-none d-md-flex">
					<div id="doc-nav" class="doc-nav">
						<?php include('Navigation.php');?>
					</div>
				</div>
			</div>
		</div>
	</div>

	</div>
</div>

<?php include('footer.php');?>