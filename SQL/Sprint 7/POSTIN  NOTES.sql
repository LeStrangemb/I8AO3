USE WorldEvents

SELECT EventName, EventDate, CountryName

FROM tblEvent
INNER JOIN tblCountry
ON tblEvent.CountryID = tblCountry.CountryID

WHERE EventDate > (SELECT MAX(EventDate) FROM tblEvent WHERE CountryID = '21') 


ORDER BY EventDate DESC;


