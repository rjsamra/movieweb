<?php
  include "conf/info.php";
  
  $id_movie = $_GET['id'];
    include_once "api/api_movie_id.php";
    include_once "api/api_movie_video_id.php";
    $title = "Detail Movie (".$movie_id->original_title.")";
    include_once "header.php";
  
?>

    <?php 
    if(isset($_GET['id'])){
    $id_movie = $_GET['id']; 
    ?>
    <h1><center><?php echo $movie_id->original_title ?></center></h1>
    <?php
      echo "<center><h5>~ ".$movie_id->tagline." ~</h5></center>";
    ?>

    <hr>
          <center><img src="<?php echo $imgurl_2 ?><?php echo $movie_id->poster_path ?>" >
          <p>Title : <?php echo $movie_id->original_title ?></p>
          <p>Tagline : <?php echo $movie_id->tagline ?></p>
          <p>Genres : 
              <?php
                foreach($movie_id->genres as $g){
                  echo '<span>' . $g->name . '</span> ';
                }
              ?>
          </p>
          <p>Overview : <?php echo $movie_id->overview ?></p>
          <p>Release Date : <?php $rel = date('d F Y', strtotime($movie_id->release_date)); echo $rel ?>
          <p>Production Companies :
              <?php
                foreach($movie_id->production_companies as $pc){
                  echo $pc->name." ";
                }
              ?>
          </p>
          <p>Production Countries:
              <?php
                foreach($movie_id->production_countries as $pco){
                  echo $pco->name. "&nbsp;&nbsp;" ;
                }
              ?>
          </p>
          <p>Budget: $ <?php echo $movie_id->budget ?> </p>
          <p>Vote Average : <?php echo $movie_id->vote_average ?></p>
          <p>Vote Count : <?php echo $movie_id->vote_count ?></p>
          </center>
    <hr>

    <?php 

      foreach($movie_video_id->results as $video){
                    echo '<iframe width="560" height="315" src="'."https://www.youtube.com/embed/".$video->key.'" frameborder="0" allowfullscreen></iframe>';
      }
     ?>
 
    <?php 
    } else{
      echo "<h5>Movie tidak ditemukan.</h5>";
    }
    ?>

<?php
  include_once "footer.php";
?>