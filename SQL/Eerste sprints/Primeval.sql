SELECT Eventname, Eventdetails FROM tblEvent
WHERE (CategoryID != 14
AND Eventdetails LIKE '%Train%');

SELECT EventName, EventDate FROM tblEvent 
WHERE CountryID = 13 
AND EventName NOT LIKE '%Space%' AND EventDetails NOT LIKE '%Space%';

SELECT Eventdetails FROM tblEvent
Where CategoryID= 5 OR CategoryID = 6 
AND Eventdetails NOT LIKE '%Death%' OR Eventdetails NOT LIKE '%War%';
