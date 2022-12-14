<?php

class Manager{

    private $_db;
    private $table = 'poisson';

    public function __construct(){
        $this->_db = Database::db();
    }

    //readAll
    public function readAll(){
        $sql = "SELECT * FROM $this->table";
        $query = $this->_db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    //update poisson
    public function readUpdate(){
        $sql = "SELECT * FROM $this->table LIMIT 1 OFFSET 4";
        $query = $this->_db->prepare($sql);
        $query->execute();
        return $query->fetch();
    }

    public function changeKraken($_poisson){
        $sql = "UPDATE `poisson` SET `poisson` ='kraken' WHERE id = :param1";
        $query = $this->_db->prepare($sql);
        $query->bindParam(':param1', $_poisson, PDO::PARAM_INT);
        $query->execute();
    }
    //fin update poisson

    //list by color
    public function color(){
        $sql = "SELECT * from poisson ORDER BY couleur DESC";
        $query = $this->_db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    //readone
    public function readOne(){
        $sql = "SELECT * FROM `poisson` ORDER BY RAND() LIMIT 1";
        $query = $this->_db->prepare($sql);
        $query->execute();
        return $query->fetch();
    }

    //delete one
    public function deleteOne(){
        $sql = "DELETE  FROM `poisson` WHERE id = id ORDER BY RAND() LIMIT 1";
        $query = $this->_db->prepare($sql);
        $query->execute();
    }

    //create table
    public function createTable(){
        $sql = "CREATE TABLE IF NOT EXISTS `poisson` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `poisson` varchar(64) NOT NULL,
                `description` varchar(256) NOT NULL,
                `age` int(11) NOT NULL,
                `couleur` varchar(64) NOT NULL,
                `size` float NOT NULL,
                PRIMARY KEY (`id`)
                )ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=utf8";
        $query = $this->_db->prepare($sql);
        $query->execute();
    }

    //create value
    public function createValue(){
        $sql = "INSERT INTO `poisson` (`id`, `poisson`, `description`, `age`, `couleur`, `size`) VALUES
        (1, 'Oscar', 'L\'Oscar est un poisson de la famille des cichlid??s originaire d\'Am??rique du Sud et populaire dans les aquariums.', 20, 'noir', 36),
        (2, 'Corydora nain', 'Le corydoras pygm??e ou poisson-chat pygm??e est un poisson tropical et d\'eau douce appartenant ?? la sous-famille des Corydoradinae de la famille des Callichthyidae.', 5, 'beige', 4),
        (3, 'Silure de verre', 'Le genre Kryptopterus regroupe plusieurs esp??ces de poissons asiatiques de la famille des Silurid??s.', 5, 'transparent', 10),
        (4, 'Nez rouge', 'Le Nez rouge, T??tra ?? bouche rouge ou T??tra au nez rouge, est une esp??ce de poissons d\'eau douce de la famille des Characid??s.', 5, 'beige', 5),
        (5, 'Veuve noire', 'Le T??tra noir ou Veuve noire est un poisson de la famille des Characid??s originaire d\'Am??rique du Sud.', 6, 'gris', 7),
        (6, 'N??on du pauvre', 'Le Vairon de Chine, Cardinal ou N??on du pauvre est une esp??ce de poissons de la famille des Cyprinidae.', 3, 'argent??', 4),
        (7, 'Poisson-chat otocinclus', 'Le genre Otocinclus regroupe plusieurs esp??ces de poissons d\'eau douce de la famille des Loricariidae et originaires d\'Am??rique du Sud.', 8, 'beige', 5),
        (8, 'Tetra diamant', 'Le T??tra diamant est une esp??ce de poissons d\'eau douce de la famille des Characid??s originaire d\'Am??rique du Sud. ', 5, 'blanc', 5),
        (9, 'Tetra fant??me noir', 'Le t??tra fant??me noir est un petit poisson de la famille des Characid??s originaire d\'Am??rique du Sud.', 5, 'noir', 5),
        (10, 'Yeux bleus', 'Longtemps rang?? parmi les Aplocheilichthys, Poropanchax normani est un petit poisson originaire de la ceinture tropicale africaine.', 4, 'bleu', 4),
        (11, 'Apisto perroquet', 'Apistogramma cacatuoides est une esp??ce de poissons de la famille des Cichlidae. Elle a ??t?? d??crite par le docteur Jacobus Johannes Hoedeman en 1951.', 5, 'jaune', 8),
        (12, 'N??on rouge', 'Paracheirodon axelrodi, commun??ment appel?? Cardinalis mais aussi appel?? N??on rouge, T??tra cardinal et n??on cardinalis.', 5, 'beige', 4),
        (13, 'Barbu ros??', 'Le barbus ros?? est un poisson vivant en banc qui r??side naturellement ?? proximit?? du fond. ', 4, 'ros??', 15),
        (14, 'Barbus dor??', 'Puntius semifasciolatus, ??galement appel?? barbus dor?? ou barbus de schubert est une esp??ce de poisson de la famille des Cyprinidae. ', 5, 'dor??', 7),
        (15, 'Arc en ciel de boeseman', 'Melanotaenia boesemani, ou Arc-en-ciel de Boeseman, est un poisson de la famille des Melanotaeniid??s.', 5, 'multicolore ', 10),
        (16, 'Corydora bronze', 'Le Corydoras bronze ou Corydoras cuivr?? est une esp??ce de poissons d\'eau douce', 8, 'bronze', 7),
        (17, 'Microrasbora galaxy', 'Danio margaritatus est une esp??ce de poissons d\'eau douce.', 5, 'gris', 2),
        (18, 'Rasbora orn??', 'Le rasbora orn?? est un tout petit poisson d????? peine deux centim??tre, rouge vif avec une bande noire.', 8, 'rouge', 3),
        (19, 'Rasbora arlequin', 'Le rasbora arlequin est un petit poisson de couleur rose ?? rouge, avec un triangle noir sur les c??t??s de la queue. ', 5, 'ros??', 4),
        (20, 'Botia clown\r\n', 'Le botia clown est un poisson de fonds qui peut devenir tr??s grand : il atteint jusqu????? 25 centim??tres de long ?? l?????ge adulte !', 20, 'orange', 30),
        (21, 'Ramirezi', 'Le ramirezi est un cichlid?? nain tr??s color?? qu???il convient de maintenir en couple.', 4, 'bleut??', 4),
        (22, 'Poisson hachette marbr??', 'Le poisson hachette marbr?? est originale par sa forme et son comportement. Il est impossible de le confondre avec un autre poisson ! ', 5, 'vert', 4),
        (23, 'Scalaire', 'Les scalaires sont un des symboles de l???aquariophilie, reconnaissable ?? sa forme de demi-lune. ', 9, 'multicolore', 20),
        (24, 'Discus', 'Tous les aquariophiles ont en t??te un grand aquarium et son groupe de discus color??s, souvent vus comme un graal.', 12, 'multicolore', 20),
        (25, 'Gourami perl??', 'Le gourami perl?? doit son nom ?? sa robe constell??e de points blancs. C???est un poisson sublime qui attire les regards ?? tous les coups.', 8, 'blanc', 13),
        (26, 'Platy', 'Le platy est un classique des aquariums d???eau douce, r??sistant et disponible avec une certaine vari??t?? de couleurs.', 5, 'rouge', 7),
        (27, 'Corydora poivr??', 'Les corydoras sont des petits poissons chats qui occupent le fonds de l???aquarium et passent leurs journ??es ?? fouiller le sable ?? la recherche de nourriture.', 10, '', 8),
        (28, 'Barbu cerise', 'Voil?? un poisson ?? la couleur ??clatante et au comportement vif.', 7, 'cerise', 5),
        (29, 'Pleco', 'Le pl??co est un poisson d???aquarium embl??matique, qui en animalerie semble similaire ?? l???ancistrus.', 20, 'noir', 20),
        (30, 'T??tra ??tincelle', 'Le t??tra ??tincelle est un petit poisson orang?? toujours en activit??.', 4, 'orange', 2),
        (31, 'kuhlii', 'Le kuhlii est un poisson original tant par son apparence que par son comportement.', 16, 'jaune', 10);
        COMMIT";
        $query = $this->_db->prepare($sql);
        $query->execute();
    }

    //vider la table
    public function viderTable(){
        $sql = "DELETE FROM poisson";
        $query = $this->_db->prepare($sql);
        $query->execute();
    }

    //delete la table
    public function deleteTable(){
        $sql = "DROP table  poisson";
        $query = $this->_db->prepare($sql);
        $query->execute();
    }
}
