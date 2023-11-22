<?php echo $__env->make('header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
            <div class="groupe_input_contact">
                <div class="radio_contact">
                    <div>
                    <span><input type="radio" name="" id=""> I'm a Customer</span>
                    </div>
                    <div>
                    <span><input type="radio" name="" id=""> I'm a Landlord</span>
                    </div>
                    <div>
                    <span><input type="radio" name="" id=""> Something else</span>
                    </div>
                </div><br>
                <div class="groupe_input_text">
                    <div>
                        <input type="text" name="" id="" placeholder="Name">
                    </div><br>
                    <div>
                        <input type="text" name="" id="" placeholder="Email">
                    </div><br>
                    <div>
                    <input id="phone" name="phone" type="tel" placeholder="Phone number">   
                    </div><br>
                    <div>
                        <textarea class="message_contact" name="" id="" cols="30" rows="3" placeholder="Message"></textarea>
                    </div>
                </div>
            </div>
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

<?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Nouveau_dossier\Projet-site-web\resources\views//contact.blade.php ENDPATH**/ ?>