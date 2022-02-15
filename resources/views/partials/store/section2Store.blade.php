<section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="img/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{$section2Store[0]->surTitre}} </span>
                <span class="section-heading-lower">{{$section2Store[0]->titre}}</span>
              </h2>
              <p>{{$section2Store[0]->texte1}}</p>
              <p class="mb-0">{!!$section2Store[0]->texte2!!}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
