SELECT
-- Selecteer de kolommen die we gaan gebruiken        
	tblEnemy.EnemyName AS Enemy, 
	tblEpisode.Title, 
	tblEpisode.EpisodeDate, 
	tblAuthor.AuthorName AS Author
FROM            
-- De tabellen aan elkaar koppelen met INNER JOIN
	tblEnemy INNER JOIN tblEpisodeEnemy ON 
	tblEnemy.EnemyId = 
	tblEpisodeEnemy.EnemyId INNER JOIN tblEpisode ON 
	tblEpisodeEnemy.EpisodeId = 
	tblEpisode.EpisodeId INNER JOIN tblAuthor ON 
	tblEpisode.AuthorId = tblAuthor.AuthorId
WHERE
-- Alle afleveringen met de Daleks erin
	EnemyName LIKE '%Daleks%'
ORDER BY
-- Sorteren op Datum
	EpisodeDate ASC