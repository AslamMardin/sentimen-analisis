<div class="container px-4 mt-4 py-5 sticky-top" id="custom-cards">
    <h2 class="pb-2 border-bottom">Kata Kunci </h2>

    <div class="row row-cols-1 row-cols-lg-1 align-items-stretch g-4 py-5">
    @foreach($kategoris as $kategori)
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-4" style="background-image: url('assets/img/{{$kategori}}.jpg');  background-size: cover; background-blend-mode: overlay; background-position: center;">
          <div class="d-flex flex-column text-center h-100 p-5 pb-3 text-white">
            <h2 class="pt-5 mt-5 mb-4  display-6 lh-1 fw-bold">{{$kategori}}</h2>
            @if($kategori == "unasman")
            <small>Universitas Al Asyariah Mandar</small>
            @elseif($kategori == "sulbar")
            <small>Sulawesi Barat</small>
            @else 
            <small>Polewali Mandar</small>
            @endif
        </div>
    </div>
</div>
@endforeach


</div>
</div>

