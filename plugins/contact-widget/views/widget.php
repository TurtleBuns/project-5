<!-- This file is used to markup the public-facing widget. -->

<?php if ( strlen( trim( $email ) ) > 0 ) : ?>
   <p>
      <i class="fa fa-envelope"></i> <?php echo $email; ?>
   </p>
<?php endif; ?>

<?php if ( strlen( trim( $phone ) ) > 0 ) : ?>
   <p>
      <i class="fa fa-phone"></i> <?php echo $phone; ?>
   </p>
   <p>
    <span><i class='fa fa-facebook-square'></i></span>
    <span><i class='fa fa-twitter-square'></i></span>
    <span><i class='fa fa-google-plus-square'></i></span>
   </p> 
<?php endif; ?>

<?php if ( strlen( trim( $social ) ) > 0 ) : ?>
   <p>
      <i class="day-of-week"></i> <?php echo $social; ?>
   </p>
<?php endif; ?>