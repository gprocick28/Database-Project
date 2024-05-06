create table users
    (username       varchar(20),
     password       varchar(255),
     is_employee    boolean,
     id             int AUTO_INCREMENT,  -- was a char(5)
     primary key (id)
    );

create table customers
    (customer_ID     char(5) UNIQUE,
     id              int AUTO_INCREMENT,  -- was a char(5),
     first_name      varchar(20),
     middle_initial  char(1),
     last_name       varchar(20),
     street_address  varchar(50),
     city            varchar(20),
     state           char(2),
     postal_code     varchar(5),
     phone_number    varchar(15),
     email           varchar(50),
     primary key (customer_ID),
     foreign key (id) references users (id)
    );

create table vehicles
    (VIN         char(17),    
     make        varchar(20),
     model       varchar(20),
     year        char(4),
     color       varchar(20),
     mileage     int(7),
     price       decimal(9, 2),
     customer_ID char(5),
     primary key (VIN),
     foreign key (customer_ID) references customers (customer_ID)
    );

create table employees
    (id              int AUTO_INCREMENT,  -- was a char(5),
     first_name      varchar(20),
     middle_initial  char(1),
     last_name       varchar(20),
     role            varchar(20),
     primary key (id)
    );

create table services
    (service_ID      char(5),
     service_type    varchar(20),
     service_cost    decimal(8, 2),
     service_date    date,
     VIN             char(17),
     id              int AUTO_INCREMENT,  -- was a char(5),
     primary key (service_ID),
     foreign key (VIN) references vehicles (VIN),
     foreign key (id) references employees (id)
    );

create table sales
    (transaction_number    char(5),
     sale_date             date,
     sticker_price         decimal(9, 2),
     final_price           decimal(9, 2),
     VIN                   char(17),
     id                    int AUTO_INCREMENT,  -- was a char(5),
     primary key (transaction_number),
     foreign key (VIN) references vehicles (VIN),
     foreign key (id) references employees (id)
    );

create view owned_vehicles(OwnerID, VIN, Make, Model, Year, Color) as
    select  customers.customer_ID, vehicles.VIN, vehicles.make, vehicles.model, vehicles.year, vehicles.color
    from    customers, vehicles
    where   customers.customer_ID = vehicles.customer_ID;

create view available_vehicles(VIN, Make, Model, Year, Color, Price) as
    select  vehicles.VIN, vehicles.make, vehicles.model, vehicles.year, vehicles.color, vehicles.price
    from    vehicles
    where   vehicles.customer_ID is NULL;

create view customer_accounts(Username, ID, Name) as
    select  users.username, users.id, concat(customers.first_name, " ", customers.last_name)
    from    users, customers
    where   users.id = customers.id AND customers.id is not NULL;

create view employee_accounts(Username, ID, Name) as
    select  users.username, users.ID, concat(employees.first_name, " ", employees.last_name)
    from    users, employees
    where   users.id = employees.id AND is_employee != 0;

