<?php
 
include('simple_html_dom.php');
echo file_get_html('https://www.goodreads.com/work/quotes/68729-fight-club')->plaintext;

?>  
