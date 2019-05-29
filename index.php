<?php get_header(); /* Tells WordPress to include header.php */ ?>

<section class="container-fluid shop">
    <div class="container">
        <div class="insideshop">
            <h2> SHOP</h2>
            <div class="row products">


                <div class="col-sm-4"> <img src="http://localhost/wordpress/wp-content/themes/RUR-theme/images/products/frame.jpg" alt="Frame">

                    <p> Framed PaperArt Flower</p>
                    <p><span class="description"> 55'x 11'</span></p>

                    <p> <span class="price"> $45.00</span> </p>
                    <a class="btn btn-normal" href="#">Buy Now</a>
                </div>
                <div class="col-sm-4"><img src="http://localhost/wordpress/wp-content/themes/RUR-theme/images/products/Tree.jpg" alt="Tree">

                    <p> PaperArt 3D Christmas Tree</p>
                    <p><span class="description"> 55'x 11'</span></p>

                    <p> <span class="price"> $50.00</span></p>
                    <a class="btn btn-normal" href="#">Buy Now</a>
                </div>
                <div class="col-sm-4"> <img src="http://localhost/wordpress/wp-content/themes/RUR-theme/images/products/Bowl.jpg" alt="Bowl">
                    <p> Medium PaperArt Bowl</p>


                    <p><span class="description"> 55'x 11' </span></p>

                    <p> <span class="price"> $25.00</span></p>
                    <a class="btn btn-normal" href="#">Buy Now</a>

                </div>
            </div>

            <div class="moreproducts">
                <a class="allproducts" href="#">See all products > </a>
            </div>
        </div>
    </div>
</section>

    <!-- About us section starts from here -->

    <section class="container-fluid aboutus">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="http://localhost/wordpress/wp-content/themes/RUR-theme/images/about us photo.png" alt="aboutus">

                </div>

                <div class="abtustext">
                    <div class="col-sm-6">
                        <h3> About us</h3>
                        <p> <span class="about"> With the guidance and support of their families, school, various wonderful members of the community and a shared vision for a meaningful future for the guys beyond their high school years, the making of these recycled items has evolved into both an important and empowering part of the guys lives and identity.



                            </span>
                        </p>
                        <div class="aboutusbtn">
                            <a class="btn btn-normal" href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact us section starts from here -->
    <section class="form-style-5">
        <form>
            <fieldset>
                <legend> Get In Touch </legend>
                <input type="text" name="field1" placeholder="Your Name *">
                <input type="email" name="field2" placeholder="Your Email *">
                <textarea name="field3" placeholder="Your Message"></textarea>

            </fieldset>

            <input type="submit" value="Send" />
        </form>
    </section>
<?php get_footer(); /* Tells WordPress to include footer.php */ ?>