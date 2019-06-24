USE WorldEvents

SELECT EventName, LEN(EventName) AS 'Length of event'

FROM tblEvent

ORDER BY [Length of event] ASC;