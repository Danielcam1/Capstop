<?php
include '../conn.php';
include 'layout/_layout.php';
?>
<!-- main content -->
<sidebar>
    <div class="facebook ">
        <a href="https://www.facebook.com/profile.php?id=61562315550432"><i class="fab fa-facebook"></i></a>
    </div>
    <div class="twitter ">
        <a href="#"><i class="fab fa-twitter"></i></a>
    </div>
    <div class="instagram ">
        <a href="#"><i class="fab fa-instagram"></i></a>
    </div>
</sidebar>

<section id="welcome">
    <div class="content">
        <h2>FOOD <span>and</span> BREW</h2>
        <p>Meet. Eat. Drink. Smile.</p>
        <p>Est. 2022</p>
        <div class="button-container">
            <a href="#aboutus">Learn More</a>
            <a href="order.php">Order Now</a>
        </div>
    </div>
</section>



<main>
    <!-- Our History Section -->
    <section id="History">
        <div class="card scroll-card" id="history-card">
            <img src="../assets/images/shopcolseup.jpg" alt="Our History" class="history-image">
            <div class="history-content">
                <h2>Our History</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, cumque?</p>
            </div>

        </div>
    </section>

    <!-- Meet Our Owner Section -->
    <section id="owner">
        <div class="card scroll-card">
            <img src="../assets/images/place.jpg" alt="Meet Our Owner" class="owner-image">
            <div class="owner-content">
                <h2>View Our Place</h2>
                <p>Designed for your best comfort, our cafe is a haven for coffee enthusiasts and food lovers alike.</p>
            </div>
        </div>
    </section>

    <!-- Our Team Section -->
    <section id="employees">
        <h2 style="text-align: center;">Our Team</h2>
        <div class="employees-container">
            <div class="employee-card scroll-card">
                <img src="../profiles/jhanjhanprofile.jpg" alt="Employee 1" class="employee-image">
                <h3>Jhan-Jhan Soriben</h3>
                <p>Barista</p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
            </div>
            <div class="employee-card scroll-card">
                <img src="../profiles/arleabelprofile.jpg" alt="Employee 2" class="employee-image">
                <h3>Arleabel Ramos</h3>
                <p>Manager</p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
            </div>
            <div class="employee-card scroll-card">
                <img src="../profiles/danielprofile.jpg" alt="Employee 3" class="employee-image">
                <h3>Daniel Caccam</h3>
                <p>Assistant</p>
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
            </div>
        </div>
    </section>


    <!-- About Us Section -->
    <div id="aboutus" class="responsive-container-block bigContainer">
        <div class="responsive-container-block Container">
            <div class="responsive-container-block leftSide">
                <p class="text-blk heading">
                    About Our Cafe
                </p>
                <p class="text-blk subHeading">
                    At FAB Cafe, we believe in bringing people together over a shared love of coffee and good food.
                    Since opening our doors in 2022, our mission has been to create a warm, welcoming environment
                    where
                    everyone feels like family. From our carefully crafted brews to our delicious food offerings,
                    every
                    aspect of FAB Cafe is designed to make your experience memorable.
                </p>
            </div>
            <div class="responsive-container-block rightSide">
                <img class="number1img" src="../assets/images/pic1.jpg">
                <img class="number2img" src="../assets/images/pic2.jpg">
                <img class="number3img" src="../assets/images/pic3.jpg">
                <img class="number5img" src="../assets/images/pic4.jpg">
                <iframe allowfullscreen="allowfullscreen" class="number4vid" poster="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/b242.png" src="https://www.youtube.com/embed/svg%3E?">
                </iframe>
                <img class="number7img" src="../assets/images/pic5.jpg">
                <img class="number6img" src="../assets/images/place.jpg">
            </div>
        </div>
    </div>
    <!-- <h2>About Us</h2>
        <div class="about-content">
            <img src="../asset/img/6152359056464003971.jpg" alt="About Us" class="about-image">
            <div class="about-text">
                <p>
                    At FAB Cafe, we believe in bringing people together over a shared love of coffee and good food.
                    Since opening our doors in 2022, our mission has been to create a warm, welcoming environment
                    where
                    everyone feels like family. From our carefully crafted brews to our delicious food offerings,
                    every
                    aspect of FAB Cafe is designed to make your experience memorable.
                </p>
                <p>
                    Join us for a cup of coffee, meet our friendly team, and be part of our story. We’re excited to
                    share our passion for coffee and community with you!
                </p>
            </div>
        </div> -->

    <style>

    </style>

    <!-- Menu Section -->
    <section id="menu">
        <h2>Best Selling Products</h2>
        <div class="menu-content">
            <div class="menu-item">
                <img src="../assets/images/coffeephoto.jpg" alt="Menu Item 1">
                <h3>Salted Caramel</h3>
                <p>Coffee</p>
                <p>Price: ₱100.00</p>
            </div>
            <div class="menu-item">
                <img src="../assets/images/frappephoto.jpg" alt="Menu Item 2">
                <h3>Mocha</h3>
                <p>Frappuccino</p>
                <p>Price: ₱120.00</p>
            </div>
            <div class="menu-item">
                <img src="../assets/images/milkshakephoto.jpg" alt="Menu Item 3">
                <h3>Cookies & Cream</h3>
                <p>Milkshake</p>
                <p>Price: ₱59.00</p>
            </div>
        </div>
    </section>

    <style>
        
    </style>

    <!-- Contact Us Section -->
    <section class="contact-section">
        <div class="contact-bg">
            <h3>Get in Touch with Us</h3>
            <h2>contact us</h2>
            <div class="line">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda iste facilis quos impedit fuga nobis modi debitis laboriosam velit reiciendis quisquam alias corporis, maxime enim, optio ab dolorum sequi qui.</p>
        </div>


        <div class="contact-body">
            <div class="contact-info">
                <div>
                    <span><i class="fas fa-mobile-alt"></i></span>
                    <span>Phone No.</span>
                    <span class="text">1-2392-23928-2</span>
                </div>
                <div>
                    <span><i class="fas fa-envelope-open"></i></span>
                    <span>E-mail</span>
                    <span class="text">mail@company.com</span>
                </div>
                <div>
                    <span><i class="fas fa-map-marker-alt"></i></span>
                    <span>Address</span>
                    <span class="text">2939 Patrick Street, Vicotria TX, United States</span>
                </div>
                <div>
                    <span><i class="fas fa-clock"></i></span>
                    <span>Opening Hours</span>
                    <span class="text">Monday - Friday (9:00 AM to 5:00 PM)</span>
                </div>
            </div>

            <div class="contact-form">
                <form>
                    <div>
                        <input type="text" class="form-control" placeholder="First Name">
                        <input type="text" class="form-control" placeholder="Last Name">
                    </div>
                    <div>
                        <input type="email" class="form-control" placeholder="E-mail">
                        <input type="text" class="form-control" placeholder="Phone">
                    </div>
                    <textarea rows="5" placeholder="Message" class="form-control"></textarea>
                    <input type="submit" class="send-btn" value="send message">
                </form>

                <div>
                    <img src="../assets/images/contact-png.png" alt="">
                </div>
            </div>
        </div>

        <div class="map">
            <iframe src="https://www.google.com/maps/place/FAB+Cafe/@17.0910031,121.7044967,21z/data=!4m15!1m8!3m7!1s0x864266db2e2dac3b:0xeee20d566f63267d!2sVictoria,+TX,+USA!3b1!8m2!3d28.8052674!4d-97.0035982!16zL20vMDEwYmR3!3m5!1s0x33855f81a6a86eb5:0x136aa6d04c38a527!8m2!3d17.0910304!4d121.7045979!16s%2Fg%2F11krhsxdb2?hl=en&entry=ttu&g_ep=EgoyMDI0MTExOS4wIKXMDSoJLDEwMjExMjMzSAFQAw%3D%3D" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>

        <div class="contact-footer">
            <h3>Follow Us</h3>
            <div class="social-links">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
                <a href="#" class="fab fa-youtube"></a>
            </div>
        </div>
    </section>




    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Food & Brew. All rights reserved.</p>
    </footer>
</main>

</body>
<script>
    function handleScrollAnimation() {
        const scrollCards = document.querySelectorAll('.scroll-card');
        scrollCards.forEach(card => {
            const cardPosition = card.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;
            if (cardPosition < windowHeight - 100) {
                card.classList.add('in-view');
            }
        });
    }

    window.addEventListener('scroll', handleScrollAnimation);
    window.addEventListener('load', handleScrollAnimation);
</script>
<script>
    let lastScrollTop = 0;
    const sidebar = document.querySelector("sidebar");

    window.addEventListener("scroll", () => {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (scrollTop > lastScrollTop) {
            // Scroll down - hide the sidebar
            sidebar.classList.add("hide-sidebar");
        } else {
            // Scroll up - show the sidebar
            sidebar.classList.remove("hide-sidebar");
        }

        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // For Mobile or negative scrolling
    });
</script>

</html>