<?php get_header(); ?>

        <aside>
            <div class="navbar-wrapper">
                <div class="container">
                    <nav class="navbar navbar-inverse navbar-static-top">
                        <div class="container">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <span class="sr-only"><?php _e( 'Toggle navigation', 'my_theme_learn' ); ?></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <a class="navbar-brand" href="#">ریاضی بیاموز</a>
                                <ul class="nav navbar-nav">
                                    <li class="active">
                                        <a href="#">خانه</a>
                                    </li>
                                    <li>
                                        <a href="Login.html">ثبت نام / ورود </a>
                                    </li>
                                    <li>
                                        <a href="contact.html">ارتباط با ما</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ریاضی پایه <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="Nohom.html">نهم</a>
                                            </li>
                                            <li>
                                                <a href="Hashtom.html">هشتم</a>
                                            </li>
                                            <li>
                                                <a href="Haftom.html">هفتم</a>
                                            </li>
                                            <li role="separator" class="divider"></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- Carousel
    ================================================== -->
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img class="first-slide" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Slide4.jpg" alt="First slide">
                        <div class="container">
</div>
                    </div>
                    <div class="item">
                        <img class="second-slide" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Slide2.jpg" alt="Second slide">
                        <div class="container">
</div>
                    </div>
                    <div class="item">
                        <img class="third-slide" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Slide5.png" alt="Third slide">
                        <div class="container">
</div>
                    </div>
                </div>
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Previous', 'my_theme_learn' ); ?></span> </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> <span class="sr-only"><?php _e( 'Next', 'my_theme_learn' ); ?></span> </a>
            </div>
            <!-- /.carousel -->
            <!-- Marketing messaging and featurettes
    ================================================== -->
            <!-- Wrap the rest of the page in another container to center all the content. -->
            <hr class="featurette-divider text-muted">
            <!-- Three columns of text below the carousel -->
            <header>
                <section class="col-lg-2">
</section>
                <section class="col-lg-6">
                    <img class="img-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/PNG2.jfif" alt="آموزش غیر حضوری" width="240" height="240">
                    <h2 style="color:black;">فیلم های آموزشی</h2>
                    <p></p>
                    &nbsp; 
                    <p> <a class="dropdown2" href="#" role="button">بیشتر &raquo;</a> </p>
                    <div class="dropdown-content2">
                        <p> 
                         مجموعه ریاضی بیاموز این امکان را برای شما فراهم کرده است تا ویدیو های تدریسی تمام مباحث ریاضی پایه های نهم،هشتم و هفتم را بصورت کاملا رایگان تماشا کنید.</p>
                    </div>                     
                </section>
                <!-- /.col-lg-4 -->
                <!-- /.col-lg-4 -->
                <!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="img-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/PNG.png" alt="نکات مهم ریاضی" width="240" height="240">
                    <h2 style="color:Black;">نکته های مهم ریاضی</h2>
                    <p></p>
                    &nbsp;
                    <p><a class="Testbutton" href="#" role="button">بیشتر &raquo;</a></p>
                </div>
            </header>
            &nbsp;
            &nbsp;
            <div>
</div>
            &nbsp;
            <div>
</div>
            &nbsp;
            <!-- /.row -->
            <!-- START THE FEATURETTES -->
            <header> 
</header>
            <hr>
            &nbsp;
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">درسنامه + آموزش ویدیویی + نکات درسی&nbsp;</h2>
                    <center>
                        <a href="Haftom.html"> <div class="mybuttom button1 Mybox">
                                <h1 dir="rtl">
                          ادامه </h1>
                            </div> </a>
                    </center>
                    <p class="lead"></p>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive2 center-block " style="border-radius:5%; " src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/77.jpg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 col-md-push-5">
                    <h2 class="featurette-heading">درسنامه + آموزش ویدیویی + نکات درسی&nbsp;&nbsp;<br></h2>
                    <center>
                        <a href="Hashtom.html"> <div class="mybuttom button1 Mybox">
                                <h1 dir="rtl">
                          ادامه </h1>
                            </div> </a>
                    </center>
                    <p class="lead"></p>
                </div>
                <div class="col-md-5 col-md-pull-7">
                    <img class="featurette-image img-responsive2 center-block" style="border-radius:5%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/88.jpg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading"><h2 spellcheck="true" data-medium-editor-element="true" role="textbox" aria-multiline="true" data-medium-editor-editor-index="4" medium-editor-index="1b5e0779-e29d-721d-1fbc-f922b1413682" data-placeholder="Type your text" data-medium-focused="true" style="font-size: 50px;">درسنامه + آموزش ویدیویی + نکات درسی&nbsp;</h2></h2>
                    <p class="lead"></p>
                    <center>
                        <a href="Nohom.html"> <div class="mybuttom button1 Mybox">
                                <h1 dir="rtl">
                          ادامه </h1>
                            </div> </a>
                    </center>
                </div>
                <div class="col-md-5">
                    <img class="featurette-image img-responsive2 center-block" style="border-radius:5%;" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/9.jpg" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <hr style="background-color:black;">
            <center>
                <img class="img-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Poster.png" width="100%" height="auto">
            </center>
            <div>
                <h1 align="center" style="color: black; font-size: 60px;">
            !ریاضی را با ما بیاموزید </h1>
            </div>
            <hr class="featurette-divider text-muted">
            <hr style="background-color:black;">
            <section class="city">
                <div dir="rtl">
                    <button class="button button4">
                        <h1>
                   همین الان عضو شو </h1> 
                    </button>
                </div>
                <a href="Login.html"> <button dir="rtl" class="button button3"> 
                        <h1> 
        ثبت نام    </h1> 
                    </button></a>
            </section>
            <hr class="featurette-divider text-muted">
            <hr style="background-color:black;">
            <!-- END THE FEATURETTES -->
            <!-- FOOTER -->
            <footer style="background-color: #8d8d8d; max-width: 2000px; border: 2px solid #8d8d8d; border-radius: 12px; padding: 5px;">
                &nbsp;
                <p> </p>
                &nbsp;
                <div style="float:right;"> 
                    <img class="img-circle" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/Logo.png" height="200">
                </div>
                &nbsp;
                <p>  &nbsp;</p>
                &nbsp;
                <p>
                            &nbsp; </p>
                &nbsp;               
                <p>
                &nbsp; </p>
                <h2 dir="rtl" style="color: #000000; font-weight: bold;"> <?php _e( 'سایت ریاضی بیاموز در سال 1401 برای دانش آموزان دوره متوسطه اول و دبیران محترم و زحمت کش کشور عزیزمان ساخته شده و امیدوار است تا با فعالیت های خود بتواندخدمات مناسبی برای شما ارائه دهد', 'my_theme_learn' ); ?> </h2>
                <p> </p>
                &nbsp;
                <h3 style="color:black;"> <?php _e( 'شماره تماس:  Soon', 'my_theme_learn' ); ?> </h3>
                <h3 style="color:black;"> <?php _e( 'ایمیل :  Soon', 'my_theme_learn' ); ?> </h3>
                <hr>
                <h3 style="color:black;" align="center">   کلیه حقوق برای سایت ریاضی بیاموز محفوظ است &middot;</h3>
                &nbsp;
                &nbsp;
                &nbsp;
                &nbsp;
            </footer>
            <button onclick="topFunction()" id="myBtn" title="بالا برو">
                بالا
</button>
        </aside>        

<?php get_footer(); ?>