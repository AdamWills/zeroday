<?php
    $contact_type = $contact_title = $contact_description = $contact_show = $contact_title_one = $contact_title_two = $contact_title_thre = $contact_content_one = $contact_content_two = $contact_content_thre = $contact_coordina = $contact_image = '';
    extract(shortcode_atts(array(
        'contact_type' => '',
        'contact_title' => '',
        'contact_description' => '',
        'contact_show' => '',
        'contact_title_one' => '',
        'contact_title_two' => '',
        'contact_title_three' => '',
        'contact_content_one' => '',
        'contact_content_two' => '',
        'contact_content_thre' => '',
        'contact_coordina' => '',
        'contact_image' => '',
        ), $atts));
 ?>


<?php if( $contact_show == 0  || $contact_show ==1 ){ ?>
    <?php  include(get_stylesheet_directory().'/template/film-contact-full.php'); ?>
<?php }elseif($contact_show== 2){ ?>
    <?php  include(get_stylesheet_directory().'/template/film-contact-half.php'); ?>

<?php } ?>
