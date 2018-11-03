@extends('layouts.app')

@section('content')
<!-- SLIDER -->
<section class="slider d-flex align-items-center">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="  <?php echo asset('img/slider.jpg')?>" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src=" <?php echo asset('img/slider2.jpg')?>" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="  <?php echo asset('img/slider3.jpg')?>" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img src="  <?php echo asset('img/slider4.jpg')?>" alt="Third slide">
            </div>
        </div>
        <div class="main-text hidden-xs">
            <div class="col-md-12 text-center">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="slider-content_wrap">
                                        <h1>SAUDIA <span >DIRECTORY</span> </h1>

                                    </div>
                                </div>
                            </div>
                            <div class="slider-title_box">
                                <!--carsual-->

                                <!---->

                                <div class="row d-flex justify-content-center">
                                    <div class="col-md-11">
                                        <form class="form-wrap mt-4">
                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                <input type="text" placeholder="Company Name" class="btn-group1">
                                                <input type="text" placeholder="Area Name" class="btn-group2">
                                                <button type="submit" class="btn-form"><span class="fas fa-search"></span></button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--// SLIDER -->
<!--//END HEADER -->
<!--============================= FIND PLACES =============================-->
<section class="main-block">
    <div class="container">
        <div class="row icon wow fadeInUp" data-wow-delay="1s">
            <div class="col ">
                <div class="icon1">
                    <div class="circle"><img src=" <?php echo asset('img/png/001-car.png')?>"></div>
                    <h3>autos</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon2">
                    <div class="circle"><img src=" <?php echo asset('img/png/002-green-home.png')?>"></div>
                    <h3>home and garden</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon3">
                    <div class="circle"><img src=" <?php echo asset('img/png/003-house.png')?>"></div>
                    <h3>real state</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon4">
                    <div class="circle"><img src=" <?php echo asset('img/png/004-dog-rose.png')?>"></div>
                    <h3>health and beauty</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon5">
                    <div class="circle"><img src=" <?php echo asset('img/png/005-auction.png')?>"></div>
                    <h3>legal and financial</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon6">
                    <div class="circle"><img src=" <?php echo asset('img/png/006-plate-fork-and-knife.png')?>"></div>
                    <h3>food and din</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon7">
                    <div class="circle"><img src=" <?php echo asset('img/png/007-hand-shake.png')?>"></div>
                    <h3>business to business</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon8">
                    <div class="circle"><img src=" <?php echo asset('img/png/008-group.png')?>"></div>
                    <h3>community</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon9">
                    <div class="circle"><img src=" <?php echo asset('img/png/009-open-book.png')?>"></div>
                    <h3>education</h3>
                </div>
            </div>

        </div>
        <div class="row icon mob wow fadeInUp" data-wow-delay="1s" >
            <div class="col ">
                <div class="icon1">
                    <div class="circle"><img src=" <?php echo asset('img/png/010-responsive.png')?>"></div>
                    <h3>Electronics</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon2">
                    <div class="circle"><img src=" <?php echo asset('img/png/011-masks.png')?>"></div>
                    <h3>Entertainment & Arts</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon3">
                    <div class="circle"><img src=" <?php echo asset('img/png/012-support.png')?>"></div>
                    <h3>Professional Services</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon4">
                    <div class="circle"><img src=" <?php echo asset('img/png/013-dash-game.png')?>"></div>
                    <h3>Recreation</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon5">
                    <div class="circle"><img src=" <?php echo asset('img/png/014-shopping-bag.png')?>"></div>
                    <h3>Retail Shopping</h3>
                </div>
            </div>
            <div class="col">
                <div class="icon6">
                    <div class="circle"><img src=" <?php echo asset('img/png/015-suitcase.png')?>"></div>
                    <h3>Travel & Lodging</h3>
                </div>
            </div>



        </div>
    </div>
</section>
<!--//END FIND PLACES -->
<!--============================= FEATURED PLACES =============================-->
<section class="main-block light-bg">
    <div class="ads">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
    <div class="container wow fadeInUp" data-wow-delay="1s" style="max-width: 950px">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="styled-heading">
                    <h3>NEW LISTINGS</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap border-box">
                    <div class="featured-title-box ">
                        <ul>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>   company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap border-box">

                    <div class="featured-title-box ">
                        <ul>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>   company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap border-box">
                    <div class="featured-title-box">
                        <ul>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>   company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                            <li>
                                <i class="  fa fa-map-marker bg-img"></i>company name
                                <p>Lorem ipsum dolor sit amet,<span>01124886/</span></p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="ads-right">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </div>
</section>
<!--//END FEATURED PLACES -->
<!--============================= CATEGORIES =============================-->
<section class="main-block">
    <div class="ads"><div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div></div>
    <div class="container wow fadeInUp"  style="max-width: 950px">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="styled-heading">
                    <h3> MOST SEEN</h3>
                </div>
            </div>
        </div>
        <div class="row most-seen">

            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src=" <?php echo asset('img/l1.png')?>" class="img-fluid" alt="#">
                        <span class="featured-rating-green">9.5</span>
                        <div class="featured-title-box">
                            <h6>Joe’s Shanghai</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>


                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src=" <?php echo asset('img/l2.jpg')?>" class="img-fluid" alt="#">
                        <span class="featured-rating-green">9.5</span>
                        <div class="featured-title-box">
                            <h6>Joe’s Shanghai</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>


                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src=" <?php echo asset('img/l3.jpg')?>" class="img-fluid" alt="#">
                        <span class="featured-rating-green">9.5</span>
                        <div class="featured-title-box">
                            <h6>Joe’s Shanghai</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>


                        </div>
                    </a>
                </div>
            </div>




        </div>
        <div class="row most-seen wow fadeInUp" >
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src=" <?php echo asset('img/l4.png')?>" class="img-fluid" alt="#">
                        <span class="featured-rating-green">9.5</span>
                        <div class="featured-title-box">
                            <h6>Joe’s Shanghai</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>


                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src=" <?php echo asset('img/l5.png')?>" class="img-fluid" alt="#">
                        <span class="featured-rating-green">9.5</span>
                        <div class="featured-title-box">
                            <h6>Joe’s Shanghai</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>


                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 featured-responsive">
                <div class="featured-place-wrap">
                    <a href="detail.html">
                        <img src=" <?php echo asset('img/l6.jpg')?>" class="img-fluid" alt="#">
                        <span class="featured-rating-green">9.5</span>
                        <div class="featured-title-box">
                            <h6>Joe’s Shanghai</h6>
                            <p>Restaurant </p> <span>• </span>
                            <p>3 Reviews</p> <span> • </span>
                            <p><span>$$$</span>$$</p>


                        </div>
                    </a>
                </div>
            </div>



        </div>
    </div>
    <div class="ads-right">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</section>
<!--//END CATEGORIES -->
<!--============================= ADD LISTING =============================-->
<section class="directory main-block light-bg">
    <div class="ads"><div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div></div>
    <div class="container wow fadeInUp" style="max-width: 950px">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="styled-heading">
                    <h3>companies and category </h3>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="container text-primary mbn seo-pad">
                <div class="hidden-xs">
                    <div class="row mbxl">
                    </div>
                    <div class="row mbxl">
                        <div class="col-sm-3">
                            <h4 class="text-brand h3 strong"><strong>Business Services</strong></h4>
                            <p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_34_A62D1_000/accounting_auditing_and_bookkeeping_services">Accounting and Bookkeeping</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_A0_000/advertising_marketing">Advertising &amp; Marketing</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_A1_000/financial">Banks, Loans and Investment</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_AA1850P3_000/credit_card_service">Credit Card Services</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_A2_000/insurance">Insurance</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_34_A306F_000/legal_services">Lawyers and Attorneys</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_A4_000/media">Media</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_A5_000/printing_publishing">Printing &amp; Publishing</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_A6_000/professional_services">Professional Services</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_A7_000/real_estate">Real Estate</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_A1123000_000/tax_return_preparation_services">Tax Preparation Services</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_A8_000/transportation_shipping">Transportation &amp; Shipping</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_A9_000/warehousing_storage">Warehousing &amp; Storage</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_AA_000/other_business_services">Other Business Services</a>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <h4 class="text-brand h3 strong"><strong>Consumer Products &amp; Services</strong></h4>
                            <p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_B82C70B4_000/heating_and_air_conditioning_contractors">Air Conditioning Contractors</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_B0_000/apparel">Apparel</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_B30E7000_000/beauty_shops">Beauty Salons</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_34_E00D3_000/lumber_and_other_building_materials_dealers">Building Materials</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_B1_000/automotive_services">Car Dealers, Repairs and Services</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_E02EF000_000/carpentry_work">Carpenters</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_B315F000_000/child_day_care_services">Child Care Services</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_E0303000_000/concrete_work">Concrete Contractors</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_B2_000/consumer_electronics_appliances">Consumer Electronics &amp; Appliances</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_B3_000/consumer_services">Consumer Services</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_E12DB000_000/electrical_work">Electricians</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_B4_000/furnishings">Furnishings</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_C030E7N3_000/landscape_contractors">Landscape Contractors</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_E02D1000_000/painting_and_paper_hanging">Painters</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_B30DD000_000/photographic_studios_portrait">Photographers</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_B82C705K_000/plumbing_contractors">Plumbers</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_34_B5202_000/passenger_car_rental">Car Rental</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_E02F902V_000/roofing_contractor">Roofing Contractors</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_B6_000/shopping_stores">Shopping &amp; Stores</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_B7_000/travel_leisure">Travel &amp; Leisure</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_35_B30DD7N3_000/photographer_still_or_video">Videographers</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_B8_000/other_consumer_products_services">Other Consumer Products &amp; Services</a>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <h4 class="text-brand h3 strong"><strong>Food &amp; Beverage</strong></h4>
                            <p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_C0_000/agriculture">Agriculture</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_C1_000/beverages">Beverages</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_C2_000/food">Food</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_C3_000/food_processing">Food Processing</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_34_C432D_000/bars_taverns">Bars</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_34_C432C_000/restaurants">Restaurants</a>
                            </p>
                            <h4 class="text-brand h3 strong mtxl"><strong>Health</strong></h4>
                            <p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_34_D000B_000/offices_and_clinics_of_doctors_of_medicine">Doctors</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_34_D0015_000/offices_and_clinics_of_dentists">Dentists</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_D0_000/healthcare">Healthcare</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_D1_000/medical_equipment_device">Medical Equipment &amp; Device</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_D2_000/pharmaceuticals">Pharmaceuticals</a>
                            </p>
                        </div>
                        <div class="col-sm-3">
                            <h4 class="text-brand h3 strong"><strong>Industrial</strong></h4>
                            <p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_E0_000/building_construction">Building &amp; Construction</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_F1_000/defense">Defense</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_E1_000/electrical">Electrical</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_E2_000/electronics">Electronics</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_E3_000/energy_resources">Energy &amp; Resources</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_E4_000/environmental_markets">Environmental Markets</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_E5_000/fabrication">Fabrication</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_E6_000/machinery_equipment">Machinery &amp; Equipment</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_E7_000/manufacturing">Manufacturing</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_E8_000/materials_chemicals">Materials &amp; Chemicals</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_E9_000/textiles">Textiles</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_EA_000/other_industry_products_services">Other Industry Products &amp; Services</a>
                            </p>
                            <h4 class="text-brand h3 strong mtxl"><strong>Technology &amp; Communications</strong></h4>
                            <p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_G0_000/aerospace">Aerospace</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_G1_000/computer_hardware">Computer Hardware</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_G2_000/computer_software">Computer Software</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_G3_000/e_commerce_it_outsourcing">E-Commerce &amp; IT Outsourcing</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_G4_000/information_technology">Information Technology</a></p><p class="mbs">
                                <a class="h4 text-gray-darker" href="/mb_33_G5_000/telecommunications_wireless">Telecommunications &amp; Wireless</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</section>
<section class="artical">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="styled-heading">
                    <h3> Articals </h3>
                </div>
            </div>
        </div>
        <div class="row">

        </div>
        <div class="row wow fadeInUp" >
            <div class="col-md-5 col-lg-5">
                <!-- artigo em destaque -->
                <div class="featured-article">
                    <a href="#">
                        <img src=" <?php echo asset('img/slider3.jpg')?>" alt="" class="thumb">
                    </a>
                    <div class="block-title">
                        <h2>Lorem ipsum dolor asit amet</h2>
                        <p class="by-author"><small>By Jhon Doe</small></p>
                    </div>
                </div>
                <!-- /.featured-article -->
            </div>
            <div class="col-md-7 col-lg-7">
                <ul class="media-list main-list">
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img src=" class="media-object" <?php echo asset('img/slider3.jpg')?>" alt="...">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                            <p class="by-author">By Jhon Doe</p>
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img src=" class="media-object" <?php echo asset('img/slider3.jpg')?>" alt="...">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                            <p class="by-author">By Jhon Doe</p>
                        </div>
                    </li>
                    <li class="media">
                        <a class="pull-left" href="#">
                            <img src=" class="media-object" <?php echo asset('img/slider3.jpg')?>" alt="...">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading">Lorem ipsum dolor asit amet</h4>
                            <p class="by-author">By Jhon Doe</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
</section>
<section class="services main-block light-bg">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="1s">


            <div class="col-md-3 ">
                <div class="serv">
                    <img src=" <?php echo asset('img/1.png')?>">
                    <h3>Web Site</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua</p></div>
            </div>
            <div class="col-md-3 ">
                <div class="serv">
                    <img src=" <?php echo asset('img/2.png')?>">
                    <h3>Web Site</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua</p></div>
            </div>
            <div class="col-md-3 ">
                <div class="serv">
                    <img src=" <?php echo asset('img/3.png')?>">
                    <h3>Web Site</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua</p></div>
            </div>
            <div class="col-md-3 ">
                <div class="serv">
                    <img src=" <?php echo asset('img/4.png')?>')?>">
                    <h3>Web Site</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua</p></div>
            </div>
        </div>
    </div>
</section>
<!--//END ADD LISTING -->

@endsection
