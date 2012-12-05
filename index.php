<!DOCTYPE html>
<html lang="en">
<head>
    <?php $url =  "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>
    <title>cheshire cosmetic academy | Home</title>
    <meta name="description" content="Cheshire Cosmetic offers treatments for skin problems, Lines and Wrinkles, Moles, Skin lesions, Acne Scarring, Rosacea Thread veins, Tattoo removal, Hair removal. Treatment includes Botox, Dermal Fillers, Sculptra, Obagi Nu-Derm, Obagi Blue Peel, Dermaroller, Laser & IPL (intense pulse light)" />
    <meta name="Keywords" content="Cheshire Cosmetic, Cosmetic treatments, Skin Treatments, Dr Raj Acquilla, Cosmetic Treatments Cheshire, dermatology treatments, cosmetic clinic, Skin Problems, Lines & Wrinkles, Moles & Skin lesions, Acne ,Scarring, Rosacea, Thread veins, Tattoo removal, Hair removal, Cosmetic Treatments, Wrinkle Relaxing Injections, Botox, Dermal Fillers, Sculptra, Obagi Nu-Derm, Obagi Blue Peel, Dermaroller, Laser & IPL, Mole Removal, Vasectomy, Cosmetic Dentistry" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- google fonts -->
    <link  href="http://fonts.googleapis.com/css?family=Droid+Sans:regular,bold" rel="stylesheet" type="text/css" >
    <link  href="http://fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,bold,bolditalic" rel="stylesheet" type="text/css" >
    <!--cufon -->
    <script type="text/javascript" src="<?php echo $url ?>/js/cufon.js"></script>
    <script type="text/javascript" src="<?php echo $url ?>/js/Frutiger_LT_55_Roman_400.font.js"></script>
    <script type="text/javascript" src="<?php echo $url ?>/js/Gill_Sans_MT_Pro_Book_400-Gill_Sans_MT_Pro_500.font.js"></script>

    <!--styles -->
    <link href="css/reset.css" type="text/css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="css/bootstrap-responsive.css" type="text/css" rel="stylesheet" />

    <link href="css/academic.css" type="text/css" rel="stylesheet"/>

    <!--[if lte IE 9]>
    <link href="css/ie.css" rel="stylesheet" type="text/css" />
    <![endif]-->

    <!-- js files-->
    <script src="<?php echo $url ?>/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <link rel="shortcut icon" href="http://www.cheshire-cosmetic.co.uk/images/favicon.ico" />
    <script type="text/javascript" src="<?php echo $url ?>/js/scripts.js"></script>

</head>

<body>
<?php
function curPageURL() {
    $pageURL = 'http';
    if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
    }
    return $pageURL;


}


?>

    <div  id="wrapper" class="container-fluid">
       <header>
            <div class="header-top row-fluid">
                <div class="logo span4"><img src="<?php echo $url ?>img/logo.png" alt="cheshire cosmetic academy" /> </div>
                <div class="top-links span8">
                    <ul itemscope itemtype="http://data-vocabulary.org/Organization">
                        <li class="email">
                            <a href="mailto:info@cheshire-academy.co.uk" title="info">info@cheshire-academy.co.uk</a>
                        </li>
                        <li class="tele" itemprop="tel">01606  544535</li>
                        <li class="mobi" itemprop="tel">07712 089981</li>
                    </ul>

                </div>
            </div>
           <div class="row-fluid">
               <nav class="span12">
                   <ul>
                       <li class="first"><a href="">HOME</a> </li>
                       <li><a href="">ABOUT ACADEMY</a></li>
                       <li><a href="">INJECTABLE TRAINING</a></li>
                       <li><a href="">NON-INJECTABLE TRAINING</a></li>
                       <li><a href="">BUSINESS DEVELOPEMENT</a></li>
                       <li><a href="">PRICING</a></li>
                       <li><a href="">BLOG</a></li>
                       <li class="last"><a href="">CONTACT</a></li>
                   </ul>
               </nav>
           </div>

       </header>
       <div class="main">
            <div class="row-fluid banner-area">
               <div class="span7 banner-left">
                   <div class="left-top">
                       <div class="training-name">
                           <img src="<?php echo $url ?>/img/botox_logo.png" alt="botox" />
                           <h1><strong>BASIC</strong> TRAINING</h1>
                       </div>
                       <div class="price">
                           <label>ONLY</label>
                           <label><strong>&pound;595</strong></label>
                       </div>
                   </div>

                   <div class="left-bottom">
                       <h2>BESPOKE BOTOX TRAINING WITH</h2>
                       <h3>* LUNCH + COURSE MATERIAL INCLUDED</h3>
                   </div>
               </div>
                <div class="span5 banner-right">
                    <img src="<?php echo $url ?>/img/ptient_1.png" alt="botox training" />
                </div>
            </div>
           <div class="main-content row-fluid">
               <div class="left span7">
                   <div class="box clearfix left">
                       <h2>AN INTRODUCTION TO  <b>BOTOX TRAINING</b></h2>
                       <p>
                           Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pretium hendrerit mi eu lacinia. Aenean turpis quam, lobortis vitae eleifend ut, lacinia quis lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vestibulum sodales tincidunt. Suspendisse nisi massa, rutrum eu blandit vitae, vulputate sollicitudin magna.

                           Sed sem orci, commodo id tempor vitae, egestas cursus tellus. Duis consectetur mollis purus in aliquam.

                       </p>
                       <img src="<?php echo $url ?>/img/botox-bottle.jpg" alt="botulinum toxin type a"  />
                   </div>
                   <div class="box clearfix right" >
                       <h2>WHO SHOULD <b>HAVE IT ?</b></h2>
                       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras pretium hendrerit mi eu lacinia. Aenean turpis quam, lobortis vitae eleifend ut, lacinia quis lacus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vestibulum sodales tincidunt. Suspendisse nisi massa, rutrum eu blandit vitae, vulputate sollicitudin magna.

                           Sed sem orci, commodo id tempor vitae, egestas cursus tellus. Duis consectetur mollis purus in aliquam.

                       </p>
                       <img src="<?php echo $url ?>/img/two-docs.jpg" alt="WHO SHOULD HAVE IT" />
                   </div>
                   <h2><span>SCHEDULE</span> FOR THE DAY - <b>27 JULY 2012</b></h2>
                   <table class="table-striped">
                        <tr>
                            <td width="30%">
                                Session 01<br/>
                                <strong>By Dr. Raj Acquilla</strong>
                            </td>
                            <td>
                                Introductory theory and practical training in the cosmetic use of Botulinum Toxin
                          </td>
                            <td width="30%">
                                From<br/>
                                <strong>9.00 AM - 11.00 AM</strong>
                            </td>
                        </tr>
                       <tr>
                           <td colspan="2">Snacks & Tea Break</td>

                           <td><strong>11.00 AM - 11.30 AM</strong></td>
                       </tr>
                       <tr>
                           <td>Session 02<br/>
                           <strong>By Dr. Jonquille</strong></td>
                           <td>Introductory theory and practical training in the cosmetic use of Dermal Fillers</td>
                           <td>From<br/>
                               <strong>11.30 AM - 01.00 PM</strong></td>
                       </tr>
                       <tr>
                           <td colspan="2">Lunch Break</td>
                           <td><strong>01.00 PM - 02.00 PM</strong></td>
                           
                       </tr>
                       <tr>
                           <td>Session 03<br/>
                         <strong>By Dr. Raj Acquilla</strong></td>
                           <td>Introductory theory and practical training in the cosmetic use of Botulinum Toxin &amp; Dermal Fillers</td>
                           <td>From <br>
                           <strong>02.00 PM - 04.00 PM</strong></td>
                       </tr>
                   </table>
                   <div class="testimonial">
                   <h2>TRAINEES TESTIMONIALS</h2>
                       <blockquote>&quot;The Cheshire Cosmetic Academy team are so welcoming and I just loved the training session &quot;</blockquote>
                       <div class="image">
                       	<img src="img/lucy_nurse_03.jpg" />
                       <label><strong>Lucy Steel</strong> - Nurse</label>
                       </div>
                   </div>
               </div>
               <div class="right_sidebar span5">
                   <div class="box book_training clearfix">
                       <h2>BOOK A <b>TRAINING COURSE</b></h2>
                       <form class="book_course_form">
                            <div class="input_box">
                                <span class="label">Name</span>
                                <span class="inputs"><input type="text-box" /> </span>
                            </div>
                           <div class="input_box">
                               <span class="label">Tel</span>
                               <span class="inputs"><input type="text" /> </span>
                           </div>
                           <div class="input_box">
                               <span class="label">Email</span>
                               <span class="inputs"><input type="text" /> </span>
                           </div>
                           <div class="input_box">
                               <span class="label"></span>
                               <span class="inputs"><select>
                                   <option>Select the Training Programme</option>
                                   <option>Botox</option>
                               </select></span>
                           </div>
                           <div class="captcha">
                               <p>PLEASE ENTER THE BELOW CHARACTERS</p>
                               <input class="captcha-input" type="text"/><img src="<?php echo $url ?>/img/capthca.png" class="" />
                           </div>
                           <div class="input_box submit">


                                   <input type="submit" class="btn btn-primary btn-large" value=""/>

                           </div>
                       </form>
                   </div>
                   <div class="box call">
                       <p>TO BOOK YOUR PLACE ON A TRAINING DAY OR FOR MORE INFORMATION,</p>
                       <p class="call_no">CALL 01606 544535</p>
                   </div>
                   <div class="box videos ">
                   <h2>TRAINING <b>VIDEOS<b/></h2>
						<div class="video_thumb first">
                        	<img src="img/video_thumb_1.jpg" />
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                        <div class="video_thumb">
                        	<img src="img/video_thumb_2.jpg" />
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                        </div>
                        <a class="btn" href="#" title="view more videos" >VIEW MORE VIDEOS</a>
                   </div>
               </div>
           </div>
       </div>
       <footer>
           <div class="footer-logos row-fluid">
               <ul>
                   <li class="first"><img src="<?php echo $url ?>/img/footer_logos/sculptra.png" /></li>
                   <li><img src="<?php echo $url ?>/img/footer_logos/botox.png" /></li>
                   <li><img src="<?php echo $url ?>/img/footer_logos/juvederm.png" /></li>
                   <li><img src="<?php echo $url ?>/img/footer_logos/rast.png" /></li>
                   <li><img src="<?php echo $url ?>/img/footer_logos/Lynton.png" /></li>
                   <li><img src="<?php echo $url ?>/img/footer_logos/OBAGI-medical.png" /></li>
                   <li><img src="<?php echo $url ?>/img/footer_logos/cpc.png" /></li>
                   <li><img src="<?php echo $url ?>/img/footer_logos/BCOSM.png" /></li>
                   <li class="last"><img src="<?php echo $url ?>/img/footer_logos/ra.png" /></li>
               </ul>
           </div>
            <div class="copyrights">
                Copyright &copy; 2010 <a href="" class=""> Cheshire Academy Ltd.</a>s All Rights Reserved.

            </div>
            <address itemscope itemtype="http://data-vocabulary.org/Organization">
                <span itemprop="name">Cheshire Academy Ltd.</span>

                <span itemprop="address" itemscope
                itemtype="http://data-vocabulary.org/Address">
                <span itemprop="street-address">Kingsmead Medical Centre</span>,
                <span itemprop="locality">Regency Way, Kingsmead</span>,
                <span itemprop="region">Cheshire, CW9 8UW</span>,
                <span itemprop="country-name" style="display: none">UK</span>.
                </span>

            </address>
            <div class="elite">
                Solution by <img src="<?php echo $url ?>/img/solution_logo.png " /> Web design Manchester
            </div>
        </footer>
    </div>
</body>
</html>