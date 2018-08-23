
CREATE TABLE supervisor_assessment_schedule(supervisor_id INT,
                                          assessment_schedule_id INT,

                              FOREIGN KEY (supervisor_id)
                                   REFERENCES supervisor(supervisor_id)
                                   ON UPDATE CASCADE ON DELETE RESTRICT,
                              FOREIGN KEY (assessment_schedule_id)
                                  REFERENCES assessment_schedule(assessment_schedule_id)
                                  ON UPDATE CASCADE ON DELETE RESTRICT
             
                              )ENGINE=INNODB;
