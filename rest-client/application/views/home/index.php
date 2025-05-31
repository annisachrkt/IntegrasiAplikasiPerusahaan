<?php
function get_Curl($url)

{
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
  $result = curl_exec($curl);
  curl_close($curl);

  return json_decode($result, true);
}

$result = get_Curl("https://www.googleapis.com/youtube/v3/channels?part=snippet,statistics&id=UCr9J3Pean23WxG_BZ0DO0aw&key=AIzaSyAhWoGfrzm1g-8xf9vNg40SGWghXB5Qrv0");

$youtubeProfilePic = $result['items'][0]['snippet'] ['thumbnails']['default']['url'];
$channelName = $result['items'][0]['snippet']['title'];
$subscriber = $result['items'][0]['statistics']['subscriberCount'];

//latest video
$urlLatestVideo = "https://www.googleapis.com/youtube/v3/search?key=AIzaSyAhWoGfrzm1g-8xf9vNg40SGWghXB5Qrv0&channelId=UCr9J3Pean23WxG_BZ0DO0aw&maxResults=1&order=date&part=snippet";
$result = get_Curl($urlLatestVideo);
$latestVideoId = $result['items'][0]['id']['videoId'];

//instagram API
$clientID = "10054873134605008";
$accessToken = "IGACO42pVzItBBZAE9Qd0s3RkVqNGt2RG1oUmpmU3FuNTBzVWJENFUtUjVfNzh4a0NxbmlWUDJoQjlmSVlObWxUU1o5OEYtUlRqeFhHTVZAVQzZASakxUbTZAGeldLLU12dzJiMWJ0S0sySzNQMkpNMzFOLUU4MFRkcVBvR2hyZAy1KNAZDZD";

$result2 = get_Curl("https://graph.instagram.com/v22.0/me?fields=username,profile_picture_url,followers_count&access_token=IGACO42pVzItBBZAE9Qd0s3RkVqNGt2RG1oUmpmU3FuNTBzVWJENFUtUjVfNzh4a0NxbmlWUDJoQjlmSVlObWxUU1o5OEYtUlRqeFhHTVZAVQzZASakxUbTZAGeldLLU12dzJiMWJ0S0sySzNQMkpNMzFOLUU4MFRkcVBvR2hyZAy1KNAZDZD");

$usernameIG = $result2['username'];
$profilePictureIG = $result2['profile_picture_url'];
$followersIG = $result2['followers_count'];

//media IG
$resultGambar1 = get_Curl("https://graph.instagram.com/v22.0/18056626166465313?fields=media_url&access_token=IGACO42pVzItBBZAE9Qd0s3RkVqNGt2RG1oUmpmU3FuNTBzVWJENFUtUjVfNzh4a0NxbmlWUDJoQjlmSVlObWxUU1o5OEYtUlRqeFhHTVZAVQzZASakxUbTZAGeldLLU12dzJiMWJ0S0sySzNQMkpNMzFOLUU4MFRkcVBvR2hyZAy1KNAZDZD");
$resultGambar2 = get_Curl("https://graph.instagram.com/v22.0/17844259908219320?fields=media_url&access_token=IGACO42pVzItBBZAE9Qd0s3RkVqNGt2RG1oUmpmU3FuNTBzVWJENFUtUjVfNzh4a0NxbmlWUDJoQjlmSVlObWxUU1o5OEYtUlRqeFhHTVZAVQzZASakxUbTZAGeldLLU12dzJiMWJ0S0sySzNQMkpNMzFOLUU4MFRkcVBvR2hyZAy1KNAZDZD");



$gambar1 = $resultGambar1['media_url'];
$gambar2 = $resultGambar2['media_url'];




?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    

    <title>My Portfolio</title>
  </head>
  <body>

    <div class="jumbotron" id="home">
      <div class="container">
        <div class="text-center">
           <img src="<?= $profilePictureIG; ?>"  width="200" class="rounded-circle img-thumbnail me-3 ">
          <h1 class="display-4">Annisa Chairani</h1>
          <h3 class="lead">Student | programmer | Artist</h3>
        </div>
      </div>
    </div>


    <!-- About -->
   <section class="about py-5 bg-light" id="about">
      <!-- Link Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

<section class="hero-carousel py-4">
  <div class="container-fluid">
    <div class="row align-items-center">
      <!-- Hero Text -->
      <div class="col-md-4 text-muted px-5">
        <h6 class="text-uppercase">About me</h6>
        <h1 class="display-4 fw-bold">Profil Singkat</h1>

      </div>

      <!-- Carousel -->
      <div class="col-md-8">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

            <!-- Card 1 -->
            <div class="swiper-slide">
              <div class="card rounded-4 overflow-hidden border-0 shadow-sm h-100">
                <img src="https://cdn1-production-images-kly.akamaized.net/uwxXBZjKmRBEXchjnuHKl5gert0=/1280x1280/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/3947638/original/051363900_1645997774-Padang_4.JPG" class="card-img-top" alt="Padangsidimpuan">
                <div class="card-body">
                  <h6 class="text-muted mb-1">Lahir di Padangsidimpuan, 30 Desember 2003.</h6>
                </div>
              </div>
            </div>

            <!-- Card 2 -->
            <div class="swiper-slide">
              <div class="card rounded-4 overflow-hidden border-0 shadow-sm h-100">
                <img src="https://tse3.mm.bing.net/th?id=OIP.UeSTlhvnqgk3xWsVnlDvWgHaFj&pid=Api&P=0&h=220" class="card-img-top" alt="SMP IT">
                <div class="card-body">
                  <h6 class="text-muted mb-1">Pendidikan <br> Alumni SMP IT Nurul Ilmi Padangsidimpuan.</h6>
                
                </div>
              </div>
            </div>

            <!-- Card 3 -->
            <div class="swiper-slide">
              <div class="card rounded-4 overflow-hidden border-0 shadow-sm h-100">
                <img src="https://man2padangsidimpuan.sch.id/wp-content/uploads/2022/05/DSC_0543-800x445.jpg" class="card-img-top" alt="MAN 2">
                <div class="card-body">
                  <h6 class="text-muted mb-1">Pendidikan  MAN 2 Padangsidimpuan </h6>
                </div>
              </div>
            </div>

            <!-- Card 4 -->
            <div class="swiper-slide">
              <div class="card rounded-4 overflow-hidden border-0 shadow-sm h-100">
                <img src="https://tse1.mm.bing.net/th?id=OIP.t3CBIOP6cILiQkmrP7xLOQHaEK&pid=Api&P=0&h=220" class="card-img-top" alt="UIN Imam Bonjol">
                <div class="card-body">
                  <h6 class="text-muted mb-1">Kuliah UIN Imam Bonjol Padang</h6>
                </div>
              </div>
            </div>

            <!-- Card 5 -->
            <div class="swiper-slide">
              <div class="card rounded-4 overflow-hidden border-0 shadow-sm h-100">
                <img src="https://tse3.mm.bing.net/th?id=OIP.LbQ4b5u_FnfsU9Fg49k_1wHaEK&pid=Api&P=0&h=220" class="card-img-top" alt="Sistem Informasi">
                <div class="card-body">
                  <h6 class="text-muted mb-1">Mahasiswa Sistem Informasi, Fakultas Sains dan Teknologi.</h6>
              
                </div>
              </div>
            </div>

          </div>

          <!-- Navigasi -->
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section>



<!-- Tambahan CSS -->
<style>
.hero-carousel {
  background: linear-gradient(to right, rgba(189, 187, 187, 0.2), rgba(179, 175, 175, 0.5)),
    url('https://source.unsplash.com/1600x900/?mountains') no-repeat center center/cover;
  min-height: 80vh;
  color: white;
}

.card:hover {
  transform: scale(1.03);
  transition: transform 0.3s ease;
}

.swiper {
  padding: 40px 0;
}

.swiper-slide {
  height: auto;
}
</style>

    

<!-- Social Media -->
<section class="social py-5 bg-light" id="social">
  <div class="container">
    <div class="row mb-4">
      <div class="col text-center">
        <h2 class="fw-bold">My Social Media</h2>
        <p class="text-muted"> *** </p>
      </div>
    </div>
    
    <div class="row">
      <!-- YouTube -->
      <div class="col-md-6 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="<?= $youtubeProfilePic; ?>" width="80" class="rounded-circle img-thumbnail me-3" >
              
              <div>
                <h5 class="mb-1"><?= $channelName; ?></h5>
                <p class="mb-1"><?= $subscriber; ?> Subscriber</p>
                <div class="g-ytsubscribe" data-channelid="UCr9J3Pean23WxG_BZ0DO0aw" data-layout="default" data-count="default"></div>
              </div>
            </div class ="m-5">
            <div class="ratio ratio-16x9 ">
              <iframe src="https://www.youtube.com/embed/<?= $latestVideoId; ?>" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

      <!-- Instagram -->
      <div class="col-md-6 mb-4">
        <div class="card shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center mb-3">
              <img src="<?= $profilePictureIG; ?>" width="80" class="rounded-circle img-thumbnail me-3" alt="Instagram">
              <div>
                <h5 class="mb-1"><?= $usernameIG; ?></h5>
                <p class="mb-1"><?= $followersIG; ?> Followers</p>
              </div>
            </div>
            <div class="row">
              <div class="col-6">
                <img src="<?= $gambar1; ?>" class="img-fluid rounded mb-2" alt="IG 1">
              </div>
              <div class="col-6">
                <img src="<?= $gambar2; ?>" class="img-fluid rounded mb-2" alt="IG 2">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

     <!-- Portfolio -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Portfolio</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/thumbs/1.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/thumbs/2.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/thumbs/3.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>   
        </div>

        <div class="row">
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top"src="<?= base_url(); ?>/assets/img/thumbs/4.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div> 
          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/thumbs/5.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
              </div>
            </div>
          </div>

          <div class="col-md mb-4">
            <div class="card">
              <img class="card-img-top" src="<?= base_url(); ?>/assets/img/thumbs/6.png" alt="Card image cap">
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
   



    <!-- Contact -->
    <section class="contact bg-light" id="contact">
      <div class="container">
        <div class="row pt-4 mb-4">
          <div class="col text-center">
            <h2>Contact</h2>
          </div>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="card bg-secondary text-white mb-4 text-center">
              <div class="card-body">
                <h5 class="card-title">Contact Me</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
            
            <ul class="list-group mb-4">
              <li class="list-group-item"><h3>Location</h3></li>
              <li class="list-group-item">My Home</li>
              <li class="list-group-item">panyanggar, padangsidimpuan</li>
              <li class="list-group-item">North sumatera, Indonesia</li>
            </ul>
          </div>

          <div class="col-lg-6">
            
            <form>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama">
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email">
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="text" class="form-control" id="phone">
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" id="message" rows="3"></textarea>
              </div>
              <div class="form-group">
                <button type="button " class="btn btn-secondary">Send Message</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>





<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 30,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev"
    },
    loop: true,
    breakpoints: {
      0: { slidesPerView: 1 },
      768: { slidesPerView: 2 },
      992: { slidesPerView: 3 }
    }
  });
</script>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js"></script>
    
  </body>
</html>