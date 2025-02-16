<?php




/*Crea un file chiamato class.php e crea una classe astratta di tipo Categoria , con i relativi figli (ovvero che estendono Category) seguendo questa struttura:
Category
-- Attualita'
-- Sport
-- Gossip
-- Storia

Tutte le classi dovranno avere un metodo astratto chiamato: getMyCategory() che mostri a schermo il valore relativo. */ 

// Definizione della classe astratta Category







abstract class Category {

    abstract public function getMyCategory();

}






// Classe Attualita
class News extends Category {

    public function getMyCategory() {

       return "News \n";

    }

}





// Classe Sport 
class Sport extends Category {

    public function getMyCategory() {

        return "Sport \n";

    }

}





// Classe Gossip 
class Gossip extends Category {

    public function getMyCategory() {

        return "Gossip \n";

    }
}





// Classe Storia 

class History extends Category {

    public function getMyCategory() {

        return " Storia \n";

    }
}






?>