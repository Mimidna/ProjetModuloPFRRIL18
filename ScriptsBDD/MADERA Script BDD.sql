
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
        commercial_id          int  Auto_increment  NOT NULL ,
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

