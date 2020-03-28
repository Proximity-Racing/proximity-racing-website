<?php
    include_once('../config/db_conn.php');
    $sql = "SELECT * FROM proximityracing.blogs ORDER BY id DESC";
    $res = mysqli_query($con, $sql);
    $posts = "";

    if(mysqli_num_rows($res) > 0) {
      while($row = mysqli_fetch_assoc($res)) {
        $id = $row['id'];
        $title = $row['title'];
        $content = $row['content'];
        $date = $row['date'];
        $blogger = $row['blogger'];
        $status = $row['status'];
        $readtime = $row['readtime'];
        $mainpic = $row['mainpic'];
        $smalldate = explode(" ", $date);
        $smallmonth = substr($smalldate[0], 0, 3);
        $daylen = strtolower(strlen($smalldate[1]) - 1);
        $smallday = substr($smalldate[1], 0, (int) $daylen);
        $admin = "";
        $posts .= "<div class='container-fluid'>
    <div class='row padding'>
      <div class='col-md-6'>
        <img class='newspic img-fluid' src='blogpics/blogpics$id/$mainpic' style='float:left;''>
      </div>
      <div class='col-md-6'>
        <div class='padding-top'>
        <p class='sm'>$blogger</p>
        <p class='sm'>$smallmonth $smallday | $readtime min</p>
        <a class='nolink' href='blog.php?id=$id'><h2 class='split'>$title</h2>
        <p class='split'>While the harshness of a cold winter looms, putting an end to real-life motorsport across America for the year, virtual action ramped up...</p>

        </a>
        </div>
      </div>
    </div>
  </div>";
      }
      if ($status == "PUBLISHED") {
        echo $posts;
      }
    } else {
      echo "There are no posts to display!";
    }

  ?>