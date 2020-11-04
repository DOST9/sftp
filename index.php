<!DOCTYPE html>
<html lang="en">

<head>

   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="author" content="DOST">
   <meta name="description" content="DOST">
   <meta name="keywords" content="DOST-IX">
   <link href="#." rel="icon">

   <title>DOST-IX</title>

   <link rel="stylesheet" href="./landing/bootstrap.min.css">
   <link rel="stylesheet" href="./landing/font-awesome.css">
   <link rel="stylesheet" href="./landing/animate.css">
   <link rel="stylesheet" href="./landing/jquery.fancybox.min.css">
   <link rel="stylesheet" href="./landing/style.css">

   <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
   <script>
   $(function () {
    $('.gallery-background').css('height', $('body').innerHeight());
    $('.gallery-background').css('width', $('body').innerWidth());
    window.onresize = function (event) {
        $('.gallery-background').css('height', $('body').innerHeight());
        $('.gallery-background').css('width', $('body').innerWidth());
    };
});
   </script>
   <style>
   .gallery{
 
 position:relative; 
}
.gallery-background{
height: 100vh;
 display:table-cell;
 text-align:center; 
 vertical-align:middle;
 

}
.gallery-background img{
 display:inline-block;
  
 max-width:100%;
 max-height:100%;


}
   </style>
</head>

<body>

   <div class="page_content_parent_demo">

      <div class="gallery-background">
      <img src="images/cover.jpg" >
      </div>

         <div class="parallaxie" id="demos">
            
            <div class="container">
               <div class="banner_inner text-center">
                  <!-- <h1 class="raleway wow fadeInUp" data-wow-delay="400ms">SCIENCE FOR è PEOPLE</h1>
                  <p class="wow fadeInUp"  data-wow-delay="450ms">Stories of resilience in the face of the covid pandemic (In the countryside)</p> -->
                  <a class="button raleway bg_before_pink fadeInUp" style="margin-top: 300px;" href="booklet.php">View</a>
               </div>
            </div>
         </div>
      </div>
      
   </div>


</body>
</html>
