

create database crud;
use crud;

CREATE TABLE `cadastro de medico` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(200) NOT NULL,
  `CRM` varchar(11) DEFAULT NULL,
  `Telefone` int NOT NULL,
  `Especialidade` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

