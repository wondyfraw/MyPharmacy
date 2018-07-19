
CREATE TABLE supervisor(supervisor_id INT NOT NULL AUTO_INCREMENT,
                      supervisor_first_name VARCHAR(100),
                      supervisor_middle_name VARCHAR(100),
                      supervisor_last_name VARCHAR(100),
                      position  VARCHAR(200),                     
                      organization VARCHAR(255),
                      assessor_type  VARCHAR(200),
                      address VARCHAR(255),
                      phone_number VARCHAR(20),
                      alternate_phone VARCHAR(20),
                      email  VARCHAR(255),
                      image  LONGBLOB,                      
                      registration_date timestamp,
                      modified_date timestamp,
                      
                      primary key(supervisor_id)
                      
              )ENGINE=INNODB;
