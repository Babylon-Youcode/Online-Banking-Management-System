
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Banka</title>
  
      <!-- style css -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />

      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    
   </head>
   <!-- body -->
   <body class="main-layout bg- ">
  
      <!-- header -->
      <header class="container-fluid" style="background-image: url(images/banner.jpg);background-repeat:no-repeat; background-size:100% 100% ;height:650px">
         <!-- header inner -->

                  </div>
               </div>
            </div>
         </div>
         <nav class="navbar ">
            <div class="container-fluid">
              <a class="navbar-brand"><img src="images/logo.png" style="width: 180px" alt="#" /></a>
              <form class="d-flex">
              
               
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  <a class="text-decoration-none mr-3" href="/blog">
                     Blog
                   </a>
                  @if (Route::has('login'))
                    @auth
                   
                        <a href="{{ url('/home') }}" class="text-decoration-none">Home</a>
                    @else
                    
                        <a href="{{ route('login') }}" class="text-decoration-none">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 btn btn-outline-primary">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
              </form>
            </div>
          </nav>


          <br>
 <h1 class="m-5 text-white ">The bank account that gives <br> you more control</h1>
 <a href="{{ route('register') }}" class="btn btn-primary m-5" type="submit">Register</a>

<h4 class="m-5  text-white">Spend and save with <br> confidence, and discover  a better <br> way to manage your money right <br> from your smartphone.</h4>



      </header>
      <!-- end header inner -->

      
        <div class="container mt-5">
           <div class="row d_flex">
              <div class="col-md-6">
                 <div class="titlepage">
                    <h1 class="m-3">About Us</h1>
                    <p>we believe that your bank should be as mobile and flexible as you. That’s why we’re offering a 100% digital banking experience that’s designed to be simple and transparent. Centered around you, it’s an app that feels good to use—integrating the most innovative technology to make life easier, and enabling you to live and bank your way.</p>
                   
                 </div>
              </div>
              <div class="col-md-6">
                 <div class="">
                    <img class="rounded" src="images/Bank.jpg" alt="#"/>
                 </div>
              </div>
           </div>
        </div>
     </div>

      <!-- end header -->
      <!-- banner -->
      {{-- <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center"><h2 >Contact Now</h2></div>
    
                    <div class="card-body">
                        <form method="POST" action="">
                            @csrf
                            <div class="form-group ">
                                <label for="email" class="col-md-4 col-form-label">Name</label>
    
                                    <input id="email" type="text" class="form-control " name="name"  required autocomplete="email">
    
                              
                            </div>
    
                            <div class="form-group ">
                                <label for="password" class="col-md-4 col-form-label">Email</label>
    
                                
                                    <input  type="text" class="form-control " name="Email" required autocomplete="new-password">
    
                  
                              
                            </div>
    
                            <div class="form-group ">
                                <label for="password-confirm" class="col-md-4 col-form-label">Phone number</label>
    
                              
                                    <input  type="text" class="form-control" name="number" required autocomplete="new-password">
                             
                            </div>
                            <div class="form-group ">
                                <label for="password-confirm" class="col-md-4 col-form-label">Messege</label>
    
                             
                                    <textarea class="form-control" name="messege" id="" cols="30" rows="5"></textarea>
                                    
                              
                            </div>
    
    
                            <div class="form-group row mb-0">
                             
                                    <button type="submit" class="btn btn-primary form-control">
                                      Send
                                    </button>
                               
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!------------------->
    <section class="contact-us">
      <div class="container ">
          <div class="property-location mb-5">
              <h3 class="m-3">NOTRE EMPLACEMENT</h3>
              <div class="divider-fade"></div>
                  <section
                      id="map"  class="mb-3 mx-auto"  style="
                      bottom: 0;
                      height: 387px;" ref="map">
                  </section>
          </div>
          <div class="row">
              <div class="col-lg-8 col-md-12">
                  <h3 class="mb-4">Contactez-nous</h3>
                  <form id="contactform" class="contact-form" name="contactform" method="post" novalidate>
                      <div class="form-group">
                          <input type="text" required class="form-control input-custom input-full" name="name" placeholder="Prénom ">
                      </div>
                      <div class="form-group">
                          <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Nom">
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                      </div>
                      <div class="form-group">
                          <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8" placeholder="Message"></textarea>
                      </div>
                      <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Envoyer</button>
                  </form>
              </div>
              <div class="col-lg-4 col-md-12 bgc" >
                  <div class="call-info  ">
                     
                      <h3>DÉTAILS DU CONTACT</h3>
                      <p class="mb-5">Veuillez trouver ci-dessous les coordonnées et contactez-nous dès aujourd'hui! </p>
                      <ul>
                          <li>
                              <div class="info">
                                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                                  <p class="in-p">EL MASSIRA , YOUSSOUFIA, MAROC</p>
                              </div>
                          </li>
                          <li>
                              <div class="info">
                                  <i class="fa fa-phone" aria-hidden="true"></i>
                                  <p class="in-p">+212 616133655</p>
                              </div>
                          </li>
                          <li>
                              <div class="info">
                                  <i class="fa fa-envelope" aria-hidden="true"></i>
                                  <p class="in-p ti">abdolaaziri@gmail.com</p>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
      </div>
  </section>




      <!--  footer -->
      <footer>
         <div class="footer mt-5 bg-dark text-light">
            <div class="container p-4">
               <div class="row">
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
                   
                    <h2 >
                       <a  class="m-3  "href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a class="m-3 " href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                       <a class="m-3 " href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
               
                    </h2>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
                     <h3>About Us</h3>
                     <p>We’re building the world’s <br> first digital bank</p>
                     
                  </div>
                  <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 mb-3">
                     <h3>Contact Us</h3>
                <ul>
                        <li>+212 616 133 655</li>
                        <li>Abdolaaziri@gmail.com</li>
                    </ul> 
                  </div>
             
               </div>
            </div>
            <hr class="bg-light">
            <div class="copyright text-center">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <p>© 2021 All Rights Reserved. Design by Abdo</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <!-- end footer -->
      <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key="></script>
      <script >
      showLocationOnTheMap()
        function showLocationOnTheMap() {
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 15,
                    center: new google.maps.LatLng(32.22441941916041,-8.554518450556523),
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                });
                new google.maps.Marker({
                    position: new google.maps.LatLng(32.22441941916041,-8.554518450556523),
                    title:this.annonce.title,
                    map: map,
                });
            }
      </script>
   </body>
</html>


