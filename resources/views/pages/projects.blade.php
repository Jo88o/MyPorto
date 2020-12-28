    <!-- Portfolio Section-->
    <section class="page-section portfolio" id="projects">
        <div class="justify-content-center">
            <!-- Portfolio Section Heading-->
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Projects</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <div class="row justify-content-center">
                @foreach ($projects as $elem)
                <div class="card m-5" style="width: 18rem;">
                    {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                    <div class="card-body">
                      <img height="200px" width="250px" src="{{asset('img/'.$elem->src)}}" alt="">
                      <h3 class="card-title mt-3">{{$elem->nom}}</h3>
                      <p class="card-text mt-3">{{$elem->description}}</p>
                      <p class="card-text mt-3">#{{$elem->tags}}</p>
                      <a href="https://github.com/Jo88o?tab=repositories" class="btn btn-primary">Vers GitHub</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
