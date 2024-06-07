<?php get_header(); ?>

<section class="landing" style="background-color:black">
        <video autoplay muted loop id="myVideo">
            <source src="<?php echo get_template_directory_uri().'/img/video.mp4' ?>" type="video/mp4">
        </video>
        <img class="mainLogo" src="<?php echo get_template_directory_uri().'/img/theMainLogo.png' ?>" alt=""> 
        <div class="toggleNav">
            <a href="" class="btn-primary fontMotter">Reservation</a>
            <div>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
</section>

<section class="aboutUs sectionPadding bg-primary text-white">
    <div class="container"> 
        <div class="grid-2">
            <div class="sectionTitle">
                <h3 class="fontAllHeart">About Us</h2>
                <h2 class="fontMotter">THE LOCAL <br> HOUSE CAFE</h2>
            </div>
            <div>
                <p>
                The Local House Café is a charming bistro restaurant nestled in the heart of the city. Its cozy atmosphere and impeccable service make it a favorite among locals and visitors alike. The menu features an array of mouthwatering dishes crafted with locally sourced ingredients, reflecting the vibrant flavors of the region. Whether you're stopping by for a quick bite or settling in for a leisurely meal, The Local House Café promises a delightful culinary experience that will leave you craving more.
                </p>
                <p>
                The menu at The Local House Café is a celebration of regional flavors and seasonal ingredients. Start your day with a hearty breakfast burrito or freshly baked quiche, perfect for fueling up before exploring the city. For lunch, indulge in creative salads, gourmet sandwiches, and flavorful small plates that showcase the diverse tastes of the local cuisine. As evening approaches, settle into the welcoming ambiance and enjoy enticing entrées like braised short ribs or pan-seared scallops, paired with a curated selection of wines and craft beers. Desserts are not to be missed, with options ranging from decadent chocolate tiramisu to refreshing fruit sorbet. Every bite at The Local House Café tells a story of the vibrant food culture that thrives within this beloved community.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="flavors sectionPadding text-center">
    <div class="container">
        <h3 class="fontMotter clamp-2">A journey through</h3>
        <h2 class="text-primary fontMotter clamp-4">THE LOCAL HOUSE CAFE</h2>
        <h3 class="fontMotter clamp-2 mb-6">flavors</h3>
        <div class="wrapper grid-3 gap-3">
            <div class="menuItem">
                <div class="menuText">
                    <h2 class="mb-1 fontMotter">Lunch & <br> Dinner</h2>
                    <p>
                    A diverse selection of dishes offering something for everyone, ranging from classic comfort foods to international flavors and contemporary creations.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri().'/img/lunchDinner.png' ?>" alt="">
            </div>
            <div class="menuItem">
                <div class="menuText">
                    <h2 class="mb-1 fontMotter">Breakfast</h2>
                    <p>
                    Wake up to a delightful breakfast experience at our restaurant! Indulge in our mouthwatering array of freshly baked pastries, fluffy omelets, crispy bacon, and more. Our chef's specialty is the perfect cup of steaming hot coffee, expertly crafted to complement each bite.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri().'/img/breakFast.png' ?>" alt="">
            </div>
            <div class="menuItem">
                <div class="menuText">
                    <h2 class="mb-1 fontMotter">The Local Bar</h2>
                    <p>
                    Your perfect glass awaits! Our extensive wine list features exquisite labels from around the world, each carefully selected to pair with our culinary offerings.
                    </p>
                </div>
                <img src="<?php echo get_template_directory_uri().'/img/drinks.png' ?>" alt="">
            </div>
        </div>
        <a href="" class="btn-primary fontMotter mt-6">Brochure Menu</a>
    </div>
</section>

<section class="reserve sectionPadding" style="background:#fafafa">
    <div class="container">
        <div class="wrapper grid-2 gap-3 items-center">
            <div>
                <div class="sectionTitle mb-2">
                    <h3 class="fontAllHeart">Dine with Us</h2>
                    <h2 class="fontMotter">Enjoy our <br> local Cuisine</h2>
                </div>
                <p>
                    Reserve your table today at The Local House Café and experience the best of locally sourced, seasonal cuisine! Our cozy atmosphere and attentive service create an unforgettable dining experience, making us the perfect choice for special occasions or casual gatherings with friends and family. Whether you're craving a comforting brunch spread or an intimate dinner for two, our talented chefs will delight you with their culinary creations. Book now to secure your spot in our charming bistro restaurant - we can't wait to serve you!
                </p>
                <h2 class="fontMotter contactNum">780 542 3526</h2>
            </div>
            <div class="theForm">
                <h3 class="mb-2">Make a Reservation</h3>
                <div class="inputGroup grid-2 gap-1 mb-1">
                    <div class="input relative">
                        <label for="">Your Name</label>
                        <input type="text">
                    </div>
                    <div class="input relative">
                        <label for="">Email</label>
                        <input type="text">
                    </div>
                </div>
                <div class="inputGroup grid-2 gap-1 mb-1">
                    <div class="input relative">
                        <label for="">How can we contact you?</label>
                        <input type="text">
                    </div>
                    <div class="input relative">
                        <label for="">Date</label>
                        <input type="date">
                    </div>
                </div>
                <div class="inputGroup grid-2 gap-1 mb-1">
                    <div class="input relative">
                        <label for="">For when?</label>
                        <input type="date">
                    </div>
                    <div class="input relative">
                        <label for="">Until?</label>
                        <input type="date">
                    </div>
                </div>
                <div class="inputGroup mb-2">
                    <div class="input relative">
                        <label for="">For when?</label>
                        <input type="text">
                    </div>
                </div>
                <div class="inputGroup mb-2">
                    <div class="input relative">
                        <label for="">For when?</label>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                    </div>
                </div>
                <div class="inputGroup">
                    <input type="submit" value="Make a Reservation" class="fontMotter btn-primary">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact sectionPadding">
    <div class="container">
        <div class="wrapper grid-2 gap-3 items-center">
            <div>
                <div class="sectionTitle mb-4">
                    <h3 class="fontAllHeart">Visit Local House Cafe</h2>
                    <h2 class="fontMotter">Join us for <br> Happy Hours</h2>
                </div>
                <div class="mb-4">
                    <p class=mb-1"">Our Address</p>
                    <h2 class="fontMotter">4302 50 street <br> Drayton valley</h2>
                </div>
                <div>
                    <p class=mb-1"">Opening Hours</p>
                    <h2 class="fontMotter">Mon - Thu: 9:00 am - 9:00 pm <br> Fri - Sun: 10:00 am - 9:00 pm</h2>
                </div>
                <a href="" class="btn-primary fontMotter mt-6">Purchase Gift Card</a>
            </div>
            <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2389.1672449401863!2d-114.98030582304904!3d53.21484958455396!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x539e47a1745d399f%3A0xb4887feed824b191!2s4302%2050%20St%2C%20Drayton%20Valley%2C%20AB%20T7A%201M4%2C%20Canada!5e0!3m2!1sen!2sph!4v1717775519614!5m2!1sen!2sph" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>

<footer class="sectionPadding" style="background-image:url('<?php echo get_template_directory_uri().'/img/grillbg.png' ?>')">
    <div class="container">
        <div class="grid">
            <div>
                <img class="footerLogo mb-1" src="<?php echo get_template_directory_uri().'/img/theMainLogo.png' ?>" alt=""> 
                <p class="mb-4">
                    The food at The Local House Café is a celebration <br> of regional flavors and seasonal ingredients.
                </p>
                <div class="mb-4">
                    <p><i class="fa-solid fa-phone"></i> 780 542 3526</p>
                    <p><i class="fa-solid fa-envelope"></i> info@thelocalhousecafe.ca</p>
                </div>
                <div class="mb-4">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </div>
                <div class="footerNav mb-4">
                        <a href="#" class="fontMotter">Home</a>
                        <a href="#" class="fontMotter">About</a>
                        <a href="#" class="fontMotter">Menus</a>
                        <a href="#" class="fontMotter btn-primary">Reservation</a>
                </div>
                <p>
                ©THE LOCAL HOUSE CAFÈ 2024
                </p>
            </div>
        </div>
    </div>
</footer>


<?php get_footer(); ?>