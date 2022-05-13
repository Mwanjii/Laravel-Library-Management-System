<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr"> 
   <head>
      <meta charset="utf-8">
      <title>Side Menu Bar</title> 
      <link rel="stylesheet" href="{{ asset('CSS/dashboard.css') }}">
      <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
      <link rel="stylesheet" href="{{ asset('CSS/bootstrap.css') }}"> <!-- Bootstrap -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   </head>
   <body style="background-image: url(images/libimage1.jpg) ; background-repeat: no-repeat;
  background-size: cover;">
      <ul>
         <li class="active"><a href="#">HOME</a></li>
         <li><a href="#about">BOOK AUTHORS</a></li>
         <li><a href="#portfolio">PUBLISHERS</a></li>
         <li><a href="#gallery">BOOK BRACKET</a></li>
         <li><a href="#services">REGISTER STUDENT</a></li>
         <li><a href="#feedback">BOOK BORROWING</a></li>
         <li><a class="contact" href="#contact">REPORTS</a></li>
         <li><a class="contact" href="#contact">SETTINGS</a></li>
      </ul>
      <section>
         <i class="fas fa-bars"></i>
      </section>
          <div class="container">
              <h2 style="padding-left: 100px;">Dashboard</h2>
                <div class="div1">
                    Authors <br>
                    <p class="card-text">{{ $publishers = 10; }}</p> 
                </div>
                <div class="div2">
                    Publishers <br>
                    <p class="card-text">{{ $publishers = 10; }}</p> 
                </div>
                <div class="div3">
                    Book Bracket <br>
                    <p class="card-text">{{ $publishers = 10; }}</p> 
                </div>
                <div class="div4">
                    Registered Students <br>
                    <p class="card-text">{{ $publishers = 10; }}</p> 
                </div>
                <div class="div5">
                    Books Borrowed <br>
                    <p class="card-text">{{ $publishers = 10; }}</p> 
                </div>
                <div class="div6">
                    Books Listed <br>
                    <p class="card-text8">{{ $publishers = 10; }}</p> 
                </div>
          </div>

      <Style>
          .div1,.div2,.div3,.div4,.div5,.div6{
              
              
              border: 3px solid grey;
              width: 200px;
              height: 150px;
              text-align: center;
              font-size: 30px;
              font-family: sans-serif;
              color: white;
              opacity: 100%;
              margin: 20px;
              float: left;

          }
          p{
              text-align: center;
          }
          h2{
              color: white;
              font-size: 35px;
          }
          .container{
              margin: 20px;
              padding-left: 200px;
              padding-top: 110px;
              float: right;
              

          }
      </Style>
     
      
    <script>
         $(document).ready(function(){
           $('i').click(function(){
             $('ul').toggleClass('ul_show');
             $('section').toggleClass('slide_image');
           });
           $('li').click(function(){
             $(this).addClass('active').siblings().removeClass('active');
           });
         });
         
      </script>
   </body>
</html>
</body>
</html>