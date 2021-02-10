<?php
$try_quote = get_field('try_quote');
$try_quote_author = get_field('try_quote_author');
?>

<div class="m-tryQuote">
  <div class="m-wrapper">
    <div class="m-narrowWrapper">
      <div class="m-quote">
        <div class="m-quote__text">
          <?php echo $try_quote; ?>
          <span class="m-quote__author"><?php echo $try_quote_author; ?></span>
        </div>
      </div>
    </div>
  </div>
</div>