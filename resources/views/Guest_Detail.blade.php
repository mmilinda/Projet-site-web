<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
@include('header')
<section class="section_Guest_details">
    <div class="maincontainer_Guest_details">

        <div>
             <div class="title_Guest_Details">
                 <p><strong>Guest details</strong></p>
             </div>

             @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            <form action="/Guest_Detail" method="POST">
                @csrf
                <div class="inputtext_guest_details">
                    <input type="text" placeholder="First name" name="first_name" required>
                </div><br>
                <div class="inputtext_guest_details">
                    <input type="text" placeholder="last name" name="last_name" required>
                </div><br>
                <div class="inputtext_guest_details">
                    <input type="text"  placeholder="Email" name="email" required>
                </div><br>
                <div class="inputtext_guest_details">
                <input id="phone" name="phone" type="text" required>
                </div>
                <br>

             <div>
                <div class="Purpose_of_stay">
                    <p><strong>Purpose of stay</strong></p>
                </div>
                <div>
                <span><input type="radio" name="Purpose" value="Business Travel/ Work" required>Business Travel/ Work</span><br>
                <span><input type="radio" name="Purpose" value="Moving to this city or country" required> Moving to this city or country</span><br>
                <span><input type="radio" name="Purpose" value="Holiday" required> Holiday</span><br>
                <span><input type="radio" name="Purpose" value="Other" required> Other</span><br>
                </div><br>
                <div class="inputtext_guest_details">
                    <input type="text" placeholder="Name of Employer/ Organisaition" name="Name_of_Employer_Organisaition" required>
                </div>
             </div><br>
             <div  class="behalf_of_someone">
                <div>
                   <span><input type="checkbox" name="I_m_booking_on_behalf_of_someone_else"id="" required> I’m booking on behalf of someone else</span>
                </div><br>
                <div class="inputtext_guest_details">
                    <input type="text" placeholder="Name" name="name" required>
                </div><br>
                <div class="inputtext_guest_details">
                    <input type="text" placeholder="Email of the guest" name="email_of_the_guest" required>
                </div>
             </div>
        </div>
        <div class="card2_guest_details">
            <div class="image_guest_details">
                <img src="image/Rectangle 228.png" alt="">
            </div><br>
            <div class="part1_guest_details">

                <!-- formulaire pour récupérer les données de la bd -->

                <div class="ctn_part1_guest_details">
                        <div>
                            <div>
                                <p>Move in</p>
                                <br>
                                <span><img src="image/Vector (9).png" alt=""> 31.12.2021</span>
                                <br>
                            </div>
                        </div><br>
                        <div>
                            <div>
                                <span><img src="image/eva_people-fill.png" alt=""> Guests 1</span>
                            </div>
                            <br>
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
                                    <br>
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
        <i class="fa fa-users"></i>

    </div>
    <br><br><br>
</section>
<br><br><br>
    <div class="maincontainer_book">
        <div class="booking_guest_detail">
            <p><strong>Payment method</strong></p>
        </div>
        <div>

            <select name="paiement" id="" class="inputtext_guest_details">

                <option value="" class="">Orange Money</option>

                <option value="Wave">Wave</option>
                <option value="PayPal">PayPal</option>
                <option value="Master Card">Master Card</option>
                <option value="Visa">Visa</option>
            </select>

            @if(!('paiement') && input(paiment) == 'Wave');
          <div><p>lllllllllllllll</p></div>
        @endif
        </div>
        <div><br>
            <p>By clicking "Book" below, I have read and agreed to the <a href="">key contract terms, cancellation policy and apartment & building rules</a> , and to pay the total amount shown.</p>
        </div>
        <button type="submit" class="btn btn-success">Book</button>
    </div><br><br><br><br>
    </form>

<link rel="stylesheet" href="assets/build/css/intlTelInput.css" />



    @include('footer')
