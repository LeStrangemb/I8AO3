USE WorldEvents

SELECT
-- Verander alle NULLs in No Summary
	ContinentName,
	Summary,
	ISNULL(Summary, 'No summary') AS 'Using ISNULL',
	COALESCE(Summary, 'No summary') AS 'Using COALESCE',
-- Gebruike CASE
CASE 
	WHEN Summary IS NULL THEN 'No Summary'
ELSE Summary
-- Beëinding CASE
END
AS 'Using CASE'
FROM
	tblContinent
