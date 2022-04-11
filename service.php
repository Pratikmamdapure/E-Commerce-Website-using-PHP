<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Services</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <nav class="nav nav_top">
        <div class="logo">
            <a href="index.php"><img src="cart.jpg" width="150"></a>
        </div>
        <div class="search">
            <input type="text" name="search" placeholder="search">
        </div>
        <div class="nav_side">
            <a href="about.php">About us</a>
            <a href="services.php">service</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contact</a>
            <a href="Register.php">Login</a>

            
            
        </div>

    </nav>
    <div class="product" style="padding: 50px">
        <h2>
            OUR PRODUCT
        </h2>
        <div class="product_container">
            <div class="item">
                <div class="item_img">
                    <img src="1.png">
                </div>
                <div class="item_content">
                    <h3>SOFA</h3>
                    <p>Sofas or sofa sets are essential furniture pieces for every home.
                        They adorn your living rooms, bedrooms, and if you have space then patios as well.</p>
                    <a href="">BUY NOW</a>
                </div>
            </div>

            <div class="item">
                <div class="item_img">
                    <img src="2.png">
                </div>
                <div class="item_content">
                    <h3>chair</h3>
                    <p>Sofas or sofa sets are essential furniture pieces for every home. They adorn your living rooms, bedrooms, and if you have space then patios as well.</p>
                    <a href="">BUY NOW</a>
                </div>
            </div>

            <div class="item">
                <div class="item_img">
                    <img src="3.png">
                </div>
                <div class="item_content">
                    <h3>bed</h3>
                    <p>Sofas or sofa sets are essential furniture pieces for every home. They adorn your living rooms, bedrooms, and if you have space then patios as well.</p>
                    <a href="">BUY NOW</a>
                </div>
            </div>
        </div>
        <div class="product_btn">
            <a href="service.php">Explore Our products</a>
        </div>
    </div>
    <div class="product">
        <h2>
            OUR PRODUCT
        </h2>
        <div class="product_container" style="padding: 50px">
            <div class="item">
                <div class="item_img">
                    <img src="1.png">
                </div>
                <div class="item_content">
                    <h3>SOFA</h3>
                    <p>Sofas or sofa sets are essential furniture pieces for every home.
                        They adorn your living rooms, bedrooms, and if you have space then patios as well.</p>
                    <a href="">BUY NOW</a>
                </div>
            </div>

            <div class="item">
                <div class="item_img">
                    <img src="2.png">
                </div>
                <div class="item_content">
                    <h3>chair</h3>
                    <p>Sofas or sofa sets are essential furniture pieces for every home. They adorn your living rooms, bedrooms, and if you have space then patios as well.</p>
                    <a href="">BUY NOW</a>
                </div>
            </div>

            <div class="item">
                <div class="item_img">
                    <img src="3.png">
                </div>
                <div class="item_content">
                    <h3>bed</h3>
                    <p>Sofas or sofa sets are essential furniture pieces for every home. They adorn your living rooms, bedrooms, and if you have space then patios as well.</p>
                    <a href="">BUY NOW</a>
                </div>
            </div>
        </div>
        <div class="product_btn">
            <a href="service.php">Explore Our products</a>
        </div>
    </div>
    
    <div class="feed">
        <h2>Write a review</h2>
        <div class="feed_form">
            <form name="response" method="post">
                <input type="text" name="Name" placeholder="Name"><br>
                <input type="email" name="Email" placeholder="Email ID"><br>
                <input type="number" name="Number" placeholder="Contact Number"><br>
                <textarea rows="5" cols="7" name="Review" placeholder="Write your review"></textarea><br>
                <button type="submit">Submit</button>
            </form>
    
        </div>
    </div>

    
    <footer>
        <div class="footer_logo">
            <a href="#"><img src="cart.jpg" width="150"></a>
            <br>
        </div>
        
        <div class="pages">
            <h3>Pages</h3>
            <a href="about.php">About us</a>|
            <a href="">Services</a>|
            <a href="">Blogs</a>|
            <a href="">Login</a>|
            <a href="">Sign up</a>|
        
        </div>
        <div class="doc">
            <h3>Document</h3>
            <a href="">Privacy Policy</a>|
            <a href="">T&c</a>|
            <a href="">Refund policy</a>|
        </div>
        <div class="social">
            <h3>Follow us</h3>
            <a href="https://www.facebook.com/pratik.mamdapure.7" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href="https://www.linkedin.com/in/pratik-mamdapure-274a01214/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            <a href="https://github.com/Pratikmamdapure" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>
            
        </div>
        <div class="contact">
            <h3>Contact us</h3>
            <a href="https://api.whatsapp.com/send/?phone=7767930927"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a href="tel: 7767930927"><i class="fa fa-phone" aria-hidden="true"></i></a>
            <a href="mailto: pratikmamdapure@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i></a>
            
        </div>
        <hr>
        <p>Copyright &copy;2021 1stop</p>
    </footer>
    
    
    <script>
        const scriptURL =
            'https://script.google.com/macros/s/AKfycbws9XzIPPdzyot0jlhYsDHjFeBXeLogcWCO4lKnJ5hGjpaJIAHYjzCr7IqdPc7pETmStw/exec'
        const form = document.forms['response']
     
        form.addEventListener('submit', e => {
            e.preventDefault()
            fetch(scriptURL, {
                    method: 'POST',
                    body: new FormData(form)
                })
                .then(response => alert(
                    "Thanks for you valuable feedback!!!"))
                .catch(error => console.error('Error!', error.message))
        })
     
     </script>
     
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    </body>
    </html>
