create database BdB;

use BdB;

CREATE TABLE persons (
  id bigint(20) NOT NULL AUTO_INCREMENT,
  firstname varchar(255) DEFAULT NULL,
  lastname varchar(255) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;