CREATE TABLE candidate_assessment_center(candidate_id INT,
                                          assessment_centerId INT,

                              FOREIGN KEY (candidate_id)
                                   REFERENCES candidate(candidate_id)
                                   ON UPDATE CASCADE ON DELETE RESTRICT,
                             FOREIGN KEY (assessment_centerId)
                                    REFERENCES assessment_center(assessment_center_id)
                                    ON UPDATE CASCADE ON DELETE RESTRICT
             
                              )ENGINE=INNODB;
