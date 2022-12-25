-- Active: 1670707896431@@127.0.0.1@5432@postgres@public





CREATE TABLE IF NOT EXISTS cars(
    idCar integer NOT NULL,
    Brand text NOT NULL,
    Price integer NOT NULL
);

INSERT Into cars(idCar,Brand,Price)
VALUES
(1,'AUDI',10000),
(2,'BMW',10000),
(3,'VOLVO',10000),
(4,'MERCEDES',10000);

CREATE TABLE orders (
  name varchar UNIQUE DEFAULT NULL,
  message varchar  DEFAULT NULL,
  car int NOT NULL
);
CREATE TABLE emails (
  name varchar UNIQUE DEFAULT NULL,
  email UNIQUE varchar DEFAULT NULL,
  message varchar  DEFAULT NULL
);
