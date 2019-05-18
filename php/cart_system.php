<?php
  session_start();
  $osszeg = 0;
  if(isset($_POST['vasarolt_termekek_szama']))
  {
    if(isset($_SESSION['name'])){
      echo count($_SESSION['name']);
      exit();
    }else{
      echo "0";
    }
  }
  if(isset($_POST['item_src']))
  {
    $_SESSION['name'][]=$_POST['item_name'];
    $_SESSION['price'][]=$_POST['item_price'];
    $_SESSION['src'][]=$_POST['item_src'];
    echo count($_SESSION['name']);
    exit();
  }
  
  if(isset($_POST['showcart']))
  {
    $non = false;
    if(isset($_SESSION['name'])){
    for($i=0;$i<count($_SESSION['name']);$i++)
    {
      $nev = $_SESSION['src'][$i];
      $money = $i."money";
      $size = $i."size";
      echo "<div id=\"$i\" class=\"container col-sm-12\">
          <div class=\"row h-100 justify-content-center align-items-center\">
          <div class=\"col-sm-5 mt-3\">";
      echo "<img class=\"w-100\" src='".$_SESSION['src'][$i]."'>";
      echo "</div>";
      echo "<div class=\"col-sm-4\">
            <p class=\"text-center\">" . $_SESSION['name'][$i] . "<br> ára: <span id=\"$money\">" .$_SESSION['price'][$i] . "</span> ft </p>
          </div>";
      echo "<div class=\"col-sm-3\">
            <select id=\"$size\" class=\"form-control\">
              <option>S</option>
              <option>M</option>
              <option>L</option>
              <option>XL</option>
              <option>XXL</option>
            </select>
            <button type=\"button\" onclick=\"delet_cart_item('$i')\" value=\"$i\" class=\"btn btn-danger w-100 mt-3\"><i class=\"fas fa-ban\"></i></button>
            </div></div></div>";
            $non=true;
            $osszeg+=$_SESSION['price'][$i];
    }
  }else{
    echo "<p class=\"align-items-center\">Jelenleg üres a kosarad </p>";
  }
    if ($non) {
  echo "<div class=\"col-sm-6 mt-3 text-left\">
            <div class=\"input-group\">
            <input class=\"form-control\" type=\"text\" placeholder=\"kupon\" name=\"\">
            <button type=\"button\" class=\"input-group-text bg-info text-white\" ><i class=\"fas fa-cut\"></i></button>
          </div>
          </div>
          <div class=\"col-sm-6 text-right text-center h4 mt-3\" id=\"osszertek\"> Fizetendő összeg: <span id=\"osszege\">".$osszeg."</span> ft</div>
          </div>";
    }
    exit();	
  }
  
?>