create table customers
    (customer_ID     char(5),
     first_name      varchar(20),
     middle_initial  char(1),
     last_name       varchar(20),
     street_address  varchar(50),
     city            varchar(20),
     state           char(2),
     postal_code     varchar(5),
     phone_number    varchar(15),
     email           varchar(20),
     primary key (customer_ID)
    );

create table vehicles
    (VIN         char(17),    
     make        varchar(20),
     model       varchar(20),
     year        char(4),
     color       varchar(20),
     mileage     int(7),
     customer_ID char(5),
     primary key (VIN),
     foreign key (customer_ID) references customers (customer_ID)
    );

create table employees
    (employee_ID     char(5),
     first_name      varchar(20),
     middle_initial  char(1),
     last_name       varchar(20),
     role            varchar(20),
     primary key (employee_ID)
    );

create table services
    (service_ID      char(5),
     service_cost    decimal(8, 2),
     service_date    date,
     VIN             char(17),
     employee_ID     char(5),
     primary key (service_ID),
     foreign key (VIN) references vehicles (VIN),
     foreign key (employee_ID) references employees (employee_ID)
    );

create table sales
    (transaction_number    char(5),
     sale_date             date,
     sticker_price         decimal(9, 2),
     final_price           decimal(9, 2),
     VIN                   char(17),
     employee_ID           char(5),
     primary key (transaction_number),
     foreign key (VIN) references vehicles (VIN),
     foreign key (employee_ID) references employees (employee_ID)
    );