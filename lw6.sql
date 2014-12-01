CREATE DATABASE rental;

USE rental;

CREATE TABLE dvd(
  dvd_id int(11) AUTO_INCREMENT,
  title varchar(100),
  production_year year(4),
  PRIMARY KEY (dvd_id)
);

CREATE TABLE customer (
  customer_id int(11) AUTO_INCREMENT,
  first_name varchar(100),
  last_name varchar(255),
  passport_code varchar(10),
  registration_date date,
  PRIMARY KEY (customer_id)
);

CREATE TABLE offer (
  offer_id int(11)  AUTO_INCREMENT,
  dvd_id int(11),
  customer_id int(11),
  offer_date date,
  return_date date,
  PRIMARY KEY (offer_id),
  FOREIGN KEY (dvd_id) REFERENCES dvd(dvd_id),
  FOREIGN KEY (customer_id) REFERENCES customer(customer_id)
);

INSERT INTO rental.customer 
(customer_id, first_name, last_name, passport_code, registration_date) 
VALUES 
(1, 'Olga', 'Mikhailova', '8822765843', '2014-11-19'),
(2, 'Kate', 'Loginova', '8811876678', '2013-11-18');

INSERT INTO rental.dvd 
(dvd_id, title, production_year) 
VALUES 
(1, 'Москва слезам не верит', '1980'), 
(2, 'Титаник', '1997'),
(3, 'Три метра над уровнем неба', '2010'), 
(4, 'Елки', '2010');

INSERT INTO rental.offer 
(offer_id, dvd_id, customer_id, offer_date, return_date) 
VALUES 
(NULL, '1', '1', '2014-11-19', '2014-11-22'), 
(NULL, '2', '2', '2013-11-19', NULL);

SELECT * 
FROM dvd 
WHERE production_year = '2010'
ORDER BY title ASC ;

SELECT dvd.title, dvd.production_year
FROM dvd
INNER JOIN offer ON offer.dvd_id = dvd.dvd_id
WHERE offer.return_date is NULL;

SELECT customer.first_name, customer.last_name, dvd.title, dvd.production_year, offer.offer_date
FROM offer
INNER JOIN dvd ON offer.dvd_id = dvd.dvd_id
INNER JOIN customer ON offer.customer_id = customer.customer_id
WHERE offer.offer_date LIKE  '%2014%';