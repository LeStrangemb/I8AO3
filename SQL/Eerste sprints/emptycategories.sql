USE WorldEvents

SELECT  tblCategory.CategoryName AS Naam, tblEvent.EventName AS EventN, tblEvent.EventDate AS EventD
FROM  tblCategory 
FULL OUTER JOIN tblEvent ON tblCategory.CategoryID = tblEvent.CategoryID

WHERE EventName is NULL

