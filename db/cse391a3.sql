-- SQL about a mechanic shop

CREATE TABLE IF NOT EXISTS users (
                                    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
                                    username VARCHAR(30) NOT NULL, 
                                    password VARCHAR(255) NOT NULL, 
                                    email VARCHAR(50), 
                                    role int(1) NOT NULL DEFAULT '0', 
                                    address VARCHAR(50),
                                    phone VARCHAR(20),
                                    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP);

CREATE TABLE IF NOT EXISTS mechanics (
                                    mechanic_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                    mechanic_name VARCHAR(255) NOT NULL,
                                    mechanic_age INT(3) NOT NULL,
                                    mechanic_phone INT(10) NOT NULL);

-- Now appointment of users with mechanic

CREATE TABLE IF NOT EXISTS appointment (
                                        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                                        mechanic_id INT(6) UNSIGNED NOT NULL,
                                        user_id INT(6) UNSIGNED NOT NULL,
                                        date DATE NOT NULL,
                                        car_license VARCHAR(255) NOT NULL,
                                        car_engine VARCHAR(255) NOT NULL,
                                        status INT(1) NOT NULL DEFAULT '0');

