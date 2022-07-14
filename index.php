<?php
    include "conf/info.php";
    include_once "header.php";
?>

            <div class="movie-list-container">
                <h1 class="movie-list-title">TOP RATED MOVIES</h1>
                    <div class="movie-list-wrapper">
                        <div class="movie-list">
                                <?php
                                include_once "api/api_toprated.php";
                                foreach ($toprated -> results as $p) 
                                {   
                            echo '
                            <div class="movie-list-item">
                            <a href="movie.php?id=' . $p->id . '" style="text-decoration:none">
                            <img class="movie-list-item-img" alt ="" src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '">
                            <span class="movie-list-item-title">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")
                            </span>
                            <button class='movie-list-item-button'>Information</button></a>
                                    </div>";
                        }
                            ?>
                            </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>

            <div class="movie-list-container">
                <h1 class="movie-list-title">POPULAR</h1>
                    <div class="movie-list-wrapper">
                        <div class="movie-list">
                                <?php
                                include_once "api/api_popular.php";
                                foreach ($popular->results as $p) 
                                {   
                            echo '
                            <div class="movie-list-item">
                            <a href="movie.php?id=' . $p->id . '" style="text-decoration:none">
                            <img class="movie-list-item-img" alt ="" src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '">
                            <span class="movie-list-item-title">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")
                            </span>
                            <p> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5>.</p>
                            <button class='movie-list-item-button'>Information</button></a>
                                    </div>";
                        }
                            ?>
                            </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">NOW PLAYING MOVIES</h1>
                    <div class="movie-list-wrapper">
                        <div class="movie-list">
                                <?php
                                include_once "api/api_now.php";
                                foreach ($nowplaying->results as $p) 
                                {   
                            echo '
                            <div class="movie-list-item">
                            <a href="movie.php?id=' . $p->id . '" style="text-decoration:none">
                            <img class="movie-list-item-img" alt ="" src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '">
                            <span class="movie-list-item-title">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")
                            </span>
                            <p> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5>.</p>
                            <button class='movie-list-item-button'>Information</button></a>
                                    </div>";
                        }
                            ?>
                            </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
            <div class="movie-list-container">
                <h1 class="movie-list-title">UPCOMING MOVIES</h1>
                    <div class="movie-list-wrapper">
                        <div class="movie-list">
                                <?php
                                include_once "api/api_upcoming.php";
                                foreach ($upcoming->results as $p) 
                                {   
                            echo '
                            <div class="movie-list-item">
                            <a href="movie.php?id=' . $p->id . '" style="text-decoration:none">
                            <img class="movie-list-item-img" alt ="" src="http://image.tmdb.org/t/p/w500'. $p->poster_path . '">
                            <span class="movie-list-item-title">' . $p->original_title . " (" . substr($p->release_date, 0, 4) . ")
                            </span>
                            <p> Rate : " . $p->vote_average . " | Vote : " . $p->vote_count . " | Popularity : " . round($p->popularity) . "</em></h5>.</p>
                            <h5>Release : ". date('d F Y', strtotime($p->release_date)) . "</h5>
                            <button class='movie-list-item-button'>Information</button></a>
                                    </div>";
                        }
                            ?>
                            </div>
                    <i class="fas fa-chevron-right arrow"></i>
                </div>
            </div>
        </div>
    </div>

<?php
    include_once "footer.php";
?>