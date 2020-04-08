<!DOCTYPE html>
<html lang="ar">
    <?php
    function is_image($path)
    {
    $a = getimagesize($path);
    $image_type = $a[2];
    if(in_array($image_type , array(IMAGETYPE_GIF , IMAGETYPE_JPEG ,IMAGETYPE_PNG , IMAGETYPE_BMP)))
    {
    return true;
    }
    return false;
    }
    ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('style/images/abowael-icon.png') }}"/>
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>@if(View::hasSection('title'))
        @yield('title')
        @else
        رمضان ظاهر العنزي
        @endif</title>
        <!-- google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="{{ asset('style/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Bootstrap RTL Theme -->
        <link href="{{ asset('style/css/bootstrap-rtl.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Scrollbar css -->
        <link href="{{ asset('style/css/jquery.mCustomScrollbar.css') }}" rel="stylesheet" type="text/css"/>
        <!-- Owl Carousel css -->
        <link href="{{ asset('style/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('style/owl-carousel/owl.theme.default.min.css') }}" rel="stylesheet" type="text/css"/>
        <!-- youtube css -->
        <link href="{{ asset('style/css/RYPP.css') }}" rel="stylesheet" type="text/css"/>
        <!-- jquery-ui css -->
        <link href="{{ asset('style/css/jquery-ui.css') }}" rel="stylesheet">
        <!-- animate -->
        <link rel="stylesheet" href="{{ asset('style/css/animate.min.css') }}">
        <!-- fonts css -->
        <link href="{{ asset('style/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('style/css/Pe-icon-7-stroke.css') }}" rel="stylesheet" type="text/css"/>
        <link href="{{ asset('style/css/flaticon.css') }}" rel="stylesheet" type="text/css"/>
        <!-- custom css -->
        <link href="{{ asset('style/css/style.css') }}" rel="stylesheet">
        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=59c62e861610430012fe532b&product=inline-share-buttons"></script>
    </head>
    <body>
        <!--<div class="se-pre-con"></div>-->
        <header>
            <!-- Mobile Menu Start -->
            <div class="mobile-menu-area navbar-fixed-top hidden-sm hidden-md hidden-lg">
                <nav class="mobile-menu" id="mobile-menu">
                    <div class="sidebar-nav">
                        <ul class="nav side-menu">
                            <li class="sidebar-search">
                                <form id="search" method="post" action="/searchresult.html" >
                                    <div class="input-group custom-search-form">
                                        <input type="text" class="form-control" placeholder="بحث ...">
                                        <span class="input-group-btn">
                                            <button class="btn mobile-menu-btn" type="button">
                                            <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div>
                                </form>
                                <!-- /input-group -->
                            </li>
                            <li><a href="{{ url('/') }}">الصفحة الرئيسية</a></li>
                            <li>
                                <a href="#"> <span class="fa arrow"></span></a>
                                <!--<a href="#" class="dropdown-toggle category03" data-toggle="dropdown"><span class="pe-7s-angle-down"></span></a>-->
                                <ul class="nav nav-second-level">
                                    
                                    <li><a href=".html"></a></li>
                                    <!--<li class="divider"></li>-->
                                </ul>
                            </li>
                            {{-- <li >
                                <a href="#" > التحكم  <span class="pe-7s-angle-down"></span></a>
                                <ul class="nav nav-second-level">
                                    <!--<li><a href=""></a></li>-->
                                    <li><a href="upload.html">مركز التحميل</a></li>
                                    <li><a href="change_pass.html">تغيير كلمة المرور</a></li>
                                    <li><a href="article.html">مشاركاتي</a></li>
                                    <li><a href="addcon.html">مقال جديد</a></li>
                                    <!--<li class="divider"></li>-->
                                </ul>
                            </li> --}}
                            <li><a href="./contact.html" class="category04">اتصل بنا</a></li>
                            
                            {{-- <li><a href="./logout.php" class="category04">   خروج</a></li> --}}
                            <li><a href="./login.html" class="category04"> تسجيل  الدخول</a></li>
                            <!-- social icon -->
                            <li>
                                <div class="social">
                                    <ul>
                                        <!--<li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>-->
                                        <li><a href="https://twitter.com/RamadanAlanazi" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                                        <!--<li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>-->
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container">
                    <div class="top_header_icon">
                        <span class="top_header_icon_wrap">
                            <a target="_blank" href="https://twitter.com/RamadanAlanazi" title="Twitter"><i class="fa fa-twitter"></i></a>
                        </span>
                        <span class="top_header_icon_wrap">
                            <!--<a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>-->
                        </span>
                        <span class="top_header_icon_wrap">
                            <!--<a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>-->
                        </span>
                        <span class="top_header_icon_wrap">
                            <!--<a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>-->
                        </span>
                        <span class="top_header_icon_wrap">
                            <!--<a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>-->
                        </span>
                    </div>
                    <div id="showLeft" class="nav-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu End -->
            <!-- top header -->
            <div class="top_header hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3 col-md-3">
                            <div class="top_header_menu_wrap">
                                <ul class="top-header-menu">
                                    <li><a href="./reg_form.html">تسجيل</a></li>
                                    <li class="dropdown">
                                        {{-- <br /> --}}
                                        {{-- <a href="logout.php"><font style="color: #FF0000; font-weight: bold"> تسجيل الخروج</font></a> --}}
                                        <form action="login.html" method="post">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">تسجيل الدخول</a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <div class="login-inner">
                                                        <input type="text" class="form-control" id="name_email" name="username" placeholder="اسم المستخدم ">
                                                        <hr>
                                                        <input type="password" class="form-control" id="pass" name="password" placeholder="كلمة المرور">
                                                        <label class="checkbox-inline"><input type="checkbox" value="">تذكرنى</label>
                                                        <button type="submit" name="submit" class="btn btn-lr btn-active">الدخول </button>
                                                        <!--<div class="foeget"><a href="#">نسيت اسم المستخدم / كلمة السر؟</a></div>-->
                                                    </div>
                                                </li>
                                            </ul>
                                        </form>
                                    </li>
                                    <li><a href="./contact.html">اتصل بنا</a></li>
                                </ul>
                            </div>
                        </div>
                        <i style="font-size:12px;">
                        </i>
                        <!--breaking news-->
                        <div class="col-sm-9 col-md-7">
                            <div class="newsticker-inner">
                                <ul class="newsticker">
                                    @foreach ($randomBlogs as $randomBlog)
                                        <li><a href="{{ route('showBlog', [$randomBlog->id]) }}">{{ $randomBlog->title }}</a></li>
                                    @endforeach
                                    
                                </ul>
                                <div class="next-prev-inner">
                                    <a href="#" id="prev-button"><i class='pe-7s-angle-left'></i></a>
                                    <a href="#" id="next-button"><i class='pe-7s-angle-right'></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 hidden-sm">
                            <div class="top_header_icon">
                                <span class="top_header_icon_wrap">
                                    <a target="_blank" href="https://twitter.com/RamadanAlanazi" title="Twitter"><i class="fa fa-twitter"></i></a>
                                </span>
                                <span class="top_header_icon_wrap">
                                    <!--<a target="_blank" href="#" title="Facebook"><i class="fa fa-facebook"></i></a>-->
                                </span>
                                <span class="top_header_icon_wrap">
                                    <!--<a target="_blank" href="#" title="Google"><i class="fa fa-google-plus"></i></a>-->
                                </span>
                                <span class="top_header_icon_wrap">
                                    <!--<a target="_blank" href="#" title="Vimeo"><i class="fa fa-vimeo"></i></a>-->
                                </span>
                                <span class="top_header_icon_wrap">
                                    <!--<a target="_blank" href="#" title="Pintereset"><i class="fa fa-pinterest-p"></i></a>-->
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="top_banner_wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-4 col-sm-4">
                            <div class="header-logo">  <!-- logo -->
                            <a href="index.html">
                                <img class="td-retina-data img-responsive"  src="{{ asset('style/images/logo.png') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8 col-md-8 col-sm-8 hidden-xs">
                        <div class="header-banner">
                            <a href="family_reg.php"><img class="td-retina img-responsive" src="{{ asset('style/images/nimran_family.jpg') }}" alt="" ></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- main navber -->
        <div class="container hidden-xs">
            <nav class="navbar">
                <div class="collapse navbar-collapse">
                    @include('publicLay.menu')
                    </div><!-- navbar-collapse -->
                </nav>
            </div>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8"> <!-- right content inner -->
                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">

                                @yield('content')
                                
                            </div>
                        </div>
                    </div>
                </div>
                </div> <!-- /.left content inner -->
                
                <div class="col-md-4 col-sm-4 right-padding" style="padding-top: 0px !Important;"> <!-- left content wrapper -->
                <form id="search" method="post" action="/searchresult.html" >
                    <div class="input-group search-area"> <!-- search area -->
                    
                    <input type="text"   class="form-control" placeholder="بحث المواد هنا ..." name="search">
                    <div class="input-group-btn">
                        <button class="btn btn-search" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                    
                </div>
            </form>
            <!-- /.search area -->
            
            
            
            
            
            
            
            
            
            <!-- twitter feed -->
            <h3 class="category-headding ">تويتر تغذية</h3>
            <div class="headding-border"></div>
            <div class="feed-inner">
                <a class="twitter-timeline" data-lang="ar" data-height="700" href="https://twitter.com/RamadanAlanazi">Tweets by Ramadan Alanazi</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>                    </div>  <!-- /.twitter feed -->
                
                <div class="tab-inner">
                    <ul class="tabs">
                        <li><a href="#">الأكثر مشاهدة</a></li>
                        <li><a href="#">الاكثر ردودا</a></li>
                        </ul><hr> <!-- tabs -->
                        <div class="tab_content">
                            <div class="tab-item-inner">
                                @foreach ($moreViewrs as $moreViewr)
                                
                                <div class="box-item wow fadeIn" data-wow-duration="1s">
                                    <div class="img-thumb">
                                        <a href="" rel="bookmark">
                                        <img class="entry-thumb" src="" alt="" height="80" width="90"></a>
                                    </div>
                                    <div class="box-item wow fadeIn animated" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s;">
                                        <div class="img-thumb">
                                            <a href="{{ Route('showBlog', [$moreViewr->id, Str::arabic_slug($moreViewr->title)]) }}" rel="bookmark">
                                                <img class="entry-thumb" src="
                                                @if (empty($moreViewr->picture) or $moreViewr->picture == 'style/images/logo.png')
                                                {{ asset('images/abowael-most.jpg') }}
                                                @else
                                                {{ asset($moreViewr->picture) }}
                                                @endif
                                                
                                            " alt="" height="80" width="90"></a>
                                        </div>
                                        <div class="item-details">
                                            <h6 class="sub-category-title bg-color-3">
                                            <a href="#">المقالات</a>
                                            </h6>
                                            <h3 class="td-module-title"><a href="{{ Route('showBlog', [$moreViewr->id, Str::arabic_slug($moreViewr->title)]) }}">{{ $moreViewr->title }}</a></h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                <i class="pe-7s-clock"></i> {{$moreViewr->created}}                                         </div>
                                                <!-- post comment -->
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i> {{$moreViewr->view}} </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                {{-- expr --}}
                                @endforeach
                                
                                
                                
                                
                                
                                </div> <!-- / tab item -->
                                <div class="tab-item-inner">
                                    
                                    <div class="box-item ">
                                        
                                        
                                        
                                        
                                        <div class="img-thumb">
                                            <a href="" rel="bookmark">
                                            <img class="entry-thumb" src="/Abowael-1/pic/" alt="" height="80" width="90"></a>
                                        </div>
                                        
                                        
                                        
                                        <div class="img-thumb">
                                            <a href="" rel="bookmark">
                                            <img class="entry-thumb" src="/Abowael-1/images/abowael-most.jpg" alt="" height="80" width="90"></a>
                                        </div>
                                        
                                        
                                        
                                        
                                        <div class="item-details">
                                            
                                            <h6 class="sub-category-title bg-color-">
                                            <a href="#"></a>
                                            </h6>
                                            <h3 class="td-module-title"><a href=""></a></h3>
                                            <div class="post-editor-date">
                                                <!-- post date -->
                                                <div class="post-date">
                                                    <i class="pe-7s-clock"></i>
                                                </div>
                                                <!-- post comment -->
                                                <div class="post-author-comment"><i class="pe-7s-comment"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    </div> <!-- / tab item -->
                                    </div> <!-- / tab_content -->
                                    </div> <!-- / tab -->
                                    
                                    
                                    
                                    <!--القاذمة البريدية-->
                                    
                                    <h3 class="category-headding "> القائمة البريدية</h3>
                                    <div class="headding-border"></div>
                                    <div class="feed-inner">
                                        <p class="tr padtop"> :بريدك الالكتروني</p>
                                        <div class="top">
                                        </div>  </div>
                                        
                                        <!--القائمة البريدية-->
                                        
                                        
                                        
                                        </div> <!-- side content end -->
                                        </div> <!-- row end -->
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        </div> <!-- container end -->
                                        
                                        <footer>
                                            <div class="container">
                                                
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                        <div class="footer-box footer-logo-address"> <!-- address  -->
                                                        <img src="/Abowael-1/images/abowael-logo.png" class="img-responsive" alt="">
                                                        <address>
                                                        </address>
                                                        </div> <!-- /.address  -->
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="footer-box">
                                                            <h3 class="category-headding">المقالات</h3>
                                                            <div class="headding-border bg-color-4"></div>
                                                            <ul>
                                                                
                                                                @foreach ($subpages as $subpage)
                                                                @if ($subpage->pages_id == 15)
                                                                <li><a href="{{ Route('showBlogSection', [$subpage->id, Str::arabic_slug($subpage->class_n)]) }}">{{$subpage->class_n}}</a></li>
                                                                @endif
                                                                
                                                                @endforeach
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="footer-box">
                                                            <h3 class="category-headding">الاخبار</h3>
                                                            <div class="headding-border bg-color-5"></div>
                                                            <ul>
                                                                @foreach ($subpages as $subpage)
                                                                @if ($subpage->pages_id == 17)
                                                                <li><a href="{{ Route('showBlogSection', [$subpage->id, Str::arabic_slug($subpage->class_n)]) }}">{{$subpage->class_n}}</a></li>
                                                                @endif
                                                                
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                        
                                                        
                                                        
                                                        
                                                        
                                                        <div class="footer-box">
                                                            <h3 class="category-headding">ابووائل في  الاعلام</h3>
                                                            <div class="headding-border bg-color-5"></div>
                                                            <ul>
                                                                @foreach ($subpages as $subpage)
                                                                @if ($subpage->pages_id == 19)
                                                                <li><a href="{{ Route('showBlogSection', [$subpage->id, Str::arabic_slug($subpage->class_n)]) }}">{{$subpage->class_n}}</a></li>
                                                                @endif
                                                                
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                        <div class="footer-box">
                                                            <h3 class="category-headding "> شعر</h3>
                                                            <div class="headding-border"></div>
                                                            <ul>
                                                                @foreach ($subpages as $subpage)
                                                                @if ($subpage->pages_id == 16)
                                                                <li><a href="{{ Route('showBlogSection', [$subpage->id, Str::arabic_slug($subpage->class_n)]) }}">{{$subpage->class_n}}</a></li>
                                                                @endif
                                                                
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </footer>
                                        <div class="sub-footer">  <!-- sub footer -->
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p> ابووايل | جميع الحقوق محفوظة 2016</p>
                                                    <div class="social">
                                                        <ul>
                                                            <!--<li><a href="#" class="facebook"><i class="fa  fa-facebook"></i> </a></li>-->
                                                            <li><a href="https://twitter.com/RamadanAlanazi" class="twitter"><i class="fa  fa-twitter"></i></a></li>
                                                            <!--<li><a href="#" class="google"><i class="fa  fa-google-plus"></i></a></li>-->
                                                            <!--<li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>-->
                                                            <!--<li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>-->
                                                            <!--<li><a href="#" class="vimeo"><i class="fa fa-vimeo"></i></a></li>-->
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div> <!-- /.sub footer -->
                                        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
                                        <script src="{{ asset('style/js/jquery.min.js') }}" type="text/javascript"></script>
                                        <!-- Include all compiled plugins (below), or include individual files as needed -->
                                        <script src="{{ asset('style/js/bootstrap.min.js') }}"></script>
                                        <script src="{{ asset('style/js/classie.js') }}" type="text/javascript"></script>
                                        <!-- Metis Menu Plugin JavaScript -->
                                        <script src="{{ asset('style/js/metisMenu.min.js') }}"></script>
                                        <!-- Newstricker js -->
                                        <script src="{{ asset('style/js/jquery.newsTicker.js') }}"></script>
                                        <!-- Scrollbar js -->
                                        <script src="{{ asset('style/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
                                        <!-- owl carousel js -->
                                        <script src="{{ asset('style/owl-carousel/owl.carousel.min.js') }}"></script>
                                        <!-- youtube js -->
                                        <script src="{{ asset('style/js/RYPP.js') }}"></script>
                                        <!-- jquery ui js -->
                                        <script src="{{ asset('style/js/jquery-ui.js') }}"></script>
                                        <!-- form -->
                                        <script src="{{ asset('style/js/form-classie.js') }}"></script>
                                        <!-- animate js -->
                                        <script src="{{ asset('style/js/wow.min.js') }}"></script>
                                        <!-- custom js -->
                                        <script src="{{ asset('style/js/custom.js') }}"></script>
                                        @stack('scripts')
                                    </body>
                                </html>