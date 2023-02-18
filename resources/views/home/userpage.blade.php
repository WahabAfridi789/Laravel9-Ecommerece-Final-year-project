
<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
    @include('home.css')
   </head>
   <body>

   @include('sweetalert::alert')
      <div class="hero_area">

         <!-- header section strats -->
        
        @include('home.header')
         <!-- end header section -->
         <!-- slider section -->
            @include('home.slider')
         
         <!-- end slider section -->
      </div>
      <!-- why section -->
      @include('home.why')
      <!-- end why section -->
      
      <!-- arrival section -->
        @include('home.new_arrival')
      <!-- end arrival section -->
      
      <!-- product section -->
      @include('home.product')
      <!-- end product section -->

      <!-- subscribe section -->
      @include('home.subscribe')
      <!-- end subscribe section -->
      <!-- client section -->
      @include('home.client')
      <!-- end client section -->
      <!-- footer start -->
      @include('home.footer')

     

      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
     @include('home.script')
   </body>
</html>