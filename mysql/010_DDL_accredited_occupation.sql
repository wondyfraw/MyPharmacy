
CREATE TABLE accredited_occupation(accredited_id INT NOT NULL AUTO_INCREMENT,
                                   assessment_centerId INT,
                                   occupation_accredited VARCHAR(255),
                                   levels   VARCHAR(100),
                                   accredation_date timeStamp,
                                   registration_date timestamp,
                                   modified_date timestamp,

                                   PRIMARY KEY (accredited_id),
                                   FOREIGN KEY (assessment_centerId)
                                    REFERENCES assessment_center(assessment_center_id)
                                    ON UPDATE CASCADE ON DELETE RESTRICT
                        
                          )ENGINE=INNODB;
