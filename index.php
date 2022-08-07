<?php/*
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>My PHP Tester</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
        <link href="first/resources/css/main.css" rel="stylesheet">


    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title" title="My PHP Tester">My PHP Tester</div>

                <div class="info"><br />
                      <?php print($_SERVER['SERVER_SOFTWARE']); ?><br />
                      PHP version: <?php print phpversion(); ?>   <span><a title="phpinfo()" href="/?q=info">info</a></span><br />
                      Document Root: <?php print ($_SERVER['DOCUMENT_ROOT']); ?><br />

                </div>
                <ul class="opt">
                  <li><a href="#">Practical work 1-?</a>
                      <ul class="submenu">
                        <li><a title="Pr.w.1-1" href="Pr-w\1\Pr-w1-1.php">Practical work 1-1 (gettype)</a></li>
                        <li><a title="Pr.w.1-2" href="Pr-w\1\Pr-w1-2.php">Practical work 1-2 (a*b)</a></li>
                        <li><a title="Pr.w.1-3" href="Pr-w\1\Pr-w1-3.php">Practical work 1-3 (a.b)</a></li>
                        <li><a title="Pr.w.1-4" href="Pr-w\1\Pr-w1-4.php">Practical work 1-4 (String>String?)</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Practical work 2-?</a>
                      <ul class="submenu">
                        <li><a title="Pr.w.2-1" href="Pr-w\2\Pr-w2-1.php">Practical work 2-1 (Lucky?)</a></li>
                        <li><a title="Pr.w.2-2" href="Pr-w\2\Pr-w2-2.php">Practical work 2-2 (RandomFormPeople)</a></li>
                        <li><a title="Pr.w.2-3" href="Pr-w\2\Pr-w2-3.php">Practical work 2-3 (1-100EvenNot5Not6Divide)</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Practical work 3-?</a>
                    <ul class="submenu">
                      <li><a title="Pr.w.3-1" href="Pr-w\3\Pr-w3-1.php">Practical work 3-1 (Dec To Bin)</a></li>
                      <li><a title="Pr.w.3-2" href="Pr-w\3\Pr-w3-2.php">Practical work 3-2 (Sum of the Main/Side Diagonal)</a></li>
                    </ul>
                  </li>
                  <li><a title="Pr.w.4" href="Pr-w\4\Pr-w4.php">Practical work 4 (Full Name To Short Name)</a></li>
                  <li><a title="Pr.w.5" href="Pr-w\5\Pr-w5.php">Practical work 5 (Sort By Relevance)</a></li>
                  <li><a title="Pr.w.6" href="Pr-w\6\Pr-w6.php">Practical work 6 (Form)</a></li>
                </ul>
            </div>
        </div>
    </body>
</html>