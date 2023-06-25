create database arquiveshield
default character set utf8mb4
default collate utf8mb4_general_ci;

use arquiveshield;

CREATE TABLE usuarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL,
  tipo_conta VARCHAR(255) NOT NULL,
  nome VARCHAR(255) NOT NULL,
  senha VARCHAR(255) NOT NULL
);

select * from usuarios;