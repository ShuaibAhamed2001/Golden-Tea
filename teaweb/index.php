<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive tea website</title>
     <!--Link To CSS-->
    <link rel="stylesheet" href="Css\style.css">
    <!--Box Icons-->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
     <!--Navbar-->
     <header>
        <a href="#" class="logo">
           <img src="photos/logo.jpg" alt=""> 
        </a>
        <!--Menu-Icon-->
        <i class='bx bx-menu' id="menu-icon"></i>
        <!--Links-->
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="login.php">Login</a></li>

        </ul>
        <!--Icon-->
        <div class="header-icon">
            <i class='bx bx-cart-alt'></i>
            <i class='bx bx-search' id="search-icon"></i>
        </div>
        <!--search Box-->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="search Hear.." >       

        </div>
       </header>
      <!--Home--><p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Maiores solute obcaecati laborum,adipisci qui nobis.</p>
      <section class="home" id="home">
         <div class="home-text">
            <h1>start your day <br> with Golden tea</h1>
            
            <a href="#" class="btn">Shop Now</a>
            </div>
            <div class="home-img">
                <img src="photos/main2.jpeg" alt="">
            </div>
         </section>
      <!--About-->
      <section class="about" id="about">
        <div class="about-img">
            <img src="photos/about.jpg" alt="">
        </div>
       <div class="about-text">
           <h2>Our History</h2>
           <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.Delectus facilis alias pariatur assumenda illo animi nostrum dolorum provident autem exercitationem.</p>
           <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.Delectus facilis alias pariatur assumenda illo animi nostrum dolorum provident autem exercitationem.</p>
           <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.Tempora tempora odit officia labore cumque?   </p>
        <a href="#" class="btn">Learn More</a>
       </div>
       </section>
    
     <!--products-->
     <section class="Products" id="products">
         <div class="heading">
            <h2>Our popular products</h2>
         </div>
       <!--Container-->
         <div class="products-container">
             <div class="box">
                <img src="photos/p1.jpeg" alt="">
                <h3>Ceyloan Tea</h3>
                <div class="content">
                    <span>Rs1000</span>
                <a href="#">Add to cart</a>
             </div>
             </div>
             <div class="box">
                <img src="photos/p2.png" alt="">
                <h3>Lipton Tea</h3>
                <div class="content">
                    <span>Rs750</span>
                <a href="#">Add to cart</a>
             </div>
             </div>
             <div class="box">
                <img src="photos/p3.jpg" alt="">
                <h3>Prime Tea</h3>
                <div class="content">
                    <span>Rs850</span>
                <a href="#">Add to cart</a>
             </div>
             </div>
             <div class="box">
                <img src="photos/p4.jpeg" alt="">
                <h3>Hendricks Tea</h3>
                <div class="content">
                    <span>Rs700</span>
                <a href="#">Add to cart</a>
             </div>
             </div>
             <div class="box">
                <img src="photos/p5.jpg" alt="">
                <h3>Cinnoman Tea</h3>
                <div class="content">
                    <span>Rs1500</span>
                <a href="#">Add to cart</a>
             </div> 
             </div>
             <div class="box">
                <img src="photos/p6.jpg" alt="">
                <h3>JAF Tea</h3>
                <div class="content">
                    <span>Rs1250</span>
                <a href="#">Add to cart</a>
             </div> 
           </div>
         </div>
       </section>
       <!--Customers-->

       <section class="customers" id="customers">
           <div class="heading">
              <h2>Our customer's</h2>
           </div>
        <!--Container-->
        <div class="customers-container">
              <div class="box">
                <div class="stars">
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star' ></i>
                    <i class='bx bxs-star-half' ></i>
                  </div>
                    <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.Tempora tempora odit officia labore cumque?</p>
                    <h2>Shuaib Ahamed</h2>
                    <img src="photos/custom1.jpeg" alt="" >
                </div>
                <div class="box">
                    <div class="stars">
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star' ></i>
                        <i class='bx bxs-star-half' ></i>
                      </div>
                        <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.Tempora tempora odit officia labore cumque?</p>
                        <h2>Shazin Muhammed</h2>
                        <img src="photos/custom2.jpeg" alt="" >
                    </div>
                    <div class="box">
                        <div class="stars">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star-half' ></i>
                          </div>
                            <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.Tempora tempora odit officia labore cumque?</p>
                            <h2>Olivia Emma</h2>
                            <img src="photos/custom3.jpg" alt="" >
                        </div>
           </div>
        </section>
        <section class="footer">
            <div class="footer-box">
                <h3>Tea Shop</h3>
                <p>Lorem ipsum dolar sit amet consectetur adipisicing elit.Delectus facilis alias.</p>
              <div class="social">
                <a href="#"><i class='bx bx1-facebook'></i></a>
                <a href="#"><i class='bx bx1-twitter'></i></a>
                <a href="#"><i class='bx bx1-instagram'></i></a>
                <a href="#"><i class='bx bx1-tiktok'></i></a>  
            </div>
          </div>
          <div class="footer-box">
            <h3>Support</h3>
            <li><a href="#">product</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Product</a></li>
          </div> 
          <div class="footer-box">
            <h2>View Guides</h2>
            <li><a href="#">Features</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Blog posts</a></li>
            <li><a href="#">Our Branches</a></li>
           </div> 
           <div class="footer-box">
                 <h3>Contact</h3>
                 <div class="contact">
                       <span><i class='bx bxs-map'></i>192,kumarathunga mawatha,Matara</span>
                       <span><i class='bx bxs-phone'></i>0760091144</span>
                       <span><i class='bx bxs-envelope'></i>Goldentea@shop.com</span>
                 
                    </div>
           </div>
        </section>

        <!--Copyright-->
           <div class="copyright">
            <p>&#1144; CarpoolVenom All Right Reserved</p>
           </div>


     
















   <!--Link TO JS-->
   <script src="main.js">
    
   </script> 




</body>










</html>