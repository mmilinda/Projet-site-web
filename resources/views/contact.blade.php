@include('header')
<br><br>
<section class="contacts_contacts">
    <div class="Please_tell">
        <p><strong>Please tell us a little about you</strong></p>
    </div>
    <div class="maincontainer_contactT">
        <div class="right_part_contacts">
            <div>
                <p><strong>What would you like to contact us about?</strong></p>
            </div>
            <form action="/contact-contact" method="post">
                @method('POST')
                @csrf
                <div class="groupe_input_contact">
                    <div class="radio_contact">
                        <!-- value pour l'affichage du profil  -->
                        <div>
                        <span><input type="radio" name="un" id="" value="Customer"> I'm a Customer</span>
                        </div>
                        <div>
                        <span><input type="radio" name="un" id="" value="Landlord"> I'm a Landlord</span>
                        </div>
                        <div>
                        <span><input type="radio" name="un" id="" value="Something else"> Something else</span>
                        </div>
                    </div><br>
                    <div class="groupe_input_text">
                        <div>
                            <input type="text" name="nom" id="" placeholder="Name">
                        </div><br>
                        <div>
                            <input type="text" name="email" id="" placeholder="Email">
                        </div><br>
                        <div>
                        <input id="phone" name="tel" type="tel" placeholder="Phone number">   
                        </div><br>
                        <div>
                            <textarea class="message_contact" name="message" id="" cols="30" rows="3" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Send</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="left_part_contact">
            <div class="left_part_contact_text">
                <div>
                     <p><strong>Reservations:</strong></p>
                </div><br>
                <div>
                    <p><strong>For Landlords:</strong></p>
                </div><br>
                <div>
                    <p><strong>For Maintenance:</strong></p>
                </div>
            </div>
            <div class="email_phone_contact">
                <div>
                     <p>reservations@theflexliving.com
                        0203 307 4477
                     </p>
                </div>
                <div>
                    <p>supply@theflexliving.com
                        0203 307 4477
                    </p>
                </div>
                <div>
                    <p>maintenance@theflexliving.com
                        0203 307 4477
                    </p>
                </div>
            </div>
           
        </div>
    </div>
     <!-- media query -->
     <div class="media_left_part_contact_text">
                <div class="Reservations">
                    <div>
                        <p><strong>Reservations:</strong></p>
                    </div>
                    <p class="last_text_contact">reservations@theflexliving.com
                        0203 307 4477
                     </p>
                </div>
                <div class="Reservations">
                    <div>
                        <p><strong>For Landlords:</strong></p>
                    </div>
                    <p class="last_text_contact">supply@theflexliving.com
                        0203 307 4477
                    </p>
                </div>
                <div class="Reservations">
                    <div>
                        <p ><strong>For Maintenance:</strong></p>
                    </div>
                    <p class="last_text_contact">maintenance@theflexliving.com
                        0203 307 4477
                    </p>
                </div>
            </div>
            <!-- media query -->
</section><br><br><br>
<link rel="stylesheet" href="assets/build/css/intlTelInput.css" />

@include('footer')