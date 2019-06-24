USE WorldEvents

SELECT       
	DISTINCT LEFT(CategoryName, 1) [Category initial]
	,COUNT(*) [Number of events]
	,CAST( AVG(LEN(EventName)) AS DECIMAL(10,2)) [Average event name length]
FROM            tblCategory INNER JOIN
                         tblEvent ON tblCategory.CategoryID = tblEvent.CategoryID
GROUP BY
	LEFT(CategoryName, 1)