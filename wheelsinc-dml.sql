delete from sales;
delete from services;
delete from employees;
delete from vehicles;
delete from customers;
delete from users;


insert into users values ('gprocick', 'admin', 0, '00001');
insert into users values ('dmorris', 'admin', 0, '00002');
insert into users values ('bjennings', 'admin', 0, '00003');
insert into users values ('ldavid', 'pr3ttypr3ttyGOOD', 1, '4');
insert into users values ('rlewis', 'DATABASEfromh3ll', 1, '5');
insert into users values ('jseinfeld', 'WHATSthed3al', 1, '6');
insert into users values ('jgarlin', 'G0ldb3rG', 1, '7');


insert into customers values ('10001', 1, 'Gavin', 'T', 'Procick', '5435 Main Street', 'Youngstown', 'OH', '44436', '3306543287', 'gtp567@gmail.com');
insert into customers values ('10002', 2, 'Devon', 'M', 'Morris', '6969 Long Road', 'Canton', 'OH', '44646', '3304728653', 'tmorris69@gmail.com');
insert into customers values ('10003', 3, 'Brandon', 'J', 'Jennings', '7542 South Avenue', 'Cleveland', 'OH', '44101', '4406541298', 'bjennings72@yahoo.com');


insert into vehicles values ('JM1CR293590347669', 'Honda', 'Civic', '2022', 'Black', 25345, 31230.00, '00001');
insert into vehicles values ('1ZVBP8EM8E5233971', 'Honda', 'Accord', '2008', 'Grey', 87654, 19234.69, '00002');
insert into vehicles values ('5XYKTCA18BG024293', 'Ford', 'Focus', '2018', 'Blue', 2654, 22234.77, '00003');
insert into vehicles values ('2C3LA63H27H785940', 'Ford', 'Focus', '2010', 'Red', 99000, 10000.00, NULL);
insert into vehicles values ('1GKFK63868J226675', 'Kia', 'Soul', '2017', 'Blue', 25432, 15000.99, NULL);
insert into vehicles values ('1GNFK130X8J175021', 'Chevrolet', 'Silverado', '2016', 'Green', 32343.00, 77890, NULL);
insert into vehicles values ('4A3AB36S66E049365', 'Chevrolet', 'Cruz', '2015', 'Orange', 125432, 17897.75, NULL);
insert into vehicles values ('2G1FE1E36E9192146', 'Volkswagon', 'Jetta', '2012', 'Silver', 54678, 9000.00, NULL);


insert into employees values (4, 'Larry', 'G', 'David', 'Mechanic');
insert into employees values (5, 'Richard', 'P', 'Lewis', 'Mechanic');
insert into employees values (6, 'Jerry', 'A', 'Seinfeld', 'Salesperson');
insert into employees values (7, 'Jeff', 'T', 'Garlin', 'Salesperson');


insert into services values ('00001', 'Brake Replacement', 2543.87, '2023-08-07', 'JM1CR293590347669', 4);
insert into services values ('00002', 'New Tires', 1573.43, '2024-01-07', '1ZVBP8EM8E5233971', 5);


insert into sales values ('00001', '2021-06-05', 32654.87, 31230.00, 'JM1CR293590347669', 6);
insert into sales values ('00002', '2017-03-07', 19234.69, 19234.69, '1ZVBP8EM8E5233971', 7);
insert into sales values ('00003', '2019-07-12', 24999.99, 22234.77, '5XYKTCA18BG024293', 6);
