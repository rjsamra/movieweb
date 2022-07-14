<?php
    include "conf/info.php";
    $title = "Now PLaying Movies";
    include_once "header.php";
?>

    <center><h1>~ Now Playing Movies ~</h1></center>
    <?php
      include_once "api/api_now.php";
      $min = date('d F Y', strtotime($nowplaying->dates->minimum));
      $max = date('d F Y', strtotime($nowplaying->dates->maximum));
      echo "<center><h5><sub>from</sub> <span>". $min . "</span> , <sub>until</sub> <span>" . $max . "</span></h5></center>";
    ?>
    <hr>
    <ul>
      <?php
        
        foreach($nowplaying->results as $p){
          echo '<center><a href="movie.php?id=' . $p->id . '"><img src="'.$imgurl_1.''. $p->poster_path . '"><h4>' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")</h4><h5><em> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5></a></center>";

        }
      ?>
    </ul>

<?php
  include_once "footer.php";
?>