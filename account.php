
<?php require "sessionstart.php"?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/account.css">
    <link rel="stylesheet" href="quizmain/style.css">
</head>

<body>
<header>
    <div><a href="index.php"> <p>QuizLab</p> </a></div>
    <div></div>
    <div> <a href="login.php"><button>Log out</button> </a> </div>
</header>

<table class="table">
    <thead>
        <td>S/N</td>
        <td id="topic">Topic</td>
        <td>Total question</td>
        <td>Marks</td>
        <td>Time limit</td>
       

    </thead>

    <tr class="table_row">
        <td>1</td>
        <td>computer programming</td>
        <td>5</td>
        <td>5</td>
        <td>60s</td>
    </tr>


</table>
   

<header class="header">
      <nav class="nav_bar">
        <button id="leaderboard">
          View Highscores <i class="fas fa-hand-point-left fa-lg"></i>
        </button>
        <p>Time: <span class="timer">00</span></p>
      </nav>
    </header>
    <main>
      <div class="container">
        <div class="quiz_app">

          <!-- Start Dialog box -->
          <div class="quiz_start_menu">
            <h2 class="secondary_heading">Welcome to Quiz App</h2>
            <div class="guidelines">
              <p>
                Try to answer the following code-related questions within the
                time limit.
              </p>
              <p>
                Keep in mind that incorrect answer will deduct your time
                by ten seconds!
              </p>
              <p>
                At the end of the quiz, what is left of your time will be 
                recorded as your score.
              </p>
            </div>
            <button class="btn btn_start">Start Quiz</button>
          </div>

          <!-- Quiz Questions -->
          <div class="question-container hide">
            <h2 class="question">
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Necessitatibus consectetur eligendi dicta suscipit repudiandae
              doloribus porro?
            </h2>
            <div class="options">
              <button class="btn-option">Option1</button>
              <button class="btn-option">Option2</button>
              <button class="btn-option">Option3</button>
              <button class="btn-option">Option4</button>
            </div>
            <button class="btn btn_next">Next</button>
          </div>

          <!-- End Dialog Box -->
          <div class="quiz_end_menu hide">
            <h2 class="secondary_heading">All Done!</h2>
            <p>Your final score is <span id="score">0</span></p>
            <label for="name_initials">Enter initials: </label>
            <input type="text" id="name_initials" />
            <button class="btn btn_submit">Submit</button>
            <!-- <button class="btn btn_reset">Reset</button> -->
          </div>

          <!-- Score-Card -->
          <div class="score_card hide">
            <h2 class="secondary_heading">Scores</h2>
            <ul class="list_players"></ul>
            <div>
              <button class="btn btn_back">Back</button>
              <button class="btn clear_btn">Clear Scores</button>
            </div>
          </div>
        </div>
      </div>
    </main>
    <script src="quizmain/script.js"></script>


<script src="index.js"></script>
    <footer>
    <div> <a href="adminlogin.php"> <p>Admin login</p> </a></div>
        <div><p>About us</p></div>
        <div><p>Feedback</p></div>
        <div><p>Developers</p></div>

    </footer>
</body>

</html>