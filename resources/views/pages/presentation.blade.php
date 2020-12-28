
<header class="masthead bg-primary text-white text-center" id="presentation">
    <div class="container d-flex align-items-center flex-column">
        
        <img class="masthead-avatar mb-5" src="assets/img/avataaars.svg" alt="" />
       
        <h1 class="masthead-heading text-uppercase mb-0">Présentation</h1>
        
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        @foreach ($datas as $element)
            <p class="masthead-subheading font-weight-light mb-0">{{$element->texte}}</p>
        @endforeach
        <br>
        <div style="height: 500px; width: 700px;" id="carouselExampleControls" class="carousel slide border mt-5" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img height="500px" width="500px" class="d-block w-100" src="{{asset('img/MG.png')}}" alt="First slide">
              </div>

              @foreach ($caroussel as $elem)
                  <div class="carousel-item">
                <img height="500px" width="500px" class="d-block w-100" src="{{asset('img/'.$elem->src)}}" alt="Second slide">
              </div>
              @endforeach

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
    </div>
</header>

