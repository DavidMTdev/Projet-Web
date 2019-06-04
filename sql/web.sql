SPOOL projet_web.log
-- pas d'affichage des substitutions de variable
SET VERIFY OFF
-- affichage des requetes SQL
SET ECHO ON

drop table UTILISATEUR cascade constraint;
drop table PARCOURS_SCOLAIRE cascade constraint;
drop table SUIVRE cascade constraint;
drop table POSSEDER cascade constraint;
drop table COMPETENCE_CLES cascade constraint;
drop table EXPERIENCE_PRO cascade constraint;
drop table EFFECTUER cascade constraint;
drop table AVOIR cascade constraint;
drop table COMPETENCES_LANG cascade constraint;

create table UTILISATEUR(
  ID_UTI integer not null,
  NOM_UTI varchar2(30) not null,
  PRENOM_UTI varchar2(15) null,
  ADRESSE_UTI char(50) not null,
  VILLE_UTI char(20) not null,
  CODEPOSTAL_UTI number(5) not null,
  PAYS_UTI char(15) not null,
  MAIL_UTI varchar2(20) not null,
  TEL_UTI number(10) not null,
  constraint pk_utilisateur primary key(ID_UTI)
);

create table PARCOURS_SCOLAIRE (
  ID_SCOLAIRE integer not null,
  NOM_ECOLE varchar2(20) not null,
  DATE_DEBUT_SCOLARITE date not null,
  DATE_FIN_SCOLARITE date null,
  DIPLOME varchar2(30) null,
  constraint pk_scolaire primary key(ID_SCOLAIRE)
);

create table EXPERIENCE_PRO(
  ID_EXP integer not null,
  POSTE_EXP varchar2(20) not null,
  NOM_ENTREPRISE varchar2(20) not null,
  DATE_DEBUT_EXP date not null,
  DATE_FIN_EXP date null,
  FONCTION_EXP varchar2(150) not null,
  constraint pk_experience primary key(ID_EXP)
);

create table COMPETENCE_CLES(
  ID_COMP_CLES integer not null,
  NOM_CLES varchar2(15) not null,
  NIVEAU_CLES number(3) not null,
  CERTIFICATION_CLES varchar2(20) null,
  constraint pk_competences_cles primary key(ID_COMP_CLES)
);

create table COMPETENCES_LANG(
  ID_LANG integer not null,
  NOM_LANG varchar2(15) not null,
  NIVEAU_LANG number(3) not null,
  CERTIFICATION_LANG varchar2(20) null,
  constraint pk_competences_lang primary key(ID_LANG)
);

create table SUIVRE(
    ID_SCOLAIRE integer not null,
    ID_UTI integer not null,
    constraint pk_suivre primary key(ID_SCOLAIRE,ID_UTI),
    constraint fk_suivre foreign key(ID_SCOLAIRE)
    references PARCOURS_SCOLAIRE(ID_SCOLAIRE),
    constraint fk_suivrebis foreign key(ID_UTI)
    references UTILISATEUR(ID_UTI)
);

create table POSSEDER(
    ID_UTI integer not null,
    ID_COMP_CLES integer not null,
    constraint pk_posseder primary key(ID_UTI,ID_COMP_CLES),
    constraint fk_posseder foreign key(ID_UTI)
    references UTILISATEUR(ID_UTI),
    constraint fk_possederbis foreign key(ID_COMP_CLES)
    references COMPETENCE_CLES(ID_COMP_CLES)
);

create table AVOIR(
    ID_UTI integer not null,
    ID_LANG integer not null,
    constraint pk_avoir primary key(ID_UTI,ID_LANG),
    constraint fk_avoir foreign key(ID_UTI)
    references UTILISATEUR(ID_UTI),
    constraint fk_avoirbis foreign key(ID_UTI)
    references COMPETENCES_LANG(ID_LANG)
);

create table EFFECTUER(
    ID_EXP integer not null,
    ID_UTI integer not null,
    constraint pk_effectuer primary key(ID_EXP,ID_UTI),
    constraint fk_effectuer foreign key(ID_EXP)
    references EXPERIENCE_PRO(ID_EXP),
    constraint fk_effectuerbis foreign key(ID_UTI)
    references UTILISATEUR(ID_UTI)
);

SPOOL off;