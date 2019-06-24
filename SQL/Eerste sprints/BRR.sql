USE WorldEvents

SELECT     tblEvent.EventDate, tblEvent.EventName, tblCountry.CountryName, tblContinent.ContinentName
FROM       tblContinent 
INNER JOIN tblCountry ON tblContinent.ContinentID = tblCountry.ContinentID 
INNER JOIN tblEvent ON tblCountry.CountryID = tblEvent.CountryID

WHERE ContinentName = 'Antarctic' OR CountryName =  'RUSSIA' 