<?php
include_once "header.php";
?>

    <main>
        <!-- benefits START -->
        <section id="benefits" class="mt-3">
            <div class="container">
                <div class="row justify-content-center">
                    <div id="happy-costumers" class="col-12 col-md-6 col-xl-4 text-center mt-md-3 reveal">
                        <i class="far fa-grin"></i>
                        <h3>לקוחות מרוצים</h3>
                        <p>טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום</p>
                    </div>
                    <div id="personal-service" class="col-12 col-md-6 col-xl-4 text-center mt-3 benefits-reveal">
                        <i class="far fa-handshake"></i>
                        <h3>שירות אישי</h3>
                        <p>טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום</p>
                    </div>
                    <div id="professional" class="col-12 col-md-6 col-xl-4 text-center mt-3 mt-md-5 mt-xl-3 benefits-reveal">
                        <i class="fas fa-award"></i>
                        <h3>מקצועיות</h3>
                        <p>טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- benefiets END -->
        <!-- CTA START -->
        <section id="cta">
            <div id="anchor"></div>
            <?php
            if (isset($_GET['contact'])) {
                $contact = $_GET['contact'];
                if($contact == "fail") { ?>
                    <div class="modal-body border rounded">
                        <p class="text-center mb-0">משהו השתבש :/ אנא נסה שוב</p>
                    </div>
                    <?php
                } elseif($contact == "success") { ?>
                    <div class="modal-body border rounded">
                        <p class="text-center mb-0">הפרטים נמסרו בהצלחה, ניצור איתך קשר בקרוב :)</p>
                    </div>
                    <?php
                }
            } ?>
            <div class="container">
                <div class="row">
                    <div class="col w-100">
                        <form class="form-inline p-2" action="includes/form-handler.inc.php" method="POST">
                            <div class="form-group mx-auto ml-md-5 mr-md-0 mb-2 mb-md-0">                                
                                <label for="name">
                                    <span class="sr-only">מלא שם</span>
                                    <?php
                                    if(isset($_GET['name'])) {
                                        $name = $_GET['name'];
                                        if($name == "empty") {
                                            echo '<input class="form-control text-center text-md-right rounded missing" type="text" placeholder="יש למלא שם" id="name" name="name">';
                                        } else {
                                            echo '<input class="form-control text-center text-md-right rounded" type="text" placeholder="יש למלא שם" value="'.$name.'" id="name" name="name">';
                                        }
                                    } else {
                                        echo '<input class="form-control text-center text-md-right rounded" type="text" placeholder="שם" id="name" name="name">';
                                        }?>
                                </label>
                            </div>
                            <div class="form-group mx-auto ml-md-0 mr-md-0 mb-2 mb-md-0">                                
                                <label for="phone">
                                    <span class="sr-only">מלא מספר טלפון</span>
                                    <?php
                                    if(isset($_GET['phone'])) {
                                        $phone = $_GET['phone'];
                                        if($phone == "empty") {
                                            echo '<input class="form-control text-center text-md-right rounded missing" type="tel" placeholder="יש למלא טלפון" id="phone" name="phone">';
                                        } else {
                                            echo '<input class="form-control text-center text-md-right rounded" type="tel" placeholder="יש למלא טלפון" value="'.$phone.'" id="phone" name="phone">';
                                        }
                                    } else {
                                        echo '<input class="form-control text-center text-md-right rounded " type="tel" placeholder="טלפון" id="phone" name="phone">';
                                        }?>
                                </label>
                            </div>
                            <div class="w-100 d-md-none"></div>
                            <button class="btn gold px-5 ml-auto mr-auto ml-md-0" type="submit" name="submit">צור קשר</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA END -->
        <!-- services START -->
        <section id="services">
            <div class="container-fluid pt-5 pt-sm-0">
                <div class="row">
                    <a id="home-create" class="col-12 col-md-6 col-xl-4 mt-4 service-item services-reveal" href="#">
                        <h3 class="text-center">הקמה ופיתוח</h3>
                    </a>
                    <a id="home-maintain" class="col-12 col-md-6 col-xl-4 mt-4 service-item services-reveal" href="#">
                        <h3 class="text-center">אחזקה שוטפת</h3>
                    </a>
                    <a id="home-fix" class="col-12 col-md-6 col-xl-4 mt-4 service-item services-reveal" href="#">
                        <h3 class="text-center">שיקום</h3>
                    </a>
                    <a id="home-irrigation" class="col-12 col-md-6 col-xl-4 mt-4 service-item services-reveal" href="#">
                        <h3 class="text-center">מערכות השקייה</h3>
                    </a>
                    <a id="home-walkways" class="col-12 col-md-6 col-xl-4 mt-4 service-item services-reveal" href="#">
                        <h3 class="text-center">שבילים</h3>
                    </a>
                    <a id="home-ground" class="col-12 col-md-6 col-xl-4 mt-4 service-item services-reveal" href="#">
                        <h3 class="text-center">חיפוי קרקע</h3>
                    </a>
                </div>
            </div>
        </section>
        <!-- services END -->
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <!-- gallery START -->
                <section id="gallery" class="col-xl-8 mb-3">
                    <div class="product-slider">
                        <div id="carousel" class="carousel slide reveal" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="img/house-through-vegetation.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/bench-house-bg.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/purple-pink-yellow.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/roses.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/white-flowers-lawn-bg.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/vase-right.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/terasot.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/lawn-house-bg.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/green-walkway.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/flowers-mowing-bg.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/walkway-w-plants.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="img/chair-through-plant.jpg">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <i class="fas fa-angle-left fa-5x controls" aria-hidden="true"></i>
                                <span class="sr-only">הקודם</span>
                            </a>
                                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <i class="fas fa-angle-right fa-5x controls" aria-hidden="true"></i>
                                <span class="sr-only">הבא</span>
                            </a>
                        </div>
                        <!-- <div class="clearfix"> -->
                        <div id="thumbcarousel" class="carousel slide d-none d-md-block" data-interval="false" dir="ltr">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div data-target="#carousel" data-slide-to="0" class="thumb thumb-reveal"><img src="img/house-through-vegetation.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="1" class="thumb thumb-reveal"><img src="img/bench-house-bg.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="2" class="thumb thumb-reveal"><img src="img/purple-pink-yellow.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="3" class="thumb thumb-reveal"><img src="img/roses.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="4" class="thumb thumb-reveal"><img src="img/white-flowers-lawn-bg.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="5" class="thumb thumb-reveal"><img src="img/vase-right.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="6" class="thumb thumb-reveal"><img src="img/terasot.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="7" class="thumb thumb-reveal"><img src="img/lawn-house-bg.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="8" class="thumb thumb-reveal"><img src="img/green-walkway.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="9" class="thumb thumb-reveal"><img src="img/flowers-mowing-bg.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="10" class="thumb thumb-reveal"><img src="img/walkway-w-plants.jpg"></div
                                    ><div data-target="#carousel" data-slide-to="11" class="thumb thumb-reveal"><img src="img/chair-through-plant.jpg"></div>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                        </div>
                    </section>
                    <!-- gallery END -->
                    <!-- testimonials START -->
                    <section id="testimonials" class="col-xl-4 px-3">
                        <div class="testimonial-item testimonials-reveal">
                            <blockquote id="testimmonial-1" class="blockquote">
                                <i class="fas fa-quote-right"></i>
                                <p class="text-center">
                                    צציטוט ההמלצה של הלקוח והחוויה החיובית והנפלאה שלו עם תום, לנסות להוציא מהלקוחות המלצה של שניים שלושה משפטים<br><i class="fas fa-quote-left d-block text-left"></i></p>
                            </blockquote>
                            <cite class="d-block text-left">שם הלקוח</cite>
                            <hr class="w-50">
                        </div>
                        <div class="testimonial-item testimonials-reveal">
                            <blockquote id="testimmonial-2" class="blockquote">
                                <i class="fas fa-quote-right"></i>
                                <p class="text-center">
                                    יטוט ההמלצה של הלקוח והחוויה החיובית והנפלאה שלו עם תום, לנסות להוציא מהלקוחות המלצה של שניים שלושה משפטים<br><i class="fas fa-quote-left d-block text-left"></i></p>
                            </blockquote>
                            <cite class="d-block text-left">שם הלקוח</cite>
                            <hr class="w-50">
                        </div>
                        <div class="testimonial-item testimonials-reveal">
                            <blockquote id="testimmonial-3" class="blockquote">
                                <i class="fas fa-quote-right"></i>
                                <p class="text-center">
                                    צציטוט ההמלצה של הלקוח והחוויה החיובית והנפלאה שלו עם תום, לנסות להוציא מהלקוחות המלצה של שניים שלושה משפטים<br><i class="fas fa-quote-left d-block text-left"></i></p>
                            </blockquote>
                            <cite class="d-block text-left">שם הלקוח</cite>
                        </div>
                    </section>
                    <!-- testimonials END -->
                    </div>
                </div>
            </div>
        <!-- ABOUT -->
        <section id="about" class="mb-3">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-6 d-none d-lg-block reveal">
                        <img class="d-block w-100" src="img/trimmer-on-lawn.jpg" alt="">
                    </div>
                    <div class="col-lg-6 text-center align-self-center mb-3 mb-lg-0 img-bg reveal">
                        <h3 class="mt-3 mt-lg-0">אודות</h3>
                        <p class="px-2 px-sm-4 px-md-5">המון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלו</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /ABOUT -->
    </main>

    <?php
    include_once "footer.php"
    ?>