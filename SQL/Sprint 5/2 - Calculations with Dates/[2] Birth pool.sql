USE WorldEvents

SELECT
	EventName,
	EventDate,
-- Verschillen in het aantal dagen vergeleken met mijn geboortedatum tonen met DATEDIFF
--DATEDIFF is een functie die de aantal dagen berekend tussen twee datums
--in dit geval mijn verjaardag, en de datums van de eventdate
--day geeft aan dat je de berekening in dagen wil hebben.
	DATEDIFF(DAY, EventDate, '1998/09/02') AS DaysOffset,
-- Maak er een positief nummer van met ABS zodat je ze kan sorteren
	ABS(DATEDIFF(DAY, EventDate, '1998/09/02')) AS DaysDifference
FROM
	tblEvent
ORDER BY
-- Sorteren
	DaysDifference ASC