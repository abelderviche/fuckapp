alter table tipo_empresa add template varchar(255) default null;

alter table puteadas add id_empresa int(11) default null;

update tipo_empresa set template='carta_prueba.php';