SELECT     
-- Selecteer de kolommen die je gaat gebruiken
	tblAuthor.AuthorName,
	tblEpisode.Title,
	tblDoctor.DoctorName,
	tblEnemy.EnemyName,
	(LEN(tblAuthor.AuthorName))+(LEN(tblEpisode.Title))+(LEN(tblDoctor.DoctorName))+(LEN(tblEnemy.EnemyName)) AS TotalLength
FROM            
-- De tabellen aan elkaar koppelen met INNER JOIN
	tblAuthor INNER JOIN tblEpisode ON tblAuthor.AuthorId = tblEpisode.AuthorId INNER JOIN
                         tblEpisodeEnemy ON tblEpisode.EpisodeId = tblEpisodeEnemy.EpisodeId INNER JOIN
                         tblEnemy ON tblEpisodeEnemy.EnemyId = tblEnemy.EnemyId INNER JOIN
                         tblDoctor ON tblEpisode.DoctorId = tblDoctor.DoctorId
WHERE
	(LEN(tblAuthor.AuthorName))+(LEN(tblEpisode.Title))+(LEN(tblDoctor.DoctorName))+(LEN(tblEnemy.EnemyName)) <= 40
ORDER BY
	TotalLength ASC