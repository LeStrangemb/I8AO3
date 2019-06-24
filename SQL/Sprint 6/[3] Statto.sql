USE WorldEvents

SELECT
	COUNT(tblEvent.EventName) [Number of events],
	MAX(EventDate) [Last date],
	MIN(EventDate) [First date]
FROM
	tblEvent