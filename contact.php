<?php
if($_POST["message"]) {
    mail("corymizer@gmail.com", "Message From Website", $_POST["message"], "From: an@email.address");
}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Cory Mizer</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> <!--Bootstrap-->
        <link href="resources/css/style.css" rel='stylesheet' type='text/css'> <!--My Style Sheet-->
        <link href="resources/css/ionicons.css" rel='stylesheet' type="text/css"> <!--Icon Font-->
        <link href="resources/css/ionicons.min.css" rel='stylesheet' type="text/css"> <!--Icon Min Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700" rel="stylesheet"> <!--Monserrat Font-->
        <script href="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!--Jquery-->
        <script href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> <!--Bootstrap-->
    </head>
    
    <body>
        <header>
            <div class='row'>
                <div class='col-lg-6 color-block'>
                    <div class='header-text'>
                        <h1>Cory <span>Mizer</span></h1>
                        <p>Graphic Designer/Web Developer</p>
                    </div>
                    <a class="btn-design" href='#design'>DESIGN</a>
                </div>
                <div class='col-lg-6 white-block'>
                    <a class='menu-link' href=''>Menu</a>
                    <p class='description'>My name is Cory Mizer and I am a Graphic Designer and Web Developer from the Cleveland, Ohio metro area.  I enjoy creating clean, beautiful websites and graphics using Adobe Illustrator and Photoshop, HTML5, CSS3, SASS, Javascript, Jquery, Bootstrap, and more. See some of my work below! Looking to hire or have a question? Shoot me a message!</p>
                    <a class="btn-contact" href=''>CONTACT</a>
                </div>
            </div>
        </header>
        
        <section id='design' class='section-design'>
            <div class="row design-header">
                <div class='design-header-text'>
                    <h1>GRAPHIC <span>DESIGN</span></h1>
                </div>
            </div>
            <div class='row design'>
                <div class="col-lg-3">
                    <a class='design-project' href=''><img src="resources/images/clevelandscsite.PNG" alt="cleveland sc site"/></a>
                </div>
                <div class="col-lg-3">
                    <a class='design-project' href=''><img src="resources/images/clevelandscsite.PNG" alt="cleveland sc site"/></a>
                </div>
                <div class="col-lg-3">
                    <a class='design-project' href=''><img src="resources/images/clevelandscsite.PNG" alt="cleveland sc site"/></a>
                </div>
                <div class="col-lg-3">
                    <a class='design-project' href=''><img src="resources/images/clevelandscsite.PNG" alt="cleveland sc site"/></a>
                </div>
            </div>
            <div class="row dev-header">
                <div class='dev-header-text'>
                    <h1>WEB <span>DEVELOPMENT</span></h1>
                </div>
            </div>
            <div class='row design'>
                <div class="col-lg-3">
                    <a class='design-project' href=''><img src="resources/images/clevelandscsite.PNG" alt="cleveland sc site"/></a>
                </div>
                <div class="col-lg-3">
                    <a class='design-project' href=''><img src="resources/images/clevelandscsite.PNG" alt="cleveland sc site"/></a>
                </div>
                <div class="col-lg-3">
                    <a class='design-project' href=''><img src="resources/images/clevelandscsite.PNG" alt="cleveland sc site"/></a>
                </div>
                <div class="col-lg-3">
                    <a class='design-project' href=''><img src="resources/images/clevelandscsite.PNG" alt="cleveland sc site"/></a>
                </div>
            </div>
        </section>
        
        <section class="section-contact">
            <h1>SHOOT ME <span>A MESSAGE</span></h1>
            <form method='post' action="contact.php" id="form" class="contact-form">
		        <input class="name" type="text" placeholder="NAME"><br>
		        <input class="email" type="text" placeholder="E-MAIL"><br>
		        <textarea class="message" type="text" placeholder="MESSAGE"></textarea><br>
                <input class="submit" type="submit" value="SEND"><br>
            </form>
            
        </section>
    
    
    
    
    
    </body>

</html>