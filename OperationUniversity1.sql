#SELECT * FROM test.`most-recent-field-data-elements`;
#SELECT CIPDESC FROM test.`most-recent-field-data-elements`;
USE test;
SELECT distinct CIPDESC FROM test.`most-recent-field-data-elements`;
CREATE TABLE majors  
	AS
	SELECT distinct CIPDESC 
    FROM test.`most-recent-field-data-elements`;