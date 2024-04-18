<?php
$datas = [
    ["libelle"=>"adventure time","category"=>"action","year"=>"2005"],
    ["libelle"=>"adventure time","category"=>"comedy","year"=>"2020"],
    ["libelle"=>"adventure time","category"=>"manga","year"=>"2013"],
    ["libelle"=>"black list","category"=>"action","year"=>"2005"],
    ["libelle"=>"good doctor","category"=>"action","year"=>"2003"],
    ["libelle"=>"good doctor","category"=>"manga","year"=>"2020"],
    ["libelle"=>"naruto","category"=>"manga","year"=>"2005"],
    ["libelle"=>"good doctor","category"=>"action","year"=>"2001"]
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



function filtrerLibelle($liniouySeet,$tableauBiniouKayWeur){
    $tableauBiniouKayDeff = [];
    foreach($tableauBiniouKayWeur as $ligneBii){
        if($ligneBii["libelle"] == $liniouySeet){
            $tableauBiniouKayDeff[] = $ligneBii;
        }
    }

    return $tableauBiniouKayDeff;
}

function filtrerCategory($liniouySeet,$tableauBiniouKayWeur){
    $tableauBiniouKayDeff = [];
    foreach($tableauBiniouKayWeur as $ligneBii){
        if($ligneBii["category"] == $liniouySeet){
            $tableauBiniouKayDeff[] = $ligneBii;
        }
    }

    return $tableauBiniouKayDeff;
}

function filtrerDate($liniouySeet,$tableauBiniouKayWeur){
    
    $tableauBiniouKayDeff = [];
    foreach($tableauBiniouKayWeur as $ligneBii){
        if($ligneBii["year"] == $liniouySeet){
            $tableauBiniouKayDeff[] = $ligneBii;
        }
    }

    return $tableauBiniouKayDeff;
}

$donnee = $datas;

// if(isset($_POST["category"])){
//     $donnee = filtrerLibelle($_POST["libelle"],$datas);
// }
//filtrer par libelle et categorie

// if(isset($_POST["libelle"],$_POST["category"])){
$cate=$_POST["category"];
$lib=$_POST["libelle"];
$filter=[];

function filtercate($cate,$tab){
    if($cate==="Tous"){

return $tab;
    } foreach ($tab as $film) {
        if ( $film["category"] === $cate) {
                     $filter[] =  $film;
}

    } $datas = $filter;
    return $filter;
}

function filterlib($lib,$tab){
    if($lib==="Tous"){

return $tab;
    } foreach ($tab as $film) {
        if ( $film["libelle"] === $lib) {
                     $filter[] =  $film;
}

    } $datas = $filter;
    return $filter;
}

$donne=filtercate($cate,$datas);
$donne=filterlib($lib,$donne);

include 'lister.php';