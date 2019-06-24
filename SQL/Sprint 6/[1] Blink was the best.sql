USE DoctorWho

SELECT
	AuthorName
	--COUNT geeft de aantal rijen terug die aan de criteria van de kolom voldoen
	--in dit geval de naam van de author.
	,COUNT(*) [Episodes]
	--geeft de vroegste datum weer
	,MIN(EpisodeDate) [Earliest date]
	--geeft de meest recenste datum weer
	,MAX(EpisodeDate) [Latest date]
FROM            
  
	tblAuthor INNER JOIN tblEpisode 
	ON tblAuthor.AuthorId = tblEpisode.AuthorId
GROUP BY
	AuthorName
ORDER BY
	[Episodes] DESC