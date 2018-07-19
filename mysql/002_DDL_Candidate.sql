
CREATE TABLE candidate(candidate_id INT NOT NULL AUTO_INCREMENT,
                       first_name VARCHAR(255),
                       middle_name VARCHAR(255),
                       last_name   VARCHAR(255),
                       address VARCHAR(255),                       
                       email  VARCHAR(255) NOT NULL,
                       gender VARCHAR(10),
                       phone_number VARCHAR(100),
                       date_of_birth date,
                       image LONGBLOB,
                       registration_date timestamp,
                       modification_date timestamp,

                       PRIMARY KEY (candidate_id)
                       
                    )ENGINE=INNODB