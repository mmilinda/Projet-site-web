@include('header')

   
<section class="section_Guest_details">
    <div class="maincontainer_Guest_details">
        <div >
             <div class="title_Guest_Details">
                 <p><strong>Guest details</strong></p>
             </div>
             <div>
                <div class="inputtext_guest_details">
                    <input type="text" placeholder="First name">
                </div><br>
                <div class="inputtext_guest_details">
                    <input type="text"  placeholder="Last name">
                </div><br>
                <div class="inputtext_guest_details">
                    <input type="text"  placeholder="Email">
                </div><br>
                <div class="inputtext_guest_details">
                <input id="phone" name="phone" type="tel" />
                </div>
             </div><br>
             <div>
                <div class="Purpose_of_stay">
                    <p><strong>Purpose of stay</strong></p>
                </div>
                <div>
                    <span><input type="radio"> Business Travel/ Work</span><br>
                    <span><input type="radio"> Moving to this city or country</span><br>
                    <span><input type="radio"> Holiday</span><br>
                    <span><input type="radio"> Other</span><br>
                </div><br>
                <div class="inputtext_guest_details">
                    <input type="text" placeholder="Name of Employer/ Organisaition">
                </div>
             </div><br>
             <div  class="behalf_of_someone">
                <div>
                   <span><input type="checkbox" name="" id="" > I’m booking on behalf of someone else</span>
                </div><br>
                <div class="inputtext_guest_details">
                    <input type="text" placeholder="Name">
                </div><br>
                <div class="inputtext_guest_details">
                    <input type="text" placeholder="Email of the guest">
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
    </div>
    <br><br><br>
</section>
<br><br><br>
    <div class="maincontainer_book">
        <div class="booking_guest_detail">
            <p><strong>Payment method</strong></p>
        </div>
        <div>
            <select name="" id="" class="inputtext_guest_details">
                <option value="">Dakar</option>
                <option value="">Dakar</option>
                <option value="">Dakar</option>
                <option value="">Dakar</option>
                <option value="">Dakar</option>
            </select>
        </div>
        <div><br>
            <p>By clicking "Book" below, I have read and agreed to the <a href="">key contract terms, cancellation policy and apartment & building rules</a> , and to pay the total amount shown.</p> 
        </div>
        <div>
            <button class="btn btn-success rounded-pill">Book</button>
        </div>
    </div><br><br><br><br>
   
<link rel="stylesheet" href="assets/build/css/intlTelInput.css" />
         


    @include('footer')