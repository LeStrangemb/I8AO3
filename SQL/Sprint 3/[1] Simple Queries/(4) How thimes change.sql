USE WorldEvents
 SET NOCOUNT ON

 SELECT TOP 2
     EventName What_
	 ,EventDate When_
 FROM dbo.tblEvent
 ORDER BY EventDate ASC
 GO

 SELECT TOP 2
     EventName What_
	 ,EventDate When_
 FROM dbo.tblEvent
 ORDER BY EventDate DESC
 GO