SELECT `title` FROM `dvd` WHERE `dvd_id` IN (SELECT `dvd_id` FROM `offer` WHERE ISNULL(`return_date`))
