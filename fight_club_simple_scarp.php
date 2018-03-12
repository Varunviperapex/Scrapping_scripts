<?php
include('simple_html_dom.php');
$html =file_get_html('https://www.goodreads.com/work/quotes/68729-fight-club');
for($i=0;$i<=10;$i++){
$collection =$html->find('.quoteText',$i)->innertext;
echo $collection.'<br>';
}
?>
