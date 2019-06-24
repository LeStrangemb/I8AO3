USE WorldEvents

SELECT
	EventName,
	EventDate,
	--functie DATENAME geeft je de naam van in dit geval, de dag van de week terug. Van kolom: Eventdate
	DATENAME(WEEKDAY, EventDate) AS 'Day of week',
	--functie DAY geeft je het nummer van de dag terug in de maand.
	DAY(EventDate) AS 'Day number'
FROM
	tblEvent
-- Tonen dat er geen events waren op vrijdag de 13e
WHERE DATENAME(WEEKDAY, EventDate) = 'Friday' AND DAY(EventDate) = 13
-- Tonen dat er wel een event was de dag ervoor
OR DATENAME(WEEKDAY, EventDate) = 'Thursday' AND DAY(EventDate) = 12
-- En tonen dat er ook 2 events de dag erna waren
OR DATENAME(WEEKDAY, EventDate) = 'Saturday' AND DAY(EventDate) = 14

ORDER BY
'Day number' ASC;