-- je selecteert eerst de tabellen die je wil laten showen. deze geef je een alias. Dit doen ze meestal als:
-- er lange gecompliceerde namen zijn. de aliassen nemen niet de orginele namen over
SELECT 
Countryname AS country,
Eventname AS [What happend],
Eventdate AS [When happend]

-- je voert hier een inner join uit omdat je 
FROM tblCountry AS cy 
INNER JOIN tblEvent AS ev
ON cy.CountryID = ev.CountryID

ORDER BY
[When happend]



