@extends('front.master')
@section('title', 'index-4')
@section('body')



<!-- Main Content - start -->
<main>


<!-- Frontpage Slider -->
<div class="frontslider-wrap">
	<div class="responisve-container">
		<div class="slider" id="front-slider">
			<div class="slide">
				<img 	src="img/front-slider/1.png"
						data-position="45,430" data-in="fade" data-delay="0" data-out="fade" alt="American Legends">
				<p 		class="caption1"			
						data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">POWER</p>
				<p 		class="caption2" 	
						data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">BATTERY</p>		
			</div>
			<div class="slide">
				<img 	src="img/front-slider/2.png"
						data-position="50,518" data-in="fade" data-delay="0" data-out="fade" alt="Legendary Bike">
				<p 		class="caption1"			
						data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">COMPUTING</p>
				<p 		class="caption2" 	
						data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">ADAPTER</p>	
			</div>
			<div class="slide">
				<img 	src="img/front-slider/3.png"
						data-position="21,480" data-in="fade" data-delay="0" data-out="fade" alt="Dream Car">
				<p 		class="caption1"			
						data-position="50,0" data-in="right" data-step="0" data-out="fade" data-delay="0">LAPTOP</p>
				<p 		class="caption2" 	
						data-position="150,0" data-in="right" data-step="0" data-out="fade" data-delay="0">KYEBOARD</p>	
			</div>
		</div>
	</div>
</div>


<!-- Categories List -->
<div class="cont">
<ul class="frontcategs">
	<li>
		<a href="catalog.html">
			<span class="frontcategs-img">
				<img src="img/front-categories/frcateg1.png" alt="">
				<img src="img/front-categories/frcateg1h.png" alt="">
			</span>
			<p>APPLE</p>
		</a>
	</li>
	<li>
		<a href="catalog.html">
			<span class="frontcategs-img">
				<img src="img/front-categories/frcateg2.png" alt="">
				<img src="img/front-categories/frcateg2h.png" alt="">
			</span>
			<p>DELL</p>
		</a>
	</li>
	<li>
		<a href="catalog.html">
			<span class="frontcategs-img">
				<img src="img/front-categories/frcateg3.png" alt="">
				<img src="img/front-categories/frcateg3h.png" alt="">
			</span>
			<p>ASUS</p>
		</a>
	</li>
	<li>
		<a href="catalog.html">
			<span class="frontcategs-img">
				<img style="border-radius: 10px;" src="img/front-categories/frcateg4.png" alt="">
				<img style="border-radius: 10px;" src="img/front-categories/frcateg4h.png" alt="">
			</span>
			<p>ACER</p>
		</a>
	</li>
	<li>
		<a href="catalog.html">
			<span class="frontcategs-img">
				<img src="img/front-categories/frcateg5.png" alt="">
				<img src="img/front-categories/frcateg5h.png" alt="">
			</span>
			<p>SAMSUNG</p>
		</a>
	</li>
	<li>
		<a href="catalog.html">
			<span class="frontcategs-img">
				<img style="border-radius: 10px;" src="img/front-categories/frcateg6.png" alt="">
				<img style="border-radius: 10px;" src="img/front-categories/frcateg6h.png" alt="">
			</span>
			<p>LENOVO</p>
		</a>
	</li>
	<li>
		<a href="catalog.html">
			<span class="frontcategs-img">
				<img src="img/front-categories/frcateg7.png" alt="">
				<img src="img/front-categories/frcateg7h.png" alt="">
			</span>
			<p>HP</p>
		</a>
	</li>
</ul>
</div>


<!-- Frontpage Filter -->
<div class="frontsearch-wrap">
	<div class="cont frontsearch">
		<h2>Search</h2>
		<p class="frontsearch-count">21900 ITEMS</p>
		<div class="frontsearch-wrap">
			<div class="frontsearch-selects">
				<div class="dropdown-wrap frontsearch-select">
					<p class="dropdown-title frontsearch-select-ttl">Category</p>
					<ul class="dropdown-list">
						<li>
							<a href="#">Choose Type</a>
						</li>
						<li>
							<a href="#">Kyeboard</a>
						</li>
						<li class="active">
							<a href="#">Display</a>
						</li>
						<li>
							<a href="#">Battery</a>
						</li>
						<li>
							<a href="#">Adapter</a>
						</li>
						<li>
							<a href="#">Ram</a>
						</li>
						<li>
							<a href="#">Harddisk</a>
						</li>
						<li>
							<a href="#">others</a>
						</li>
					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select">
					<p class="dropdown-title frontsearch-select-ttl">All Series</p>
					<ul class="dropdown-list">
						<li>
							<a href="#">New Model</a>
						</li>
						<li class="active">
							<a href="#">All Series </a>
						</li>
						<li>
							<a href="#">A Series </a>
						</li>
						<li>
							<a href="#">OEM Series </a>
						</li>
						<li>
							<a href="#">4000 Series </a>
						</li>
						<li>
							<a href="#">6000 Series </a>
						</li>
						<li>
							<a href="#">Apple A-Series</a>
						</li>
						<li>
							<a href="#">SMV-Series </a>
						</li>
					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select">
					<p class="dropdown-title frontsearch-select-ttl">Apple</p>
					<ul class="dropdown-list">
						<li>
							<a href="#">Hawaii</a>
						</li>
						<li>
							<a href="#">Xiaomi</a>
						</li>
						<li>
							<a href="#">Msi </a>
						</li>
						<li class="active">
							<a href="#">Apple</a>
						</li>
						<li>
							<a href="#">Intel</a>
						</li>
						<li>
							<a href="#">Gigabite</a>
						</li>
						<li>
							<a href="#">Deepcool</a>
						</li>
						<li>
							<a href="#">Nvedia</a>
						</li>
						<li>
							<a href="#">Amd</a>
						</li>
					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
					<p id="range_year_ttl" class="dropdown-title frontsearch-select-ttl">2023 - 2024</p>
					<ul class="dropdown-list">
						<li>
							<input type="text" id="range_year" value="">
						</li>
						<li>
							<a href="#">2023-2024</a>
						</li>
						<li>
							<a href="#">2022-2023</a>
						</li>
						<li>
							<a href="#">2021-2022</a>
						</li>
						<li>
							<a href="#">2018-2021</a>
						</li>
					</ul>
				</div>
				<div class="dropdown-wrap frontsearch-select dropdown-wrap-range">
					<p id="range_cost_ttl" class="dropdown-title frontsearch-select-ttl">Mint grade</p>
					<ul class="dropdown-list">
						<li>
							<input type="text" id="range_cost" value="">
						</li>
						<li class="active">
							<a href="#">Mint grade </a>
						</li>
						<li>
							<a href="#">China grade</a>
						</li>
						<li>
							<a href="#">Local grade</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="frontsearch-cont" id="frontsearch-cont" data-lines-count="20">
				<p class="frontsearch-img">
					<img src="" alt="">
				</p>
				<p class="frontsearch-model">ORGAN</p>

				<div class="frontsearch-res frontsearch-res1"><a href="catalog.html"><span>26</span> GUP</a></div>
				<div class="frontsearch-point frontsearch-point1"></div>

				<div class="frontsearch-res frontsearch-res2"><a href="catalog.html"><span>14</span> CPU</a></div>
				<div class="frontsearch-point frontsearch-point2"></div>

				<div class="frontsearch-res frontsearch-res3"><a href="catalog.html"><span>29</span> ram</a></div>
				<div class="frontsearch-point frontsearch-point3"></div>

				<div class="frontsearch-res frontsearch-res4"><a href="catalog.html">sound <span>163</span></a></div>
				<div class="frontsearch-point frontsearch-point4"></div>

				<div class="frontsearch-res frontsearch-res5"><a href="catalog.html"><span>26</span> disply</a></div>
				<div class="frontsearch-point frontsearch-point5"></div>

				<div class="frontsearch-res frontsearch-res6"><a href="catalog.html">Kyeboard <span>62</span></a></div>
				<div class="frontsearch-point frontsearch-point6"></div>

				<div class="frontsearch-res frontsearch-res7"><a href="catalog.html"><span>34</span> others</a></div>
				<div class="frontsearch-point frontsearch-point7"></div>

				<div class="frontsearch-res frontsearch-res8"><a href="catalog.html"><span>87</span> Adapter</a></div>
				<div class="frontsearch-point frontsearch-point8"></div>

				<div class="frontsearch-res frontsearch-res9"><a href="catalog.html"><span>54</span> Motherboard</a></div>
				<div class="frontsearch-point frontsearch-point9"></div>

				<div class="frontsearch-res frontsearch-res10"><a href="catalog.html"><span>15</span> battery</a></div>
				<div class="frontsearch-point frontsearch-point10"></div>

			</div>
		</div>
		<span class="frontsearch-line1"></span>
		<span class="frontsearch-line2"></span>
	</div>
</div>




<!-- Special Deals Items -->
<div class="specials-wrap">
	<div class="cont specials">
		<h2>Special Deals</h2>
		<p class="specials-count">350 ITEMS</p>
		<div class="specials-list">
			<div class="special special-pseudo">
				<a href="#" class="special-link"></a>
			</div>
			<div class="special special-first">
				<a href="product.html" class="special-link">
					<p class="special-img">
						<img src="img/spec1.jpg" alt="">
					</p>
					<h3><span>LCD disply</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">hp all models</a>
					<span class="special-price">৳1800</span>
					<del>৳4000</del>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.html" class="special-link">
					<p class="special-img">
						<img src="img/spec2.jpg" alt="">
					</p>
					<h3><span>Ankar powerbank</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">battery</a>
					<span class="special-price">৳4599</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.html" class="special-link">
					<p class="special-img">
						<img src="img/spec3.jpg" alt="">
					</p>
					<h3><span>250GB m.2 samsusng Nvme</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">ssd</a>
					<span class="special-price">৳4230.50</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.html" class="special-link">
					<p class="special-img">
						<img src="img/pop4.jpg" alt="">
					</p>
					<h3><span>boAt Stone 1200F</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">others</a>
					<span class="special-price">৳4230</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.html" class="special-link">
					<p class="special-img">
						<img src="img/pop3.jpg" alt="">
					</p>
					<h3><span>AMD Razor 5</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">CPU</a>
					<span class="special-price">৳5180</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.html" class="special-link">
					<p class="special-img">
						<img src="img/pop1.png" alt="">
					</p>
					<h3><span>ASUS ROG Strix</span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">GPU</a>
					<span class="special-price">৳65105</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
			<div class="special">
				<a href="product.html" class="special-link">
					<p class="special-img">
						<img src="img/spec4.jpg" alt="">
					</p>
					<h3><span>Jbl go3 </span></h3>
				</a>
				<p class="special-info">
					<a href="#" class="special-categ">others</a>
					<span class="special-price">৳4230.30</span>
					<a href="#" class="special-add">+ Add to cart</a>
				</p>
			</div>
		</div>
		<p class="special-more">
			<a href="#">show more</a>
		</p>
		<span class="special-line1"></span>
		<span class="special-line2"></span>
	</div>
</div>



<!-- Get a Special Deals -->
<div class="getspec-wrap">
	<div class="cont getspec">
		<div class="getspec-cont">
			<h3>New items are coming every month </h3>
			<p>New gadget for mac</p>
			<form action="#" class="form-validate">
				<input data-required="text" data-required-email="email" type="text" placeholder="Email address" name="email3">
				<input type="submit" value="Get a special deals">
			</form>
		</div>
		<a href="#" class="getspec-img" title='Adjustable Arm with Weighted Base and Surface Clamp Attachments for Mounting iPad'>
			<video width="100%" height="100%" controls autoplay loop muted >
				<source src="vid/getspec.mp4" type="video/mp4" alt=''>
			</video>
			{{-- <img width="180" height="320" src="img/getspec.png" alt=""> --}}
		</a>
	</div>
</div>



<!-- Popular Items -->
<div class="populars-wrap">
	<div class="cont populars">
		<h2>Popular</h2>
		<p class="populars-count">7 ITEMS</p>
		<div class="populars-list">
			<div class="popular">
				<a href="product.html" class="popular-link">
					<p class="popular-img">
						<img src="img/pop1.jpg" alt="">
					</p>
					<h3><span>ASUS ROG Strix GeForce RTX® 4080</span></h3>
				</a>
				<p class="popular-info">
					<a href="#" class="popular-categ">GPU</a>
					<span class="popular-price">৳65090</span>
					<a href="#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<div class="popular">
				<a href="product.html" class="popular-link">
					<p class="popular-img">
						<img src="img/pop2.jpg" alt="">
					</p>
					<h3><span>AMD Ryzen 5 5500 6-Core, 12-Thread</span></h3>
				</a>
				<p class="popular-info">
					<a href="#" class="popular-categ">cpu</a>
					<span class="popular-price">৳5180</span>
					<a href="#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<div class="popular">
				<a href="product.html" class="popular-link">
					<p class="popular-img">
						<img src="img/pop3.jpg" alt="">
					</p>
					<h3><span>Ankor powerbank</span></h3>
				</a>
				<p class="popular-info">
					<a href="#" class="popular-categ">Batteries</a>
					<span class="popular-price">৳6012</span>
					<a href="#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
			<div class="popular">
				<a href="product.html" class="popular-link">
					<p class="popular-img">
						<img src="img/pop4.jpg" alt="">
					</p>
					<h3><span>boAt Stone 1200F</span></h3>
				</a>
				<p class="popular-info">
					<a href="#" class="popular-categ">others</a>
					<span class="popular-price">৳3230.50</span>
					<a href="#" class="popular-add">+ Add to cart</a>
				</p>
			</div>
		</div>
		<p class="popular-more">
			<a href="#">show more</a>
		</p>
		<span class="popular-line1"></span>
		<span class="popular-line2"></span>
	</div>
</div>


<!-- Frontpage Article -->
<div class="botarticle-wrap">
	<div class="cont botarticle">
		<div class="botarticle-cont">
			<h3>Change your Mac ROM</h3>
			<p>Best cheatsheet of this year</p>
			<a href="#" class="botarticle-more">Read more</a>
		</div>
		<a href="blog.html" class="botarticle-img">
			<img src="img/article1.jpg" alt="">
		</a>
	</div>
</div>


</main>
<!-- Main Content - end -->



<!-- Modal Form -->
<div id="modal-form" class="modal-form">
	<p class="modal-form-ttl">Contact Us</p>
	<form action="#" class="form-validate">
		<input data-required="text" type="text" placeholder="Name" name="name2">
		<input data-required="text" type="text" placeholder="Phone" name="phone2">
		<input data-required="text" data-required-email="email" type="text" placeholder="Email" name="email2">
		<textarea placeholder="Your message" name="mess2"></textarea>
		<input type="submit" value="Send">
	</form>
</div>



<script>
"use strict";
// Range Slider
$(document).ready(function () {
	var $range_cost = $("#range_cost");
	$range_cost.ionRangeSlider({
	    type: "double",
	    grid: true,
	    min: 0,
	    max: 20000,
	    from: 200,
	    to: 14000,
	    prefix: "$",
	});
	$range_cost.on("change", function () {
	    var $this = $(this),
	        value = $this.prop("value").split(";");

	    $('#range_cost_ttl').html("$" + value[0] + " - $" + value[1]);
	});
	var $range_year = $("#range_year");
	$range_year.ionRangeSlider({
	    type: "double",
	    grid: true,
	    min: 1990,
	    max: 2016,
	    from: 2013,
	    to: 2016,
	});
	$range_year.on("change", function () {
	    var $this = $(this),
	        value = $this.prop("value").split(";");

	    $('#range_year_ttl').html(value[0] + " - " + value[1]);
	});
});
</script>




@endsection