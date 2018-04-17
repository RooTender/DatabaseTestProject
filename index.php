<!DOCTYPE html> 
<html> 
 <head> 
   <meta charset="utf-8"> 
   <title>Projekt bazy danych</title> 
   <link rel="Stylesheet" type="text/css" href="style.css" />
   <meta name="description" content="Baza danych">
   <meta name="keywords" content="baza danych">
   <meta name="author" content="Gal Anonim">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>
 <body>

  <div id="header">
    <h1>PROJEKT BAZY DANYCH</h1>
  </div>

  <div id="menu">
    <ul>
      <li><a href="index.php">Pokaż całą tabelę</a></li>
      <li><a href="index.php?id=a">a)</a></li>
      <li><a href="index.php?id=b">b)</a></li>
      <li><a href="index.php?id=c">c)</a></li>
      <li><a href="index.php?id=d">d)</a></li>
      <li><a href="index.php?id=e">e)</a></li>
    </ul>
  </div>
  
  <div id="content">
    <br>
      <?php
        require('config.inc.php');
        
        $id = isset($_GET['id']) ? $_GET['id'] : "";

        switch($id)
        {
            case "a": require('a.html'); break;
            case "b": require('b.html'); break;
            case "c": require('c.html'); break;
            case "d": require('d.html'); break;
            case "e": require('e.html'); break;
            default: require('table.html'); break;
        }
      ?>
  </div>

  <div id="footer">
        &copy; 2018 Gal Anonim
  </div>

</body>
</html>