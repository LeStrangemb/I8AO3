USE WorldEvents

SELECT 
--Selecteer de continentnaam
ContinentName
--checkt of de waarde van summary nul is, verandert het met 'Not summary', slaat tabelnaam op als 'Using ISNULL'
,ISNULL(Summary, 'Not summary') AS 'Using ISNULL'
--zelfde principe als isnull
,COALESCE(Summary, 'Not summary') AS 'Using Coalesce'
--zelfde principe alleen dan een case
,CASE WHEN Summary IS NULL THEN 'Not summary' 
ELSE Summary
END AS 'Using summary'
--altijd de case 'end'-en , daarna pas kan je een alias gebruiken
FROM tblContinent

