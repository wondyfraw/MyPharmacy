ALTER TABLE assessmet
  ADD COLUMN assessment_centerId INT,
  ADD FOREIGN KEY (assessment_centerId) REFERENCES assessment_center(assessment_center_id) ON DELETE CASCADE;
