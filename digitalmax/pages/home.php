<?php
$fields = get_fields();
$slides = $fields['slideshow'];
$sections = $fields['sections'];
$clients = $fields['clients'];
?>

<div id="homepage" class="container-fluid">
	<div class="row" style="flex-direction: column;">
		<div id="homepage-slideshow" class="carousel slide" data-ride="carousel">
<?php if (count($slides) > 1): ?>
			<ol class="carousel-indicators">
	<?php for ($i=0; $i<count($slides); $i++): ?>
				<li data-target="#homepage-slideshow" data-slide-to="<?php echo $i; ?>" class="<?php echo ($i==0 ? "active" : ""); ?>"></li>
	<?php endfor; ?>
			</ol>
<?php endif; ?>

<?php foreach (array_values($slides) as $i => $slide): ?>
			<div class="carousel-inner ">
				<div class="carousel-item<?php echo ($i==0 ? " active" : ""); ?>">
					<img src="<?php echo $slide['image']['url']; ?>" class="d-block w-100" alt="<?php echo $slide['image']['alt']; ?>">
					<div class="carousel-caption d-md-block homepage-slide-caption">
						<p><?php echo $slide['description']; ?></p>
					</div>
				</div>
			</div>
<?php endforeach; ?>

<?php if (count($slides) > 1): ?>
			<a class="carousel-control-prev" href="#homepage-slideshow" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#homepage-slideshow" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
<?php endif; ?>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-3 card-colored" style="background-color: #FFD700;">
			<h1 class="card-number"><span class="card-value">120</span></h1>
			<h3>persone nel team</h3>
		</div>
		<div class="col-lg-3 card-colored" style="background-color: #DA70D6;">
			<h1 class="card-number"><span class="card-value">50</span></h1>
			<h3>ani di esperienza</h3>
		</div>
		<div class="col-lg-3 card-colored" style="background-color: #90EE90;">
			<h1 class="card-number"><span class="card-value">25</span></h1>
			<h3>anni nel digitale</h3>
		</div>
		<div class="col-lg-3 card-colored" style="background-color: #FF8C00;">
			<h1 class="card-number"><span class="card-value">12</span>M</h1>
			<h3>di fatturato</h3>
		</div>
	</div>

	<!-- -------------------------------------------------------------------------------------------------------------- -->

<?php
foreach (array_values($sections) as $i => $section):
	if (is_numeric($section['image'])):
		$img_url = wp_get_attachment_url($section['image']);
	else:
		$img_url = $section['image']['url'];
	endif;

?>
	<div class="row sechome">
		<div class="sechome-title-container">
			<h3 class="sechome-title"><?php echo $section['title']; ?></h3>
			<hr class="sechome-hr">
		</div>
		<div class="sechome-content">
			<img src="<?php echo $img_url; ?>" class="d-block w-100" alt="<?php echo $section['image']['alt']; ?>">
			<div class="sechome-caption carousel-caption">
				<a style="color: white" href="#"><?php echo $section['description']; ?></p></a>
			</div>
		</div>
	</div>

	<!-- -------------------------------------------------------------------------------------------------------------- -->
<?php
endforeach; ?>

<div class="brands m-auto">
	<div class="sechome-title-container">
		<h3 class="sechome-title">Clienti</h3>
		<hr class="clienti_hr">
	</div>
	<div class="row">
		<div class="col p-0">
			<div class="brands_slider_container" style="background-color: black;">
				<div class="owl-carousel owl-theme brands_slider">
<?php
foreach (array_values($clients) as $i => $client):
	if (is_numeric($client)):
		$img_url = wp_get_attachment_url($client);
	else:
		$img_url = $client['url'];
	endif; ?>
					<div class="owl-item">
						<div class="brands_item d-flex flex-column justify-content-center"><img src="<?php echo $img_url; ?>" alt=""></div>
					</div>
<?php
endforeach; ?>

				</div> <!-- Brands Slider Navigation -->
				<div class="brands_nav brands_prev"><i class="fa fa-chevron-left"></i></div>
				<div class="brands_nav brands_next"><i class="fa fa-chevron-right"></i></div>
			</div>
		</div>
	</div>
</div>

</div>