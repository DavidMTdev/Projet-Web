drop table UTILISATEUR;
drop table PARCOURS_SCOLAIRE;
drop table SUIVRE;
drop table POSSEDER;
drop table COMPETENCE_CLES;
drop table EXPERIENCE_PRO;
drop table EFFECTUER;
drop table AVOIR;
drop table COMPETENCES_LANG;
create table UTILISATEUR
(
  ID_UTI int not null,
  NOM_UTI varchar(30) not null,
  PRENOM_UTI varchar(15) not null,
  ADRESSE_UTI char(50) not null,
  VILLE_UTI char(20) not null,
  CODEPOSTAL_UTI int(5) not null,
  PAYS_UTI char(15) not null,
  MAIL_UTI varchar(20) not null,
  TEL_UTI int(10) not null,
  primary key(ID_UTI)
);
create table PARCOURS_SCOLAIRE
(
  ID_SCOLAIRE int not null,
  NOM_ECOLE varchar(20) not null,
  DATE_DEBUT_SCOLARITE date not null,
  DATE_FIN_SCOLARITE date null,
  DIPLOME varchar(30) null,
  primary key(ID_SCOLAIRE)
);
create table EXPERIENCE_PRO
(
  ID_EXP int not null,
  POSTE_EXP varchar(20) not null,
  NOM_ENTREPRISE varchar(20) not null,
  DATE_DEBUT_EXP date not null,
  DATE_FIN_EXP date null,
  FONCTION_EXP varchar(150) not null,
  primary key(ID_EXP)
);
create table COMPETENCE_CLES
(
  ID_COMP_CLES int not null,
  NOM_CLES varchar(15) not null,
  NIVEAU_CLES int(3) not null,
  CERTIFICATION_CLES varchar(20) null,
  primary key(ID_COMP_CLES)
);
create table COMPETENCES_LANG
(
  ID_LANG int not null,
  NOM_LANG varchar(15) not null,
  NIVEAU_LANG int(3) not null,
  CERTIFICATION_LANG varchar(20) null,
  primary key(ID_LANG)
);
create table SUIVRE
(
  ID_SCOLAIRE int not null,
  ID_UTI int not null,
  primary key(ID_SCOLAIRE, ID_UTI),
  foreign key(ID_SCOLAIRE) references PARCOURS_SCOLAIRE(ID_SCOLAIRE),
  foreign key(ID_UTI) references UTILISATEUR(ID_UTI)
);
create table POSSEDER
(
  ID_UTI int not null,
  ID_COMP_CLES int not null,
  primary key(ID_UTI, ID_COMP_CLES),
  foreign key(ID_UTI) references UTILISATEUR(ID_UTI),
  foreign key(ID_COMP_CLES) references COMPETENCE_CLES(ID_COMP_CLES)
);
create table AVOIR
(
  ID_UTI int not null,
  ID_LANG int not null,
  primary key(ID_UTI, ID_LANG),
  foreign key(ID_UTI) references UTILISATEUR(ID_UTI),
  foreign key(ID_UTI) references COMPETENCES_LANG(ID_LANG)
);
create table EFFECTUER
(
  ID_EXP int not null,
  ID_UTI int not null,
  primary key(ID_EXP, ID_UTI),
  foreign key(ID_EXP) references EXPERIENCE_PRO(ID_EXP),
  foreign key(ID_UTI) references UTILISATEUR(ID_UTI)
);

