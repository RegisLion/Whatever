<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>My Webpage!</title>
    <style>
    input[type=text]{text-align: center;}
    input[type=number]{color: brown;text-align: center;}
    h2{color: rgb(150, 100, 0);
      text-align: center}
    h6{text-align: center}
    form{text-align: center;}
    </style>
  <head>
  <body>
    <?php
    $name = $_POST["name"];
    $loggedin = true;
    if($loggedin==true){echo "<h6>Welcome $name, you are logged in $website</h6>";}
    else{echo"<h6>Please log in $name</h6>";}
    $website = "Try my place";
    echo "<h2>$name, $website, and find houses in a map!</h2>";
    echo "<hr>";
    ?>

      <form action="site.name.php" method="get">
        <input name="city" type="text" placeholder="Anywhere">
        <input name="price" type="number" placeholder="Max price">
        <input class="btn btn-success" type="submit">

      </form>
      <iframe src="https://www.ticati.com/searchbar/#trymyplace"
      id="ticati-sb"
    	title="Ticati Searchbar"
    	width="100%"
    	height="500"
    	allowtransparency="true"
    	marginheight="0"
    	marginwidth="0"
    	scrolling="no"
    >
    </iframe>
    <style  type="text/css">#ticati-sb{width:100%;height:500px;border:0;overflow:hidden;}@media(max-width:768px){#ticati-sb{height:600px}}</style>
  <body/>

</html>
