
@extends('layout.main')

@section('body')
        <!--jumbotron-->

        <section class="jumbotron mt-5" style="text-align: center">
            <img src="{{ asset('img/profile.png') }}" alt="Farrel Aqeel" width="200" class="rounded-circle mt-4" />
            <h1 class="nama">Farrel Aqeel Danendra</h1>
            <p class="lead">STUDENT | SMKN 1 SURABAYA</p>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
              <path
                fill="#fff"
                fill-opacity="1"
                d="M0,32L60,26.7C120,21,240,11,360,58.7C480,107,600,213,720,218.7C840,224,960,128,1080,101.3C1200,75,1320,117,1380,138.7L1440,160L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
              ></path>
            </svg>
          </section>
      
          <!--akhir jumbotron-->
@endsection



    {{-- <!--about-->

    <section id="about">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>About me</h2>
          </div>
        </div>
        <div class="row justify-content-center text-center">
          <div class="col-md-4">
            <p>Lorem atur, natus at ea accusantium doloremque incidunt tenetur aliquam, ex qui veritatis magni adipisci amet mollitia perspiciatis aperiam reiciendis alias. Consequuntur!</p>
          </div>
          <div class="col-md-4">
            <p>Lorem ipsum, dolor sit amet atis nam porro? Voluptates harum odit architecto praesentium reprehenderit cum esse recusandae, neque dolorem numquam maiores tempora sint?</p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fcfdce"
          fill-opacity="1"
          d="M0,288L48,272C96,256,192,224,288,197.3C384,171,480,149,576,165.3C672,181,768,235,864,250.7C960,267,1056,245,1152,250.7C1248,256,1344,288,1392,304L1440,320L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!--about-->

    <!--projrct-->

    <section id="projek">
      <div class="container">
        <div class="row text-center">
          <div class="col mb-3">
            <h2 style="font-size: 35px; font-family: cambria">MY PROJECT</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/sandal1.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/sandal2.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card">
              <img src="img/sandal3.jpg" class="card-img-top" alt="..." />
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,32L26.7,48C53.3,64,107,96,160,128C213.3,160,267,192,320,186.7C373.3,181,427,139,480,106.7C533.3,75,587,53,640,64C693.3,75,747,117,800,117.3C853.3,117,907,75,960,80C1013.3,85,1067,139,1120,176C1173.3,213,1227,235,1280,229.3C1333.3,224,1387,192,1413,176L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!--projrct-->

    <!--contact-->

    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>Contact me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-8">
            <form>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">input message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="rgb(252, 253, 206)"
          fill-opacity="1"
          d="M0,32L26.7,48C53.3,64,107,96,160,128C213.3,160,267,192,320,186.7C373.3,181,427,139,480,106.7C533.3,75,587,53,640,64C693.3,75,747,117,800,117.3C853.3,117,907,75,960,80C1013.3,85,1067,139,1120,176C1173.3,213,1227,235,1280,229.3C1333.3,224,1387,192,1413,176L1440,160L1440,320L1413.3,320C1386.7,320,1333,320,1280,320C1226.7,320,1173,320,1120,320C1066.7,320,1013,320,960,320C906.7,320,853,320,800,320C746.7,320,693,320,640,320C586.7,320,533,320,480,320C426.7,320,373,320,320,320C266.7,320,213,320,160,320C106.7,320,53,320,27,320L0,320Z"
        ></path>
      </svg>
    </section>

    <!--akhir contact-->

    <div class="footer">
      <p>Created by Farrel Aqeel</p>
    </div> --}}

   
