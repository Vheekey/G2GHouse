@include('header')
@include('programme');

<link rel="stylesheet" href="css/welcome.css">

<style>
    .jumbotron {
    background-image: url("images/c3.jpg");
    position: relative;
}
.jumbotron:before{
    content: '';
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background: rgba(0,0,0,0.7);
}

.carousel-inner img {
  
  object-fit: fill !important;
}

.modal-body {
     background-color: whitesmoke !important;
     padding: 0 !important;
}

html {
  scroll-behavior: smooth;
}

</style>
<div class="container-fluid mt-5" style="padding-top:2%">
@include('flashmessage')
    <div id="slide" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#slide" data-slide-to="0" class="active"></li>
        <li data-target="#slide" data-slide-to="1"></li>
        <li data-target="#slide" data-slide-to="2"></li>
        <li data-target="#slide" data-slide-to="3"></li>
        <li data-target="#slide" data-slide-to="4"></li>
        <li data-target="#slide" data-slide-to="5"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="images/c1.jpg" alt="G2G" width="100%" class="imgH">
        </div>
        <div class="carousel-item">
        <img src="images/F.png" alt="G2G" class="imgH" width="100%">
        </div>        
        <div class="carousel-item">
        <img src="images/B.png" alt="G2G" width="100%" class="imgH">
        </div>
        <div class="carousel-item">
        <img src="images/C.png" alt="G2G" width="100%" class="imgH">
        </div>
        <div class="carousel-item">
        <img src="images/D.png" alt="G2G" width="100%" class="imgH">
        </div>
        <div class="carousel-item">
        <img src="images/E.png" alt="G2G" width="100%" class="imgH">
        </div>
        <div class="carousel-item">
        <img src="images/A.png" alt="G2G" width="100%" class="imgH">
        </div>
        <div class="carousel-item">
        <img src="images/G.png" alt="G2G" width="100%" class="imgH">
        </div>       
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#slide" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#slide" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>

    </div>

    <div class="  mt-5" id = "services" style="padding-top:3%; scroll-behavior: smooth;">
        <div class=" p-3 shadow mb-5 bg-white rounded  w-100">
            <div class=" ">
                <div class="row" style="padding-top:2%; padding-bottom:1%">
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                        <h4 style="font-weight:bold; color: #343a40;  " class="text-center">Services</h4>
                    </div>
                    <div class="col-md-4" style="">
                        <!-- <div class="card-text"> -->
                            <p>
                                <span class="" style="font-weight:bold; color:orangered;"> First Sundays </span> <br>
                                Sunday School (8am - 9am) <br>
                                Thanksgiving Service (9am - 12pm)
                            </p>
                            <p>
                                <span class="" style="font-weight:bold; color:orangered;"> Second Sundays - Impact Service </span> <br>
                                First Service (7.30am - 9.00am) <br/>
                                Sunday School (9.00am - 9.45am) <br/>
                                Second Service (10.00am - 11.45am)
                            </p>
                            <p>
                                <span class="" style="font-weight:bold; color:orangered;"> Third Sundays - Expression Service </span> <br>
                                First Service (7.30am - 9.00am) <br/>
                                Sunday School (9.00am - 9.45am) <br/>
                                Second Service (10.00am - 11.45am)
                            </p>
                            <p>
                                <span class="" style="font-weight:bold; color:orangered;"> Last Sundays - Exousia Service </span> <br>
                                First Service (7.30am - 9.00am) <br/>
                                Sunday School (9.00am - 9.45am) <br/>
                                Second Service (10.00am - 11.45am)
                            </p>
                            <p>
                                <span class="" style="font-weight:bold; color:orangered;"> Refreshing Service </span> <br>
                                Every Wednesday (6.30pm - 8.30pm) 
                                
                            </p>
                            <p>
                                <span class="" style="font-weight:bold; color:orangered;"> Prayer and Power Night  </span> <br>
                                Every Last day of the month (11pm - 1am) 
                                
                            </p>
                            
                           
                        <!-- </div> -->
                    </div>
                    <div class="col-md-2"></div>

                </div>
            
            
                
            </div>                
            
        </div>
    </div>

    <div class="jumbotron  " id="offerings" style="scroll-behavior: smooth;">
        <div class="jumbo_text">
            <h2 class="text-center" style="font-weight:bold;">Offerings / Tithes</h2>
            <div class="row mt-3">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <div class="card shadow rounded">
                        <div class="card-body text-dark text-center mb-5" style="padding-bottom:4%">
                            <h4 class="card-title " style="font-weight: bold; color:orangered;"> Pay via bank transfer</h4>
                            <p>
                                Guaranty Trust Bank (GTB) <br>
                                0000000000
                            </p>
                            <p>
                                Guaranty Trust Bank (GTB) <br>
                                0000000000
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow rounded">
                        <div class="card-body text-dark text-center">
                            <h5 class="card-title " style="font-weight: bold; color:orangered;"> Pay Online</h5>
                            <div class="" style="">
                                <form action="https://voguepay.com/pay/" method="post">
                                    <label for="" style="font-weight: bold; "> Amount </label>
                                    <input type="text" name="total" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))" class="form-control" id="">
                                    <label for="" style="font-weight: bold; "> Choose Currency </label>
                                    <select name="cur" class="form-control" >
                                    <option value="NGN">₦ - Nigerian Naira</option>
                                    <option value="USD">$ - US Dollar</option>
                                    <option value="EUR">€ - Euro</option>
                                    <option value="GBP">£ - British Pound</option>
                                    </select>
                                    <input type="hidden" name="v_merchant_id" value="8302-0053889" />
                                    <input type="hidden" name="notify_url" value="http://127.0.0.1:8001/notifications" />
                                    <input type="hidden" name="success_url" value="http://127.0.0.1:8001/" />
                                    <input type="hidden" name="fail_url" value="http://127.0.0.1:8001/" />
                                    <input type="hidden" name="memo" value="Glory2Glory House" />
                                    <input type="hidden" name="developer_code" value="5e1fb6c076396" />
                                    <input type="submit" value="PAY" class="mt-1 btn btn-md btn-dark ">
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow rounded">
                        <div class="card-body text-dark text-center">
                            <h4 class="card-title " style="font-weight: bold; color:orangered;"> Pay Via USSD</h4>
                            <div class="mt-3 mb-4" style="">
                                <p>
                                    Offerings: *737*32*Amount*184#
                                </p>
                                <p>
                                    Tithes: *737*32*Amount*183#
                                </p>
                                <p>
                                    Seed of Faith: *737*32*Amount*185#
                                </p>
                                <p>
                                    Thanksgiving: *737*32*Amount*182#
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
        

    </div>
    <div id = "contact" style="scroll-behavior: smooth;">
        <div class="p-3 shadow mb-5 bg-white rounded  w-100">
            <h3 style="font-weight:bold; color:orangered;" class="text-center mt-5">Contact Us</h3>
            <div class="row mt-3 mb-3 justify-content-center">
                <div class="col-md-5 ml-5">
                    <h4 class="mb-5 " style="font-weight:bold">Get in Touch with Us</h4>
                    <p >
                        <i class="fa fa-home " aria-hidden="true"></i>
                        5 Salami Olonade, Isheri, Olowoira, Berger.
                    </p>
                    <p>
                        <i class="fa fa-phone " aria-hidden="true"></i>
                        +234 8000000, +234 8000000
                    </p>
                    <p >
                        <i class="fa fa-envelope " aria-hidden="true"></i>
                        <a  href="mailto:glory2glory@gmail.com?Subject=Hello%20Pastor" target="_top" >
                        glory2glory@gmail.com </a>
                    </p>
                    <p class="" style="color:orangered;">
                        <a href="https://www.instagram.com/g2ghouse/?hl=en " target="_blank" style="color:orangered;"> <i class="fa fa-instagram fa-2x mr-3" aria-hidden="true"></i> </a>
                        <a href="https://web.facebook.com/G2GHOUSE " target="_blank" style="color:orangered;"> <i class="fa fa-facebook fa-2x mr-3" aria-hidden="true"></i> </a>
                        <a href="https://www.youtube.com/channel/UCR0bDlLIEak6zJoWWeTxP2g " target="_blank" style="color:orangered;"> <i class="fa fa-youtube fa-2x mr-3" aria-hidden="true"></i> </a>
                        <a href="https://twitter.com/g2ghouse?lang=en " target="_blank" style="color:orangered;"> <i class="fa fa-twitter fa-2x " aria-hidden="true"></i> </a>
                    </p>
                </div>
                <!-- <div class="col-md-1 d-sm-none " style="height:80%; ">
                    <span style="border-left:1px solid grey; "></span>
                </div> -->
                <div class="col-md-4 ml-5" >
                    <h4 style="font-weight:bold">Let's hear from you</h4>
                    <form action="/contact" method="POST">
                        <label for="">Full Name</label>
                        <input type="text" name="fname" class="form-control" id="">
                        <label for="">Email</label>
                        <input type="email" name="mnail" class="form-control" id="">
                        <label for="">Phone Number</label>
                        <input type="text" name="phone" class="form-control" id="" onkeypress="return (event.charCode !=8 && event.charCode ==0 || (event.charCode >= 48 && event.charCode <= 57))"> 
                        <label for="">Message</label>
                        <textarea name="message" id="" cols="30" rows="10" class="form-control"></textarea>
                        <input type="hidden" name="_token" id="" value="{{csrf_token()}}" class="">
                        <p></p>
                        <input type="submit" value="Send" class="btn btn-lg btn-dark pull-right">
                    </form>
                </div>
                
            </div>

        </div>
    </div>
    <div id = "attend" style="scroll-behavior: smooth;">
        <div class="p-3 shadow mb-5 bg-white rounded  w-100 jumbotron" style="">
            <h3 style="font-weight:bold;" class="text-center mt-5 jumbo_text">Be in service weekly even when you're away </h3>
            <div class="row mt-3 mb-3 justify-content-center ">
                <div class="col-md-5 card">
                    <div class="card-body">
                        <span style="font-weight:bold; color:orangered;" id="befDate"></span>  
                        <br/>
                        <span style="color:black; font-weight:" id="befDesc"></span>  
                        <p></p>
                        <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" id="befLink" width="100%" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-1" ></div>
                <div class="col-md-5 card " >
                <div class="card-body">
                    <span style="font-weight:bold; color:orangered;" id="lastDate"></span>  
                    <br/>
                    <span style="color:black; font-weight:" id="lastDesc"></span>  
                    <p></p>
                    <iframe src="https://www.youtube.com/embed/tgbNymZ7vqY" id="lastLink" width="100%" frameborder="0" allowfullscreen></iframe>
                </div>
                
            </div>

        </div>
    </div>

    <div>
        <div class="fixed-bottom ml-3 mb-5" style="color:orangered; z-index: 3; ">
            <a href="https://www.instagram.com/g2ghouse/?hl=en" target="_blank" style="color:orangered;"> <i class="fa fa-instagram fa-2x mr-3" aria-hidden="true"></i> </a>
            <p></p>
            <a href="https://web.facebook.com/G2GHOUSE" target="_blank" style="color:orangered;"> <i class="fa fa-facebook fa-2x mr-3" aria-hidden="true"></i> </a>
            <p></p>
            <a href="https://www.youtube.com/channel/UCR0bDlLIEak6zJoWWeTxP2g" target="_blank" style="color:orangered;"> <i class="fa fa-youtube fa-2x mr-3" aria-hidden="true"></i> </a>
            <p></p>
            <a href="https://twitter.com/g2ghouse?lang=en" target="_blank" style="color:orangered;"> <i class="fa fa-twitter fa-2x " aria-hidden="true"></i> </a>
        </div>
    </div>
</div>
@include('footer')
