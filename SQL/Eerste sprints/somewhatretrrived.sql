SELECT * FROM tblEvent
WHERE (CountryID in (8, 22, 30, 35)
OR EventDetails LIKE '% water %'
OR CategoryID = 4)
AND EventDate > '1970-01-01';








