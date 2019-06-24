USE WorldEvents

SELECT 
-- Seleceer de Events en de lengtes
    EventName,
	LEN(EventName) AS 'Length of name'
FROM 
-- Geef aan van welke tabel
	tblEvent
ORDER BY
-- Sorteer op Eventnaam
	LEN(EventName) asc

