SELECT
-- De kolommen selecteren        
	tblEvent.EventName,
	tblEvent.EventDate, 
	tblCountry.CountryName, 
	tblContinent.ContinentName
FROM            
-- De tabellen selecteren met behulp van INNER JOIN
	tblContinent INNER JOIN
    tblCountry ON tblContinent.ContinentID = tblCountry.ContinentID INNER JOIN
    tblEvent ON	tblCountry.CountryID = tblEvent.CountryID
WHERE
-- De Events eruit pakken die in het continent 'Antarctic' of in 'Rusland' zijn gebeurd 
	ContinentName LIKE '%Antarctic%' OR
	CountryName LIKE '%Russia%'