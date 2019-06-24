USE WorldEvents

SELECT
	EventName,
-- CASE maken zodat bij dagnummer 1: '1st' staat en niet '1th'

CASE
	WHEN 
		DAY(EventDate) = 1
    THEN 
-- 1 moet worden geshowed als 1st en niet 1th
-- met CAST kan je waardes omzetten in een datatype naar keuze.
		CAST(DATENAME(WEEKDAY, EventDate) AS varchar) + ' ' + CAST(DAY(EventDate) AS varchar) + 'st ' + 
		CAST(DATENAME(MONTH, EventDate) AS varchar) + ' ' + CAST(DATENAME(YEAR, EventDate) AS varchar)
	ELSE
-- Voor de rest geld dat achter het dagnummer "th" komt
		CAST(DATENAME(WEEKDAY, EventDate) AS varchar) + ' ' + CAST(DAY(EventDate) AS varchar) + 'th ' + 
		CAST(DATENAME(MONTH, EventDate) AS varchar) + ' ' + CAST(DATENAME(YEAR, EventDate) AS varchar)
-- De gemaakte datums benoemen als:
END AS 'Full date'

FROM
	tblEvent

ORDER BY
	EventDate