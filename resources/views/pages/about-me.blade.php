
    <!-- About Section-->
    <section class="page-section bg-primary text-white mb-0" id="about">
        <div class="container">
            <!-- About Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-white">About me</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <br>
            <!-- About Section Content-->
            <div class="row justify-content-center">
                @foreach ($about as $elem)
                    <div class="card" style="width: 500px; height: 400px;">
                    <img width="200px" class="card-img-top" src="{{asset('img/'.$elem->src)}}" alt="Card image cap">
                    <div class="card-body">
                      <p class="card-text text-dark text-justify">{{$elem->texte}}</p>
                    </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
