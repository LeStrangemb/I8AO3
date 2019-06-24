SELECT Eventname, EventDate FROM tblEvent
WHERE Eventname LIKE '%Teletubbies%'
OR (Eventname LIKE '%Teletubbies%'
OR Eventname LIKE '%Pandy%');
