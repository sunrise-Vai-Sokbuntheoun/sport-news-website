<?php
function run_query($query,$error)
{
    $con = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
    if ($con) {
        $result = mysqli_query($con, $query);
        return $result;
        mysqli_close($con);
    } else {
        $unsuccess =  "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>$error</strong> You should check in on some of those fields below.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";

      return $unsuccess;
    }
}

function run_non_query($query,$error,$success){
    $con = mysqli_connect(SERVER, USER, PASSWORD, DATABASE);
    if ($con) {
        $result = mysqli_affected_rows($con, $query);
        return $result;
        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>$success</strong>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
        mysqli_close($con);
    } else {
        echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
        <strong>$error</strong> You should check in on some of those fields below.
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>";
    }
}

?>