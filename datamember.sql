INSERT INTO `member`(`ID`, `Name`, `Surname`, `Gender`, `Age`, `Salary`, `Tel`, `Email`) VALUES
('1',"Nhamjit","Rakmarnrean","Male","25","22000","0812345234","HOTEA@rmutsb.ac.th");
INSERT INTO `member`(`ID`, `Name`, `Surname`, `Gender`, `Age`, `Salary`, `Tel`, `Email`) VALUES
('2',"Kowin","Aeksupapan","Male","25","22000","0632349979","taaok005@gmail.com");
INSERT INTO `member`(`ID`, `Name`, `Surname`, `Gender`, `Age`, `Salary`, `Tel`, `Email`) VALUES
('3',"OhTEA","OhTEA","Male","25","22000","0812345234","HOTEA@rmutsb.ac.th");
INSERT INTO `member`(`ID`, `Name`, `Surname`, `Gender`, `Age`, `Salary`, `Tel`, `Email`) VALUES
('4',"ARM","ARM","Male","25","22000","0812345234","ARM@rmutsb.ac.th");
INSERT INTO `member`(`ID`, `Name`, `Surname`, `Gender`, `Age`, `Salary`, `Tel`, `Email`) VALUES
('5',"ARM1","ARM1","Male","25","22000","0812345234","ARM1@rmutsb.ac.th");


update member set ID='5' where ID='4';
update member set ID='4' where ID='3';
update member set ID='3' where ID='2';
update member set ID='2' where ID='1';
update member set ID='1' where ID='0';


grant  all on employee.*  to  user01@localhost 
identified  by  'rmutsb';

mysqldump–u user01@localhost –p rmutsb --databases employee> employee.sql

mysqldump–u root –p rmutsb --databases employee> employee.sql

mysql -u root -prmutsb employee < C:\xampp\bc\employee.sql