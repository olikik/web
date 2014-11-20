CREATE TABLE `dvd` (
  `dvd_id` int(11) AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `production_year` year(4) NOT NULL,
  PRIMARY KEY (`dvd_id`)
);

CREATE TABLE `customer` (
  `customer_id` int(11) AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `passport_code` varchar(10) NOT NULL,
  `registration_date` date NOT NULL,
  PRIMARY KEY (`customer_id`)
);

CREATE TABLE `offer` (
  `offer_id` int(11) AUTO_INCREMENT,
  `dvd_id` int(11)  NOT NULL,
  `customer_id` int(11) NOT NULL,
  `offer_date` date NOT NULL,
  `return_date` date DEFAULT NULL,
  PRIMARY KEY (`offer_id`),
  FOREIGN KEY (`dvd_id`) REFERENCES `dvd`(`dvd_id`),
  FOREIGN KEY (`customer_id`) REFERENCES `customer`(`customer_id`)
);
