USE WorldEvents

SELECT
	ContinentName,
	CountryName,
	Count(EventName) [Number of events]
FROM
--rechtermuis klik en dan kan je zien wat met elkaar vebonden is. de eerste inner join doe je met de twee die
--verbonden zijn met elkaar en dat doe je ook met de andere 2.
	tblContinent INNER JOIN tblCountry ON 
	tblContinent.ContinentID = tblCountry.ContinentID 
	INNER JOIN tblEvent ON 
	tblCountry.CountryID = tblEvent.CountryID
WHERE
	ContinentName NOT LIKE 'Europe'
GROUP BY
	ContinentName,
	CountryName
HAVING COUNT(EventName) > 5
ORDER BY
	CountryName