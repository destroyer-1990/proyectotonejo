PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE usuarios(idusuario integer primary key not null, login varchar(25) not null, password text not null,orden varchar(255));
INSERT INTO "usuarios" VALUES(1,'marcelo','995bf053c4694e1e353cfd42b94e4447','ABCDEFGHI');
INSERT INTO "usuarios" VALUES(2,'octavio','997100cd64f9032692288cc33e512c56','IHGFEDCBA');
INSERT INTO "usuarios" VALUES(3,'ivan','2c42e5cf1cdbafea04ed267018ef1511','ACEGHBDFI');
INSERT INTO "usuarios" VALUES(4,'diego','078c007bd92ddec308ae2f5115c1775d','FGHIABCDE');
INSERT INTO "usuarios" VALUES(5,'admin','21232f297a57a5a743894a0e4a801fc3','ABCDEFGHI');
INSERT INTO "usuarios" VALUES(6,'prueba','c893bad68927b457dbed39460e6afd62','ABCDEFGH');
INSERT INTO "usuarios" VALUES(7,'prueba2','96080775c113b0e5c3e32bdd26214aec','ABCDEFGH');
INSERT INTO "usuarios" VALUES(8,'andres','231badb19b93e44f47da1bd64a8147f2','ABCDEFGH');
INSERT INTO "usuarios" VALUES(9,'angy','1617bd153060ade79631b60acb05b53d','ABCDEFGH');
INSERT INTO "usuarios" VALUES(10,'sergio','3bffa4ebdf4874e506c2b12405796aa5','ABCDEFGH');
INSERT INTO "usuarios" VALUES(11,'pedro','c6cc8094c2dc07b700ffcc36d64e2138','ABCDEFGH');
INSERT INTO "usuarios" VALUES(12,'juan','a94652aa97c7211ba8954dd15a3cf838','ABCDEFGH');
INSERT INTO "usuarios" VALUES(13,'gabriel','647431b5ca55b04fdf3c2fce31ef1915','ABCDEFGH');
COMMIT;
