<?php

/**
* Plugin Name: Poopify
* Plugin URI: http://www.marfprojects.nl/
* Description: This plugin enhances your website! Please buy our premium plugin!!!!! :((((((
* Version: 1.0.0
* Author: Marfjeh
* Author URI: http://www.mainwp.com
* License: MIT
*/


//Oh i forgot to add non-sense comments here.
//I totally didnt copy it from stack overflow!














//And dont forget the insane amound of white spaces!
function my_amazing_javascripinjection() {
    ?>
    
    <script>
     document.onreadystatechange = function () {
        let allImages = document.getElementsByTagName('img');
        for(let i = 0; i < allImages.length ; i++) {
            allImages[i].src = 'https://images-na.ssl-images-amazon.com/images/I/51rc5rqT0mL._SL500_AC_SS350_.jpg';
        }
    };
</script>
    
    <?php
} 

add_action( 'wp_enqueue_scripts', 'my_amazing_javascripinjection', 999 ); 



//MADE IN NOTEPAD++ XD WELL BYE!!!!
?>