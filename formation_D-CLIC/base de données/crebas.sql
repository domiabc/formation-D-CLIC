/*==============================================================*/
/* Nom de SGBD :  Sybase SQL Anywhere 11                        */
/* Date de création :  29/06/2023 10:15:42                      */
/*==============================================================*/


if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='CLASSE_PK'
     and t.table_name='CLASSE'
) then
   drop index CLASSE.CLASSE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='CLASSE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table CLASSE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='ELEVE_PK'
     and t.table_name='ELEVE'
) then
   drop index ELEVE.ELEVE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='ELEVE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table ELEVE
end if;

if exists(
   select 1 from sys.sysindex i, sys.systable t
   where i.table_id=t.table_id 
     and i.index_name='FILLIERE_PK'
     and t.table_name='FILLIERE'
) then
   drop index FILLIERE.FILLIERE_PK
end if;

if exists(
   select 1 from sys.systable 
   where table_name='FILLIERE'
     and table_type in ('BASE', 'GBL TEMP')
) then
    drop table FILLIERE
end if;

/*==============================================================*/
/* Table : CLASSE                                               */
/*==============================================================*/
create table CLASSE 
(
   IDCLASSE             integer                        not null,
   LIBELLE_CLASSE       char(10)                       not null,
   constraint PK_CLASSE primary key (IDCLASSE)
);

/*==============================================================*/
/* Index : CLASSE_PK                                            */
/*==============================================================*/
create unique index CLASSE_PK on CLASSE (
IDCLASSE ASC
);

/*==============================================================*/
/* Table : ELEVE                                                */
/*==============================================================*/
create table ELEVE 
(
   IDELEVE              integer                        not null,
   NOM                  char(10)                       not null,
   PRENOM               char(24)                       not null,
   _AGE                 integer                        not null,
   _GENRE               char(1)                        not null,
   NATIONALITE          char(20)                       not null,
   constraint PK_ELEVE primary key (IDELEVE)
);

/*==============================================================*/
/* Index : ELEVE_PK                                             */
/*==============================================================*/
create unique index ELEVE_PK on ELEVE (
IDELEVE ASC
);

/*==============================================================*/
/* Table : FILLIERE                                             */
/*==============================================================*/
create table FILLIERE 
(
   IDFILLIERE           integer                        not null,
   LIBELLE_FILLIERE     char(24)                       not null,
   constraint PK_FILLIERE primary key (IDFILLIERE)
);

/*==============================================================*/
/* Index : FILLIERE_PK                                          */
/*==============================================================*/
create unique index FILLIERE_PK on FILLIERE (
IDFILLIERE ASC
);

