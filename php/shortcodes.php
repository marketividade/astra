<?php
$isRunningMessage = "<script>"."console.log('" . "shortcodes.php". " is running" ."');" ."</script>";
echo($isRunningMessage);

// Fast Google Fonts loading
add_action( 'wp_head', 'add_google_fonts_preload', 1 );
function add_google_fonts_preload() {
  ?>
  <link rel="preconnect"
  	href="https://fonts.gstatic.com"
  	crossorigin />
  <link rel="preload"
  	as="style"
  	href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" />
  <link rel="stylesheet"
  	href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap"
  	media="print"
  	onload="this.media='all'" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" />

    <link rel="preload"
  	as="style"
  	href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" />
  <link rel="stylesheet"
  	href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap"
  	media="print"
  	onload="this.media='all'" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&display=swap" />


  <?php
}
