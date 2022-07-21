<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>Sentimen Analisis</title>
    

    <link href="{{asset('/assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/more/css/index.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/more/css/loading.css')}}" rel="stylesheet">
    <link href="{{asset('/assets/more/css/dashboard.css" rel="stylesheet')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('/assets/more/css/pricing.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

    <style type="text/css">


      @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Mukta:wght@200&display=swap');
    </style>
  </head>
  <body>


    <div id="background-loading">
      <span class="loading-text">LOADING</span>
      <div class="loader"></div>
    </div>




    <div class="container-fluid py-3">
      @yield('container')
   </div>








   <a href="#" class="tombol-top d-flex justify-content-center align-items-center position-fixed bg-danger text-white" style="width:45px; height: 45px; border-radius: 50%; z-index: 99999999999; bottom: 50px; right: 50px; transition: .5s; visibility: visible; opacity: .9;">
    <i class="bi bi-arrow-bar-up"></i>
  </a>

  <!-- footer -->


  <footer class="pt-4 my-md-5 pt-md-5p">
    <div class="container " id="icon-grid">
      <h2 class="pb-2 border-bottom">Alur Sistem</h2>

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4 py-5">
        <div class="col d-flex align-items-start">
          <i class="bi bi-search text-muted flex-shrink-0 me-3" style="font-size: 3.7em;"></i>
          <div>
            <h4 class="fw-bold mb-0">Pencarian</h4>
            <p>Sistem hanya memakai tiga kata kunci.</p>
          </div>
        </div>
        <div class="col d-flex align-items-start">
         <i class="bi bi-server text-muted flex-shrink-0 me-3" style="font-size: 3.7em;"></i>
         <div>
          <h4 class="fw-bold mb-0">API</h4>
          <p>Application Programing Interface seabagai jembatan menghungkan dari aplikasi website dengan database twitter sehingga dapat ditampilkan ke dalam tampilan home.</p>
        </div>
      </div>
      <div class="col d-flex align-items-start">
       <i class="bi bi-twitter text-muted flex-shrink-0 me-3" style="font-size: 3.7em;"></i>
       <div>
        <h4 class="fw-bold mb-0">Twitter</h4>
        <p>merupakan sebagai komunikasi social media yang sama trend nya dengan facebook atau social media lainnya.</p>
      </div>
    </div>
    <div class="col d-flex align-items-start">
      <i class="bi bi-graph-up-arrow text-muted flex-shrink-0 me-3" style="font-size: 3.7em;"></i>
      <div>
        <h4 class="fw-bold mb-0">Analisis</h4>
        <p>informasi yang didapat dari twitter akan sentimen dengan metode K-Means.</p>
      </div>
    </div>

  </div>
</div>
</footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('/assets/more/js/dashboard.js')}}"></script>
<script type="text/javascript">
 document.addEventListener("DOMContentLoaded", function(event) { 


  // navbar tetap atas ketika di scroll
  window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    // const navbarClass = document.querySelector('.navbar');
    const tombolTop = document.querySelector('.tombol-top');
    if (window.scrollY > 600) {
     tombolTop.style.visibility = "visible";
   }else {
     tombolTop.style.visibility = "hidden";
     document.body.style.paddingTop = '0';
   }
   // if (window.scrollY > 50) {
   //   navbar.classList.add('fixed-top');
   //   navbar.classList.add('bg-white');

   //      // add padding top to show content behind navbar
   //      navbar_height = navbarClass.offsetHeight;
   //      document.body.style.paddingTop = navbar_height + 'px';
   //    } else {
   //     navbar.classList.remove('fixed-top');
   //     navbar.classList.remove('bg-white');
   //       // remove padding top from body
   //       document.body.style.paddingTop = '0';
   //     } 
 });


  
});
</script>

</html>

      <!-- /footer -->