
CREATE TABLE assessment_result(result_id INT NOT NULL AUTO_INCREMENT,
                               candidateId INT,
                               assessment_scheduleId INT,
                               assessorId INT,
                               result VARCHAR(255),
                               registration_date timestamp,           
                               modified_date timestamp,

                               PRIMARY KEY(result_id),
                               FOREIGN KEY (candidateId)
                                  REFERENCES candidate(candidate_id)
                                  ON UPDATE CASCADE ON DELETE RESTRICT,
                               FOREIGN KEY(assessment_scheduleId)
                                    REFERENCES assessment_schedule(assessment_schedule_id)
                                    ON UPDATE CASCADE ON DELETE RESTRICT,
                               FOREIGN KEY(assessorId)
                                    REFERENCES assessor(assessor_id)
                                    ON UPDATE CASCADE ON DELETE RESTRICT
                     )ENGINE=INNODB; 
