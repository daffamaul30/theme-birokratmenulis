<div style="border: 1px solid #393e46; margin-bottom: 10px" class="col-lg-3">
	<?php
		// if (!dynamic_sidebar('sidebar-widget')){echo 'Geser geser dulu sidebarnya';}
		if( is_active_sidebar('sidebar-widget') ) :?>

		<button style="border-radius:0;width: 100%; font-weight:bold; background-color: #f0a500; margin-top: 10px" class="btn-subscribe btn">
			Berlangganan
		</button>

		<?php dynamic_sidebar('sidebar-widget');?> 
			
		<?php endif; ?>
</div>