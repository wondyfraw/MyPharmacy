
CREATE TABLE assessor(assessor_id INT NOT NULL AUTO_INCREMENT,
                      assessor_first_name VARCHAR(100),
                      assessor_middle_name VARCHAR(100),
                      assessor_last_name VARCHAR(100),
                      occupation  VARCHAR(200),
                      level_assessed VARCHAR(200),
                      organization VARCHAR(255),
                      accreditation_date timestamp,
                      assessor_type  VARCHAR(200),
                      address VARCHAR(255),
                      phone_number VARCHAR(20),
                      alternate_phone VARCHAR(20),
                      email  VARCHAR(255),
                      image  LONGBLOB ,                     
                      registration_date timestamp,
                      modified_date timestamp,
                      
                      primary key(assessor_id)
                      
              )ENGINE=INNODB;
