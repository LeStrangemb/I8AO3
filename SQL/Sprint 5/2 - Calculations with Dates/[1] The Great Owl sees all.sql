USE WorldEvents

SELECT
--selecteer de kolommen die je wil laten zien
	EventName,
	EventDate,
-- Show de datum op de beschreven wijze met Format
-- format word gebruikt om datums en tijden de formatteren
	FORMAT(EventDate, 'dd/MM/yyyy') AS UsingFormat,
-- Show de datum op de beschreven wijze met Convert
-- convert gebruik je om waardes van alle types omtezetten naar een specifiek datatype
-- in dit geval een varchar(kan integers en string bevatten)Het cijfer staat voor waarin je het wil converteren
   CONVERT(varchar, EventDate, 103) AS UsingConvert
	
FROM
	tblEvent
WHERE
-- Alle events kiezen die in mijn geboortejaar zijn gebeurd
	EventDate BETWEEN '1998-01-01' AND '1998-12-31'
ORDER BY
	EventDate ASC