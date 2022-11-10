<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive hotel agency website design </title>

    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/> -->

    <!-- font awesome cdn link -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"> -->

    <!-- custome css file link -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- header section starts -->
    <header>

        <div id="menu-bar" class="fas fa-bars"></div>

        <a href="#" class="logo"><span>N</span>est</a>
        <nav class="navbar">
             <a href="#home">home</a>
             <a href="#packages">packages</a>
             <a href="#services">services</a>
             <a href="#gallery">gallery</a>
             <a href="#review">review</a>
             <a href="#contact">contact</a>
             <a href="#book">book</a>
        </nav>

        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <input type="button" id="login-btn"/>
            <label for="login-btn" ><i class="fas fa-user"></i>
            <h1 class="fas fa-dot" style="color:white;font-family:Nunito;">
            <?php 
   
            if(isset($_SESSION["username"]))
            {
                 echo $_SESSION['username'];
            }
            else
            {
                 echo 'Log In';
            }
    
            ?>
            </h1>
            </label>
        </div>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>

<!-- header section ends -->

<!-- login form container -->

<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
    <a href='index.php' class='btn' style="display:none; width:200px; height:50px; text-align: center; border-color:white; margin-bottom:280px;  " id='thau' >My Profile</a>
    <a href='logout.php' class='btn' style="display:none; width:200px; height:50px; text-align: center; border-color:white; margin-bottom:280px; " id='acc' >Log out</a>
   
    <form method='post' action="validation.php" id='frm'>
         <h3>login</h3>
         <input type="text" name='username' id='username' class="box" placeholder="Username">
         <input type="password" name='pass' id='pass' class="box" placeholder="Enter your password">
         <input type="submit" value="login now" class="btn">
         <input type="checkbox" id="remember">
         <label for="remember">Remember me</label>
         <p>forget password? <a href="#">click here</a></p>
         <p>don't have and account? <a href="signup.php">register now</a></p>
    </form>

</div>





<!-- home section starts -->

<section class="home" id="home">
    <div class="content">
        <h3>Make Nest Your Next Hospitality Partner</h3>
        <p>Enjoy Tranquility Like Never Before</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="img/vid-1.mp4"></span>
        <span class="vid-btn" data-src="img/vid-2.mp4"></span>
        <span class="vid-btn" data-src="img/vid-3.mp4"></span>
        <span class="vid-btn" data-src="img/vid-4.mp4"></span>
        <span class="vid-btn" data-src="img/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="img/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>


<!-- home section ends -->



<!-- packages section starts -->

<section class="packages" id="packages">
    <h1 class="heading">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
        
    </h1>

    <div class="box-container">
        <div class="box">
            <img src="img/illam.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Illam </h3>
                <p>Ilam is not only famous for tea production but also for its natural sceneries and landscapes. The small hill station in the eastern Nepal, Ilam is a beautiful place with sloped tea gardens, lush green forests, holy sites and unique culture and civilization.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $15.00 <span>$120.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/mustang.webp" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Mustang </h3>
                <p>The arid mountains in Mustang are an attraction in itself. The wonderful mountain and mindblowing sceneries along with the beautiful landscapes are the best part of the Mustang region of Nepal. This place is further renowned for its amazing beauty, diverse faunas, apple gardens and astounding views.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $30.00 <span>$140.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/lamjung.jpeg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Lamjung </h3>
                <p>Ghale Gaun is an exotic pristine village endowed with an unparallel scenic grandeur and a home to Ghales the famed Gurungs the legendary mid-hill people of western Nepal. Repository of a unique ethnic culture Ghale Gaun is a true microcosm of stunning natural beauty mixed with an unspoiled ethnic life style.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $40.00 <span>$160.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/pokhara.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Pokhara </h3>
                <p>Pokhara is one of the most popular tourist destinations in Nepal. Many tourists visit Pokhara Valley to see the Himalayan range and lakes. Pokhara is also famous for boating, trekking, rafting and extreme sports like rafting, canoeing and bungee jumping.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $30.00 <span>$120.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/tera.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Tehrathum </h3>
                <p>Tehrathum, one of the districts of state number one is also known as kingdom of Rhododendron as more than twenty species of rhododendron are found here.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $90.00 <span>$120.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>

        <div class="box">
            <img src="img/chitwan.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i> Chitwan </h3>
                <p>Chitwan National Park is the most popular national park of Nepal as it contains very unique and rare species of wildlife found nowhere else in Nepal. The entire national park is filled with a variety of bird species, which makes it a top place to visit in Chitwan, Nepal for watching birds.</p>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
                <div class="price"> $40.00 <span>$120.00</span></div>
                <a href="#book" class="btn">book now</a>
            </div>
        </div>
    </div>
</section>


<!-- packages section ends -->

<!-- services section starts -->

<section class="services" id="services">
    <h1 class="heading">
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>

    <div class="box-container">
        <div class="box">
            <i class="fas fa-hotel"></i>
                <h3>affordable homestay </h3>
                <p>For an authentic holiday experience, book a homestay in a local's home. Homestays are an excellent choice for national and foreign students, interns, and people migrating because host families give discounts for long-term stays.</p>
        </div>
        <div class="box">
            <i class="fas fa-utensils"></i>
                <h3>food and drinks</h3>
                <p>You will be nestled in the wooden Homestays surrounded by beautiful flowers, orchids, and tea plantations. The meal is provided by your local host made from local ingredients too. You will be provided normal Nepali cuisine likes rice, roti, eggs, curries, honey, milk, and Ilam tea.</p>
        </div>
        <div class="box">
            <i class="fas fa-bullhorn"></i>
                <h3>safety guide</h3>
                <p>When booking you shouln't worry about internal security. Against theft; Fire safety; Proper lighting; Safeguarding assets and External Security,Homestays offer you a legal insurance.</p>
        </div>
        <div class="box">
            <i class="fas fa-globe-asia"></i>
                <h3>around Nepal</h3>
                <p>The homestays spread across Nepal in places, mostly villages such as Mustang, Chitwan, Shree Antu, Palpa, Nuwakot, Nagarkot to name a few.</p>
        </div>
        
        <div class="box">
            <i class="fas fa-hiking"></i>
                <h3>adventures</h3>
                <p>Adventure junkie? Satisfy your thrill-seeker cravings with one of these hosts. Visit cultutal museums, explore deep, dark caves, temples and much more.</p>
        </div>
    </div>
</section>


<!-- services section ends -->

<!-- gallery section starts -->

<section class="gallery" id="gallery">
    <h1 class="heading">
        <span>g</span>
        <span>a</span>
        <span>l</span>
        <span>l</span>
        <span>e</span>
        <span>r</span>
        <span>y</span>
    </h1>


<div class="box-container">
    <div class="box">
        <img src="img/bardiya dance.jpeg" alt="">
        <div class="content">
            <h3>Bardiya Dance</h3>
            <p>Locals girls of Bardiya Performing cultural dance.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="./img/gurung.jpg" alt="">
        <div class="content">
            <h3>Gurung Dance</h3>
            <p>Ethnics of gurung community performing Gurung Naach(dance).</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/tharunach.jpg" alt="">
        <div class="content">
            <h3>Tharu Dance</h3>
            <p>Cultural dance of Tharu community with the tourists in Chitwan.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/Ghatu-Nritya.jpg" alt="">
        <div class="content">
            <h3>Ghatu Nritya</h3>
            <p> Ghatu Nritya is popular between the Gurung, Magar and Dura community across Gandaki zone.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/solu-basa.jpg" alt="">
        <div class="content">
            <h3>Solu Basa</h3>
            <p>Solu Basa Village Trek can be exerienced just below the Everest region.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/BarauliDance.jpg" alt="">
        <div class="content">
            <h3>Barauli Dance</h3>
            <p>The cultural dance in Barauli is an entertaining way to experience the unique Tharu culture.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/tamangselo.jpg" alt="">
        <div class="content">
            <h3>Tamang Selo</h3>
            <p> A vigorous dance of the inhabitants of the country’s middle hills, the Tamangs.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/deuda.jpg" alt="">
        <div class="content">
            <h3>Deuda Naach</h3>
            <p>Deuda is a Nepali genre of song and dance, performed in the far western regions.</p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
    <div class="box">
        <img src="img/bhuwa-nach.jpg" alt="" >
        <div class="content">
            <h3>Bhuwa Naach</h3>
            <p>The white costumed men with swords and shields on their hands, perform Bhuwa Naach. </p>
            <a href="#" class="btn">see more</a>
        </div>
    </div>
</div>
</section>

<!-- gallery section ends -->

<!-- review section start -->

<section class="review" id="review">
    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>
    <div class="swiper mySwiper review-slider">
        <div class="swiper-wrapper wrapper">
            <div class="swiper-slide">
                <div class="box">
                    <img src="img/binay-rijal.jpg" alt="">
                    <h3>Binay Rijal</h3>
                    <p>It was an amazing experience for me to be at Mrs.Khatri's home. She is such a warm and positive person. She helped me with her tips where to go and what to see in Baglung.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                           
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="img/aashika-baral.jpg" alt="">
                    <h3>Aashika Baral</h3>
                    <p>I stayed for almost a week. Alisha was a great host. She was very welcoming, helped me learn my way around Baglung and was easy to talk with.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="img/Indra-Jaiswal.jpg" alt="">
                    <h3>Indra Jaiswal</h3>
                    <p>Choosing homestay through Nest was a pleasure, host was very kind and generous and helped me whereever she could. Thank you for the great time!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                          
                        </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="box">
                    <img src="img/madhu-pandey.jpg" alt="">
                    <h3>Madhu Pandey</h3>
                    <p>Suman is an awesome host! He is very inviting and caring. The balcony in the front was alsoz nice to watch the daily life outside. I absolutely recommend Booking from Nest!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                </div>
                </div>
        </div>
    </div>
</section>


<!-- review section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>
    <div class="row">
        <div class="img">
            <img src="https://static.vecteezy.com/system/resources/previews/005/747/729/non_2x/24-hours-customer-service-icon-24-7-support-icon-sign-button-customer-service-icon-vector.jpg" alt="">
        </div>
        <form action="usermsg.php" method='post'>
            <div class="inputBox">
                <input type="text" placeholder="Name" id="username" name="username">
                <input type="email" placeholder="Email" id="usermail" name="usermail">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="Phone Number" id="userphone" name="userphone">
                <input type="text" placeholder="Subject" id="usersubject" name="usersubject">
            </div>
            <textarea placeholder="Message" name="usermsg" cols="30" rows="10" id="usermsg"  ></textarea>
            <input type="submit" class="btn" value="Send Message">
        </form>
    </div>
</section>

<!-- contact section ends -->



<!-- book section starts -->

<section class="book" id="book">
    <h1 class="heading">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span class="space"></span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>

    <div class="row">
        <div class="img">
            <img src="https://media.istockphoto.com/vectors/book-online-now-isolated-seal-book-online-now-orange-label-book-now-vector-id1179594007?b=1&k=20&m=1179594007&s=170667a&w=0&h=5khSZeUZU4cYlD1aqlltHOy3JISHT2pMIPo1P-2-TWQ=" alt="">
        </div>

        <form action="book.php" method='post'>
              <div class="inputBox">
                  <h3>where to</h3>
                  <input type="text" placeholder="Place name" id='location' name='location'>
              </div>
              <div class="inputBox">
                <h3>how many</h3>
                <input type="number" placeholder="Number of guests" id='noofguests' name='noofguests'>
            </div>
            <div class="inputBox">
                <h3>Arrivals</h3>
                <input type="date" id='departure' name='departure'>
            </div>
            <div class="inputBox">
                <h3>Leaving</h3>
                <input type="date" id='return' name='return'>
            </div>
            <input type="submit" class="btn" value="Book now">
            <?php 
            if(isset($_SESSION['error'])){
                    $error=$_SESSION['error'];
                    echo "<h1 style='color:red;float:right;margin-top:5%'>" . $error . "</h1>";
                    unset($_SESSION['error']);
            }
            else{
                echo " ";
            }
            
        ?>
        </form>
    </div>
    
</section>
<!-- book section ends -->

<!-- footer section -->

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>about us</h3>
            <p>Nest is a tier based, service oriented business model that will enhance first hand visitor experience via intact homestay chains. </p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">Kathmandu</a>
            <a href="#">Pokhara</a>
            <a href="#">Birgunj</a>
            <a href="#">Butwal</a>
            <a href="#">Dharan</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#home">home</a>
            <a href="#packages">package</a>
            <a href="#services">service</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
            <a href="#contact">contact</a>
            <a href="#book">book</a>
            <a href="check.php">status</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>
    </div>
    <h1 class="credit"> created by <span>Team Fix It</span> | all rights reserved!! </h1>
</section>


<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custome js file link -->
    <script src="main.js"></script>
</body>


<script>
    if("<?php
    if(isset($_SESSION["username"]))
    {
     echo $_SESSION['username'];
    }
    else
    {
     echo '';
    }
    ?>"!='')
    {
        document.getElementById('frm').style.display='none';
        document.getElementById('thau').style.display='block';
        document.getElementById('acc').style.display='block';
        
    }
</script>


 
   

</html>