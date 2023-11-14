<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.min.css">
    <title>Hello, world!</title>

<style>
     
.main{
    background-image: url('img/couple.png');
    background-repeat: no-repeat;
    background-size: cover;
    /* background-position: ; */
    position: absolue; 
   }

.form-box{
    background-color:rgba(255,255,255, 0.8);
    width:556px;
    height:540px;
    margin-top:101px;
    margin-bottom:81px;
    /* padding: 12px, 10px, 12px, 10px; */
    border-radius: 20px;
    border:1px solid white;
   }

.form-box input{
        border-radius:10px;
   }

.form-box input:focus{
    box-shadow:0 0 0;
    border:1px solid #f6288c;
}

.form-box select{
    border-radius:10px;
}


.div{
    display:flex;
    justify-content:center;
    align-items:center;
}


.button{
    display:flex;
    justify-content:center;
    border-radius:10px;
}

/* responsive */

@media screen and (max-width: 1000px) {
    body{
        width: 100%;
    }
    .main{
       width: 100%;
    }
    .main .container{
        overflow: hidden;
    }
    .form-box{
       width: 100%;
    } 
    
}


/* The actual timeline (the vertical ruler) */
.main-timeline {
  position: relative;
}

/* The actual timeline (the vertical ruler) */
.main-timeline::before {
  content: "";
  position: absolute;
  width: 2px;
  background-color: black;
  top: 0;
  bottom: 0;
  left: 50%;

  margin-left: -3px;

}


/* Container around content */
.timeline {
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.timeline::after {
  content: "";
  position: absolute;
  width: 25px;
  height: 25px;
  right: -13px;
  background-color: black;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}



/* Place the container to the left */
.left {
  padding: 0px 40px 20px 0px;
  left: 0;
}

/* Place the container to the right */
.right {
  padding: 0px 0px 20px 40px;
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  right: 30px;
  border: medium  white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  position: absolute;
  top: 18px;
  z-index: 1;
  left: 30px;
  border: medium  white;
  border-width: 10px 10px 10px 0; */
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -12px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .main-timeline::after {
    left: 31px;
  }

  /* Full-width containers */
  .timeline {
    width: 100%;
    padding-left: 70px;
    padding-right: 25px;
  }

  /* Make sure that all arrows are pointing leftwards */
  .timeline::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after,
  .right::after {
    left: 18px;
  }

  .left::before {
    right: auto;
  }

  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}

.banner-card{
    background-image: url(img/couple.png);
}
.two .banner-card{
    position: absolute;
}

.two .banner-body{
    position:relative ;
    top:5px;
}

.bon{
    height:700px;
    width:455px;
}
@media screen and (max-width:600px){
    .mains{
        display:flex;
        flex-direction:column;
        justify-content:center;
    }
    .card-tes{
        width:400px;
    }
    .bodys{
        display:flex;
        flex-direction:column;
        justify-content:center;
        width:343px;
        margin:23px;
    }
   
}

</style>

  </head>
  <body>
    <!-- Main_landlord -->
    <section  class="main">
        <div class="container">
            <div class="row col-sm-12 justify-content-end">
                <div class="col-lg-6 col-md-10 col-sm-12">
                    <div class="form-box px-5">
                        <form action="" method="post">
                            <h2 class="text-center">Earn more from your <br>property,do less</h2>
                            <p class="text-center">Find out if your property meets our criteria</p>
                            <input type="text" name="" placeholder="Name*" class="form-control mb-3">     
                            <input type="text" name="" placeholder="Email*" class="form-control mb-3">    
                            <input type="text" name="" placeholder="Phone number*" class="form-control mb-3">      
                            <h5>Property details</h5>
                            <div class="row">
                                <div class="col">
                                    <select class="form-select mb-3 text-secondary">
                                        <option>City*</option>
                                        <option value="town-1">town-1</option>
                                        <option value="town-2">town-2</option>
                                        <option value="town-3">town-3</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select mb-3 text-secondary">
                                        <option>Area*</option>
                                        <option value="">zone-1</option>
                                        <option value="">zone-2</option>
                                        <option value="">zone-3</option>
                                    </select> 
                                </div>
                            </div>
                            <div class="text mb-3">
                                <input type="text" name="" placeholder="# of bedroom*" class="form-control mb-3">
                            </div>
                            <br>
                            <div class="div col-12">
                                <button type="submit" class=" button btn btn-success">Submit</button>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
         </div>   
    </section>
    <section id="package" class="pt-5 pb-5">
        <div class="container-xl">
            <div class="row">

                <div class="col-lg">
                    <div class="card" style="background-color:#D3D3D3">
                        <div class="card-body">
                            <i class="fa solid fa-lock text-dark fs-1"></i>
                            <h4 class="card-title">Guaranteed rent</h4>
                            <p class="card-text">We do the searching for you</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card" style="background-color:#D3D3D3">
                        <div class="card-body">
                            <i class="fa solid fa-tag text-dark fs-1"></i>
                            <h4 class="card-title">No fees</h4>
                            <p class="card-text">Preferred partner rates</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card" style="background-color:#D3D3D3">
                        <div class="card-body">
                            <i class="bi bi-buildings-fill text-dark fs-2"></i>
                            <h4 class="card-title">No voids</h4>
                            <p class="card-text">Preferred partner rates</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="card" style="background-color:#D3D3D3">
                        <div class="card-body">
                            <i class="fa solid fas-access-time-24-filled bg-dark fs-5" style="height:-14px;padding-top:-22px"></i>
                            <img src="img/24.png" alt="">
                            <h4 class="card-title">24/7 Maintenance</h4>
                            <p class="card-text">Extend on short notice</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section style="background-color: #B0F2B6;">
        <div class="container py-5">
            <div class="main-timeline">
                <div class="timeline left">
                    <div class="card">
                    <i class="fa-solid fa-envelope text-dark fs-1 fw-5 text-end px-4"></i>
                    <div class="card-body p-4">     
                        <h3 class="text-end">Get in touch</h3>
                        <p class="text-end mb-0">Ut id cras malesuada dolor.Consecteur eget malesuada enim.</p>
                        <p class="text-end">massa viverra mauris</p>
                    </div>
                </div>
            </div>
            <div class="timeline right">
                <div class="card">
                <i class="bi bi-people-fill text-dark fs-1 fw-5 text-start px-4"></i>
                <div class="card-body p-4">
                    <h3>Let's chat</h3>
                    <p class="mb-0">Euismod commodo feugiat purus egetas diam.Facilisi sed</p>
                    <p class="text-start">senectus consequat risus.Porta purus nec dui odio vehicula.</p></p>
                </div>
                </div>
            </div>
            <div class="timeline left">
                <div class="card">
                <i class="bi bi-eye-fill text-dark fs-1 fw-5 text-end px-4"></i>
                <div class="card-body p-4">
                    <h3 class="text-end">Property viewing</h3>
                    <p class="mb-0 text-end"> Sit lectus parturient diam ac congue elementum praesent blandit.
                        Tristique ut ut venenatis tortor,id elementum.Integer tristique
                        viverra enim libero.</p>
                </div>
                </div>
            </div>
            <div class="timeline right">
                <div class="card">
                <i class="fa-solid fa-swatchbook text-dark fs-1 fw-5 text-start px-4"></i>
                <div class="card-body p-4">
                    <h3>Time to decorate</h3>
                    <p class="mb-0">Adipiscing magna ut justo, et.sem 
                        pellentesque eu risus euismod et.Sapien est tellus dapidus sed varius lorem tellus, turpis
                        nisl.Elementum scelerisque elit in nibh aliquet phasellus..</p>
                </div>
                </div>
            </div>
            <div class="timeline left">
                <div class="card">
                <i class="bi bi-suitcase-lg-fill text-dark fs-1 fw-5 text-end px-4"></i>
                <div class="card-body p-4">
                    <h3 class="text-end" >Moving in & Moving up!</h3>
                    <p class="text-center mb-0">Ut id cras malesuada dolor.Consecteur eget malesuada enim</p>
                    <p class="text-end">massa viverra mauris</p>
                </div>
                </div>
            </div>
            <div class="timeline right">
                <div class="card">
                <i class="bi bi-brightness-high-fill text-dark fs-1 fw-5 text-start px-4"></i>
                <div class="card-body p-4">
                    <h3>Sit back & Relax</h3>
                    <p class="ext-start mb-0">Ut id cras malesuada dolor.Consecteur eget malesuada enim</p>
                    <p class="text-start">massa viverra mauris</p>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

        <h2 class="text-center" style="padding-top:54px">Corporate partnerships</h2>
        <p class="text-center">We work with 100+ companies to meet accommodation needs in London.Offer a dedicated <br>
        booking manager that can help to find poperties for your needs.</p>
       <!-- Modal gallery -->
        <section class="">
        <!-- Section: Images -->
        <section class="container-fluid">
            <div class="row">
                
                <div class="col-lg-6 col-md-12 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="img/before.png"class=" col-6 w-100"/>
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal1">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded" data-ripple-color="light">
                        <img src="img/After.png" class=" col-6 w-100"/>
                        <a href="#!" data-mdb-toggle="modal" data-mdb-target="#exampleModal2">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.2);"></div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Images -->

        </section>
        <!-- Modal gallery -->

    <section id="package" class="pt-5 pb-5">
        <div class="container-xl">
            <div class="row">

                <div class="col-lg">
                    <div class="text-center">
                        <div class="text-body">
                            <i class="fa-solid fa-book text-dark fs-1 fw-5 text-start px-4"></i>
                             <h2>Consequat risus</h2>
                             <p class="fw-lato fs-5 text-center ls-0em">Euismod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus. Porta purus nec dui odio vehicula.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="text-center">
                        <div class="text-body">
                            <i class="fa-solid fa-award text-dark fs-1 fw-5 text-start px-4"></i>
                            <h2>Morbi pulvinar</h2>
                            <p class="fw-lato fs-5 text-center ls-0em">Euismod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus. Porta purus nec dui odio vehicula.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="text-center">
                        <div class="text-body">
                            <i class="fa-solid fa-book text-dark fs-1 fw-5 text-start px-4"></i>
                            <h2>Turpis elit</h2>
                            <p class="fw-lato fs-5 text-center ls-0em">Euismod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus. Porta purus nec dui odio vehicula.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="text-center">
                        <div class="text-body">
                             <i class="fa-solid fa-award text-dark fs-1 fw-5 text-start px-4"></i>
                            <h2>Faucibus egestas</h2>
                            <p class="fw-lato fs-5 text-center ls-0em">Euismod commodo feugiat purus egestas diam. Facilisi sed senectus consequat risus. Porta purus nec dui odio vehicula.</p>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="">
        <div class="container py-5">
            <div class="mains d-flex justify-content-center">
               
                <div class="timelines-left w-50 px-5">
                    <div class="card-tes" style="height:500px">
                        <div class="title text-center" style="background-color: #B0F2B6;padding-top:23px">
                            <h5>High Street Agents</h5>
                            <h1 class="text-center">12%</h1>
                            <h6>management fee</h6>
                        </div>
                        <div class="card-body p-4">  
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>6 to 12 months</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>No maintenance</h6></i>   
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>No weekly cleaning</h6></i>   
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>No interior design</h6></i>   
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>5% void</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>£24,900</h6></i>   
                        </div>
                    </div>
                </div>
                    <h4 class="text-center py-5">VS</h4>       
                <div class="timelines-left w-50 px-5">
                    <div class="card-tes" style="height:500px">
                        <div class="title text-center" style="background-color: #B0F2B6;padding-top:23px">
                            <h5>Flex Living (guaranteed Rental)</h5>
                            <h1 class="text-center">Fixed price</h1>
                            <h6 class="py-1">monthly</h6>
                        </div>
                        <div class="card-body p-4">     
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>3 to 5 years</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>Free maintenance</h6></i>   
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>Weekly cleaning</h6></i>   
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>Interior design</h6></i>   
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>No void</h6></i>
                            <i class="bi bi-check2 text-dark d-flex justify-content-start"><h6>£30,000</h6></i>  
                            <div class="text-center">
                                <a href="#" class="btn btn-success text-center justify-content-center h-25">Get started</a>
                            </div>      
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section class="container-fluid">
        <div class="titles text-center">
            <h1>Frequently Asked Questions</h1>
        </div>
        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Integer morbi semper sodales sit facilisi habitant pulvinar sed venenatis?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-x-lg fs-2 py-5"></i>
            </div>
        </div>
      
        <div class="d-flex">
            <div class="d-flex flex-column mb-3">
                <div class="p-2 w-100 fs-3">Massa massa nulla rhoncus a quam consectetur sed purus, enim?</div>
                <div class="p-2 w-100 fs-5">Nunc molestie sit in sed sodales. Bibendum pharetra, id viverra
                 suspendisse pharetra ac aenean neque. Sodales ornare penatibus eros consectetur potenti in
                  feugiat purus. Posuere amet, sodales nibh eget. A et, a ante pretium praesent elementum feugiat
                   pharetra congue..</div>
            </div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-x-lg fs-2 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Dignissim congue rutrum pretium nunc sed nibh vitae tortor ut?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Vulputate imperdiet fusce vivamus nunc leo morbi scelerisque in?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Sit rhoncus rhoncus malesuada massa adipiscing arcu, semper ut in?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Vulputate nisl non neque iaculis lacus dui, habitant gravida?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Est felis a velit at vitae venenatis rhoncus?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Eget nam accumsan elementum accumsan imperdiet eu, cras?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">Fermentum et semper aliquet justo, facilisis?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>

        <div class="d-flex">
            <div class="p-2 w-100 fs-3">A vulputate est diam tempus condimentum in?</div>
            <div class="p-2 flex-shrink-1">
                <i class="bi bi-plus-lg fs-1 py-5"></i>
            </div>
        </div>
        
    </section>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>

 
                           
                            
                      
