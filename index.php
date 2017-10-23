<?php
$title = "MediaTech";

//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>  CSS  >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
$links = array( "bootstrap.min.css",
                "font-awesome.min.css",
                "style.css",
                "media.css"
 );
 foreach ($links as $value) {
  // echo '<link rel='stylesheet' href="css/'. $value . '" />'
 }
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>


 ?>

<!--start HTML 5
>>>>>>>>>>>>-->


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <!-- IE Compatibility Meta -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- First Mobile Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title><?php if (isset($title)) {echo $title ;} ?></title>
        <!-- Font Link -->
        <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/droid-arabic-kufi" type="text/css"/>
        
        <link rel='stylesheet' href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/font-awesome.min.css" />
        <link rel='stylesheet' href="css/style.css" />
        <link rel='stylesheet' href="css/media.css" />
        <!--[if lt IE 9]>
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- /. Navbar -->
        <nav class="navbar navbar-default">

            <!-- /.container-fluid -->
            <div class="container-fluid">

              <!-- Start Leftside from Navbar -->
              <ul class="nav navbar-nav">

                  <li class="bor-ri hidden">
                      <a href="#" title="الصورة الشخصية">
                          <div class="user-img">
                              <img src="images/avatar-2.png" alt="الصورة الشخصية">
                          </div>
                      </a>
                  </li>

                  <li class="bor-ri">
                      <a href="#" class="sig-col">
                            تسجيل الدخول
                      </a>
                  </li>

                  <li class="bor-ri">
                      <a href="#" class="search-col" title="بحث">

                        <i class="fa fa-search"></i>

                      </a>
                  </li>

                  <li class="bor-ri">
                      <a href="#" class="facebook-col" title="الموقع الرسمي على الفيس بوك / Facebook">

                        <i class="fa fa-facebook"></i>

                      </a>
                  </li>

                  <li class="bor-ri">
                      <a href="#" class="instagram-col" title="الحساب الرسمي على الانستقرام / Instagram">

                        <i class="fa fa-instagram"></i>

                      </a>
                  </li>

                  <li class="bor-ri">
                      <a href="#" class="snapchat-col" title="الحساب الرسمي على السناب شات / Snapchat">

                        <i class="fa fa-snapchat-ghost"></i>

                      </a>
                  </li>

                  <li class="bor-ri">
                      <a href="#" class="google-col" title="الموقع الرسمي لي قوقل / Google-plus">

                        <i class="fa fa-google-plus"></i>

                      </a>
                  </li>

              </ul>
              <!-- End Leftside from Navbar -->

              <!-- Start Rightside from Navbar -->
              <ul class="nav navbar-nav navbar-right">

                  <li>
                      <a href="#">
                          <div class="logo">
                                <img src="images/mc-logo.png" alt="شعار ميدياتك الأعلامية" title="شعار ميدياتك الأعلامية">
                          </div>
                      </a>
                  </li>

                  <li class="dropdown bor-le">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-menu-hamburger"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#">الرئيسية</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">التغطيات</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">للتواصل</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">للحجز</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">المفضلة</a></li>
                      </ul>
                  </li>

                </ul>
                <!-- End Rightside from Navbar -->

            </div>
            <!-- /.container-fluid -->

        </nav>
        <!-- /. Navbar -->

        <!-- /. Links -->

        <div class="links">
            <div class="container">
                <ul class="breadcrumb">
                    <li class="active">
                        <a href="#">الرئيسية</a>
                    </li>
                    <li>
                        <a href="#">التغطيات</a>
                    </li>
                    <li>
                        <a href="#">للتواصل</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- /. Links -->


        <!-- /. Slider -->

        <div class="slid">
            <div class="overlay">

        <!-- /. info -->
        <div class="infobar">
            <div class="container">

                <div id="corausel_testimonials" class="carousel slide carousel-fade" data-ride="carousel">

                <!-- Indicators -->
              <ol class="carousel-indicators">
                <li data-target="#corausel_testimonials" data-slide-to="0">
                    الخدمات
                </li>
                <li data-target="#corausel_testimonials" data-slide-to="1" class="active">
                    الموقع
                </li>
                <li data-target="#corausel_testimonials" data-slide-to="2">
                  الاهداف
                </li>
              </ol>


                <div class="carousel-inner" role="listbox">

                    <div class="item">
                        <p class="lead">الموقع عبارة عن نحن فريق من المصورين المحترفين نتميز بدقة التصوبر والجودة العالية مع الكثير من المهارات العالية في التصوير الفوتوغرافي مع ونحن نطمح على ان نكون المرتبه  </p>
                    </div>

                    <div class="item active">
                        <p class="lead">الموقع عبارة عن نحن فريق من المصورين المحترفين نتميز بدقة التصوبر والجودة العالية مع الكثير من المهارات العالية في التصوير الفوتوغرافي مع ونحن نطمح على ان نكون المرتبه  </p>
                    </div>

                    <div class="item">
                        <p class="lead">الموقع عبارة عن نحن فريق من المصورين المحترفين نتميز بدقة التصوبر والجودة العالية مع الكثير من المهارات العالية في التصوير الفوتوغرافي مع ونحن نطمح على ان نكون المرتبه  </p>
                    </div>
                </div>

                </div>

            </div>
        </div>
        <!-- /. info -->


            </div>
        </div>

        <!-- /. Slider -->


        <!-- /. Content -->

        <div class="content">
            <div class="container">
                <div class="row">



                    <div class="col-md-3">

                        <!-- Start Recent photos -->
                        <div class="recent-pho text-center">
                            <div class="rec"> <i class="fa fa-camera fa-fw" aria-hidden="true"></i> صور حديثة</div>
                            <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
                                <ol class="carousel-indicators hidden">
                                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel" data-slide-to="1"></li>
                                    <li data-target="#carousel" data-slide-to="2"></li>
                                    <li data-target="#carousel" data-slide-to="3"></li>
                                    <li data-target="#carousel" data-slide-to="4"></li>
                                    <li data-target="#carousel" data-slide-to="5"></li>
                                    <li data-target="#carousel" data-slide-to="6"></li>
                                    <li data-target="#carousel" data-slide-to="7"></li>
                                    <li data-target="#carousel" data-slide-to="8"></li>
                                    <li data-target="#carousel" data-slide-to="9"></li>
                                </ol>
                                <!-- Carousel items -->
                                <div class="carousel-inner">
                                    <div class="item active"><img src="images/ts1.jpg"></div>
                                    <div class="item"><img src="images/ts2.jpg"></div>
                                    <div class="item"><img src="images/ts3.jpg"></div>
                                    <div class="item"><img src="images/ts4.jpg"></div>
                                    <div class="item"><img src="images/ts5.jpg"></div>
                                    <div class="item"><img src="images/ts6.jpg"></div>
                                    <div class="item"><img src="images/ts7.jpg"></div>
                                    <div class="item"><img src="images/ts8.jpg"></div>
                                    <div class="item"><img src="images/ts9.jpg"></div>
                                    <div class="item"><img src="images/ts10.jpg"></div>
                                </div>
                                <!-- Carousel nav -->
                                <a class="carousel-control left" href="#carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span></a>
                                <a class="carousel-control right" href="#carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
                            </div>
                        </div>
                        <!-- End Recent photos -->

                        <!-- Start Twitter -->
                        <div class="twitter">
                            <h2>twitter / تويتر</h2>
                            <div class="twitter-page">

                            </div>
                        </div>
                        <!-- Start Twitter -->

                        <!-- Start Youtube -->
                        <div class="youtube">
                            <h2>Toutube / يوتيوب</h2>
                            <div class="youtube-vidos">

                            </div>
                        </div>
                        <!-- Start Youtube -->


                    </div>





                    <div class="col-md-7">

                        <!---- /.  Modern covers ---->
                        <div class="modern-cov-re">
                            <div class="modern-cov">

                                <div class="modern-cov-he">
                                    <h2>
                                        <i class="fa fa-circle" aria-hidden="true"></i>
                                        <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                        <i class="fa fa-fire fa-fw" aria-hidden="true"></i>
                                        احدث التغطيات
                                    </h2>
                                    <div class="modern-cov-chevron">
                                        <i class="fa fa-chevron-circle-down" aria-hidden="true"></i>
                                        <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
                                    </div>
                                </div>

                                <!-- Start Modern Covers Slide -->
                                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                                        <!-- Start Wrapper for slides -->
                                        <div class="modern-covers-sli">
                                        <div class="modern-cov-sizing-slide">

                                          <div class="carousel-inner" role="listbox">

                                            <div class="item active">
                                              <img src="images/slidtst-1.jpg" alt="...">
                                              <div class="carousel-caption">
                                                ...حفل استقبال السديس في المدينة المنورة 2017/1/2
                                              </div>
                                            </div>

                                            <div class="item">
                                              <img src="images/slidtst-2.jpg" alt="...">
                                              <div class="carousel-caption">
                                                ...بارك الله لهما وبارك عليهما وجمع بينهما فى خير حفل زفاف الشاب محمد منصور
                                              </div>
                                            </div>

                                            <div class="item">
                                              <img src="images/slidtst-3.jpg" alt="...">
                                              <div class="carousel-caption">
                                                ...حفل تكريم 33 حافظ لكتابب الله عزوجل
                                                            على شرف فضيلة الشيخ
                                                            ابراهيم بن عبدالله بن حميد
                                                        امام وخطيب جامع الاميرة فهدة السديري
                                              </div>
                                            </div>

                                            <div class="item">
                                              <img src="images/slidtst-4.jpg" alt="...">
                                              <div class="carousel-caption">
                                                ...بالثنائية حقق فريق (الطيف) ابوباسم فوزا مستحقا له على حساب فريق (المتعة)ابوشيماء عصر اليوم في أولى لقاءات الفريقين
                                              </div>
                                            </div>

                                            <div class="item">
                                            <a href="#">
                                              <img src="images/slidtst-5.jpg" alt="...">
                                              <div class="carousel-caption">
                                                ...المتحف التراث المكي لصاحبه الأستاذ/ زهير محمد حسن فخرانى
                                              </div>
                                            </a>
                                            </div>

                                          </div>

                                        <!-- Controls -->
                                          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left hidden" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right hidden" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>

                                        </div>
                                        </div>
                                        <!-- Start Wrapper for slides -->

                                        <!-- Start Indicators -->
                                        <ol class="carousel-indicators">
                                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active">
                                              <img src="images/slidtst-1.jpg" alt="...">
                                            </li>
                                            <li data-target="#carousel-example-generic" data-slide-to="1">
                                                <img src="images/slidtst-2.jpg" alt="...">
                                            </li>
                                            <li data-target="#carousel-example-generic" data-slide-to="2">
                                                <img src="images/slidtst-3.jpg" alt="...">
                                            </li>
                                            <li data-target="#carousel-example-generic" data-slide-to="3">
                                                <img src="images/slidtst-4.jpg" alt="...">
                                            </li>
                                            <li data-target="#carousel-example-generic" data-slide-to="4">
                                                <img src="images/slidtst-5.jpg" alt="...">
                                            </li>
                                        </ol>
                                        <!-- End Indicators -->

                                    </div>

                                <!-- End Modern Covers Slide -->


                            </div>
                        </div>
                        <!---- /. Modern covers ---->

                        <!---- /. Wedding covers ---->
                        <div class="wedding-cov">

                            <h2> <i class="fa fa-birthday-cake fa-fw" aria-hidden="true"></i> افراح <small>احدث تغطيات الافراح</small> </h2>

                            <div class="row">

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                        <img src="images/030.jpg" alt="...">
                                        <div class="caption">
                                          <p>
                                              <a href="#">حفل زفاف الشاب محمد منير</a>
                                          </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                      <img src="images/010.jpg" alt="...">
                                      <div class="caption">
                                        <p><a href="#">حفل زفاف الشاب محمد منير</a></p>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                      <img src="images/020.jpg" alt="...">
                                      <div class="caption">
                                        <p><a href="#">حفل زفاف الشاب محمد منير</a></p>
                                      </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!---- /. Wedding covers ---->

                        <!---- /. Sports covers ---->
                        <div class="sports-cov">

                            <h2> <i class="fa fa-futbol-o fa-fw" aria-hidden="true"></i> رياضي <small>احدث التغطيات الرياضية</small> </h2>

                            <div class="row">

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                        <img src="images/ts2.jpg" alt="...">
                                        <div class="caption">
                                          <p>
                                              <a href="#">حفل زفاف الشاب محمد منير</a>
                                          </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                      <img src="images/200.jpg" alt="...">
                                      <div class="caption">
                                        <p><a href="#">حفل زفاف الشاب محمد منير</a></p>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                      <img src="images/100.jpg" alt="...">
                                      <div class="caption">
                                        <p><a href="#">حفل زفاف الشاب محمد منير</a></p>
                                      </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!---- /. Sports covers ---->

                        <!---- /. General covers ---->
                        <div class="general-cov">

                            <h2> <i class="fa fa-th-large fa-fw" aria-hidden="true"></i> عامة <small>احدث التغطيات العامة</small> </h2>

                            <div class="row">

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                        <img src="images/slidtst-1.jpg" alt="...">
                                        <div class="caption">
                                          <p>
                                              <a href="#">حفل زفاف الشاب محمد منير</a>
                                          </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                      <img src="images/ts5.jpg" alt="...">
                                      <div class="caption">
                                        <p><a href="#">حفل زفاف الشاب محمد منير</a></p>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                      <img src="images/slidtst-5.jpg" alt="...">
                                      <div class="caption">
                                        <p><a href="#">حفل زفاف الشاب محمد منير</a></p>
                                      </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!---- /. General covers ---->

                        <!---- /. Montage covers ---->
                        <div class="montage-cov">

                            <h2> <i class="fa fa-video-camera fa-fw" aria-hidden="true"></i> مونتاج <small>احدث تغطيات المونتاج</small> </h2>

                            <div class="row">

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                        <img src="images/slidtst-1.jpg" alt="...">
                                        <div class="caption">
                                          <p>
                                              <a href="#">حفل زفاف الشاب محمد منير</a>
                                          </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                      <img src="images/ts5.jpg" alt="...">
                                      <div class="caption">
                                        <p><a href="#">حفل زفاف الشاب محمد منير</a></p>
                                      </div>
                                    </div>
                                </div>

                                <div class="col-xs-4">
                                    <div class="thumbnail">
                                      <img src="images/slidtst-5.jpg" alt="...">
                                      <div class="caption">
                                        <p><a href="#">حفل زفاف الشاب محمد منير</a></p>
                                      </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!---- /. Montage covers ---->

                    </div>



                    <!-- Start Advertisement bar -->
                    <div class="col-md-2 col-xs-6">
                        <div class="advertisement-bar">
                            <span class="adv-b">اضهار الاعلان</span>
                            <span class="adv">
                                <i class="fa fa-times-circle fa-fw" aria-hidden="true" title="إخفاء الاعلان"></i>
                                اعلان
                            </span>
                            <img src="images/65fae48bd4.png">
                        </div>
                    </div>
                    <!-- End Advertisement bar -->

                    <!-- Start Featured Media -->
                    <div class="col-md-2 col-xs-6">
                        <div class="featured-media">
                            <div class="featured-media-he">اعلامين متميزين <span>هذا الاسبوع</span></div>
                            <div id="generic" class="carousel slide" data-ride="carousel">


                                <!-- Indicators -->
                              <ol class="carousel-indicators">
                                <li data-target="#generic" data-slide-to="0" class="active"></li>
                                <li data-target="#generic" data-slide-to="1"></li>
                                <li data-target="#generic" data-slide-to="2"></li>
                              </ol>

                              <!-- Wrapper for slides -->
                              <div class="carousel-inner" role="listbox">

                                <div class="item active">
                                    <div class="featured-media-sli">
                                      <img src="images/pest2.jpg" alt="...">
                                      <div class="carousel-caption">
                                          <p> <span> ايمن الانتيمو </span> <i class="fa fa-star" aria-hidden="true"></i> </p>
                                      </div>
                                    </div>
                                </div>

                                <div class="item">
                                  <div class="featured-media-sli">
                                      <img src="images/pest3.jpg" alt="...">
                                      <div class="carousel-caption">
                                          <p> <span> محمد طاهر </span> <i class="fa fa-star" aria-hidden="true"></i> </p>
                                      </div>
                                    </div>
                                </div>

                                  <div class="item">
                                  <div class="featured-media-sli">
                                      <img src="images/pest4.jpg" alt="...">
                                      <div class="carousel-caption">
                                          <p> <span> وليد سبانا </span> <i class="fa fa-star" aria-hidden="true"></i> </p>
                                      </div>
                                    </div>
                                </div>

                              </div>


                            </div>
                        </div>
                    </div>
                    <!-- Start Featured Media -->


                </div>
            </div>
        </div>

        <!-- /. Content -->

        <div class="clearfix"></div>

        <!-- Start Footer -->

        <footer>
            <div class="container">
                <span>Copyrights &copy; 2017 All Rights by MediaTech </span>
            </div>
        </footer>

        <!-- End Footer -->

        <!-- Start Loading Section -->

        <section class="loading-overlay">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
        </section>

        <!-- Start Loading Section -->


        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/plugins.js"></script>
    </body>
</html>
