<link rel="stylesheet" href="content.css">

<div class="content" id="cont">
    <div class="imageSlider">
        <div class="mySlides slide01">
            <div class="textContent">
                <h2>Lift Up Your Style Game</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni officia pariatur fuga autem
                    eligendi quod voluptate ut. Ipsa officia obcaecati ad dignissimos rem atque accusantium
                    corrupti quam sequi.</p>
                <button><a href="./shop/index.php">Shop Now</a></button>
            </div>
            <img src="Assets/Slider/img1.jpg">
        </div>
        <div class="mySlides slide02">
            <img src="Assets/Slider/img2.jpg">
        </div>
        <div class="mySlides slide03">
            <img src="Assets/Slider/img3.jpg">
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>

        <div class="dots" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <div class="displayItems">
        <div class="card">
            <div class="image">
                <img src="Assets/Product Slider/img1.jpg" alt="img01">
                <button><a href="./shop/index.php">Shop Now</a></button>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="Assets/Product Slider/img2.jpg" alt="img02"><button><a href="./shop/index.php">Shop
                        Now</a></button>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="Assets/Product Slider/img3.jpg" alt="img03"><button><a href="./shop/index.php">Shop
                        Now</a></button>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="Assets/Product Slider/img4.jpg" alt="img04"><button><a href="./shop/index.php">Shop
                        Now</a></button>
            </div>
        </div>
    </div>
    <div class="aboutUs" id="aboutUs">
        <h1>About Us.</h1>
        <div class="details">
            <div class="image">
                <img src="./Assets/Images/img1.jpg" alt="About Us">
                <button>Contact</button>
            </div>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quis voluptatibus dignissimos distinctio at
                quasi esse, consequuntur adipisci odio aliquid vel. Facilis, omnis itaque. Necessitatibus et autem esse
                a magni tenetur, cum assumenda consectetur nisi voluptate ullam dicta ea perspiciatis impedit quibusdam
                repudiandae maxime ipsum consequatur perferendis corporis dolore aperiam molestias adipisci at.
                Voluptatum, accusamus rem possimus aut expedita officiis amet sit earum aspernatur autem ea odit
                cupiditate illo maxime ratione saepe? Eius perferendis ipsum incidunt odit soluta itaque maxime eaque
                illo sed aspernatur cum rerum recusandae quisquam nam, quaerat mollitia ullam quia minus.</p>
        </div>
    </div>
    <?php include("./footer.php") ?>
</div>