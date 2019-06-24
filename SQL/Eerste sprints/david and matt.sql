USE DoctorWho
SELECT        tblEpisode.Title AS titel, tblDoctor.DoctorName AS naam
FROM          tblDoctor
INNER JOIN tblEpisode ON tblDoctor.DoctorId = tblEpisode.DoctorId
WHERE EpisodeDate BETWEEN '2010-01-01' AND '2010-12-31'
ORDER BY titel

