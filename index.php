<?php
include_once "header.php";
?>

    <main>
        <!-- benefits START -->
        <section id="benefits">
            <div class="container">
                <div class="row justify-content-center">
                    <div id="happy-costumers" class="col-12 col-md-6 col-xl-4 text-center mt-md-3">
                        <i class="far fa-grin"></i>
                        <h3>לקוחות מרוצים</h3>
                        <p>טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום</p>
                    </div>
                    <div id="personal-service" class="col-12 col-md-6 col-xl-4 text-center mt-3">
                        <i class="far fa-handshake"></i>
                        <h3>שירות אישי</h3>
                        <p>טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום טקסט למילוי מקום</p>
                    </div>
                    <div id="professional" class="col-12 col-md-6 col-xl-4 text-center mt-3 mt-md-5 mt-xl-3">
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
                        <p class="text-center mb-0">משהו השתבש :/ אנא נסה שוב או לחץ על "צור קשר" בתפריט</p>
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
                        <form class="form-inline p-2" action="includes/contact.inc.php" method="POST">
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
                            <button class="btn gold ml-auto mr-auto ml-md-0" type="submit" name="submit">קבל הצעת מחיר!</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA END -->
        <!-- services START -->
        <section id="services">
            <div class="container-fluid">
                <div class="row">
                    <a class="col-12 col-md-6 col-xl-4 mt-4" href="#">
                        <h3 class="text-center">שירות</h3>
                    </a>
                    <a class="col-12 col-md-6 col-xl-4 mt-4" href="#">
                        <h3 class="text-center">שירות</h3>
                    </a>
                    <a class="col-12 col-md-6 col-xl-4 mt-4" href="#">
                        <h3 class="text-center">שירות</h3>
                    </a>
                    <a class="col-12 col-md-6 col-xl-4 mt-4" href="#">
                        <h3 class="text-center">שירות</h3>
                    </a>
                    <a class="col-12 col-md-6 col-xl-4 mt-4" href="#">
                        <h3 class="text-center">שירות</h3>
                    </a>
                    <a class="col-12 col-md-6 col-xl-4 mt-4" href="#">
                        <h3 class="text-center">שירות</h3>
                    </a>
                    <a class="col-12 col-md-6 col-xl-4 mt-4" href="#">
                        <h3 class="text-center">שירות</h3>
                    </a>
                    <a class="col-12 col-md-6 col-xl-4 mt-4" href="#">
                        <h3 class="text-center">שירות</h3>
                    </a>
                </div>
            </div>
        </section>
        <!-- services END -->
        <div class="container-fluid">
            <div class="row">
                <!-- gallery START -->
                <section id="gallery" class="col-xl-8">
                    <div class="product-slider">
                        <div id="carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+01" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+02" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+03" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+04" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+05" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+06" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+07" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+08" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+09" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+10" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+11" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="http://placehold.it/1600x700?text=Product+12" alt="">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">הקודם</span>
                            </a>
                                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">הבא</span>
                            </a>
                        </div>
                        <!-- <div class="clearfix"> -->
                        <div id="thumbcarousel" class="carousel slide d-none d-md-block" data-interval="false" dir="ltr">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <div data-target="#carousel" data-slide-to="0" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+01"></div
                                    ><div data-target="#carousel" data-slide-to="1" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+02"></div
                                    ><div data-target="#carousel" data-slide-to="2" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+03"></div
                                    ><div data-target="#carousel" data-slide-to="3" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+04"></div
                                    ><div data-target="#carousel" data-slide-to="4" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+05"></div
                                    ><div data-target="#carousel" data-slide-to="5" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+06"></div
                                    ><div data-target="#carousel" data-slide-to="6" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+07"></div
                                    ><div data-target="#carousel" data-slide-to="7" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+08"></div
                                    ><div data-target="#carousel" data-slide-to="8" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+08"></div
                                    ><div data-target="#carousel" data-slide-to="9" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+10"></div
                                    ><div data-target="#carousel" data-slide-to="10" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+11"></div
                                    ><div data-target="#carousel" data-slide-to="11" class="thumb"><img src="http://placehold.it/100x80?text=Thumb+12"></div>
                                </div>
                            </div>
                        </div>
                        <!-- </div> -->
                        </div>
                    </section>
                    <!-- gallery END -->
                    <!-- testimonials START -->
                    <section id="testimonials" class="col-xl-4">
                        <blockquote id="testimmonial-1" class="blockquote">
                            <i class="fas fa-quote-right"></i>
                            <p class="text-center">
                                צציטוט ההמלצה של הלקוח והחוויה החיובית והנפלאה שלו עם תום, לנסות להוציא מהלקוחות המלצה של שניים שלושה משפטים<br><i class="fas fa-quote-left d-block text-left"></i></p>
                        </blockquote>
                        <cite class="d-block text-left">שם הלקוח</cite>
                        <hr class="w-50">
                        <blockquote id="testimmonial-2" class="blockquote">
                            <i class="fas fa-quote-right"></i>
                            <p class="text-center">
                                יטוט ההמלצה של הלקוח והחוויה החיובית והנפלאה שלו עם תום, לנסות להוציא מהלקוחות המלצה של שניים שלושה משפטים<br><i class="fas fa-quote-left d-block text-left"></i></p>
                        </blockquote>
                        <cite class="d-block text-left">שם הלקוח</cite>
                        <hr class="w-50">
                        <blockquote id="testimmonial-3" class="blockquote">
                            <i class="fas fa-quote-right"></i>
                            <p class="text-center">
                                צציטוט ההמלצה של הלקוח והחוויה החיובית והנפלאה שלו עם תום, לנסות להוציא מהלקוחות המלצה של שניים שלושה משפטים<br><i class="fas fa-quote-left d-block text-left"></i></p>
                        </blockquote>
                        <cite class="d-block text-left">שם הלקוח</cite>
                    </section>
                    <!-- testimonials END -->
                    </div>
                </div>
            </div>
        <!-- ABOUT -->
        <section id="about">
            <div class="container-fluid">
                <div class="row no-gutters">
                    <div class="col-6 d-none d-lg-block">
                        <img class="d-block w-100" src="img/swimming-school.jpg" alt="">
                    </div>
                    <div class="col-lg-6 text-center img-bg">
                        <h3>אודות</h3>
                        <p class="px-2">המון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלוהמון טקסט רנדומלי שמספר על תום והעסק שלו</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- /ABOUT -->
    </main>
    <?php
    include_once "footer.php"
    ?>