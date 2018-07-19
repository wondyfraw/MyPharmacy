
CREATE TABLE assessmet(assessmet_id INT NOT NULL AUTO_INCREMENT,
                       occupationId INT NOT NULL,
                       assessment_purpose VARCHAR(255) NOT NULL,
                       candidate_catagory VARCHAR(255) NOT NULL,
                       levels VARCHAR(100) NOT NULL,
                       education_mode VARCHAR(255) NOT NULL,
                       employement_type VARCHAR(255) NOT NULL,
                       ownership_type_of_institution VARCHAR(255) NOT NULL,
                       assessment_state VARCHAR(100) NOT NULL,
                       registration_date timestamp,
                       closing_date timestamp,
                       modified_date timestamp,
                       
                       PRIMARY KEY (assessmet_id),
                       FOREIGN KEY (occupationId)
                            REFERENCES occupation(occupation_id)
                            ON UPDATE CASCADE ON DELETE RESTRICT    
                   )ENGINE=INNODB;
             
