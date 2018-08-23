
CREATE TABLE assessment_center(assessment_center_id INT NOT NULL AUTO_INCREMENT,
                      assessment_center_name VARCHAR(255),
                      occupation_accredited VARCHAR(255),
                      focal_person VARCHAR(100),
                      position  VARCHAR(200),                                      
                      address VARCHAR(255),
                      phone_number VARCHAR(20),
                      alternate_phone VARCHAR(20),
                      email  VARCHAR(255),
                      fax  VARCHAR(100),                     
                      registration_date timestamp,
                      modified_date timestamp,
                      
                      primary key(assessment_center_id)
                      
              )ENGINE=INNODB;
