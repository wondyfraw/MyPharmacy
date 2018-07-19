
CREATE TABLE assessment_schedule(assessment_schedule_id INT NOT NULL AUTO_INCREMENT,
                                 assessmentId  INT,
                                 assessment_date timestamp,
                                 candidate_number INT,
                                 assessor_number INT,
                                 supervisor_number INT,
                                 
                                 PRIMARY KEY (assessment_schedule_id),
                                 FOREIGN KEY (assessmentId)
                                  REFERENCES assessmet(assessmet_id)
                                  ON UPDATE CASCADE ON DELETE RESTRICT

                      )ENGINE=INNODB;


ALTER TABLE `assessment_schedule` ADD UNIQUE( `assessmentId`);
ALTER TABLE `assessment_schedule` ADD `assessment_time` TIME NOT NULL AFTER `assessment_date`;
                                 
