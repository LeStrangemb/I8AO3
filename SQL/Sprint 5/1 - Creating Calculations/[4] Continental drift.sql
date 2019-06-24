USE WorldEvents

SELECT
	CountryName,
	CASE
-- Bepaal of het land hoort bij 'Somewhere cold, Eurasia, Americas, Somewhere hot of Somewhere else'
		WHEN ContinentID = 7 THEN 'Somewhere cold'
		WHEN ContinentID = 1 OR ContinentID = 3 THEN 'Eurasia'
		WHEN ContinentID = 5 OR ContinentID = 6 THEN 'Americas'
		WHEN ContinentID = 2 OR ContinentID = 4 THEN 'Somewhere hot'
		ELSE 'Somewhere else'
	END AS 'CountryLocation'
FROM
	tblCountry
ORDER BY CountryLocation DESC
