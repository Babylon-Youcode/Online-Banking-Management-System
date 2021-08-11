
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


                  </div>
               </div>
            </div>
         </div>
        <nav class="navbar  shadow-sm bg-white">
            <div class="container-fluid ">
              <a class="navbar-brand"><img src="images/logo.png" style="width: 180px" alt="#" /></a>
              <form class="d-flex">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    @if(Auth::user()->is_admin == 1)
                    <a href="{{ url('admin/home') }}" class="text-decoration-none">Home</a>
                    </li>
                    @else 
                    <a href="{{ url('/home') }}" class="text-decoration-none">Home</a>
                      @endif 
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
          <h1 class="text-center m-4 fw-bold">Blogs</h1>
 <div class="container-fluid">
 <div class="row m-5">
<img src="/images/visa.jpg" class="col-5 rounded" alt="">
     <div class="col p-4">
         <h2>Card Visa</h2>
         <h4 class="text-dark">A debit card (also known as a bank card, plastic card or check card) is a plastic payment card that can be used instead of cash when making purchases. It is similar to a credit card, but unlike a credit card, the money is immediately transferred directly from the cardholder's bank account to pay for the transaction.</h4>

         <p class="text-muted">  Some cards carry a stored value with which a payment is made (prepaid card), but most relay a message to the cardholder's bank to withdraw funds from the cardholder's designated bank account. In some cases, the payment card number is assigned exclusively for use on the Internet and there is no physical card. This is referred to as a virtual card.</p>
     </div>
 </div>
 <div class="row  m-5">
  
         <div class="col p-4">
            <h2> Bank</h2>
             <h4 class="text-dark">A bank is a financial institution that accepts deposits from the public and creates a demand deposit while simultaneously making loans. Lending activities can be directly performed by the bank or indirectly through capital markets.</h4>
    
             <p class="text-muted">Because banks play an important role in financial stability and the economy of a country, most jurisdictions exercise a high degree of regulation over banks. Most countries have institutionalized a system known as fractional reserve banking, under which banks hold liquid assets equal to only a portion of their current liabilities. In addition to other regulations intended to ensure liquidity,</p>
         </div>
         <img src="/images/deriya.jpg" class="col-5 rounded" alt="">
     </div>

     <div class="row m-5 ">
        <img src="/images/bitcoin.jpg" class="col-5 rounded" alt="">
             <div class="col p-4">
                <h2>Bitcoin</h2>
                 <h4 class="text-dark">Bitcoin is a digital currency (crypto currency) which is mined (created and stored electronically). Bitcoins are not printed physically and not created by central banks either – it is a decentralized currency, which is produced by people.</h4>
        
                 <p class="text-muted">But why are so many people interested in Bitcoin? Some countries, for example Australia and Japan, have acknowledged Bitcoin as official mode of payment. It is the different characteristics and advantages, of course, which make Bitcoin something special. Moreover it is the development of price – at the beginning of the year 2017 a Bitcoin was 900$, today the price is close to 8000$.</p>
             </div>
         </div>

         <div class="row m-5">
           
                 <div class="col p-4">
                    <h2>Transfer</h2>
                     <h4 class="text-dark">Wire transfer, bank transfer, or credit transfer, is a method of electronic funds transfer from one person or entity to another. A wire transfer can be made from one bank account to another bank account, or through a transfer of cash at a cash office.</h4>
            
                     <p class="text-muted">Different wire transfer systems and operators provide a variety of options relative to the immediacy and finality of settlement and the cost, value, and volume of transactions. Central bank wire transfer systems, such as the Federal Reserve's Fedwire system in the United States, are more likely to be real-time gross settlement (RTGS) systems, as they provide the quickest availability of funds. This is because they post the gross (complete) entry against electronic accounts of the wire transfer system operator.</p>
                 </div>
                 <img src="/images/transfer.jpg" class="col-5 rounded" alt="">
             </div>


 </div>


        
          <footer>
            <div class="footer mt-5 bg-dark text-light">
               <div class="container p-4">
                  <div class="row m-3">
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
                     <div class="row m-3">
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
        
      </body>
   </html>
   
   
   