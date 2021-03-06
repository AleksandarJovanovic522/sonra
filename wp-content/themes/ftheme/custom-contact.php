<?php /* Template Name: Contact */
$contact_form_text = get_field('contact_form_text');
$contact_informations_text = get_field('contact_informations_text');
$contact_address = get_field('contact_address');
$contact_phone = get_field('contact_phone');
$contact_email = get_field('contact_email');
$contact_images = get_field('contact_images');
$contact_latitude = get_field('contact_latitude');
$contact_longitude = get_field('contact_longitude');
$contact_full_map_url = get_field('contact_full_map_url');


get_header();
?>
<main role="main">
  <div class="m-contact">
    <div class="m-wrapper">
      <div class="m-contact__formContainer">
        <div class="m-contact__formText">
          <?php echo $contact_form_text; ?>
          <div class="m-contact__informations">
            <div class="m-contact__informationsText">
              <?php echo $contact_informations_text; ?>
            </div>
            <div class="m-contact__informationsDiv">
              <div class="m-contact__information">
                <div class="m-contact__informationImg -address"></div>
                <span class="m-contact__informationType">HQ</span>
                <span class="m-contact__informationValue"><?php echo $contact_address; ?></span>
              </div>
              <div class="m-contact__information">
                <div class="m-contact__informationImg -phone"></div>
                <span class="m-contact__informationType">PHONE</span>
                <a href="mailto:<?php echo $contact_phone; ?>" class="m-contact__informationValue -phone"><?php echo $contact_phone; ?></a>
              </div>
              <div class="m-contact__information">
                <div class="m-contact__informationImg -address"></div>
                <span class="m-contact__informationType">EMAIL</span>
                <a href="mailto:<?php echo $contact_email; ?>" class="m-contact__informationValue -mail"><?php echo $contact_email; ?></a>
              </div>
            </div>
          </div>
        </div>
        <div class="m-contact__form">
          <iframe width="540" height="675" src="https://f6d808b0.sibforms.com/serve/MUIEADlL7JYc7tZp66-FCNH_ZV4pc_aWbdn-JBT6f6N2xEu0qRZttn_0_0rSLCa46Islrov4mbVR1EbzO-xuU0lllmmF70Z_CrSw-6LmFBannxQFIgwS1MR7nvpvFwktWhMMP1Z8vBryEnCriuhqE310sg4jGYDwfztbhSEABS61EUs6WfSjQLgwhXTUkj6M-fcoWIluWtSAExW6" frameborder="0" scrolling="auto" allowfullscreen style="display: block;margin-left: auto;margin-right: auto;max-width: 100%;"></iframe>
        </div>
      </div>

      <div class="m-contact__imgsMap">
        <div class="m-contact__imgs">

          <?php foreach ($contact_images as $image) : ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
          <?php endforeach; ?>
        </div>

        <div class="m-contact__map">
          <?php
          $map = '[leaflet-map  lat="' . get_field('contact_latitude') . '" lng ="' . get_field('contact_longitude') . '" zoom=18 ] [leaflet-marker lat="' . get_field('contact_latitude') . '" lng="' . get_field('contact_longitude') . '"]';
          echo do_shortcode($map)
          ?>
          <a href="<?php echo $contact_full_map_url ?>" class="m-contact__mapLink" target="_blank">Click to see the full map</a>
        </div>
      </div>
    </div>
  </div>

</main>

<?php
get_footer();
?>