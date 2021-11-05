INSERT INTO actor(first_name, last_name) 
VALUES ('STEFANIA', 'SPAMPINATO');

INSERT INTO film(title, description, release_year, language_id, rental_duration, rental_rate, replacement_cost, last_update) 
VALUES ("OCEANS 8", "Sandra Bullock leads a heist caper that's clever enough to get by and sly enough to treat its female cast as a natural spin on the 'Ocean's' brand", 2018, 1, 8, 4.2, 15.00, DEFAULT);

SELECT first_name, last_name FROM `actor`

SELECT * FROM `film` WHERE title NOT LIKE 'A%';

SELECT MAX(amount) FROM `payment`;