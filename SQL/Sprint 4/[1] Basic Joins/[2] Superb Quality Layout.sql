SELECT  
-- Selecteer de kolommen die worden gebruikt      
	tblCountry.CountryName AS Country, 
	tblEvent.EventName AS [What happened], 
	tblEvent.EventDate AS [When happened]
FROM            
-- Gebruik INNER JOIN om de tabellen te linken
	tblCountry INNER JOIN tblEvent ON 
	tblCountry.CountryID = tblEvent.CountryID
ORDER BY 
-- Ordenen op datums
	[When happened]