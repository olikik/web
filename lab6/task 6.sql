SELECT `title`,`first_name`,`last_name` 
FROM `dvd`,`customer`,`offer` 
WHERE 
	`offer_date` LIKE '2014%' 
	AND dvd.dvd_id = offer.dvd_id 
	AND customer.customer_id = offer.customer_id
	