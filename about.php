<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>About Us</title>
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
            <a href="service.php">service</a>
            <a href="blog.php">Blog</a>
            <a href="contact.php">Contact</a>
            <a href="Register.php">Login</a>

            
            
        </div>

    </nav>
    <div class="about_us">
        <h2>About us</h2>
        <div class="about_content">
            <p>A group does not necessarily constitute a team. 
                Teams normally have members with complementary 
                skills[2] and generate synergy[3] through a 
                coordinated effort which allows each member to
                 maximize their strengths and minimize their 
                 weaknesses.Naresh Jain (2009) claims:</p>
            <p>A group does not necessarily constitute a team. 
            Teams normally have members with complementary 
            skills[2] and generate synergy[3] through a 
            coordinated effort which allows each member to
                maximize their strengths and minimize their 
                weaknesses.Naresh Jain (2009) claims:</p>
        </div>
        <hr>
        <h2>
            Our Mission
        </h2>
        <p>A group does not necessarily constitute a team. 
            Teams normally have members with complementary 
            skills[2] and generate synergy[3] through a 
            coordinated effort which allows each member to
             maximize their strengths and minimize their 
             weaknesses.Naresh Jain (2009) claims:</p>
        <p>A group does not necessarily constitute a team. 
        Teams normally have members with complementary 
        skills[2] and generate synergy[3] through a 
        coordinated effort which allows each member to
            maximize their strengths and minimize their 
            weaknesses.Naresh Jain (2009) claims:</p>
        <hr>
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
