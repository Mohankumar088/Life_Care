<!DOCTYPE html>
<html>
<head>
	<title>Slide</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="js/slick.min.js" type="text/javascript" charset="utf-8"></script>
          <link rel="stylesheet" type="text/css" href="css/slick.css"/>
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>
</head>
<body>
	<div class="" id="event_slider">
    
        <div class="userboxindexpage text-center">
          <figure class="">
            <img src="images/Doctors/alok.jpg" alt="" style="border:0.5px solid #ccc;" class="img-fluid" />
          </figure>
          <div class="userboxindexpage_content">
            <h3 class="title"><a href="#">AJAY</a></h3>
            <p class="px-2">Details</p>
            
          </div>
        </div>
                <div class="userboxindexpage text-center">
          <figure class="">
            <img src="images/Doctors/charu.jpg" alt="" style="border:0.5px solid #ccc;" class="img-fluid" />
          </figure>
          <div class="userboxindexpage_content">
            <h3 class="title"><a href="#">AJAY</a></h3>
            <p class="px-2">Details</p>
            
          </div>
        </div>
                <div class="userboxindexpage text-center">
          <figure class="">
            <img src="images/Doctors/daksh.jpg" alt="" style="border:0.5px solid #ccc;" class="img-fluid" />
          </figure>
          <div class="userboxindexpage_content">
            <h3 class="title"><a href="#">AJAY</a></h3>
            <p class="px-2">Details</p>
            
          </div>
        </div>

    


      </div>
 <script>


  if('#event_slider') {
  $('#event_slider').slick({
    slidesToShow: 3,
    slidesToScroll: 3,
    autoplay:true,
    autoplaySpeed:1500,
    dots:true,
    responsive: [   
    {
      breakpoint: 992,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 2
      }
    },
    {
      breakpoint: 700,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
    }
    ]
  });
}
</script>
</body>
</html>