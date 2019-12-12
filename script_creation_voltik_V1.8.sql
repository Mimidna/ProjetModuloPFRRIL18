DROP DATABASE VOLTIK;
CREATE DATABASE VOLTIK
CHARACTER SET utf8
COLLATE utf8_bin;
USE VOLTIK;


DROP TABLE IF EXISTS OPTIONS;
CREATE TABLE OPTIONS(
        id_options   Int  Auto_increment  NOT NULL ,
        type_options Varchar (50) NOT NULL
	,CONSTRAINT OPTIONS_PK PRIMARY KEY (id_options)
)ENGINE=InnoDB;


DROP TABLE IF EXISTS VALEUR;
CREATE TABLE VALEUR(
        id_valeur      Int  Auto_increment  NOT NULL ,
        libelle_valeur Varchar (50) NOT NULL ,
        prix_valeur FLOAT NOT NULL,
        id_options      Int NOT NULL
	,CONSTRAINT VALEUR_PK PRIMARY KEY (id_valeur)

	,CONSTRAINT VALEUR_OPTIONS_FK FOREIGN KEY (id_options) REFERENCES OPTIONS(id_options)
)ENGINE=InnoDB;


DROP TABLE IF EXISTS CLIENT;
CREATE TABLE CLIENT(
        id_client        Int  Auto_increment  NOT NULL ,
        nom_client       Varchar (50) NOT NULL ,
        prenom_client    Varchar (50) NOT NULL ,
        mail_client      Varchar (50) NOT NULL ,
        telephone_client Varchar (20) NOT NULL,
		login_client Varchar (32) NOT NULL,
		mdp_client Varchar (32) NOT NULL
	,CONSTRAINT CLIENT_PK PRIMARY KEY (id_client)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS MODELE;
CREATE TABLE MODELE(
        id_modele      Varchar (50) NOT NULL ,
        libelle_modele Varchar (50) NOT NULL, 
		description_modele TEXT NULL,
		petitscaracteres TEXT NULL
	,CONSTRAINT MODELE_PK PRIMARY KEY (id_modele)
)ENGINE=InnoDB;



DROP TABLE IF EXISTS FINITION;
CREATE TABLE FINITION(
        id_finition      Int  Auto_increment  NOT NULL ,
        libelle_finition Varchar (50) NOT NULL ,
        prix_finition FLOAT NOT NULL,
        id_modele        Varchar (50) NOT NULL
	,CONSTRAINT FINITION_PK PRIMARY KEY (id_finition)

	,CONSTRAINT FINITION_MODELE_FK FOREIGN KEY (id_modele) REFERENCES MODELE(id_modele)
)ENGINE=InnoDB;


DROP TABLE IF EXISTS VOITURE;
CREATE TABLE VOITURE(
        id_voiture  Int  Auto_increment  NOT NULL ,
        id_client   Int NOT NULL ,
        id_finition Int NOT NULL
	,CONSTRAINT VOITURE_PK PRIMARY KEY (id_voiture)

	,CONSTRAINT VOITURE_CLIENT_FK FOREIGN KEY (id_client) REFERENCES CLIENT(id_client)
	,CONSTRAINT VOITURE_FINITION_FK FOREIGN KEY (id_finition) REFERENCES FINITION(id_finition)
)ENGINE=InnoDB;


DROP TABLE IF EXISTS Contrainte;
CREATE TABLE Contrainte(
        id_finition Int NOT NULL ,
        id_valeur   Int NOT NULL ,
		estDefaut boolean,
		estInclus boolean
	,CONSTRAINT Contrainte_PK PRIMARY KEY (id_finition,id_valeur)

	,CONSTRAINT Contrainte_FINITION_FK FOREIGN KEY (id_finition) REFERENCES FINITION(id_finition)
	,CONSTRAINT Contrainte_VALEUR_FK FOREIGN KEY (id_valeur) REFERENCES VALEUR(id_valeur)
)ENGINE=InnoDB;


DROP TABLE IF EXISTS Composer;
CREATE TABLE Composer(
        id_voiture Int NOT NULL ,
        id_valeur  Int NOT NULL
	,CONSTRAINT Composer_PK PRIMARY KEY (id_voiture,id_valeur)

	,CONSTRAINT Composer_VOITURE_FK FOREIGN KEY (id_voiture) REFERENCES VOITURE(id_voiture)
	,CONSTRAINT Composer_VALEUR_FK FOREIGN KEY (id_valeur) REFERENCES VALEUR(id_valeur)
)ENGINE=InnoDB;

