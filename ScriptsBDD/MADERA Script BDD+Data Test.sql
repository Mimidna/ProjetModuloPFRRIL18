
#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

DROP DATABASE IF EXISTS modulo;
CREATE DATABASE modulo;
USE modulo;

#------------------------------------------------------------
# Table: CLIENT
#------------------------------------------------------------
DROP TABLE IF EXISTS CLIENT;
CREATE TABLE CLIENT(
        client_id            Int  Auto_increment  NOT NULL ,
        client_nom           Varchar (50) NOT NULL ,
        client_prenom        Varchar (50) NOT NULL ,
        client_telephone     Varchar (10) NOT NULL ,
        client_mail          Varchar (25) NOT NULL,
        client_adresse       Varchar (100) NOT NULL ,
        client_codePostal    Varchar (5) NOT NULL ,
        client_ville         Varchar (50) NOT NULL
	,CONSTRAINT CLIENT_PK PRIMARY KEY (client_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: COMMERCIAL
#------------------------------------------------------------
DROP TABLE IF EXISTS COMMERCIAL;
CREATE TABLE COMMERCIAL(
        commercial_id          Int  Auto_increment  NOT NULL ,
        commercial_nom         Varchar (50) NOT NULL ,
        commercial_prenom      Varchar (50) NOT NULL ,
        commercial_identifiant Varchar (25) NOT NULL ,
        commercial_motDePasse  Varchar (255) NOT NULL ,
		commercial_matricule   Varchar (30) NOT NULL
	,CONSTRAINT COMMERCIAL_PK PRIMARY KEY (commercial_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: GAMME
#------------------------------------------------------------
DROP TABLE IF EXISTS GAMME;
CREATE TABLE GAMME(
        gamme_id          Int  Auto_increment  NOT NULL ,
        gamme_libelle     Varchar (50) NOT NULL ,
        gamme_description Varchar (1000) NOT NULL
	,CONSTRAINT GAMME_PK PRIMARY KEY (gamme_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PROJET
#------------------------------------------------------------
DROP TABLE IF EXISTS PROJET;
CREATE TABLE PROJET(
        projet_id     Int  Auto_increment  NOT NULL ,
        commercial_id Int NOT NULL ,
        client_id     Int NOT NULL
	,CONSTRAINT PROJET_PK PRIMARY KEY (projet_id)

	,CONSTRAINT PROJET_COMMERCIAL_FK FOREIGN KEY (commercial_id) REFERENCES COMMERCIAL(commercial_id)
	,CONSTRAINT PROJET_CLIENT0_FK FOREIGN KEY (client_id) REFERENCES CLIENT(client_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MODELE
#------------------------------------------------------------
DROP TABLE IF EXISTS MODELE;
CREATE TABLE MODELE(
        modele_id           Int  Auto_increment  NOT NULL ,
        modele_libelle      Varchar (50) NOT NULL ,
        modele_description  Varchar (1000) NOT NULL
	,CONSTRAINT MODELE_PK PRIMARY KEY (modele_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: MODULE
#------------------------------------------------------------
DROP TABLE IF EXISTS MODULES;
CREATE TABLE MODULES(
        module_id           Int  Auto_increment  NOT NULL ,
        module_libelle      Varchar (50) NOT NULL ,
        module_description  Varchar (1000) NOT NULL ,
        module_longueur     Int NOT NULL ,
        module_largeur      Int NOT NULL ,
        module_typeMateriau Varchar (50) NOT NULL ,
        module_prixHT       Float NOT NULL ,
        modele_id           Int NOT NULL
	,CONSTRAINT MODULE_PK PRIMARY KEY (module_id)

	,CONSTRAINT MODULE_MODELE_FK FOREIGN KEY (modele_id) REFERENCES MODELE(modele_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: DEVIS
#------------------------------------------------------------
DROP TABLE IF EXISTS DEVIS;
CREATE TABLE DEVIS(
        devis_id           Int  Auto_increment  NOT NULL ,
        devis_dateCreation Date NOT NULL ,
        devis_etat         Varchar (25) NOT NULL ,
        projet_id          Int NOT NULL ,
        module_id          Int NOT NULL
	,CONSTRAINT DEVIS_PK PRIMARY KEY (devis_id)

	,CONSTRAINT DEVIS_PROJET_FK FOREIGN KEY (projet_id) REFERENCES PROJET(projet_id)
	,CONSTRAINT DEVIS_MODULE0_FK FOREIGN KEY (module_id) REFERENCES MODULE(module_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: disposer
#------------------------------------------------------------
DROP TABLE IF EXISTS DISPOSER;
CREATE TABLE disposer(
        modele_id Int NOT NULL ,
        gamme_id  Int NOT NULL
	,CONSTRAINT disposer_PK PRIMARY KEY (modele_id,gamme_id)

	,CONSTRAINT disposer_MODELE_FK FOREIGN KEY (modele_id) REFERENCES MODELE(modele_id)
	,CONSTRAINT disposer_GAMME0_FK FOREIGN KEY (gamme_id) REFERENCES GAMME(gamme_id)
)ENGINE=InnoDB;


#--------------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------------------------------------------------
#    INSERTION DES DONNES DE TEST
#--------------------------------------------------------------------------------------------------------------------------------------------
#--------------------------------------------------------------------------------------------------------------------------------------------

INSERT INTO client (client_id, client_nom, client_prenom, client_telephone, client_mail, client_adresse, client_codePostal, client_ville) VALUES 
(1,"RAISON","Julie","0530745939","j.raison@gmail.com","1 rue d'horgesti","49124","Saint Barthelemy d'Anjou"),
(2,"MAIRESSE","christophe","0470213395","cmairesse@dsi-ap.com","36 quai des orfevres","75000","Paris"),
(3,"GAGLIONE","Emilie","0856386176","e.gaglione@gmail.com","8 rue de Rieux","44000","Nantes"),
(4,"SOLE","Benoit","0249434042","b.sole@dsi-ap.com","7 rue des rosiers","75000","Paris"),
(5,"LEBERRE","Steeve","0501680221","steeve.leberre@gmail.com","5 rue penhouet","44225","St Nazaire"),
(6,"MICHARD","Christophe","0656064028","cmichard@orange.fr","98 avenue des champs","69007","Lyon"),
(7,"VISBECQ","Nathalie","0747173256","ljouan@gmail.com","6 rue gambetta","13000","Marseille"),
(8,"PAGOT","Nathalie","0241270211","ljouan@gmail.com","6 rue gambetta","06000","Nice");


INSERT INTO commercial (commercial_id, commercial_nom, commercial_prenom, commercial_identifiant, commercial_motDePasse, commercial_matricule) VALUES
(1, 'CESI', 'Ril', 'cesi', MD5('ril'), '59 01 CR 001'),
(2, 'RICHOMME', 'David', 'ric', MD5('dav'), '44 01 DR 002'),
(3, 'JOUAN', 'Loren', 'jou', MD5('lor'), '44 01 LJ 003');

INSERT INTO gamme (gamme_libelle, gamme_description) VALUES 
('CHALET', 'C’est une petite maison de 54 m². Cette gamme est doté d’une cuisine bien équipée et bien éclairée grâce à la porte fenêtre. L’avantage de cette gamme est qu’elle est résistante, bien isolée et parfaitement adaptée aux régions montagneuses. Amateurs de la nature, voilà une habitation sur mesure !'),
('CONTEMPORAINE', 'C’est une gamme d’une surface légèrement plus importante. Elle est composée de deux chambres séparées, d’une cuisine équipée et d’une salle d’eau. Elle est également caractérisée par des ouvertures larges. Alors si vous souhaitez avoir une maison bien éclairée pendant la journée, c’est ce qu’il vous faut ! '),
('DELUXE', 'Cette gamme est caractérisé par une isolation performante au niveau des murs et de la toiture. Cette maison modulaire dispose de deux chambres à coucher, d’un beau salon, d’une salle d’eau et d’une cuisine équipée ');

INSERT INTO modele (modele_libelle, modele_description) VALUES
('INTUITIVE','description du modele intuitive'),
('CREATIVE','description du modele creative'),
('EXCLUSIVE','description du modele exclusive');








