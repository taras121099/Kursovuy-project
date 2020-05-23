CREATE DATABASE Turoperator;

CREATE TABLE Tours
					(Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
					Name varCHAR(60) NOT NULL,
					Cod_Country INT NOT NULL REFERENCES Country(Id),
					DateVidprav date NOT NULL,
					DatePovern date NOT NULL,
					Price INT NOT NULL);
CREATE TABLE Turist
					(Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
					LastName varCHAR(60) NOT NULL,
					FirstName varCHAR(60) NOT NULL,
					Patronym varCHAR(60) NOT NULL,
					SeriaPassport INT NOT NULL,
					NumberPassport INT NOT NULL);

CREATE TABLE Turoperators
					(Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
					Name varCHAR(60) NOT NULL);

CREATE TABLE Country
						(Id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
						 Name_Country varCHAR(60) NOT NULL);


CREATE TABLE Offers
						(Id INT NULL PRIMARY KEY AUTO_INCREMENT,
						 Cod_Tours INT NOT NULL REFERENCES Tours(Id),
						 Cod_Turist INT NOT NULL REFERENCES Turist(Id),
						 Cod_Operator INT NOT NULL REFERENCES Turoperators(Id),
						 DateOforml date NOT NULL);

ALTER TABLE `offers` ADD INDEX( `Cod_Tours`, `Cod_Turist`, `Cod_Operator`);




INSERT INTO Turoperators (Name) VALUES ("Taras");
INSERT INTO Turoperators (Name) VALUES ("Maria");
INSERT INTO Turoperators (Name) VALUES ("Marta");
INSERT INTO Turoperators (Name) VALUES ("Igor");
INSERT INTO Turoperators (Name) VALUES ("Borus");
INSERT INTO Turoperators (Name) VALUES ("Aleksandr");
INSERT INTO Turoperators (Name) VALUES ("Maksim");
INSERT INTO Turoperators (Name) VALUES ("Oleg");
INSERT INTO Turoperators (Name) VALUES ("Vlad");
INSERT INTO Turoperators (Name) VALUES ("Yaroslav");
INSERT INTO Turoperators (Name) VALUES ("Ivan");
INSERT INTO Turoperators (Name) VALUES ("Petro");
INSERT INTO Turoperators (Name) VALUES ("Yuriy");


INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Ivaniv","Taras","Muxalovych",12,1235);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Povar","Mykola","Muxalovych",12,1264);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Yaroshenko","Sergiy","Muxalovych",13,1274);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Kernes","Maria","Muxalovych",13,1284);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Koval","Oksana","Muxalovych",14,1239);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Dopilko","Bogdan","Muxalovych",14,12312);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Moskal","Yaroslav","Muxalovych",16,1224);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Mamenko","Igor","Muxalovych",15,1210);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Ponomarenko","Anastasia","Muxalovych",19,1134);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Kurda","Yyriy","Muxalovych",17,1215);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Mozil","Maksim","Muxalovych",17,1216);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Burda","Oleg","Muxalovych",11,1212);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Kozak","Vlad","Muxalovych",10,1225);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Sokol","Nazar","Muxalovych",11,3434);
INSERT INTO Turist (LastName,FirstName,Patronym,SeriaPassport,NumberPassport) VALUES ("Berkut","Oskold","Volodumorovych",12,2434);

INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Україні",'2020-01-01','2020-01-10',200);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Європі",'2020-01-10','2020-01-20',600);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Китаї",'2020-01-10','2020-01-20',800);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Канаді",'2020-01-10','2020-01-20',700);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Німеччині",'2020-01-20','2020-01-30',250);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Англії",'2020-02-01','2020-02-10',350);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Африці",'2020-02-01','2020-02-10',850);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Південній Азії",'2020-02-10','2020-02-20',900);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по По Близькому Сході",'2020-02-10','2020-01-20',1000);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Островам Тихого океану",'2020-03-01','2020-03-10',1500);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Бразилії",'2020-03-01','2020-03-10',900);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Штатам",'2020-03-01','2020-03-10',850);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Франції",'2020-03-10','2020-03-20',450);
INSERT INTO Tours (Name,DateVidprav,DatePovern,Price) VALUES ("Тур по Австралії",'2020-03-10','2020-03-20',1058);



INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (36,3,1,'2020-01-01');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (37,4,2,'2019-05-08');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (38,5,3,'2019-05-09');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (38,6,4,'2019-06-05');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (39,7,5,'2019-06-05');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (40,8,6,'2019-07-04');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (36,9,7,'2019-07-01');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (41,10,8,'2019-08-01');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (42,11,9,'2019-08-03');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (43,12,10,'2019-09-24');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (44,10,11,'2019-09-17');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (45,13,12,'2019-10-10');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (46,14,13,'2019-10-11');
INSERT INTO Offers (Cod_Tours,Cod_Turist,Cod_Operator,DateOforml) VALUES (40,15,10,'2019-10-19');


INSERT INTO users (username,email,password,active,admin) VALUES 
( 'tar1', 'tarasivaniv1999@gmail.com', '126', 0, 0),
( 'tar2', 'tarasivaniv1999@gmail.com', '125', 0, 0),
( 'tar4', 'tarasivaniv1999@gmail.com', '127', 0, 0),
( 'tar5', 'tarasivaniv1999@gmail.com', '128', 0, 0),
( 'tar6', 'tarasivaniv1999@gmail.com', '129', 0, 0),
( 'tar7', 'tarasivaniv1999@gmail.com', '130', 0, 0),
( 'tar8', 'tarasivaniv1999@gmail.com', '131', 0, 0),
( 'tar9', 'tarasivaniv1999@gmail.com', '132', 0, 0),
( 'tar10', 'tarasivaniv1999@gmail.com', '133', 0, 0),
( 'tar11', 'tarasivaniv1999@gmail.com', '134', 0, 0),
( 'tar12', 'tarasivaniv1999@gmail.com', '135', 0, 0);


SELECT Name, DateVidprav, DatePovern, Price FROM tours;
