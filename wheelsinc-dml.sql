delete from sales;
delete from services;
delete from employees;
delete from vehicles;
delete from customers;


insert into customers values ('00001', 'Gavin', 'T', 'Procick', '5435 Main Street', 'Youngstown', 'OH', '44436', '3306543287', 'gtp567@gmail.com');
insert into customers values ('00002', 'Devon', 'M', 'Morris', '6969 Long Road', 'Canton', 'OH', '44646', '3304728653', 'tmorris69@gmail.com');


insert into vehicles values ('JM1CR293590347669', 'Honda', 'Civic', '2022', 'Black', 25345, '00001');
insert into vehicles values ('1ZVBP8EM8E5233971', 'Honda', 'Accord', '2008', 'Grey', 87654, '00002');
insert into vehicles values ('2C3LA63H27H785940', 'Ford', 'Focus', '2010', 'Red', 99000, null);
insert into vehicles values ('1GKFK63868J226675', 'Kia', 'Soul', '2017', 'Blue', 25432, null);
insert into vehicles values ('1GNFK130X8J175021', 'Chevrolet', 'Silverado', '2016', 'Green', 77890, null);
insert into vehicles values ('4A3AB36S66E049365', 'Chevrolet', 'Cruz', '2015', 'Orange', 125432, null);
insert into vehicles values ('2G1FE1E36E9192146', 'Volkswagon', 'Jetta', '2012', 'Silver', 54678, null);


insert into employees values ('12345', 'Larry', 'G', 'David', 'Mechanic');
insert into employees values ('11224', 'Richard', 'P', 'Lewis', 'Mechanic');
insert into employees values ('54321', 'Jerry', 'A', 'Seinfeld', 'Salesperson');
insert into employees values ('54326', 'Jeff', 'T', 'Garlin', 'Salesperson');


insert into services values ('00001', 2543.87, '2023-08-07', 'JM1CR293590347669', '12345');
insert into services values ('00002', 1573.43, '2024-01-07', '1ZVBP8EM8E5233971', '11224');


insert into sales values ('00001', '2021-06-05', 32654.87, 31230.00, 'JM1CR293590347669', '54321');
insert into sales values ('00002', '2017-03-07', 19234.69, 19234.69, '1ZVBP8EM8E5233971', '54326');
