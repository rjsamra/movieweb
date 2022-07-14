<?php
  include "conf/info.php";
  $title="Popular Movies";
  include_once "header.php";
?>
    <h1><center>~ Popular Movies ~</center></h1>
    <hr>
    <ul>
      <?php
        include_once "api/api_popular.php";
        foreach($popular->results as $p){
          echo '<center><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5></a></center>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>