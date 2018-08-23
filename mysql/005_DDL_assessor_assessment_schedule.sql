
CREATE TABLE assessor_assessment_schedule(assessor_id INT,
                                          assessment_schedule_id INT,

                              FOREIGN KEY (assessor_id)
                                   REFERENCES assessor(assessor_id)
                                   ON UPDATE CASCADE ON DELETE RESTRICT,
                              FOREIGN KEY (assessment_schedule_id)
                                  REFERENCES assessment_schedule(assessment_schedule_id)
                                  ON UPDATE CASCADE ON DELETE RESTRICT
             
                              )ENGINE=INNODB;