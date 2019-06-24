USE DoctorWho

SELECT
	DISTINCT YEAR(EpisodeDate) [Episode Year],
	EnemyName,
	COUNT(*) [Number of episodes]
FROM            
	tblEpisode INNER JOIN tblEpisodeEnemy ON tblEpisode.EpisodeId = 
	tblEpisodeEnemy.EpisodeId INNER JOIN tblEnemy ON tblEpisodeEnemy.EnemyId = 
	tblEnemy.EnemyId INNER JOIN tblDoctor ON tblEpisode.DoctorId = tblDoctor.DoctorId
WHERE
	YEAR(tblDoctor.BirthDate) < 1970
GROUP BY
	YEAR(EpisodeDate),
	EnemyName
HAVING
	COUNT(*) > 1
ORDER BY 
    [Number of episodes] DESC,
	[Episode Year]
