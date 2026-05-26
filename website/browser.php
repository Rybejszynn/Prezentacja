<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
    $link = htmlspecialchars($_POST["link"]);
     
    $strg = array("strona-glowna", "strona główna", "strona głowna", "strona glowna", "strona-główna", "strona gł", "home", "sg",  " strona-glowna", "strona-glowna ", " strona główna", "strona główna ", " strona głowna", "strona glowna ", " strona-główna", "strona-główna ", " strona gł", "strona gł ", " home", "home ", " sg", "sg ");
    $a1a = array("dachowiec", "kot dachowiec", "kot domowy", "kotek", "dziki kot", "dachowiec kot", "mieszaniec", "kot mieszaniec", "kot mieszany", "rasa mieszana", "Dachowiec", "Kot dachowiec", "Kot domowy", "Kotek", "Dziki kot", "Dachowiec kot", "Mieszaniec", "Kot mieszaniec", "Kot mieszany", "Rasa mieszana", " dachowiec", "dachowiec ", " kot dachowiec", "kot dachowiec ", " kot domowy", "kot domowy ", " kotek", "kotek ", " dziki kot", "dziki kot ", " dachowiec kot", "dachowiec kot ", " mieszaniec", "mieszaniec ", " kot mieszaniec", "kot mieszaniec ", " kot mieszany", "kot mieszany ", " rasa mieszana", "rasa mieszana ");
    $a1b = array("kot perski", "perski", "perski kot", "persian", "rasa perska", "perska rasa", "kot rasy perskiej", "Perski", "Kot perski", "Perski kot", "Persian", "Rasa perska", "Perska rasa", "Kot rasy perskiej", " kot perski", "kot perski ", " perski", "perski ", " perski kot", "perski kot ", " persian", "persian ", " rasa perska", "rasa perska ", " perska rasa", "perska rasa ", " kot rasy perskiej", "kot rasy perskiej ");
    $a1c = array("ragdoll", "kot ragdoll", "ragdoll kot", "rasa ragdoll", "ragdoll rasa", "kot rasy ragdoll", "Ragdoll", "Kot ragdoll", "Ragdoll kot", "Rasa ragdoll", "Ragdoll rasa", "Kot rasy ragdoll", " ragdoll", "ragdoll ", " kot ragdoll", "kot ragdoll ", " rasa ragdoll", "rasa ragdoll ", " rasa ragdoll", "rasa ragdoll ");
    $a2a = array("norweski", "kot norweski", "kot norweski lesny", "norweski lesny", "norweski kot", "norweski lesny kot", "norweski leśny", "kot norweski leśny", "norweski leśny kot", "Norweski", "Kot norweski", "Kot norweski lesny", "Norweski lesny", "Norweski kot", "Norweski lesny kot", "Norweski leśny", "Kot norweski leśny", "Norweski leśny kot", " norweski", "norweski ", " kot norweski", "kot norweski ", " kot norweski lesny", "kot norweski leśny", " norweski lesny", "norweski lesny ", " norweski kot", "norweski kot ", " norweski lesny kot", "norweski lesny kot ", " norweski leśny", "norweski leśny ", " kot norweski leśny", "kot norweski leśny ");
    $a2b = array("brytyjski", "kot brytyjski", "brytyjski kot", "herbaciany kot", "kot brytyjski krotkowlosy", "kot brytyjski krótkowłosy", "kot brytyjski krótkowlosy", "kot brytyjski krotkowłosy", "british shorthair ", "rasa brytyjska", "brytyjska rasa", "kot rasy brytyjskiej", "Brytyjski", "Kot brytyjski", "Brytyjski kot", "Herbaciany kot", "Kot brytyjski krotkowlosy", "Kot brytyjski krótkowłosy", "Kot brytyjski krótkowlosy", "Kot brytyjski krotkowłosy", "British shorthair", "Rasa brytyjska", "Brytyjska rasa", "Kot rasy brytyjskiej", " brytyjski", "brytyjski ", " kot brytyjski", "kot brytyjski ", " brytyjski kot", "brytyjski kot ", " herbaciany kot", "herbaciany kot ", " kot brytyjski krotkowlosy", "kot brytyjski krotkowlosy ", " kot brytyjski krótkowłosy", "kot brytyjski krótkowłosy ", " kot brytyjski krótkowlosy", "kot brytyjski krótkowlosy ");
    $a2c = array("kartuski", "kot kartuski", "kartuski kot", "kot rasy kartuskiej", "rasa kartuska", "kartuska rasa", "Kartuski", "Kot kartuski", "Kartuski kot", "Kot rasy kartuskiej", "Rasa kartuska", "Kartuska rasa", " kartuski", "kartuski ", "kot kartuski", "kot kartuski ", " kartuski kot", "kartuski kot ", " kot rasy kartuskiej", "kot rasy kartuskiej ", " rasa kartuska", "rasa kartuska ", " kartuska rasa", "kartuska rasa ");
    $a3a = array("sfinks", "sphynx", "kot sfinks", "kot sphynx", "sphynx cat", "kot rasy sfinks", "sphynx rasa", "sfinks rasa", "sfinks rasy", "Sphynx", "Kot sfinks", "Akot sphynx", "Sphynx cat", "Kot rasy sfinks", "Sphynx rasa", "Sfinks rasa", "Sfinks rasy", " sfinks", "sfinks ", " kot sfinks", "kot sfinks ", " sphynx", "sphynx ", " kot sphynx", "kot sphynx ", " sphynx cat", "sphynx cat ", " kot rasy sfinks", "kot rasy sfinks ", " sphynx rasa", "sphynx rasa ", " sfinks rasa", "sfinks rasa ");
    $a3b = array("devon rex", "kot devon rex", "devon rex kot", "devon rex kot", "devon reks", "devon reks kot", "devon reks rasa", "kot rasy devon rex", "kot rasy devon reks", "devon rex rasa", "Devon Rex", "Kot devon rex", "Devon rex kot", "Devon reks", "Devon reks kot", "Devon reks rasa", "Kot rasy devon rex", "Kot rasy devon reks", "Devon rex rasa", "devon rex", "devon rex ", " kot devon rex", "kot devon rex ", " devon rex kot", "devon rex kot ", " devon reks", "devon reks ", " devon reks kot", "devon reks kot ", " devon reks rasa", "devon reks rasa ", " kot rasy devon rex", "kot rasy devon rex ", " kot rasy devon reks", "kot rasy devon reks ");
    $a3c = array("savannah", "kot savannah", "savannah kot", "kot rasy savannah", "rasa savannah", "savannah rasa", "Savannah", "Kot savannah", "Savannah kot", "Kot rasy savannah", "Rasa savannah", "Savannah rasa", "savannah", "savannah ", " kot savannah", "kot savannah ", " savannah kot", "savannah kot ", " kot rasy savannah", "kot rasy savannah ", " rasa savannah", "rasa savannah ", " savannah rasa", "savannah rasa ");
    if (empty($link)) {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        die;
    }
    if (in_array($link, $strg)) {
        
        header("location: strona-glowna");
        exit;
    }
    elseif (in_array($link, $a1a)) {
        header("location: dachowiec");
        exit;
    }

    elseif (in_array($link, $a1b)) {
        header("location: kot-perski");
        exit;
    }

    elseif (in_array($link, $a1c)) {
        header("location: ragdoll");
        exit;
    }

    elseif (in_array($link, $a2a)) {
        header("location: kot-norweski");
        exit;
    }

    elseif (in_array($link, $a2b)) {
        header("location: kot-brytyjski-krotkowlosy");
        exit;
    }

    elseif (in_array($link, $a2c)) {
        header("location: kot-kartuski");
        exit;
    }

    elseif (in_array($link, $a3a)) {
        header("location: sfinks");
        exit;
    }

    elseif (in_array($link, $a3b)) {
        header("location: kot-devon-rex");
        exit;
    }

    elseif (in_array($link, $a3c)) {
        header("location: kot-savannah");
        exit;
    }
   
    else {
    header("Location: https://www.youtube.com/watch?v=dQw4w9WgXcQ");
    exit;
    }


} else {
    header("Location: strona-glowna");
    exit;
}
	


	