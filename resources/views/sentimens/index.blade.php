@extends('master.master')
@section('container')
<header>
        <!-- navbar -->
        @include('pages.navbar')
        @include('pages.navbar2')
        <!--/  navbar -->
      </header>


      <div class="pricing-header p-3 pb-md-4 mx-auto my-5 text-center">
        <h1 class="display-3  fw-normal" style="font-family: 'Fredoka One', cursive; ">Sentimen Analisis</h1>
        <p class="fs-5 text-muted" style="font-family: 'Mukta', sans-serif;">Sentimen ini akan menganalisiswa tiga (3) kata kunci saja yaitu : Unasman, Polewali, Sulawesi Barat.</p>
      </div>

      <main>


        <div class="container-fluid">
          <div class="row justify-content-end">
           <div class="col-md-3 col-sm-12">
            <!-- at -->
            @include('pages.at')
            <!-- /at -->
          </div>
          <div class="col-md-6 col-sm-12">
            <!-- analisis -->
            @include('pages.analisis')
            <!-- /analisis -->
            <!-- card_katakunci -->
           @include('pages.kata_kunci')
            <!-- /card_katakunci -->
          </div>
          <div class="col-md-3 col-sm-12">
            <!-- terkait -->
            @include('pages.terkait')
         <!-- /terkait -->
       </div>

     </div>
@endsection