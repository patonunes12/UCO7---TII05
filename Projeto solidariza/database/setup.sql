create database solidariza;
use solidariza;

drop database solidariza;

-- tabela usuários
create table usuarios (
    id int auto_increment primary key,
    nome varchar(120) not null,
    email varchar(150) not null unique,
    senha varchar(255) not null,
    cep char(8) not null,
    logradouro varchar(150) not null,
    bairro varchar(100) not null,
    localidade varchar(100) not null,
    uf varchar(2) not null,
    nivel_acesso enum('doador', 'admin') default 'doador',
    data_cadastro datetime not null default current_timestamp
);

-- tabela campanhas
create table campanhas (
    id int auto_increment primary key,
    titulo varchar(150) not null,
    descricao text not null,
    status enum('ativa', 'encerrada') not null default 'ativa',
    data_criacao datetime not null default current_timestamp
);

-- tabela doações
create table doacoes (
    id int auto_increment primary key,
    usuario_id int not null,
    campanha_id int not null,
    item_descricao varchar(255) not null,
    quantidade int not null,
    status_logistica enum('pendente', 'aprovado', 'coletado') not null default 'pendente',
    data_registro datetime not null default current_timestamp,
    foreign key (usuario_id) references usuarios(id),
    foreign key (campanha_id) references campanhas(id)
);

select * from usuarios;
select * from campanhas;
select * from doacoes;
