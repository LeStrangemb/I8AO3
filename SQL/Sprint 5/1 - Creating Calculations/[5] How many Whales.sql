USE WorldEvents

SELECT 
	Country,
	KmSquared,
-- Kolommen maken die genereert hoeveel x Wales in het land past
	(KmSquared / 20761) AS WalesUnits,
-- Kolommen maken die geneert hoeveel KM 2 er nog over is
	(KmSquared % 20761) AS AreaLeftOver,
CASE 
	WHEN 
-- Wanneer het land kleiner is dan Wales dan komt dit er te staan
		CAST(ROUND((KmSquared/20761), 0) as varchar(10)) < 1 
    THEN 
		'Smaller than Wales'
    ELSE 
-- Anders komt er te staan hoeveel x Wales erin past
		CAST(ROUND((KmSquared/20761), 0) as VARCHAR(10)) +  ' x '  +  ' Wales plus ' + 
		CAST( (KmSquared % 20761) as VARCHAR(10)) + ' sq. km.' 
END as 'Wales Comparison'
FROM 
	CountriesByArea
ORDER BY
	Country ASC