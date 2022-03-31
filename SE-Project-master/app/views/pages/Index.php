<?php
class Index extends View
{
  public function output()
  {
    $title = $this->model->title;
    $subtitle = $this->model->subtitle;
    //$user_id = $_SESSION['user_id'];
    $user_name = $_SESSION['user_name'];

    require APPROOT . '/views/inc/header.php';
    echo "<html>";
    echo "<div class='jumbotron jumbotron-fluid'>";
    echo "<div class='container'>";
      echo "<h1 class='display-4'> $title </h1>";
      echo "<h2 class='lead'>$subtitle </h2>";
      if (isset($user_name)){
      echo "<p> $user_name is logged in</p>";}
      else{
        echo "<p>Welcome</p>";}
      echo "<hr class='my-4'>";
      echo "<p class='lead'>This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>";
    echo "</div>";
  echo "</div>";

    //echo $text;
    require APPROOT . '/views/inc/footer.php';
  }
}
