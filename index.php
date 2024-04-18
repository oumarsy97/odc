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

$listCategory= [];
$listLibelle= [];
$listDate = [];
foreach($datas as $data){
    if(!in_array($data["category"],$listCategory)){
        $listCategory[] = $data["category"];
    }
    if(!in_array($data["libelle"],$listLibelle)){
        $listLibelle[] = $data["libelle"];
    }
    if(!in_array($data["year"],$listDate)){
        $listDate[] = $data["year"];
    }
}


include 'lister.php';