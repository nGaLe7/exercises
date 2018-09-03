#example, show specials by location

SELECT * from specials
inner join pub on pub.id = special.pub_id
where (pub.latiti=ude - .01) < $currentlat AND
(pub.latitude + .01) > $currentlat AND
(pub.latitude - .01) < $currentlong AND
(pub.longitude + .01) > $currentlong;


#show articles by non archived article

SELECT * FROM `project` WHERE ArchiveArticle = 'no';

#show Partners details

SELECT PartnerContact, PartnerLeaderName, PartnerName From 'partners';

#show user details

SELECT FullName, Address, DateOfBirth, email, MobileNumber FROM 'users';