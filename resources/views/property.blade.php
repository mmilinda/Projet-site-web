
@include('header')
<!DOCTYPE html>
<!-- <html lang="en">
<head> -->
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"> -->

    <style>
        .imag-grid{
            --gap: 16px;
            --num-cols: 4;
            --row-height: 300px;

            box-sizing: border-box;
            padding: var(--gap);
            
            display: grid;
            grid-template-columns: repeat(var(--num-cols), 1fr);
            grid-auto-rows: var(--row-height);
            gap: var(--gap);
        }
        .imag-grid >img{
            width: 100%;
            height: 100%;
            object-fit:cover;
        }
        .imag-grid-col-2{
            grid-column: span 2;
        }
        .imag-grid-row-2{
            grid-row: span 2;
        }
        .property{
            gap:100px;
        }
        /*Responsivité */
        @media screen and (max-width: 1024px) {
            .imag-grid{
                --num-cols:2;
                --row-height: 200px;
            }
            iframe{
                width:auto;
                justify-content: center;
            }
        }
        h1{
            text-align: center;
            justify-content: center;
        }
        .i{
            display: flex;
        }
        .clearfix{
            margin: 10px;
        }
        .l{
            display: flex;
            justify-content: space-between;
        }
        .l1{
            display: flex;
        }
        .l2{
            display: flex;
        }

    </style>
<!-- </head>
<body> -->
<!-- Grille d'image -->
<div class="imag-grid">
    <img class="imag-grid-col-2 imag-grid-row-2" src="assets\img\p1.png" alt="gallery">
    <img src="assets\img\p2.png" alt="gallery">
    <img src="assets\img\p3.png" alt="gallery">
    <img src="assets\img\p4.png" alt="gallery">
    <img src="assets\img\p5.png" alt="gallery">
</div><br>

<!-- Rhoncus suspendisse -->

<div class="clearfix">
   <section class="section_Guest_details property">
        <div>
            <div>
                <h2 class="a">Rhoncus suspendisse</h2>
                <p>London, Notthing Hill</p><br>
            </div>
            <div class="">
                <i class="bi bi-usb-mini-fill"></i>
                <p>2 bedroom</p>
                <i class="bi bi-usb-mini-fill"></i>
                <p>2 bath</p>
                <p>500 sq.ft|City view | 3rd floor | Elevator</p>
            </div>
        </div>
        <div class="card2_guest_details">
            <div class="image_guest_details">
                <img src="image/Rectangle 228.png" alt="">
            </div><br>
            <div class="part1_guest_details">
                 <div class="ctn_part1_guest_details">
                        <div>
                            <div>
                                <p>Move in</p>                  
                                <span><img src="image/Vector (9).png" alt=""> 31.12.2021</span>
                            </div>
                        </div><br>
                        <div>
                            <div>
                                <span><img src="image/eva_people-fill.png" alt=""> Guests 1</span>
                            </div>
                        </div><br><br>
                        <div>
                            <p>All utilities are included</p>
                        </div>
                  </div>    
                    <div>
                        <div>
                            <p>Move out</p>
                        </div>
                        <span><img src="image/Vector (9).png" alt=""> 31.02.2022</span>
                    </div>        
            </div><br>
            <div class="card3_guest_details">
                <div>
                    <div>
                        <p>Average monthy rent</p>
                    </div>
                    <div>
                        <span><strong>Pay upon booking</strong> <img src="image/Vector (10).png" alt=""></span>
                    </div><br>
                    <div>
                        <div>
                           <span>Total costs <img src="image/Vector (10).png" alt=""></span>
                        </div>
                            <a href="">Show more</a>
                    </div>
                </div>
                <div class="prices_guest_details">
                    <div>
                        <div>
                            <p>£3700</p>
                        </div>
                        <p>incl. VAT</p>
                    </div>
                    <div>
                        <div>
                            <p><strong>£3989.23</strong></p>
                        </div>
                        <p>incl. VAT</p>
                    </div>
                    <div>
                        <div>
                            <p>£4001.70</p>
                        </div>                          
                        <p>incl. VAT</p>
                    </div>
                </div>
            </div>
            <div class="maincontainer_footer_guests">
                <div class="Payment_timeline_guest">
                    <p><strong>Payment timeline</strong></p>
                </div>
                
                    <div class="footer_guest_detail">
                        <div class="time_line_img_guest">
                            <img src="image/Timeline.png" alt="">
                        </div>
                        <div class="lastpart_guest_footer">
                            <div class="Reserve_Due_After_Receive">
                                <div>
                                    <div>
                                        <p>Reserve this apaptment</p>
                                    </div>
                                    <p>Due now</p>
                                </div>
                                <div>
                                    <div>
                                        <p>After move-out</p>
                                    </div>
                                    <span>Receive your £400.00 <img src="image/Vector (10).png" alt=""></span>
                                </div>
                            </div> 
                            <div>
                                <p>£4001.70</p>
                            </div>
                    </div>
                </div>
            </div>
        </div>

  </section>
  <br><br>
  <h2>Description</h2>
  <p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, distinctio architecto recusandae praesentium earum optio hic accusamus expedita nobis at reiciendis labore illo! Illo odio omnis optio voluptatem dignissimos cupiditate sunt libero. Totam fugit aliquid mollitia suscipit, sunt beatae, ullam magnam doloribus nulla vitae atque numquam possimus dolorem asperiores quasi iste necessitatibus esse, delectus praesentium. Labore excepturi amet vitae officiis.
  </p><br>
  <h3>In sed</h3>
  <p>
     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Qui iure nemo laborum, eveniet voluptatibus hic rem iste non minus magni pariatur magnam adipisci ut! Labore soluta earum nostrum magnam nihil.
  </p><br>
  <h3>Adipiscing risus, fermentum</h3>
  <p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Harum consequatur facere dignissimos odit amet, veritatis sequi. Repellendus dignissimos numquam ratione?
  </p>


</div>
<style>
    .mainmili{
        gap:200px;
    }
    @media screen and (max-width:500px){
        .mainmili{
        display:flex;
        justify-content:center;
        flex-direction:column;
        gap:20px;
    } 

    }
</style>
<!-- Partie icône-->
<h1>Amenities</h1><br>
<div class="container text-center">
  <div class="row mainmili align-items-start">
    <div class="col">
        <div class="i">
            <p>
                TV <br>
                Flatscreen TV
            </p>
            <i class="bi bi-tv"></i>
        </div>
        <div class="i">
            <p>
                Fireplace
            </p>
            <i class="bi bi-tv"></i>
        </div>
        <div class="i">
            <p>
                Phone
            </p>
            <i class="bi bi-tv"></i>
        </div>
        <div class="i">
            <p>
                Work desk  <br>
                With computer
            </p>
            <i class="bi bi-tv"></i>
        </div>
    </div>
    <div class="col">
    <div class="i">
            <p>
                Fridge
            </p>
            <i class="bi bi-tv"></i>
        </div>
        <div class="i">
            <p>
                Kettle
            </p>
            <i class="bi bi-tv"></i>
        </div>
        <div class="i">
            <p>
                Coffee machine
            </p>
            <i class="bi bi-tv"></i>
        </div>
        <div class="i">
            <p>
                Dishes
            </p>
            <i class="bi bi-tv"></i>
        </div>
    </div>
    <div class="col">
    <div class="i">
            <p>
                Washing machine
            </p>
            <i class="bi bi-tv"></i>
        </div>
        <div class="i">
            <p>
               Dryer
            </p>
            <i class="bi bi-tv"></i>
        </div>
        <div class="i">
            <p>
                Iron
            </p>
            <i class="bi bi-tv"></i>
        </div>
        <div class="i">
            <p>
                Wardrobe
            </p>
            <i class="bi bi-tv"></i>
        </div>
    </div>
  </div>
</div>

<!-- Partie neighbourhood -->
<h1>Neighbourhood</h1><br>
<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Molestias officia, reprehenderit laborum amet quae voluptate quas incidunt. Tenetur, dolorum iure.</p>
<p>
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore illum inventore eaque pariatur accusantium iste dolore praesentium dolorum, officiis animi sunt recusandae esse quisquam unde eligendi maiores. Reprehenderit quasi quos sint non aliquam quas eum minima laboriosam id earum. Quisquam!
</p>
<!-- Carte de localisation -->
<h1>Location</h1><br>
<div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3859.0267746379027!2d-17.467222726752027!3d14.711077974365988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec173e83be0d14b%3A0x1717e5fee409822b!2sDefar%20Sci!5e0!3m2!1sfr!2ssn!4v1699632457184!5m2!1sfr!2ssn" width="1300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div><br><br><br>
<!-- Policy details --><!-- -->
<h1>Policy details</h1>
<br><br><br>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@include('footer')