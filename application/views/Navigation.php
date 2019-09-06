<nav id="doc-menu" class="nav doc-menu flex-column sticky">
	
	<?php foreach ($modules as $menu) { ?>

		<?php if(count($menu->children) > 0) { ?>
<!-- class="nav-link scrollto" -->
			<a href="<?=site_url('Documentation/index/'.$menu->slug) ?>">
				<?= $menu->title ?>
			</a>
			<nav class="doc-sub-menu nav flex-column">
				 <!-- Parent->Child items  --> 
				<?php foreach ($menu->children as $submenue) { ?>
					<a class="nav-link"  href="<?=site_url('Documentation/index/'.$submenue->slug) ?>">
						<?= $submenue->title ?>
					</a>
				<?php } ?>
			</nav>
		
				<?php } else { ?>
				    <a  href="<?=site_url('Documentation/index/'.$menu->slug) ?>">
					   <?= $menu->title ?>
					</a>
				<?php } ?>
	<?php } ?>		
</nav>
<!--//nav-->