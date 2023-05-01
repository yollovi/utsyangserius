CREATE DATABASE Redlock;
USE Redlock;
CREATE TABLE  users(
	ID INT PRIMARY KEY NOT NULL,
	 Nama VARCHAR (77) NOT NULL,
	Alamat VARCHAR (77) NOT NULL,
	Jabatan VARCHAR (77) NOT NULL
);

INSERT INTO users VALUES
(1 ,  "semoga", "jett" , "gekko"),
(2 ,  "ini", "phoenix" , "skye"),
(3 ,  "lebi", "reyna" , "kayo"),
(4 ,  "rapi", "raze" , "yoru");

