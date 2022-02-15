<section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper">{{$surTitreStore1}} </span>
              <span class="section-heading-lower">{{$titreStore1}} </span>
            </h2>
            <ul class="list-unstyled list-hours mb-5 text-left mx-auto">

             @foreach ($day as $item)
             <li class="list-unstyled-item list-hours-item d-flex">
               {{$item->day}}
               <span class="ml-auto">{{$item->hour}}</span>
             </li>   
             @endforeach
             
            </ul>
            <p class="address mb-5">
              <em>
                <strong>{{$sousSection1Store[0]->sousSection1}} </strong>
                <br>
                {{$sousSection1Store[0]->sousSection2}}
              </em>
            </p>
            <p class="mb-0">
              <small>
                <em>{{$sousSection1Store[0]->sousSection3}}</em>
              </small>
              <br>
              {{$sousSection1Store[0]->sousSection4}}
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
