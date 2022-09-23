<?php
   $string="<a heref='https://www.yahoobaba.net'>yahoo Baba</a>";
   $htmlent= htmlentities($string,ENT_QUOTES)."<br>";//viewsource code change
   echo $htmlent."<br>";
   echo html_entity_decode($htmlent)."<br>";
   $htmlent2= htmlspecialchars($string,);//viewsource code change
   echo $htmlent2."<br>";
   echo htmlspecialchars_decode($htmlent2);

?>