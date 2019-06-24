USE DoctorWho

SELECT 
	AuthorName
	,DoctorName
	,COUNT(*) [Episodes]
FROM
	tblAuthor INNER JOIN tblEpisode ON 
	tblAuthor.AuthorId = tblEpisode.AuthorId INNER JOIN
    tblDoctor ON tblEpisode.DoctorId = tblDoctor.DoctorId
GROUP BY
	AuthorName,
	DoctorName
	-- je kan where niet gebruiken na een group by, dus hebben ze de having gemaakt, zelfde principe
HAVING COUNT(EpisodeNumber) > 4
ORDER BY
	[Episodes] DESC

