


<!-- end map -->
<div class="col-xs-12">
  <div class="nopadding">
      <div id="form-contact2">
          <div class="form container">
              <div class="fl-row">
                  <?php if ($contact_title == ""){ ?>
                      <div class="title-white"><?php esc_html_e('GET IN TOUCH','filmmaker'); ?></div>
                  <?php }else{ ?>
                      <div class="title-white"><?php echo esc_html($contact_title); ?></div>
                  <?php } ?>

                  <?php if($contact_description == "") { ?>

                      <div class="white-desc address-info"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique temporibus quibusdam qui cum minus dignissimos delectus magni quae officiis ','filmmaker'); ?></div>
                   <?php }else{ ?>
                      <div class="white-desc address-info"><?php echo esc_html($contact_description); ?></div>
                   <?php } ?>
                  <div class="icon">
                      <div class="list-social gray-desc padding5">
                          <div class="info">
                               <?php get_template_part('template/social','author' );?>
                          </div>
                      </div><!--End list-social-->
                  </div>
                  <div class="ct_form">
                       <?php  echo do_shortcode('[contact-form-7 id=" '.$contact_type.' "]'); ?>

                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
