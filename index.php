<?php
$datas = [
    ["libelle"=>"the last of us","category"=>"action","year"=>"2005"],
    ["libelle"=>"adventure time","category"=>"comedy","year"=>"2020"],
    ["libelle"=>"one piece","category"=>"manga","year"=>"2013"],
    ["libelle"=>"black list","category"=>"action","year"=>"2005"],
    ["libelle"=>"good doctor","category"=>"action","year"=>"2001"],
    ["libelle"=>"my hero academia","category"=>"manga","year"=>"2020"],
    ["libelle"=>"naruto","category"=>"manga","year"=>"2005"],
    ["libelle"=>"the manifest","category"=>"action","year"=>"2001"]
];

foreach($datas as $data){
    $listLibelle = $data["libelle"];
    $listCategory = $data["category"];
    if($data["year"] >= 2010){
        echo $data["libelle"]."<br>";
    }
}
include 'lister.html';