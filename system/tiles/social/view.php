<section class="social">
	<?php
	if($title) :
	?>
	<h1><?php echo $title; ?></h1>
	<?php
	endif;
	
	if($description) :	
	?>
	<p><?php echo $description; ?></p>
	<?php
	endif;
	?>
	<ul>
		<?php
		foreach($social_networks as $sn) :
		?>
		<li>
			<a href="<?php echo $sn['social_url']; ?>" rel="nofollow"><?php echo $sn['social_url']; ?></a>
		</li>
		<?php
		endforeach;
		?>
	</ul>
</section>