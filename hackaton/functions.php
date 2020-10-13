<?php

    require('./co.php');

    function getMenages($dbh, $x,$y,$dateIn,$dateOut){
            
        $sql='SELECT date,id_Menage,id_Quartier,menage.batiment FROM personne INNER JOIN menage 
        WHERE menage.id=personne.id_Menage AND menage.rue=:rue AND personne.date>=:dateIn AND personne.date<=:dateOut AND menage.batiment=:num
        GROUP BY id_Menage';

        
        $stmt=$dbh->prepare($sql);
        $stmt->bindParam(':rue', $y);
        $stmt->bindParam(':dateIn', $dateIn);
        $stmt->bindParam(':dateOut', $dateOut);
        $stmt->bindParam(':num', $x);

        $stmt->execute();

        $result=$stmt->fetchAll();

        return $result;

    }
    
    function getPersonnes($dbh, $id){

        $sql="SELECT * FROM `personne` WHERE id_Menage=".$id." AND sexe!='i'  GROUP BY id";

        $req=$dbh->query($sql);

        $result=$req->fetchAll();

        return $result;

    }
    
    function get($dbh, $x){

        $sql="SELECT  FROM posseder WHERE id_Menage=".$x."";

        $req=$dbh->query($sql);

        $result=$req->fetch();

        return $result;

    }
    
    function graphMetier($dbh,$x,$dateIn,$dateOut){

        $sql="SELECT COUNT(profession),profession FROM personne 
        INNER JOIN menage 
         WHERE menage.id=personne.id_Menage AND menage.rue=:rue AND personne.date>=:dateIn AND personne.date<=:dateOut AND personne.profession!='N/A' AND personne.profession!='sp' AND personne.profession!='ni'
         GROUP BY personne.profession ORDER BY COUNT(profession) DESC";

         $stmt=$dbh->prepare($sql);

        $stmt->bindParam(':rue', $x);
        $stmt->bindParam(':dateIn', $dateIn);
        $stmt->bindParam(':dateOut', $dateOut);

        $stmt->execute();

        $result=$stmt->fetchAll();

        return $result;

    }

    function stats_adresse($dbh,$x,$dateIn,$dateOut){

        $sql="SELECT COUNT(batiment),batiment FROM personne INNER JOIN menage WHERE menage.id=personne.id_Menage AND menage.rue=:rue
        AND personne.date>=:dateIn AND personne.date<=:dateOut GROUP BY menage.batiment";

         $stmt=$dbh->prepare($sql);

        $stmt->bindParam(':rue', $x);
        $stmt->bindParam(':dateIn', $dateIn);
        $stmt->bindParam(':dateOut', $dateOut);

        $stmt->execute();

        $result=$stmt->fetchAll();

        return $result;

    }


function stats_domestique($dbh,$x,$dateIn,$dateOut){

    $sql="SELECT COUNT(nbDomestique) FROM personne 
    INNER JOIN menage 
     WHERE menage.id=personne.id_Menage AND menage.rue=:rue AND personne.date>=:dateIn AND personne.date<=:dateOut AND nbDomestique>=1 ";

     $stmt=$dbh->prepare($sql);

    $stmt->bindParam(':rue', $x);
    $stmt->bindParam(':dateIn', $dateIn);
    $stmt->bindParam(':dateOut', $dateOut);

    $stmt->execute();

    $stats=$stmt->fetch();

    $sql="SELECT COUNT(nbDomestique) FROM personne 
    INNER JOIN menage 
     WHERE menage.id=personne.id_Menage AND menage.rue=:rue AND personne.date>=:dateIn AND personne.date<=:dateOut ";

        $stmt=$dbh->prepare($sql);

        $stmt->bindParam(':rue', $x);
        $stmt->bindParam(':dateIn', $dateIn);
        $stmt->bindParam(':dateOut', $dateOut);

        $stmt->execute();

        $stats2=$stmt->fetch();
    
        $result=$stats['COUNT(nbDomestique)']/$stats2['COUNT(nbDomestique)'];

    return $result;
}



function getVoisinss($dbh,$x,$y,$dateIn,$dateOut){

    $sql='SELECT date,id_Menage,id_Quartier,menage.batiment FROM personne INNER JOIN menage 
    WHERE menage.id=personne.id_Menage AND menage.rue=:rue AND personne.date>=:dateIn AND personne.date<=:dateOut AND menage.batiment!=:num
    GROUP BY id_Menage';


    $stmt=$dbh->prepare($sql);
    $stmt->bindParam(':rue', $y);
    $stmt->bindParam(':dateIn', $dateIn);
    $stmt->bindParam(':dateOut', $dateOut);
    $stmt->bindParam(':num', $x);

    $stmt->execute();

    $result=$stmt->fetchAll();

    return $result;

}

function stats_enfants($dbh,$x,$dateIn,$dateOut){

    $sql="SELECT nbEnfantM16,nbEnfantP16 FROM personne 
    INNER JOIN menage 
     WHERE menage.id=personne.id_Menage AND menage.rue=:rue AND personne.date>=:dateIn AND personne.date<=:dateOut GROUP BY personne.id";

     $stmt=$dbh->prepare($sql);

    $stmt->bindParam(':rue', $x);
    $stmt->bindParam(':dateIn', $dateIn);
    $stmt->bindParam(':dateOut', $dateOut);

    $stmt->execute();

    $stats=$stmt->fetchAll();
     
    $arr=array();

    foreach($stats as $stat){
        array_push($arr,$stat['nbEnfantM16']+$stat['nbEnfantP16']);
    };

    $somme=0;

    for($i=0;$i<count($arr);$i++){
        $somme=$somme+$arr[$i];
    };

    $resul=$somme/count($stats);

    $result=round($resul,1);
   

    return $result;
}

function stats_lieu($dbh,$x,$dateIn,$dateOut){
     
    $sql="SELECT COUNT(lieu) FROM personne 
    INNER JOIN menage 
     WHERE menage.id=personne.id_Menage AND menage.rue=:rue AND personne.date>=:dateIn AND personne.date<=:dateOut";

     $stmt=$dbh->prepare($sql);

    $stmt->bindParam(':rue', $x);
    $stmt->bindParam(':dateIn', $dateIn);
    $stmt->bindParam(':dateOut', $dateOut);

    $stmt->execute();

    $stats=$stmt->fetch();

    $sql="SELECT COUNT(lieu) FROM personne 
    INNER JOIN menage 
     WHERE menage.id=personne.id_Menage AND menage.rue=:rue AND personne.date>=:dateIn AND personne.date<=:dateOut AND personne.lieu!='N/A' AND personne.lieu='Charleville' ";

        $stmt=$dbh->prepare($sql);

        $stmt->bindParam(':rue', $x);
        $stmt->bindParam(':dateIn', $dateIn);
        $stmt->bindParam(':dateOut', $dateOut);

        $stmt->execute();

        $stats2=$stmt->fetch();
    
        $resul=$stats2['COUNT(lieu)']/$stats['COUNT(lieu)'];

        $result=round($resul*100,1);

    return $result;
   
}

?>