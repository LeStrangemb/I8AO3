USE WorldEvents

SELECT EventName + ' (Category ' + CAST(CategoryID AS VARCHAR)+')' AS category, EventDate

FROM tblEvent

WHERE CountryID = '1';
