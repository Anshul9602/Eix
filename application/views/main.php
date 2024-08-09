<style>
  .cusbtn {
    font-size: 22px;
    background-color: #1A406D;
    font-weight: 600;
    height: 100%;
    padding: 10%;
    width: 100%;
    color: #fff;
    border-radius: 16px;
    border: none;
  }

  .mob {
    display: none;
  }

  .card {
    padding: 20px;
    border-radius: 102px;
    background-color: transparent;
    border: 1px solid #fff;
    color: #fff;
  }

  .sp1 .is-active .card {
    padding: 20px;
    border-radius: 102px;
    background-color: #fff;
    border: 1px solid #fff;
    color: #000;
  }

  .card h4 {
    font-weight: 600;
    font-size: 18px;
  }

  .card p {

    font-size: 14px;
  }


  .splide__list {
    align-items: center;
  }

  .sp1 .is-active img {
    width: 100% !important;
  }

  .sp1 .is-active h4 {
    font-size: 24px;
  }

  .sp1 .is-active p {
    font-size: 18px;
  }

  .btn1 {
    padding: 10px 30px;
    color: #fff;
    border: 1px solid #fff;
    border-radius: 10px;
    background: none;
  }

  .sp1 .is-active .btn1 {
    padding: 10px 30px;
    color: #1A406D;
    border: 1px solid #1A406D;
    border-radius: 10px;
    background: none;
  }

  .splide__arrows {
    position: absolute;
    right: 28%;
    top: -20%;
  }

  .splide__arrow--next {

    left: 60px;
  }

  @media (max-width: 768px) {
    .desk {
      display: none;
    }
    .pr-mob{
      padding: 0 !important;
      margin-top: 20px;
    
    }
    .ml10 {
      margin-left: 0px !important;
      padding-left: 10px;
      padding-right: 10px;
    }

    .mob {
      display: block;
    }



    .sp1 .is-active img {
      width: 100% !important;
    }

    .sp1 .is-active h4 {

      font-size: 16px;
    }

    .sp1 .is-active p {

      font-size: 14px;
    }

    .sp1 .is-active .btn1 {
      padding: 7px 15px;


    }

    .mob-c {
      margin-top: 10px;
      text-align: center;
    }


  }
</style>

<!-- ======= Hero Section ======= -->
<section>
  <div class="image-container">
    <img src="assets/img/banner.png" alt="Banner Image" class="main-banner">
    <div class="banner-txt">
      <p class="newh2 mb-0">Driving Growth </p>
      <p class="newh2 ">through Strategic Investments</p>
      <p class="bannerp " style=" letter-spacing: 3.5px;">Creating sustainable value through innovation and
        expertise.</p>
      <a class="wTop bannerH2 " href="">Discover more</a>
    </div>
  </div>
</section>


<main id="main">

  <!-- ======= About Section ======= -->
  <section class="no-top about mt-md-5 mt-4 pb-md-5 pb-4">
    <div class="container about1 py-4">
      <div class="row " style="justify-content: space-around;">
        <div class="col-md-6">
          <h3 class="bold" style="font-weight: 600;color: #1A406D;">About</h3>
          <h1 class="newh1 mt-5" style="text-transform: uppercase;color:black;">
            EIX<br> Investment
          </h1>
          <p style="color:#848484;">Your Growth, Our Commitment</p>
        </div>
        <div class="col-md-4 mt-md-0 mt-3" style="justify-items: center;align-items: center;display: flex;">

          <p style="color:#232323;">EIX Investment is a dynamic investment firm based in the UAE, focused on creating
            value through strategic investments in diverse sectors. Our expertise lies in identifying high-potential
            opportunities and leveraging our deep industry knowledge to maximize returns for our stakeholders.</p>

        </div>
      </div>
    </div>

  </section>

  <section class="pt-5" style="background-color:#1A406D ;    position: relative;">
    <div class="ml10 pt-md-5 pb-md-5" style="margin-left: 10%;">
      <h3 class="newh3" style="color:#fff;">Services</h3>
      <h4 class="mt-4" style="color:#A6C0E0;">Our strengths</h4>

      <div class="splide  sp1 mt-5 pt-md-5 pb-5" role="group" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
          <ul class="splide__list">
            <li class="splide__slide">
              <div class="card">
                <div class="row">
                  <div class="col-md-5 m-auto text-center">
                    <img src="assets/img/s1.png" alt="" width="80%">
                  </div>
                  <div class="col-md-7" style="align-items: center;    display: flex;">
                    <div class="mob-c">
                      <h4>Equity Investments</h4>
                      <p>We invest in promising startups and established companies across various sectors, providing the
                        capital they need to grow and succeed.</p>
                      <a href=""><button class="btn1" style="">Learn
                          more</button></a>
                    </div>

                  </div>
                </div>
              </div>

            </li>
            <li class="splide__slide">
              <div class="card">
                <div class="row">
                  <div class="col-md-5">
                    <img src="assets/img/s2.png" alt="" width="80%">
                  </div>
                  <div class="col-md-7" style="align-items: center;    display: flex;">
                    <div class="mob-c">
                      <h4>Debt Financing</h4>
                      <p>We offer a range of debt financing solutions, including loans and other debt instruments, to
                        businesses seeking to expand or optimize their operations.</p>
                      <a href=""><button class="btn1">Learn more</button></a>
                    </div>

                  </div>
                </div>
              </div>

            </li>
            <li class="splide__slide">
              <div class="card">
                <div class="row">
                  <div class="col-md-5">
                    <img src="assets/img/s3.png" alt="" width="80%">
                  </div>
                  <div class="col-md-7" style="align-items: center;    display: flex;">
                    <div class="mob-c">
                      <h4>Asset Management</h4>
                      <p>Our asset management services are designed to help clients maximize returns on their investment
                        portfolios through strategic asset allocation...</p>
                      <a href=""><button class="btn1">Learn more</button></a>
                    </div>

                  </div>
                </div>
              </div>

            </li>
            <li class="splide__slide">
              <div class="card">
                <div class="row">
                  <div class="col-md-5">
                    <img src="assets/img/s4.png" alt="" width="80%">
                  </div>
                  <div class="col-md-7" style="align-items: center;    display: flex;">
                    <div class="mob-c">
                      <h4>Advisory Services</h4>
                      <p>We provide expert financial and investment advice to businesses and individuals, helping them
                        make informed decisions and achieve their financial objectives.</p>
                      <a href=""><button class="btn1">Learn more</button></a>
                    </div>

                  </div>
                </div>
              </div>

            </li>

          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- End About Section -->
  <div class="row section-bg p-0" style="    width: 100%;">
    <div class="col-md-4 " style="position: relative;">
      <img src="assets/img/why.png" alt="" width="100%">
      <div class="cont" style="position: absolute;top:10%;left:10%;color:#fff;">
        <h2 class="newh2" style="">Why Choose Us?</h2>
        <h4 class="mt-4">Our strengths</h4>
      </div>
    </div>
    <div class="col-md-8 mt-md-3 mt-3 " style="align-items: center;display: flex;">
      <div class="container">
        <div class="row mspace d-flex justify-content-between">
          <div class="col-md-5 pt-4 p-md-0 d-flex justify-content-end">
            <div class="col-md-2 text-center">
              <img src="assets/img/icons/1.png" alt="">
            </div>
            <div class="col-md-8">
              <h5 class=" u1 mb-0">Strategic Expertise</h5>
              <p class="g">Leveraging deep industry knowledge to identify high-potential opportunities.</p>
            </div>
          </div>
          <div class="col-md-6 pt-4 p-md-0 d-flex ">
            <div class="col-md-2 text-center">
              <img src="assets/img/icons/2.png" alt="">
            </div>
            <div class="col-md-8">
              <h5 class=" u1 mb-0">Innovative Approach</h5>
              <p class="g">Employing creative strategies to maximize returns.</p>
            </div>
          </div>

        </div>

        <div class="row no-top d-flex justify-content-between">
          <div class="col-md-5 pt-4 p-md-0 d-flex justify-content-end">
            <div class="col-md-2 text-center">
              <img src="assets/img/icons/3.png" alt="">
            </div>
            <div class="col-md-8">
              <h5 class=" u1 mb-0">Client-Centric</h5>
              <p class="g">Building long-term relationships based on trust and transparency.</p>
            </div>
          </div>
          <div class="col-md-6  pt-4 p-md-0  d-flex ">
            <div class="col-md-2 text-center">
              <img src="assets/img/icons/4.png" alt="">
            </div>
            <div class="col-md-8">
              <h5 class=" u1 mb-0">Sustainable Impact</h5>
              <p class="g">Committing to responsible investments that positively impact society and the environment.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <section class="desk">
    <div class="mt-md-5 pt-md-5 pb-md-5 pb-3" style="margin-left: 10%;">
      <div class="row">
        <div class="col-md-7">
          <h1 class="newh" style="color: #1A406D;font-size:85px;font-weight:700;"><span style="color:#A6c0e0;">Let's
              build </span><br>
            <span style="color: #647d9c;">Your FUTURE,</span>
            Together.
          </h1>
        </div>
        <div class="col-md-2 ">
          <a href="Contact"><button class="cusbtn">Connect <br>with us</button></a>
        </div>
        <div class="col-md-3" style="align-items: center;display: flex;">
          <div>
            <p>One click away</p>
            <img src="assets/img/aroo.png" alt="" width="100%">
          </div>

        </div>
        <div class="col-md-9 mt-5 pb-5">
          <p style="font-size: 20px;">At EIX Investment, your success is our mission. We understand the unique challenges you face and are dedicated to providing the strategic investments and expert guidance you need to turn your vision into reality. Our team is committed to offering personalized solutions that drive growth and deliver exceptional results. Partner with us to navigate the complexities of the financial landscape and achieve your goals with confidence. Together, we can build a prosperous future for you and your business.</p>
      </div>
      </div>
    </div>
  </section>
  <div class="mob">
    <a href="Contact"><img src="assets/img/let.png" alt="" width="100%"></a>
  </div>
  <section>
    <div class="container mt-md-5">
      <h3 class="newh3" style="color:#1A406D;">Insights</h3>
      <h5 class="mt-4">News</h5>
      <br>
      <div class="row mt-5">
        <div class="col-md-6">
          <div class="pr-mob" style="padding-right:20px;">
            <img src="assets/img/in1.png" alt="" width="100%">
            <br>
            <div class="row mt-4 " style="justify-content: space-between;">
              <div class="col-md-4 col-8 text-start ">
                <div>
                  <a href=""><button
                      style="padding: 10px 30px;color:#1A406D;border: 1px solid #1A406D;border-radius: 10px;background: none;">Read
                      more</button></a>
                </div>

              </div>
              <div class="col-md-4 col-4 text-end">
                <img src="assets/img/aro.png" alt="" style="width: 50px;">
              </div>
            </div>
          </div>

        </div>
        <div class="col-md-6">
          <div class="pr-mob" style="padding-left:20px;">
            <img src="assets/img/in1.png" alt="" width="100%">
            <br>
            <div class="row mt-4 " style="justify-content: space-between;">
              <div class="col-md-4 col-8 text-start">
                <div>
                  <a href=""><button
                      style="padding: 10px 30px;color:#1A406D;border: 1px solid #1A406D;border-radius: 10px;background: none;">Read
                      more</button></a>
                </div>

              </div>
              <div class="col-md-4 col-4 text-end">
                <img src="assets/img/aro.png" alt="" style="width: 50px;">
              </div>
            </div>
          </div>

        </div>


      </div>
    </div>
  </section>


  <!-- ======= Career Section ======= -->
  <section class="p-0 mt-5">

    <div class="row">
      <div class="col-md-7 p-0">
        <img src="assets/img/car.png" alt="" style="width:100%;">
      </div>
      <div class="col-md-5 p-0" style="background-color: #000;align-items: center;display: flex;color: #fff;">
        <div class="p-md-5 p-3 m-md-5 m-3">
          <h5 class="size1">Careers</h5>
          <p class="g">Join Our Team</p>
          <h6 class="pt-4 pb-5 ">We are looking for talented individuals to join our innovative team. Explore current
            job
            openings and become a part of EIX Investment.</h6>
          <a class="" href=""
            style="padding: 10px 30px;color:#fff;border: 1px solid #fff;border-radius: 10px;background: none;">Join
            now</a>
        </div>

      </div>
    </div>
    </div>
  </section>
  <!-- End Career Section -->



</main><!-- End #main -->


<script>document.addEventListener('DOMContentLoaded', function () {


    var splide = new Splide('.sp1', {
      perPage: 2.2,
      focus: 0,
      pagination: true,

      loop: true,
      perMove: 1,
      gap: "30px",


      breakpoints: {

        768: {
          perPage: 3,
        },
        576: {
          perPage: 1.2,
        },
      },
    });

    splide.mount();
  });</script>