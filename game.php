<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <title>Challenge</title>
</head>
<body>
<div class="container">
  <div class="row">
    <h3 class="display-4 text-center">Welcome to (Scissors | Rock | Paper) Game</h3>
    <p class="lead">Please select one of the following elements.</p>
  </div>
  <div class="row">
    <div class="col">
  <?php
  if(isset($_POST['user_choice']))
  {
    $user_choice=$_POST['user_choice'];
    $choose_from=array('scissors','rock','paper');
    $random_choice=rand(0,2);
    $computer_choice=$choose_from[$random_choice];

    if($user_choice==$computer_choice){
      echo '<div class="alert alert-warning" role="alert"> equals </div><br>';
      echo '<p>You chose : <strong>'.$user_choice.'</strong></p>';
      echo '<p>The computer chose : <strong>'.$computer_choice.'</strong></p>';
    }
    else if($user_choice =='scissors' && $computer_choice=='paper')
    {
      echo '<div class="alert alert-success" role="alert"> you win :) </div><br>';
      echo '<p>You chose : <strong>'.$user_choice.'</strong></p>';
      echo '<p>The computer chose : <strong>'.$computer_choice.'</strong></p>';
    }
    else if ($user_choice=='scissors' && $computer_choice=='rock')
    {
      echo '<div class="alert alert-danger" role="alert"> you lose :( </div><br>';
      echo '<p>You chose : <strong>'.$user_choice.'</strong></p>';
      echo '<p>The computer chose : <strong>'.$computer_choice.'</strong></p>';
    }
    else if ($user_choice=='rock' && $computer_choice=='paper')
    {
      echo '<div class="alert alert-danger" role="alert"> you lose :( </div><br>';
      echo '<p>You chose : <strong>'.$user_choice.'</strong></p>';
      echo '<p>The computer chose : <strong>'.$computer_choice.'</strong></p>';
    }
    else if ($user_choice=='rock'&& $computer_choice=='scissors')
    {
      echo '<div class="alert alert-success" role="alert"> you win :) </div><br>';
      echo '<p>You chose : <strong>'.$user_choice.'</strong></p>';
      echo '<p>The computer chose : <strong>'.$computer_choice.'</strong></p>';
    }
    else if ($user_choice=='paper' && $computer_choice=='scissors')
    {
      echo '<div class="alert alert-danger" role="alert"> you lose :( </div><br>';
      echo '<p>You chose : <strong>'.$user_choice.'</strong></p>';
      echo '<p>The computer : chose <strong>'.$computer_choice.'</strong></p>';
    }
    else if($user_choice=='paper' && $computer_choice =='rock')
    {
      echo '<div class="alert alert-success" role="alert"> you win :) </div><br>';
      echo '<p>You chose : <strong>'.$user_choice.'</strong></p>';
      echo '<p>The computer chose : <strong>'.$computer_choice.'</strong></p>';
    }
    echo '<a href="game.php">Play again </a>';

  }
else
{
  echo
   '
  <form action="game.php" method="POST">
  <div class="form-check">
    <input class="form-check-input" type="radio" name="user_choice" value="scissors" id="scissors" required>
    <label class="form-check-label" for="scissors">scissors</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="user_choice" value="rock" id="rock" required>
    <label class="form-check-label" for="rock">rock</label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="user_choice" value="paper" id="paper" required>
    <label class="form-check-label" for="paper">paper</label>
  </div>
    <input class="btn btn-success" type="submit" value="validate">
  </form>
  ';
  }
  ?>
  </div>
 </div>
</div>
</body>
</html>
