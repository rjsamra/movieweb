<?php
  include "conf/info.php";
  $title="Upcoming Movies";
  include_once "header.php";
?>
    <center><h1>~ Upcoming Movies ~</h1></center>
    <?php
      include_once "api/api_upcoming.php";
      $min = date('d F Y', strtotime($upcoming->dates->minimum));
      $max = date('d F Y', strtotime($upcoming->dates->maximum));
      echo "<center><h5><sub>coming soon from </sub> <span>". $min . "</span> , <sub>until</sub> <span>" . $max . "</span></h5></center>";
    ?>
    <hr>
    <ul>
      <?php
        foreach($upcoming->results as $p){
          echo '<a href="movie.php?id=' . $p->id . '"><center><img src="'.$imgurl_1.''. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em>Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5><h5>Release : ". date('d F Y', strtotime($p->release_date)) . "</h5></a></center>";
        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>