USE WorldEvents

SELECT ContinentName, EventName
       
FROM   tblContinent INNER JOIN
       tblCountry ON tblContinent.ContinentID = tblCountry.ContinentID INNER JOIN
       tblEvent ON tblCountry.CountryID = tblEvent.CountryID

--onduidelijk of het altijd zo is, maar tot nu toe is het als je 'nog een select moet schrijven'
-- je eerst begint met een voorwaarde (where)
WHERE ContinentName IN 
(
--selecteerd de 
SELECT top 3 ContinentName
FROM   tblContinent INNER JOIN
       tblCountry ON tblContinent.ContinentID = tblCountry.ContinentID INNER JOIN
       tblEvent ON tblCountry.CountryID = tblEvent.CountryID
group by [ContinentName]
ORDER BY COUNT(*)
)

