SELECT
   EventName
   ,EventDetails
   ,EventDate
   ,CategoryID
FROM 
   tblEvent
WHERE 
   CategoryID != 14 
   AND EventDetails LIKE '%Train%'
ORDER BY 
   CategoryID asc

SELECT
   EventName
   ,EventDetails
   ,EventDate
   ,CategoryID
FROM 
   tblEvent
WHERE 
   CountryID = 13 
   AND EventDetails NOT LIKE '%Space%' 
   AND EventName NOT LIKE '%Space%'
ORDER BY 
   CategoryID asc

SELECT 
    EventName
	,EventDetails
	,EventDate
	,CategoryID
FROM 
    tblEvent
WHERE 
    CategoryID IN (5, 6) AND
    EventDetails NOT LIKE '%Death%' AND
    EventDetails NOT LIKE '%WAR%' 
ORDER BY CategoryID asc
GO