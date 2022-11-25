-- ===============================
-- Created By : M. Radja Herlangga
-- ===============================
CREATE DATABASE `dataweb`;
CREATE TABLE `dataweb`.user(id int AUTO_INCREMENT,username VARCHAR(80),email VARCHAR(250),password VARCHAR(250),profile_picture VARCHAR(250),token_user VARCHAR(250), primary key(id));
INSERT INTO `dataweb`.user VALUES (1,'rhcom','radjaherlangga206@gmail.com',md5('radja'),'/images/ganteng.jpg','12345678910');