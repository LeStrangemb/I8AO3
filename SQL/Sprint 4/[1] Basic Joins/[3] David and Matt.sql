SELECT   
-- Selecteer welke kolommen je wil gebruiken     
	tblDoctor.DoctorName, 
	tblEpisode.Title
FROM            
-- Gebruiken de INNER JOIN om de tabellen te linken
	tblDoctor INNER JOIN tblEpisode ON 
	tblDoctor.DoctorId = tblEpisode.DoctorId
WHERE
-- Selecteer alle afleveringen uit 2010
	EpisodeDate BETWEEN '2010-01-01' AND '2010-12-31'
ORDER BY 
-- Sorteer de tabel op volgorde van de dokters
	tblDoctor.DoctorName ASC