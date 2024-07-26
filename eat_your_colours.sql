-- Create the database
DROP DATABASE IF EXISTS eat_your_colours;
CREATE DATABASE eat_your_colours;
USE eat_your_colours; -- MySQL command


CREATE TABLE veg (    
    colour varchar(10) NOT NULL,
    vegName varchar(50) NOT NULL,
    PRIMARY KEY (vegName)
);

-- At least 5 veggies a day
INSERT INTO veg VALUES 
('purple', 'beetroot'),
('purple', 'red cabbage'),
('purple', 'eggplant'),
('purple', 'purple asparagus'),
('purple', 'purple sweet potato'),
('red', 'tomato'),
('red', 'capsicum'),
('red', 'radish'),
('red', 'red potato'),
('red', 'rhubarb'),
('orange', 'carrot'),
('orange', 'pumpkin'),
('yellow', 'corn'),
('yellow', 'squash'),
('green', 'peas'),
('green', 'green beans'),
('green', 'lettuce'),
('green', 'spinach'),
('green', 'avocado'),
('green', 'broccoli'),
('brown', 'onion'),
('white', 'potato'),
('white', 'mushroom'),
('white', 'cauliflower');

CREATE TABLE fruit (
    colour varchar(10) NOT NULL,
    fruitName varchar(50) NOT NULL,
    PRIMARY KEY (fruitName)
);

INSERT INTO fruit VALUES 
('blue', 'blueberries'),
('purple', 'grapes'),
('purple', 'plums'),
('purple', 'blackberries'),
('red', 'cherries'),
('red', 'apples'),
('red', 'strawberries'),
('red', 'raspberries'),
('red', 'watermelon'),
('orange', 'oranges'),
('orange', 'peaches'),
('orange', 'rockmelon'),
('yellow', 'lemon'),
('yellow', 'gold kiwi'),
('yellow', 'pineapple'),
('green', 'avocado'),
('green', 'kiwi'),
('green', 'apple'),
('white', 'banana'),
('brown', 'dates'),
('brown', 'pears');

CREATE TABLE users(
  id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  userName varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  password varchar(100) NOT NULL
);

-- Create a user named abc_user
GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO abc_user@localhost
IDENTIFIED BY 'pa55word';



-- Fruit and Veg colours taken from
-- https://nutritionaustralia.org/fact-sheets/eat-a-rainbow/

-- Create a user named ts_user
/*GRANT SELECT, INSERT, UPDATE, DELETE
ON *
TO ts_user@localhost
IDENTIFIED BY 'pa55word';*/
