<!DOCTYPE html>
<!-- 
Template Name: i-Fact
Version: 1.0.0
Author: Webstrot

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>i-Fact Responsive HTML Template</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/software/favicon.png">
    <meta name="description" content="i-Fact, Start Up" />
    <meta name="keywords" content="i-Fact, Start Up" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!-- Animation Css -->
    <link href="/temples/css/animate.css" rel="stylesheet">
    <link href="/temples/css/bootstrap.min.css" rel="stylesheet">
    <!-- font-awesome -->
    <link href="/temples/css/font-awesome.css" rel="stylesheet">
    <!-- Web Fonts -->
    <link href="/temples/css/fonts.css" rel="stylesheet">
    <!-- Flaticon Css -->
    <link href="/temples/flaticon/software/flaticon.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="/temples/css/owl.theme.default.css" rel="stylesheet">
    <link href="/temples/css/owl.carousel.css" rel="stylesheet">
    <!-- Style CSS -->
    <link href="/temples/css/style.css" rel="stylesheet">
    <!-- Responsive CSS -->
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <a href="javascript:" id="return-to-top"><i class="fas fa-arrow-up"></i> <br>top</a>
    <!-- Preloader start -->
    <div id="preloader">
        <div id="status">
            <div class="status-mes"></div>
        </div>
    </div>
    <!-- Preloader end -->
    <div data-scroll='0' class="full_width">
        <!-- soft_serach_header start -->
        <div class="soft_serach_header">
            <div class="soft_searchbox">
                <button class="close">×</button>
                <form>
                    <input type="search" placeholder="Search …">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div>
        <!-- soft_serach_header end -->
        <!--soft_header Start-->
        <div class="soft_header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-6 col-lg-3">
                        <div class="soft_logo_wrapper">
                            <a href="index.html">
                                @foreach ($settings as $setting)                                                                
                                <img src="storage/images/{{ $setting->logo }}" alt="" />
                                 @endforeach
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-6 col-6 resp_main_heade">
                        <div class="soft_menu_right_wrapper">
                            <div class="soft_search_wrap">
                                <button class="soft_searchd"><i class="fa fa-search"></i></button>
                            </div>
                            <div id="soft_toggle" class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                                <button class="soft_searchd_bar"><i class="fas fa-bars"></i></button>
                            </div>
                            <a href="#" class="soft_btn_style">Get Started</a>
                        </div>                      
                        <div class="soft_menu_wrapper d-none d-sm-none d-md-none d-lg-block d-xl-block">
                            <nav class="menu_scroll">                             
                                <ul>
                                    
                                    <li class="active"><a href="0">{{ $home->name }}</a></li>
                                    <li><a href="1">{{ $about->name }}</a></li>
                                    <li><a href="2">{{ $work->name }}</a></li>
                                    <li><a href="3">{{ $price->name }}</a></li>
                                    <li><a href="4">{{ $team->name }}</a></li>
                                    <li><a href="5">{{ $contact->name }}</a></li>
                                </ul>
                            </nav>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!--soft_header wrapper end-->
        <div id="soft_sidebar" class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <a class="soft_sidebar_logo" href="#">
                <img src="images/software/logo2.png" alt="">
            </a>
            <div id="soft_toggle_close">&times;</div>
            <div id='soft_cssmenu' class="menu_scroll">
                <ul class="sidebb">
                    <li><a href="0">Home</a></li>
                    <li><a href="1">about us </a></li>
                    <li><a href="2">work</a></li>
                    <li><a href="3">price</a></li>
                    <li><a href="4">Team</a></li>
                    <li><a href="5">Contact</a></li>
                </ul>
            </div>
        </div>
        <!-- responsive soft_header end -->
        <!-- slider wrapper start-->
        @foreach ($section as $section)                  
        <div class="soft_slider_wrapper">
            <div class="soft_slider_overlay"></div>
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"> 
                <div class="carousel-inner" role="listbox">
                    @foreach ($section->items as $key => $item)
                        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                            <div class="carousel-captions caption-{{ $key+1 }}">
                                <div class="container"> 
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="content">
                                                <h2 data-animation="animated fadeInUp">{{ $item->title }}<br></h2>
                                                <p data-animation="animated fadeInUp">{{ $item->text }}</p>
                                                <div class="soft_header_btn soft_slider_btn full_width">
                                                    <ul>
                                                        <li data-animation="animated fadeInUp">
                                                            <a href="{{ $section->button_link }}">read more</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                            <div class="soft_slider_main_img_wrapper">
                                                <img src="/storage/images/{{ $item->image }}" alt="slider_img">
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach  
                </div> 
                <ol class="carousel-indicators">
                    @foreach ($section->items as $key => $item)
                        <li data-target="#carousel-example-generic" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"><span class="number"></span></li>
                    @endforeach
                </ol>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <span></span> <i class="flaticon-left-arrow"></i></a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <span></span> <i class="flaticon-arrow-pointing-to-right"></i></a>
                </div>                     
            </div>
        </div>
        @endforeach
        <!-- slider wrapper end-->
    </div>
    <!--about us wrapper start-->
    @foreach ($section1 as $section)
    <div data-scroll='1' class="full_width">
        <div class="soft_about_wrapper full_width">
            <div class="container">               
                <div class="row">
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="soft_about_shpe_wrapper">
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="492.98px" height="524px" viewBox="0 0 492.98 524" enable-background="new 0 0 492.98 524" xml:space="preserve">
                                <path fill-rule="evenodd" clip-rule="evenodd" fill="#4e49de" d="M86.499,154.401c0,0-35.031-186.934,229.792-149.428
	C531.436,50.057,517.552,308.41,444.849,375.696C410.27,415.776,333.247,518.171,123.512,524
	C-62.362,498.664,2.85,369.22,55.059,321.441C126.514,256.049,86.499,154.401,86.499,154.401z" />
                            </svg>
                            <div class="soft_about_image_wrapper">
                                <img style="border-radius:200px" width="400px" height="450px" src="/storage/images/{{ $section->image}}" alt="img">

                            </div>
                        </div>

                    </div>
                    <div class="col-xl-6 col-lg-12 col-md-12">
                        <div class="soft_about_content_wrapper full_width">
                            <div class="soft_heading_wrapper">
                                <h2>{{ $section->title }} </h2>
                                <h1>{{ $section->text }}</h1>
                            </div>
                            <p>s{{ $section->description }} </p>
                            <a href="{{ $section->button_link }}" class="soft_btn_style soft_read_btn_style">see more</a>
                        </div>
                    </div>             
                </div>                       
            </div>
        </div>
         
        <div class="soft_title_main_wrapper">
            
            <div class="container">
                  
                <div class="row">
                    @foreach ( $section->items as $item)
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">                      
                        <div class="soft_heading_wrapper text-center">
                            <h2> {{ $item->title }}</h2>
                            <h1>{{ $item->text }}</h1>
                        </div>
                    </div>
                    @endforeach
                    @foreach ( $section->items as $item)
                    <div style="margin-top: -50px" class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="soft_title_box_main_wrapper">
                            <div class="soft_title_img_wrapper">
                                <img src="/storage/images/{{ $item->image }}" alt="totle_img">
                            </div>
                            <div class="soft_title_img_cont_wrapper">
                             @foreach ($item->texts as $text)                                                           
                                <h2><a href="">{{ $text->text }}</a></h2>
                               @endforeach
                                <p ><br>{{ $item->description }} <br>
                                     </p>
                                <h5><a href="{{ $section->button_link }}">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                            </div>
                        </div>
                    </div>
                 
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="soft_title_box_main_wrapper">
                            <div class="soft_title_img_wrapper">
                                <img src="" alt="totle_img">
                            </div>
                            <div class="soft_title_img_cont_wrapper">
                                <h2><a href="#">Arts Programs</a></h2>
                                <p>The goal of these programs is to prepare
                                    <br> your child for better foreign </p>
                                <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="soft_title_box_main_wrapper">
                            <div class="soft_title_img_wrapper">
                                <img src="images/software/img3.jpg" alt="totle_img">
                            </div>
                            <div class="soft_title_img_cont_wrapper">
                                <h2><a href="#">Sports Programs</a></h2>
                                <p>The goal of these programs is to prepare
                                    <br> your child for better foreign </p>
                                <h5><a href="#">Read More <i class="fa fa-long-arrow-right"></i></a></h5>
                            </div>
                        </div>
                    </div> --}} 
                                  
                </div> 
                          
            </div>
           
        </div>
      
             
          {{-- @endforeach  --}}
    </div>
    @endforeach
    <!--about us wrapper end-->

    <!-- work process wrapper start-->
    @foreach ($section2 as $section)
    <div data-scroll='2' class="full_width">
        <div class="soft_working_wrapper full_width">
            <div class="soft-spinner-eff">
                <div class="soft-spinner-circle soft-circle-1"></div>
                <div class="soft-spinner-circle soft-circle-2"></div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                        <div class="soft_heading_wrapper text-center">

                            <h2>{{ $section->title }}</h2>
                            <h1>{{ $section->text }}</h1>
                        </div>
                    </div>

                    <div id="soft_svg_container">
                        <svg id="svgC" width="100%" height="100%" viewBox="0 0 620 120" preserveAspectRatio="xMidYMid meet"></svg>
                    </div>
                     @foreach ($section->items as $item) 
                    <div class="col-lg-3 col-md-12">
                        
                        <div class="soft_work_process">
                            <div class="box_loader"> <span></span>
                                <span></span>
                                <span></span>
                                 
                            </div>
                                                                                   
                            <div class="step-num-box">
                                <div class="step-icon"><span><img src="/storage/images/{{ $item->image }}" alt="img"></span>
                                </div>
                                <div class="step-num">{{ $item->count }}</div>
                            </div>
                            <div class="step-desc">
                                <h4><a href="{{ $item->link }}">{{ $item->title }}</a></h4>
                                <p class="mb-0">{{ $item->text }}</p>
                            </div>
                           
                        </div>
                        
                    </div>
                     @endforeach
                    {{-- <div class="col-lg-3 col-md-12">
                        <div class="soft_work_process">
                            <div class="box_loader"> <span></span>
                                <span></span>
                                <span></span>
                            </div>
                            <div class="step-num-box">
                                <div class="step-icon"><span><img src="images/software/serv2.png" alt="img"></span>
                                </div>
                                <div class="step-num">02</div>
                            </div>
                            <div class="step-desc">
                                <h4><a href="#">planning</a></h4>
                                <p class="mb-0">Nostrud exercitat ullamco lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-12">
                        <div class="soft_work_process">
                            <div class="step-num-box">
                                <div class="step-icon"><span><img src="images/software/serv4.png" alt="img"></span>
                                </div>
                                <div class="step-num">03</div>
                            </div>
                            <div class="step-desc">
                                <h4><a href="#">development </a></h4>
                                <p class="mb-0">Nostrud exercitat ullamco lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-3 col-md-12">
                        <div class="soft_work_process">
                            <div class="step-num-box">
                                <div class="step-icon"><span><img src="images/software/serv5.png" alt="img"></span>
                                </div>
                                <div class="step-num">04</div>
                            </div>
                            <div class="step-desc">
                                <h4><a href="#">launch</a></h4>
                                <p class="mb-0">Nostrud exercitat ullamco lorem ipsum dolor sit amet.</p>
                            </div>
                        </div>
                    </div> --}}

                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!--  work process end-->
    <!-- pricing wrapper start-->
    @foreach($section3 as $section)
    <div data-scroll='3' class="full_width">
        <div class="soft_pricng_wrapper full_width">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                        <div class="soft_heading_wrapper text-center">
                            <h2>{{ $section->title }}</h2>
                            <h1>{{ $section->text }}</h1>
                        </div>
                    </div>
                    @foreach ($section->items as $item)                                        
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="soft_pricing_box_wrapper full_width">
                            <div class="pricing_soft_heading_wrapper full_width">
                                <h3>{{ $item->title }}</h3>
                            </div>
                            <div class="soft_pricng_list_wrapper">
                                <h3>${{ $item->count }} <br><span> / {{ $item->text }}</span></h3>
                            </div>
                            <div class="soft_pricing_five_list full_width">                              
                                <ul>
                                     @foreach ($item->texts as $text)
                                    <li>{{ $text->text }}</li>                                                                  
                                    @endforeach
                                 <li></li>
                                </ul>                               
                            </div>
                            <div class="soft_pricing_five_btn full_width">
                                <a href="{{ $item->link }}">Purchase Now</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="soft_pricing_box_wrapper full_width">
                            <div class="pricing_soft_heading_wrapper full_width">
                                <h3>Standard</h3>
                            </div>
                            <div class="soft_pricng_list_wrapper">
                                <h3>$20  <br><span> /  Month</span></h3>
                            </div>
                            <div class="soft_pricing_five_list full_width">
                                <ul>
                                    <li>30GB Hosting Per Year

                                    </li>
                                    <li>50+ Email Address
                                    </li>
                                    <li>Unlimited Traffic Per Year</li>
                                    <li>Streaming - Unlimited</li>
                                </ul>
                            </div>
                            <div class="soft_pricing_five_btn full_width">
                                <a href="#">Purchase Now</a>
                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                        <div class="soft_pricing_box_wrapper full_width">
                            <div class="pricing_soft_heading_wrapper full_width">
                                <h3>premium</h3>
                            </div>
                            <div class="soft_pricng_list_wrapper">
                                <h3>$30 <br><span> / Month </span></h3>
                            </div>
                            <div class="soft_pricing_five_list full_width">
                                <ul>
                                    <li>unlimited Hosting Per Year

                                    </li>
                                    <li>100+ Email Address
                                    </li>
                                    <li>Unlimited Traffic Per Year</li>
                                    <li>Streaming - Unlimited</li>
                                </ul>
                            </div>
                            <div class="soft_pricing_five_btn full_width">
                                <a href="#">Purchase Now</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>    
    @endforeach
    <!-- pricing wrapper end-->
    <!-- team wrapper start-->
    @foreach ($section4 as $section)
    <div data-scroll='4' class="full_width">
        <div class="soft_team_wrapper full_width">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-12">
                        <div class="soft_heading_wrapper text-center">
                            <h2>{{ $section->title }}</h2>
                            <h1>{{ $section->text }}</h1>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div id="soft_testimonial-2" class="soft_testimonial-carousel carousel slide soft_testimonial-2" data-ride="carousel">
                            <div class="row">
                                <div class="col-md-8 ml-auto mr-auto">
                                    <div class="carousel-inner">
                                        @foreach ($section->items as $item)
                                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                            <div class="soft_testimonial style-2">
                                                <div class="soft_testimonial-img">
                                                    <img class="img-center zoom-fade" src="/storage/images/{{ $item->image }}" alt="">
                                                </div>
                                                <div class="soft_testimonial-content">
                                                    <div class="soft_testimonial-quote"><i class="la la-quote-left"></i></div>
                                                    <p>{{ $item->description }}</p>                                                                                                                                                              
                                                    <div class="soft_testimonial-caption">
                                                        <ul>
                                                           <li><h5>  {{ $item->title }}</h5></li>  
                                                           <li><h5>  {{ $item->text }}</h5></li>                                                                                        
                                                       </ul>
                                                    </div>                                                   
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="controls">
                                <ul class="nav">
                                    @foreach ($section->items as $item)
                                    <li data-target="#soft_testimonial-2" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}">
                                        <a href="#">
                                            <img class="img-fluid" src="/storage/images/{{ $item->image }}" alt="img">
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach   
    <!-- team wrapper end-->
    <!-- news wrapper start-->
    @foreach ($section5 as $section) 
    <div data-scroll='5' class="full_width">
        <div class="soft_news_letter_wrapper full_width">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-3 col-md-12 col-sm-12">
                        <div class="soft_news_heading_wrapper full_width">
                            <h2> {{ $section->title }}</h2> 
                            <h1> {{ $section->text }}</h1>

                        </div>
                        <div class="soft_news_form_wrapper">
                            <input type="text" placeholder=" Enter Your Email">
                            <button type="submit">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- news wrapper end-->
        <!-- contact icon section start-->                          
        <div class="soft_contact_icon_section full_width">
            <div class="container">
                <div class="row">
                    @foreach ($section->items as $item)
                    <div class="col-lg-4 col-md-12 col-sm-12">                
                        <div class="soft_contact_main full_width">
                            <div class="soft_contact_rotate">
                                <img style="margin-top: -20px; border-radius:20px;  color:blue" width="50px" src="/storage/images/{{ $item->image }}" alt="">                             
                            </div>
                            <div >                               
                                <h5 style="color: aliceblue; margin-top:20px">{{ $item->title }}</h5> 
                                <ul style="margin-top: 20px; padding-bottom:30px ">
                                    @foreach ($item->texts as $text)
                                   <li><a style="color: aliceblue; " href=""> {{ $text->text }}</a></li>                                                                                         
                                   @endforeach
                               </ul>
                            </div>                                                                                                      
                        </div>                      
                    </div>                 
                     @endforeach

                     {{-- <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="soft_contact_main full_width">
                            <div class="soft_contact_rotate">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h4>Drop us an Email</h4>
                            <p><a href="#">company24@example.com </a>
                                <br><a href="#">info@example.com</a></p>
                        </div>
                    </div> --}}
                    {{-- <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="soft_contact_main full_width">
                            <div class="soft_contact_rotate">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h4>Our working days</h4>
                            <p>51-Maxico ,canada
                                <br> 52B-melbourne,UK</p>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
          @endforeach
        <!-- contact info section end -->
        <!-- footer wrapper start -->        
        <div class="soft_footer_wrapper full_width">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12">                       
                        <ul class="soft_icon_list_news full_width">
                           @foreach ($settings as $setting)                           
                            <li>
                                <a href="https://t.me/{{$setting->social_media['telegram']  }}"><i class="fab fa-telegram"></i>
                                    </a>
                            </li>                             
                            <li><a href="https://www.{{ $setting->social_media['instagram'] }}"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.{{ $setting->social_media['facebook'] }}"><i class="fab fa-facebook"></i></a></li>
                       @endforeach
                        </ul>                       
                        <div class="soft_copyright_wrapper"><i class="fa fa-copyright"></i> copyright 2020-21 by <a href="http://webstrot.com/" target="_blank"> webstrot. </a> All Rights Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer wrapper end -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Bootstrap js -->
    <script src="/temples/js/jquery-3.3.1.min.js"></script>
    <script src="/temples/js/bootstrap.min.js"></script>
    <!-- Counter js -->
    <script src="/temples/js/jquery.countTo.js"></script>
    <script src="/temples/js/jquery.inview.min.js"></script>
    <!-- owl carousel js -->
    <script src="/temples/js/owl.carousel.js"></script>
    <script src="/temples/js/jquery.bxslider.min.js"></script>
    <script src="/temples/js/jquery.magnific-popup.js"></script>
    <script src="/temples/js/snap.svg.js"></script>
    <script src="/temples/js/step.js"></script>
    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
    <!-- Custom js -->
    <script src="/temples/js/custom.js"></script>
</body>

</html>