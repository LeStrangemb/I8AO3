USE WorldEvents

SELECT
	CASE
	WHEN DATEPART(YY,tblEvent.EventDate) LIKE '17%' THEN '18th Century'
	WHEN DATEPART(YY,tblEvent.EventDate) LIKE '18%' THEN '19th Century'
	WHEN DATEPART(YY,tblEvent.EventDate) LIKE '19%' THEN '20th Century'
	WHEN DATEPART(YY,tblEvent.EventDate) LIKE '20%' THEN '21st Century'
	END AS Century
	,COUNT(tblEvent.EventName) [Number of events]
FROM
	tblEvent
GROUP BY CUBE(CASE
	WHEN DATEPART(YY,tblEvent.EventDate) LIKE '17%' THEN '18th Century'
	WHEN DATEPART(YY,tblEvent.EventDate) LIKE '18%' THEN '19th Century'
	WHEN DATEPART(YY,tblEvent.EventDate) LIKE '19%' THEN '20th Century'
	WHEN DATEPART(YY,tblEvent.EventDate) LIKE '20%' THEN '21st Century'
END)
ORDER BY
	Century