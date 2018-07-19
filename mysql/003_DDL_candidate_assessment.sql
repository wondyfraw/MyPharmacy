
/*janction table between Candidate and Assessment for N-N relationship*/

CREATE TABLE candidate_assessment(can_ass_id INT NOT NULL AUTO_INCREMENT,
                                  candidateId INT,
                                  assessmentId INT,
                                  assessment_type VARCHAR(100),
                                  payment_status VARCHAR(100),
                                  registration_date timestamp,

                             PRIMARY KEY(can_ass_id),
                             
                             FOREIGN KEY (candidateId)
                                REFERENCES candidate(candidate_id),
                                

                            FOREIGN KEY (assessmentId)
                                REFERENCES assessmet(assessmet_id)
                                                                
                        )ENGINE=INNODB
                           
