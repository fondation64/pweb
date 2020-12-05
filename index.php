<style>
body, html {
  height: 100%;
}

.parallax {
  /* The image used */
  background-image: url('../images/pets.jpg');

  /* Full height */
  height: 100%; 

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<div class="parallax">okkkkk</div>

<div style="height:300px;background-color:red;font-size:36px">
Scroll Up and Down this page to see the parallax scrolling effect.
This div is just here to enable scrolling.
Tip: Try to remove the background-attachment property to remove the scrolling effect.
</div>


<?php
include('func/tuti.php');
session_start();

der('okkkk');
echo '<p>Моля, изберете категория.</p>';
$cat_arr = get_categories();
display_categories($cat_arr);
//include('efekt/osnovna.php');
//include('menu.php');
//display_categories($cat_arr);
//display_checkout_form();
//do_html_footer();
?>
<div class="parallax"></div>
