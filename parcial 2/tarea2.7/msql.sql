create database piwipi;
use piwipi;
create table prueb
(
	nombre varchar(30) not null,
    Id_cliente int primary key not null,
    password varchar(50) not null,
    nombre_prueb varchar(50) not null
);
drop table prueb;
insert into prueb values ("camili", 12, '1234', "popp");
insert into prueb values ("txtnombre", "txtid", sha1("piwo"), "txtnombrec");
insert into prueb values ("laisha", "1267", sha1("pipi"), "jill");
select * from prueb;