<!-- This file is used to markup the public-facing widget. -->

<?php if ( strlen( trim( $monday_friday ) ) > 0 ) : ?>
  <p class="day-of-week">
    <span>Monday to Friday:</span> <?php echo $monday_friday ?>
  </p>
<?php endif; ?>

<?php if ( strlen( trim( $saturday ) ) > 0 ) : ?>
  <p class="day-of-week">
    <span>Saturday:</span> <?php echo $saturday ?>
  </p>
<?php endif; ?>

<?php if ( strlen( trim( $sunday ) ) > 0 ) : ?>
  <p class="day-of-week">
    <span>Sunday:</span> <?php echo $sunday ?>
  </p>
<?php endif; ?>
