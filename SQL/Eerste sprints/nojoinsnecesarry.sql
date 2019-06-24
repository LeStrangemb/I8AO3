SELECT 
tblAuthor.AuthorName,
tblEpisode.Title,
tblEpisode.EpisodeType

FROM tblAuthor INNER JOIN tblEpisode ON
tblAuthor.AuthorId = tblEpisode.AuthorId

WHERE tblEpisode.EpisodeType LIKE '%SPECIAL%'

ORDER BY
tblEpisode.Title



