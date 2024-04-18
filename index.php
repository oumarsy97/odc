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
function filtreryear($liniouySeet,$tableauBiniouKayWeur){
    $tableauBiniouKayDeff = [];
    foreach($tableauBiniouKayWeur as $ligneBii){
        if($ligneBii["year"] == $liniouySeet){
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
if(isset($_POST["category"])){
    $donnee = filtrerCategory($_POST["category"],$datas);
}




include 'lister.php';