<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>My Webpage!</title>
    <style>
    input[type=text]{background-color: white; color:grey; text-align: center;}
    input[type=number]{color: green}
    h1{color: rgb(150, 50, 0)}
    h5{text-align: center;font-weight: lighter;color:grey}
    form {text-align:center;}
    id="BOB"{color:white;}
    .map-container-5{
overflow:hidden;
padding-bottom:56.25%;
position:relative;
height:0;
}
.map-container-5 iframe{
left:0;
top:0;
height:100%;
width:100%;
position:absolute;
}
    </style>
  <head>
  <body>
    <hr>
    <form action="site.php" method="post">
    Hello, please enter your name:<br><br>
    <input name="name" type="text" placeholder="Your name">
    <input class="btn btn-success" type="submit"</button>
    </form>
      <hr>
    <form action="site.name.php" method="get">
    <input type="text" name="color" placeholder="color">
    <input type="text" name="celebrity" placeholder="celebrity">
    <input class="btn btn-success" type="submit"><br><br>
    <?php
    $color = $_GET["color"];
    $celebrity = $_GET["celebrity"];
    echo "Properties are $color. ";
    echo "I love $celebrity!";
    ?>
    <hr>
    <?php
    $city = $_GET["city"];
    $price = $_GET["price"];
    $name = $_POST["name"];
    echo "<br>Have fun $name: All properties in <strong>$city</strong> ";
    echo "below <strong>$price euros</strong>";
    ?>
    <br><br>
    <form action="site.name.php" method="get">
    Find the average price per sqm in 2019:<br><br>
    <input type="text" name="city" placeholder="Enter your city">
    <input class="btn btn-success" type="submit"</button>
    <?php
    $price_appartments = array("Paris"=>"9 611 €",
"Marseille"=>"2 497 €",
"Lyon"=>"4 296 €",
"Toulouse"=>"2 969 €",
"Nice"=>"4 090 €",
"Nantes"=>"3 146 €",
"Strasbourg"=>"2 843 €",
"Montpellier"=>"2 776 €",
"Bordeaux"=>"4 408 €",
"Lille"=>"2 740 €",
"Rennes"=>"2 835 €",
"Reims"=>"2 001 €",
"Le Havre"=>"1 677 €",
"Saint-Étienne"=>"953 €",
"Toulon"=>"2 379 €",
"Grenoble"=>"2 216 €",
"Dijon"=>"1 952 €",
"Angers"=>"1 957 €",
"Villeurbanne"=>"3 149 €",
"Nîmes"=>"1 700 €",
"Le Mans"=>"1 369 €",
"Clermont-Ferrand"=>"1 744 €",
"Aix-en-Provence"=>"4 154 €",
"Brest"=>"1 402 €",
"Limoges"=>"1 260 €",
"Tours"=>"2 345 €",
"Amiens"=>"2 136 €",
"Metz"=>"1 778 €",
"Perpignan"=>"1 398 €",
"Boulogne-Billancourt"=>"8 371 €",
"Besançon"=>"1 776 €",
"Orléans"=>"2 025 €",
"Rouen"=>"2 124 €",
"Mulhouse"=>"1 194 €",
"Caen"=>"2 062 €",
"Saint-Denis"=>"3 825 €",
"Nancy"=>"1 918 €",
"Argenteuil"=>"3 195 €",
"Montreuil"=>"5 840 €",
"Roubaix"=>"1 598 €",
"Tourcoing"=>"1 756 €",
"Dunkerque"=>"1 639 €",
"Créteil"=>"3 545 €",
"Avignon"=>"1 844 €",
"Nanterre"=>"5 030 €",
"Courbevoie"=>"6 689 €",
"Poitiers"=>"1 629 €",
"Vitry-sur-Seine"=>"3 737 €",
"Versailles"=>"7 506 €",
"Colombes"=>"4 872 €",
"Antibes"=>"4 530 €",
"Cannes"=>"4 907 €",
"Grasse"=>"2 675 €",
"Cagnes-sur-Mer"=>"4 032 €",
"Le Cannet"=>"3 347 €",
"Saint-Laurent-du-Var"=>"4 045 €",
"Menton"=>"4 492 €",
"Vallauris"=>"3 798 €",
"Mandelieu-la-Napoule"=>"4 268 €",
"Vence"=>"3 685 €",
"Mougins"=>"3 928 €",
"Villeneuve-Loubet"=>"4 628 €",
"Beausoleil"=>"5 684 €",
"Valbonne"=>"3 963 €",
"Roquebrune-Cap-Martin"=>"5 499 €",
"Carros"=>"2 681 €",
"Mouans-Sartoux"=>"3 559 €",
"La Trinité"=>"2 615 €",
"Biot"=>"4 344 €","Bourg-en-Bresse"=>"1 511 €",
"Oyonnax"=>"1 192 €",
"Ambérieu-en-Bugey"=>"1 794 €",
"Bellegarde-sur-Valserine"=>"1 805 €",
"Gex"=>"3 715 €",
"Saint-Genis-Pouilly"=>"3 819 €",
"Miribel"=>"2 301 €",
"Belley"=>"1 593 €",
"Ferney-Voltaire"=>"4 078 €",
"Divonne-les-Bains"=>"5 031 €",
"Meximieux"=>"1 950 €",
"Montluel"=>"2 331 €",
"Prévessin-Moëns"=>"4 372 €",
"Lagnieu"=>"1 504 €",
"Trévoux"=>"1 985 €",
"Viriat"=>"1 628 €",
"Péronnas"=>"1 608 €",
"Jassans-Riottier"=>"2 121 €",
"Saint-Denis-lès-Bourg"=>"2 012 €",
"Thoiry"=>"3 823 €");
$price_houses = array("Paris"=>"10 303 €",
"Marseille"=>"3 300 €",
"Lyon"=>"4 547 €",
"Toulouse"=>"3 278 €",
"Nice"=>"4 542 €",
"Nantes"=>"3 481 €",
"Strasbourg"=>"2 750 €",
"Montpellier"=>"3 030 €",
"Bordeaux"=>"4 045 €",
"Lille"=>"2 270 €",
"Rennes"=>"3 596 €",
"Reims"=>"2 043 €",
"Le Havre"=>"1 763 €",
"Saint-Étienne"=>"1 476 €",
"Toulon"=>"3 061 €",
"Grenoble"=>"2 574 €",
"Dijon"=>"2 381 €",
"Angers"=>"2 177 €",
"Villeurbanne"=>"3 234 €",
"Nîmes"=>"2 166 €",
"Le Mans"=>"1 598 €",
"Clermont-Ferrand"=>"1 893 €",
"Aix-en-Provence"=>"4 528 €",
"Brest"=>"1 661 €",
"Limoges"=>"1 449 €",
"Tours"=>"2 492 €",
"Amiens"=>"1 837 €",
"Metz"=>"1 889 €",
"Perpignan"=>"1 681 €",
"Boulogne-Billancourt"=>"9 672 €",
"Besançon"=>"1 933 €",
"Orléans"=>"1 980 €",
"Rouen"=>"2 100 €",
"Mulhouse"=>"1 545 €",
"Caen"=>"2 281 €",
"Saint-Denis"=>"2 903 €",
"Nancy"=>"1 969 €",
"Argenteuil"=>"2 994 €",
"Montreuil"=>"4 915 €",
"Roubaix"=>"1 187 €",
"Tourcoing"=>"1 337 €",
"Dunkerque"=>"1 545 €",
"Créteil"=>"4 546 €",
"Avignon"=>"1 956 €",
"Nanterre"=>"5 640 €",
"Courbevoie"=>"8 066 €",
"Poitiers"=>"1 541 €",
"Vitry-sur-Seine"=>"4 085 €",
"Versailles"=>"7 315 €",
"Colombes"=>"5 999 €",
"Antibes"=>"5 584 €",
"Cannes"=>"4 852 €",
"Grasse"=>"3 379 €",
"Cagnes-sur-Mer"=>"4 253 €",
"Le Cannet"=>"3 842 €",
"Saint-Laurent-du-Var"=>"4 023 €",
"Menton"=>"4 438 €",
"Vallauris"=>"4 554 €",
"Mandelieu-la-Napoule"=>"4 497 €",
"Vence"=>"3 899 €",
"Mougins"=>"4 652 €",
"Villeneuve-Loubet"=>"4 692 €",
"Beausoleil"=>"7 055 €",
"Valbonne"=>"4 925 €",
"Roquebrune-Cap-Martin"=>"6 292 €",
"Carros"=>"3 425 €",
"Mouans-Sartoux"=>"4 249 €",
"La Trinité"=>"3 398 €",
"Biot"=>"4 631 €","Bourg-en-Bresse"=>"1 694 €",
"Oyonnax"=>"1 436 €",
"Ambérieu-en-Bugey"=>"1 738 €",
"Bellegarde-sur-Valserine"=>"2 143 €",
"Gex"=>"4 054 €",
"Saint-Genis-Pouilly"=>"4 228 €",
"Miribel"=>"2 875 €",
"Belley"=>"1 615 €",
"Ferney-Voltaire"=>"4 442 €",
"Divonne-les-Bains"=>"5 204 €",
"Meximieux"=>"2 100 €",
"Montluel"=>"2 148 €",
"Prévessin-Moëns"=>"4 356 €",
"Lagnieu"=>"1 886 €",
"Trévoux"=>"2 315 €",
"Viriat"=>"1 783 €",
"Péronnas"=>"1 725 €",
"Jassans-Riottier"=>"2 205 €",
"Saint-Denis-lès-Bourg"=>"1 861 €",
"Thoiry"=>"3 735 €");
$price_rent = array("Paris"=>"27,7 €",
"Marseille"=>"11,8 €",
"Lyon"=>"12,6 €",
"Toulouse"=>"11,6 €",
"Nice"=>"15,0 €",
"Nantes"=>"11,4 €",
"Strasbourg"=>"11,6 €",
"Montpellier"=>"12,6 €",
"Bordeaux"=>"13,0 €",
"Lille"=>"13,3 €",
"Rennes"=>"11,2 €",
"Reims"=>"9,8 €",
"Le Havre"=>"9,3 €",
"Saint-Étienne"=>"7,3 €",
"Toulon"=>"10,8 €",
"Grenoble"=>"11,0 €",
"Dijon"=>"10,4 €",
"Angers"=>"9,8 €",
"Villeurbanne"=>"11,9 €",
"Nîmes"=>"9,3 €",
"Le Mans"=>"8,1 €",
"Clermont-Ferrand"=>"9,8 €",
"Aix-en-Provence"=>"14,8 €",
"Brest"=>"8,2 €",
"Limoges"=>"8,2 €",
"Tours"=>"10,4 €",
"Amiens"=>"10,7 €",
"Metz"=>"9,5 €",
"Perpignan"=>"8,4 €",
"Boulogne-Billancourt"=>"24,5 €",
"Besançon"=>"9,7 €",
"Orléans"=>"9,9 €",
"Rouen"=>"11,0 €",
"Mulhouse"=>"8,3 €",
"Caen"=>"10,7 €",
"Saint-Denis"=>"16,5 €",
"Nancy"=>"10,2 €",
"Argenteuil"=>"14,4 €",
"Montreuil"=>"19,0 €",
"Roubaix"=>"9,3 €",
"Tourcoing"=>"8,5 €",
"Dunkerque"=>"8,7 €",
"Créteil"=>"15,7 €",
"Avignon"=>"9,4 €",
"Nanterre"=>"18,4 €",
"Courbevoie"=>"21,3 €",
"Poitiers"=>"9,3 €",
"Vitry-sur-Seine"=>"15,8 €",
"Versailles"=>"19,5 €",
"Colombes"=>"18,2 €",
"Antibes"=>"15,6 €",
"Cannes"=>"15,8 €",
"Grasse"=>"12,2 €",
"Cagnes-sur-Mer"=>"15,0 €",
"Le Cannet"=>"14,8 €",
"Saint-Laurent-du-Var"=>"14,8 €",
"Menton"=>"15,8 €",
"Vallauris"=>"14,4 €",
"Mandelieu-la-Napoule"=>"15,0 €",
"Vence"=>"14,0 €",
"Mougins"=>"14,9 €",
"Villeneuve-Loubet"=>"16,1 €",
"Beausoleil"=>"21,5 €",
"Valbonne"=>"16,5 €",
"Roquebrune-Cap-Martin"=>"19,0 €",
"Carros"=>"12,6 €",
"Mouans-Sartoux"=>"13,8 €",
"La Trinité"=>"12,5 €",
"Biot"=>"15,7 €","Bourg-en-Bresse"=>"7,9 €",
"Oyonnax"=>"7,2 €",
"Ambérieu-en-Bugey"=>"7,7 €",
"Bellegarde-sur-Valserine"=>"10,1 €",
"Gex"=>"16,2 €",
"Saint-Genis-Pouilly"=>"16,3 €",
"Miribel"=>"9,8 €",
"Belley"=>"7,7 €",
"Ferney-Voltaire"=>"17,6 €",
"Divonne-les-Bains"=>"19,7 €",
"Meximieux"=>"7,9 €",
"Montluel"=>"9,2 €",
"Prévessin-Moëns"=>"17,8 €",
"Lagnieu"=>"7,3 €",
"Trévoux"=>"8,5 €",
"Viriat"=>"7,0 €",
"Péronnas"=>"7,9 €",
"Jassans-Riottier"=>"8,2 €",
"Saint-Denis-lès-Bourg"=>"7,2 €",
"Thoiry"=>"16,5 €");
echo "<br><br>For your appartment in $city: ";
echo $price_appartments[$_GET["city"]];
echo "<br>For your house in $city: ";
echo $price_houses[$_GET["city"]];
echo "<br>For your rent in $city: ";
echo $price_rent[$_GET["city"]];
echo "<br>Gross rental investment in $city: ";
echo "Appartments: ";
echo round($price_rent[$_GET["city"]]*12/10/$price_appartments[$_GET["city"]]*1.075,1);
echo"%";
echo "<br>Houses: ";
echo round($price_rent[$_GET["city"]]*12/10/$price_houses[$_GET["city"]]*1.075,1);
echo"%";
?>

<hr><!--Grid row-->



        </div>

      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card-->

  </div>
  <!--Grid column-->

  <!--Grid column-->
  <div class="col-md-6 mb-4">

    <!--Card-->
    <div class="card card-cascade narrower">

      <!--Card image-->
      <div class="view view-cascade gradient-card-header peach-gradient">
        <h5 class="mb-0">Custom map</h5>
      </div>
      <!--/Card image-->

      <!--Card content-->
      <div class="card-body card-body-cascade text-center">

        <!--Google map-->
        <div id="map-container-google-9" class="z-depth-1-half map-container-5" style="height: 300px">
          <iframe src="https://maps.google.com/maps?q=Madryt&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
            style="border:0" allowfullscreen></iframe>
        </div>


      </div>
      <!--/.Card content-->

    </div>
    <!--/.Card-->

  </div>
  <!--Grid column-->

</div>
<!--Grid row-->
<form>
  <hr>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Name</label>
      <input type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Jane Doe">
    </div>
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Username</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text">@</div>
        </div>
        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Username">
      </div>
    </div>
    <div class="col-auto">
      <div class="form-check mb-2">
        <input class="form-check-input" type="checkbox" id="autoSizingCheck">
        <label class="form-check-label" for="autoSizingCheck">
          Remember me
        </label>
      </div>
    </div>
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
  </div>
</form>
<body/>

</html>
