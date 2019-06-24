USE WorldEvents

SELECT
EventName,
EventDate,
-- Bereken met CharIndex welke 'This' en 'That' in hun omschrijving hebben en laat die zien
CHARINDEX('this', EventDetails, 1) AS thisPosition,
CHARINDEX('that', EventDetails, 1) AS thatPosition,
-- Bereken hoeveel ruimte er zit tussen 'This' en 'That'
(CHARINDEX('that', EventDetails, 1) - CHARINDEX('this', EventDetails, 1)) AS Offset
FROM
tblEvent
WHERE
-- Laat ze alleen zien als de ruimte onder de 100 zit  (Eigenlijk mag je de 3e niet laten zien omdat ze daar in de verkeerde volgorde erin staan
-- maar dit is een manier om die eruit te laten
EventDetails LIKE '%This%' AND EventDetails LIKE '%That%'
AND CHARINDEX('this', EventDetails) < 100