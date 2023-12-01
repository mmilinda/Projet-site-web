@include('header')

   
<section class="section_Guest_details">
    <div class="maincontainer_Guest_details">
       <div class="maincontaier_checkout">
            <div class="Booking_review">
                <p><strong>Booking review</strong></p>
            </div>
            <?php
            $a= $_GET['first_name'];
            echo $a;

            ?>
            <div class="grouprumcheckout">
                <div>
                    <div class="RUM_checkout">
                        <div>
                            <div>
                                <p><strong>Rent per month</strong></p>
                            </div>
                            <div>
                                <span>Utilities per month <img src="image/Vector (10).png" alt=""></span>
                            </div>
                            <div>
                                <p><strong>Monthly subtotal</strong></p>
                            </div>
                        </div>
                        <div>
                            <div>
                                <p>£2990.00 </p>
                            </div>
                            <div>
                                <p>£250.70</p>
                            </div>
                            <div>
                                <p>£3340.70 </p>
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="RUM_checkout">
                    <div>
                        <div>
                            <span>One-time cleaning fee <img src="image/Vector (10)" alt=""></span>
                        </div>
                        <div class="Total_charges">
                            <p><strong>Total charges</strong></p>
                        </div>
                        <div>
                            <p><strong>Total</strong></p>
                        </div>
                    </div>
                    <div class="price_checkout">
                        <div>
                            <p>£225.00</p>
                        </div>
                        <div>
                            <p>£3340.70 </p>
                        </div>
                        <div>
                            <p>£4225.00</p>
                        </div>
                    </div> 
                </div><br>
            </div>
            <div class="footer_checkout">
                <div>
                    <a href="" class="btn btn-success">Confirm and pay</a>
                </div>
                <div>
                    <p>You won’t be charged yet</p>
                </div>
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
    </div>
    <br><br><br>
</section>
<br><br><br> 
<link rel="stylesheet" href="assets/build/css/intlTelInput.css" />
    @include('footer')