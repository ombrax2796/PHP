<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>title</title>
  </head>
  <body>
      <?php
      $date = date("d-m-Y");
      $heure = date("H:i");
      $heureref1 = 7;
      $heureref2 = 19;
      Print("Nous sommes le $date et il est $heure");
      if ($heure >$heureref1 = 7; && $heure <$heureref2)
      {
        body{
          background-color:#191970; color:white;
        }
      }
      else
      {
        body{ 
          background-color:white; color:black; 
        }
      }
      ?>
      <?php echo "météo a Paris dans 4jours" ?>
    <img src="C:\Users\arthur\Desktop\Cours_Ynov\PHP\paris_0.png" width="650" height="250" />
    <?php echo "météo a Bordeaux dans 4jours" ?>
    <img src="C:\Users\arthur\Desktop\Cours_Ynov\PHP\bordeaux_0.png" width="650" height="250" />
  </body>
</html>
