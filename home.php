<?php
	include('welcome.php');
	include('in.php');
	
	if(isset($_SESSION['login_user']) == "admin") {
		header("location: main.php");
	}else if(isset($_SESSION['login_user']) == "employee") { 
		header("location: reports.php");
	}
?>

<section class="carousel slide cid-qwZuEePS19" data-interval="false" id="slider1-1" data-rv-view="210">
<div class="full-screen">
<div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000">
	<ol class="carousel-indicators">
	<li data-app-prevent-settings="" data-target="#slider1-1" class=" active" data-slide-to="0">
	</li>
	<li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="1">
	</li>
	<li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="2">
	</li>
	<li data-app-prevent-settings="" data-target="#slider1-1" data-slide-to="3">
	</li>
	</ol>
<div class="carousel-inner" role="listbox">
	<div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url(assets/images/a.jpg);">
	<div class="container container-slide"><div class="image_wrapper">
	<div class="mbr-overlay">
	</div>
	<img src="assets/images/a.jpg">
	<div class="carousel-caption justify-content-center">
	<div class="col-10 align-center">
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/b.jpg);">
	<div class="container container-slide">
	<div class="image_wrapper">
	<div class="mbr-overlay">
	</div>
	<img src="assets/images/b.jpg">
	<div class="carousel-caption justify-content-center">
	<div class="col-10 align-center">
	</div>
	</div>
	</div>
	</div>
	</div>
	
	<div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url(assets/images/c.jpg);">
	<div class="container container-slide">
	<div class="image_wrapper">
	<div class="mbr-overlay">
	</div><img src="assets/images/c.jpg">
	<div class="carousel-caption justify-content-center">
	<div class="col-10 align-center">
	</div>
	</div>
	</div>
	</div>
	</div>
	

</div>


</section>

<section class="features9 cid-qxb93TIEhj" id="features9-g" data-rv-view="58">
    <div class="container">
                                        <br><br><bR>
        <div class="row justify-content-center">
            <div class="card p-3 col-12 col-md-6">
                <div class="media-container-row">
                    <div class="card-box">
                        <h2>  FUNCTIONAL STATEMENT </h2>
       <p> - The Department is mandated to develop/implement plans and programs relative to agriculture and aquaculture that will ensure maximum assistance to farmers for the upliftment of their economic conditions. These programs focus on provision of subsidized inputs, transfer of technology, and establishment of demo/trials. Encouraging/assisting farmers cooperatives/organizations, and regular extension of technical assistance.</p>
       <br>
			<p>- The Department also stresses the importance of equipping its technical personnel with updated knowledge and skills on modern technologies that would enhance agricultural through trainings/seminars and other capability building activities.</p>
       <br>
			<p>- The effectivity of this office on its set work plans will be lessened without the moral and financial support for the city government, hence this, proposal.</p>
                    </div>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6">
                <div class="media-container-row">
                    <div class="card-box">
                        <h2>OBJECTIVES</h2>

1. To deliver effectively the basic services extended by the City Government to its constituents, farmers and fisherfolks in particular;<br><br>
2. To improve the economic condition of farm families to a sustainable level;<br><br>
3. To effectively transfer new/improved technologies that is beneficial to the farmers/fisherfolks;<br><br>
4. To promote/encourage urban agriculture;<br><br>
5. To provide technical assistance to farming communities.<br><br>
                    </div>
                </div>
            </div>
          
        </div>
    </div>
</section>


<?php
include('footer.php');
 ?>