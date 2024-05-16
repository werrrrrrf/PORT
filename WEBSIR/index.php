<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

mysqli_autocommit($conn, true); // Pastikan autokommit diatur ke true


if(isset ($_POST['send'])){

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $number = mysqli_real_escape_string($conn, $_POST['number']);
    $msg = mysqli_real_escape_string($conn, $_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email'
    AND number = '$number' AND message = '$msg'") or die('Query Failed');

    if(mysqli_num_rows($select_message) > 0){
        $message[] = 'message sent already';
    }else{
        mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', 
        '$msg')") or die('GAGAL REK');
        $message[] = 'message sent succesfully';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>

    <?php

    if(isset($$message)){
        foreach ($$message as $$message) {
            echo '
            <div class="message">
                <span>'.$message.'</span>
                <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>
            ';
        }
    }
    ?>
    
    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Portofolio.</a>

        <nav class="navbar">
            <a href="#home" class="active">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#portofolio">Portofolio</a>
            <a href="#contact">Contact</a>
        </nav>

        <div class="follow">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-youtube"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-github"></a>
        </div>
    </header>

    <section class="home" id="home">
        <div class="image">
            <img src="img/pp.jpg" alt="" class="src">
        </div>

        <div class="content">
            <h3>Hi, I am Indra Aditya</h3>
            <span>Web Designer & Developer</span> 
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim quam explicabo at autem atque possimus?</p>
            <a href="#about" class="btn">About Me</a>
        </div>
    </section>

    <section class="about" id="about">
        <h1 class="heading"> <span>biography</span> </h1>
        
        <div class="biography">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Dolor earum debitis quos est iusto, veniam vero recusandae optio minima deleniti.</p>
                
                <div class="bio">
                    <h3> <span>name :</span> M Indra Aditya </h3>
                    <h3> <span>email :</span> iecoviest@gmail.com </h3>
                    <h3> <span>address :</span> Bumen, Mojotengah </h3>
                    <h3> <span>phone :</span> +62 821-3561-3783 </h3>
                    <h3> <span>age :</span> 17 years </h3>
                    <h3> <span>experience :</span> Work in Group </h3>
                </div>

                <a href="#" class="btn">Download</a>
        </div>

        <div class="skills">

            <h1 class="heading"> <span>Hobby</span> </h1>

            <div class="progress">
                <div class="bar"> <h3><span>Magic Chess</span> <span>99%</span></h3> </div>
                <div class="bar"> <h3><span>Music</span> <span>90%</span></h3> </div>
                <div class="bar"> <h3><span>Donghua</span> <span>85%</span></h3> </div>
                <div class="bar"> <h3> <span>Anime</span> <span>50%</span></h3> </div>
                <div class="bar"> <h3><span>Drakor</span> <span>50%</span></h3> </div>
                <div class="bar"> <h3><span>Coding</span> <span>40%</span></h3> </div>
            </div>

        </div>

        <div class="edu-exp">
            <h1 class="heading"> <span>education</span> </h1>
            <div class="row">
                <div class="box-container">
                    <h3 class="title">education</h3>
                    
                    <div class="box">
                        <span>( 2011 - 2012 )</span>
                        <h3>TK Pertiwi Sariyoso</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, eum eveniet error corrupti recusandae pariatur.</p>
                    </div>

                    <div class="box">
                        <span>( 2013 - 2019 )</span>
                        <h3>SD Negeri Sariyoso</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, eum eveniet error corrupti recusandae pariatur.</p>
                    </div>

                    <div class="box">
                        <span>( 2019 - 2022 )</span>
                        <h3>SMP Negeri 1 Garung</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, eum eveniet error corrupti recusandae pariatur.</p>
                    </div>

                    <div class="box">
                        <span>( 2022 - Now )</span>
                        <h3>SMK Negeri 1 Wonosobo</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, eum eveniet error corrupti recusandae pariatur.</p>
                    </div>

                    
                </div>

                <div class="box-container">
                    <h3 class="title">Cita-Cita</h3>

                    <div class="box">
                        <span>( 2011 - 2012 )</span>
                        <h3> - </h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, eum eveniet error corrupti recusandae pariatur.</p>
                    </div>

                    <div class="box">
                        <span>( 2013 - 2019 )</span>
                        <h3>Pemain Sepakbola</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, eum eveniet error corrupti recusandae pariatur.</p>
                    </div>

                    <div class="box">
                        <span>( 2019 - 2022 )</span>
                        <h3>Pemain Sepakbola, Orang Sukses</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, eum eveniet error corrupti recusandae pariatur.</p>
                    </div>

                    <div class="box">
                        <span>( 2022 - Now )</span>
                        <h3> - </h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nam, eum eveniet error corrupti recusandae pariatur.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="services" id="services">

        <h1 class="heading"> <span>services</span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-code"></i>
                <h3>web development</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias at, sed et delectus hic accusamus!</p>
            </div>

            <div class="box">
                <i class="fas fa-paint-brush"></i>
                <h3>graphic design</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias at, sed et delectus hic accusamus!</p>
            </div>

            <div class="box">
                <i class="fab fa-bootstrap"></i>
                <h3>bootrstap</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias at, sed et delectus hic accusamus!</p>
            </div>

            <div class="box">
                <i class="fas fa-chart-line"></i>
                <h3>seo marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias at, sed et delectus hic accusamus!</p>
            </div>

            <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>digital marketing</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias at, sed et delectus hic accusamus!</p>
            </div>

            <div class="box">
                <i class="fab fa-wordpress"></i>
                <h3>wordpress</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias at, sed et delectus hic accusamus!</p>
            </div>

        </div>

    </section>

    <section class="portofolio" id="portofolio">

        <h1 class="heading"> <span> portofolio </span> </h1>
        <div class="box-container">
            <div class="box">
                <img src="img/Justice-bro.png" alt="">
                <h3>fate series design</h3>
                <span>( 2023 )</span>
            </div>

            <div class="box">
                <img src="img/Soccer-bro.png" alt="">
                <h3>man city design</h3>
                <span>( 2023 )</span>
            </div>
        </div>

    </section>

    <section class="contact" id="contact">

        <h1 class="heading"> <span> contact me </span> </h1>

        <form action="" method="post">
            <div class="flex">
                <input type="text" name="name" placeholder="enter your name" class="box" required>
                <input type="email" name="email" placeholder="enter your email" class="box" required>
            </div>
            <input type="number" min="0" name="number" placeholder="enter your number" class="box" required>    
            <textarea name="message" class="box" placeholder="enter your message" cols="30" rows="10"></textarea>  
            <input type="submit" value="send message" name="send" class="btn"> 
        </form> 

        <div class="box-container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+62 821-3561-3783</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>iecoviest@gmail.com</p>
            </div>
            <div class="box">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>Bumen, Mojotengah</p>
            </div>

        </div>

    </section>

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span> indraiese </span> </div>

    <script src="js/script.js"></script>
</body>
</html>