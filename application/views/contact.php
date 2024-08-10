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
        border-radius: 15px;
        background-color: transparent;

        color: #fff;
    }


    .card h4 {
        font-weight: 600;
        font-size: 18px;
    }

    .card p {

        font-size: 14px;
    }



    .btn1 {
        padding: 10px 30px;
        color: #000;
        border: 1px solid #000;
        border-radius: 10px;
        background: none;
    }



    @media (max-width: 768px) {
        .desk {
            display: none;
        }

        .pr-mob {
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



        .mob-c {
            margin-top: 10px;
            text-align: center;
        }


    }

    .card {

        background-color: #fff;

        color: #000;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        transition: 0.3s;
    }
</style>

<!-- ======= Hero Section ======= -->
<section>
    <div class="image-container">
        <img src="assets/img/cont.png" alt="Banner Image" class="main-banner">
        <div class="banner-txt">
            <p class="newh3 mb-0">Connect with us</p>

            <p class="bannerp " style=" letter-spacing: 3.5px;">CONTACT US</p>

        </div>
    </div>
</section>

<div class="iii">
    <img src="assets/img/cont1.png" alt="" width="100%">
</div>
<section class=" pb-5">
    <div class="container card ">

        
        <div class="row pp" style="justify-content: space-around;    align-items: center;">
            <div class="col-md-6 mt-md-3 mt-0">
                <h2 class="newh2 mb-0">Send Us a Message.</h2>
                <form action="CTA_mail" method="post" role="form" class="php-email-form mt-3">
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <label for="" class="h5">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                required>
                        </div>

                        <div class="col-md-12 form-group mt-3">
                            <label for="" class="h5">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                required>
                        </div>



                    </div>

                  
                    <div class="form-group mt-3">
                        <label for="" class="h5">Message</label>
                        <textarea class="form-control" name="message" rows="5" placeholder="Message"
                            required></textarea>
                    </div>
                    
                    <div class="text-center mt-4"><button type="submit" class="btn1">Send
                            Message</button></div>
                </form>
            </div>
            <div class="col-md-4 mt-md-3 mt-0">
                <img src="assets/img/contt1.png" alt="" width="100%">
            </div>


        </div>

    </div>
</section>
<hr>