<?php
$whatsapp_number = get_field('whatapp_number', 'option');
$viber_number = get_field('viber_number', 'option');
?>
<h6 class="mb-0">Inquiry By: </h6>
<ul class="inquiry-btn text-left mb-0">
    <li class="ml-0"><a class="viber"
                        href="viber://chat?number=%2B<?= $viber_number ?>"> <i
                class="fab fa-viber"></i></a></li>
    <li class="ml-0"><a class="whatsapp" href="https://wa.me/<?= $whatsapp_number ?>"><i
                class="fab fa-whatsapp"></i> </a>
    </li>
    <li class="ml-0"><a class="phone"
                        href="tel:<?= get_field('contact', 'option')['enquiry_phone_number']; ?>"><i
                class="fas fa-phone"></i></a></li>
</ul>