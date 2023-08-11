CREATE table customer(
	customer_id int not null auto_increment,
	name varchar (100),
	email varchar (200),
	password varchar (50),
    gender varchar (16),
    terms varchar (20),
    primary key (customer_id)
);
