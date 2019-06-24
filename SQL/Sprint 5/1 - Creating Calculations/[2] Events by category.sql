USE WorldEvents

SELECT
-- Selecteer de events met de categorie erbij
	EventName + ' (category ' + (CAST (CategoryID AS varchar)) + ')' AS 'Event (category)',
	EventDate
FROM
-- Van de tabel Event
	tblEvent
WHERE
-- Waar ze allemaal een CountryID van 1 hebben
	CountryID = 1