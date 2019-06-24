USE WorldEvents

SELECT
CountryName AS 'Belongs to'

,CASE 
WHEN ContinentID = '7' THEN 'Somewhere hot'
WHEN ContinentID = '1' OR ContinentID = '3' THEN 'Eurasia'
WHEN ContinentID = '5' or ContinentID = '6' THEN 'Americas'
WHEN ContinentID = '2' or ContinentID = '3' THEN 'Somewhere hot'
ELSE 'Somewhere else'
END AS 'Country Location'

FROM tblCountry

ORDER BY [Country Location] DESC;