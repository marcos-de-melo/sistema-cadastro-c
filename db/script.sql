create database dbsistemacadastro;

use dbsistemacadastro;

create table tbusuarios(

    idUsuario int not null primary key auto_increment,
    nomeUsuario varchar(100) not null,
    emailUsuario varchar(100) not null,
    senhaUsuario varchar(100) not null,
    dataNascUsuario date,
    obsUsuario text
);

insert into tbusuarios (nomeUsuario,emailUsuario,senhaUsuario, dataNascUsuario,obsUsuario) 
values 
('Marcos de Melo','marcdmelo@gmail.com','123','1976-10-25','bla bla bla'),
('Juliana Melo','julianamelo@gmail.com','321','1985-08-20','minha esposa'),
('Nicoly Melo','nic@gmail.com','456','2006-09-15','Minhafilha');