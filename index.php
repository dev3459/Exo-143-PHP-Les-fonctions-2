<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exo 143</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    //Exo 1
    function returnTrue() {
        return true;
    }

    //Exo2
    function returnString($stringParam){
        return $stringParam;
    }

    //Exo 3
    function returnString2($stringParam, $stringParam2){
        return $stringParam . $stringParam2;
    }

    //Exo 4
    function returnInt($intParam, $intParam2){
        if($intParam > $intParam2){
            return "Le premier nombre est plus petit que le second";
        }else if($intParam < $intParam2){
            return "Le premier nombre est plus grand que le second";
        }else{
            return "Les deux sont identiques";
        }
    }

    //Exo 5
    function returnIntAndString(Int $intParam , String $stringParam){
        return $intParam . $stringParam;
    }

    //Exo 6
    function personnage(String $nom, String $prenom, Int $age){
        return "Bonjour" . $nom . " " . $prenom . ", tu as " . $age . " ans";
    }

    //Exo 7
    function persoGenreAndAge(Int $age, Array $genre = ["Homme","Femme"]){
        if($age < 18 && $genre[0]){
            return "Vous êtes un homme et vous êtes mineur";
        }else if($age >= 18 && $genre[0]){
            return "Vous êtes un homme et vous êtes majeur";
        }else if($age >= 18 && $genre[1]){
            return "Vous êtes une femme et vous êtes majeure";
        }else{
            return "Vous êtes une femme et vous êtes mineure";
        }
    }

    //Exo 8
    function paramDefault($int1, $int2, $int3){
        $int1 = 10;
        $int2 = 20;
        $int3 = 30;

        return $int1 + $int2 + $int3;
    }
    ?>
</body>
</html>