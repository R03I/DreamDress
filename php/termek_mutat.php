<?php
	class termek_mut extends dbConnection
	{
		
		function __construct()
		{
			parent::__construct();
			parent::getConnection();
		}
		function termek_adatok($keresett_id){
			$res = $this->conn->prepare("SELECT * FROM aruk WHERE id LIKE ?");
			$res->bindparam(1, $keresett_id);
			$res->execute();
			$array = $res->fetchall();
			return $array;
		}
		function termek_megjelenit($array){
			echo "<div class=\"row mt-5\">";
			foreach ($array as $key => $value) {
				$item = "item".$value[0];
				echo
				"<div class=\"col-lg-6\">
		<a href=\"$value[5]\" data-lightbox=\"$value[0]\">
        <img class=\"w-100 img-thumbnail\" src=\"$value[5]\">
        </a>
      </div>
      <div class=\"col-lg-6 text-center\">
        <h3 class=\"mt-5\">". $value[1] ."</h3>
        <h4 class=\"mt-3\">Ára:". $value[4] ."Ft </h4>
        <p class=\"lead text-justify mt-3\">Angolul straight leg a hivatalos neve, ez az egyik olyan szabás, ami szinte mindenkinek jól áll. Csípőn-fenéken szorosabb szabású, térdig kényelmesen követi a a test vonalát, de nem túl szűk. Térdtől ugyanazt a szélességet hozza, innen az elnevezés is.</p>".
				"<button  type=\"button\" id=\"$item._button\" onclick=\"cart('$item')\" value=\"$value[4]\" class=\"btn btn-dark ruha form-control mt-3\">Kosárba</button>".
				"</div>
				<input type=\"hidden\" id=\"$item._name\" value=\"$value[1]\">
		    	<input type=\"hidden\" id=\"$item._price\" value=\"$value[4]\">
		    	<input type=\"hidden\" id=\"$item._img\" value=\"$value[5]\"></div>";
			}
		}
	}
?>


<div class="row mt-5">
      <div class="col-lg-6">
        <img class="w-100 img-thumbnail" src="img/alsok/farmer.jpg">
      </div>
      <div class="col-lg-6 text-center">
        <h3 class="mt-5"> Hosszú női farmer </h3>
        <h4 class="mt-3">Ára: 4500 Ft </h4>
        <p class="lead text-justify mt-3">Angolul straight leg a hivatalos neve, ez az egyik olyan szabás, ami szinte mindenkinek jól áll. Csípőn-fenéken szorosabb szabású, térdig kényelmesen követi a a test vonalát, de nem túl szűk. Térdtől ugyanazt a szélességet hozza, innen az elnevezés is.</p>
        <button class="btn btn-dark mt-3 form-control">KOSÁRBA</button>
      </div>
    </div>