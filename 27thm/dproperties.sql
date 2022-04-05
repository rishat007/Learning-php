
#
# Structure for the `dproperties` table : 
#

CREATE TABLE `dproperties` (
  `Property_Ref_No` varchar(50) DEFAULT NULL,
  `Property_Status` varchar(50) DEFAULT NULL,
  `Transaction_Number` varchar(100) DEFAULT NULL,
  `Permit_Number` varchar(40) DEFAULT NULL,
  `Property_purpose` varchar(50) DEFAULT NULL,
  `propertyparenttype` varchar(50) DEFAULT NULL,
  `Property_Type` varchar(50) DEFAULT NULL,
  `Furnished` varchar(50) DEFAULT NULL,
  `City` varchar(150) DEFAULT NULL,
  `Locality` varchar(150) DEFAULT NULL,
  `Sub_Locality` varchar(150) DEFAULT NULL,
  `Tower_Name` varchar(100) DEFAULT NULL,
  `Location_id` int(11) DEFAULT NULL,
  `Property_Title` varchar(150) DEFAULT NULL,
  `Property_Description` text,
  `Property_Size` int(11) DEFAULT NULL,
  `Property_Size_Unit` varchar(50) DEFAULT NULL,
  `Bedrooms` int(11) DEFAULT NULL,
  `Bathroom` int(11) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Listing_Agent` varchar(18) DEFAULT NULL,
  `Listing_Agent_Phone` varchar(15) DEFAULT NULL,
  `Listing_Agent_Email` varchar(19) DEFAULT NULL,
  `Feature` text,
  `Images` text,
  `Videos` varchar(255) DEFAULT NULL,
  `Last_Updated` datetime DEFAULT NULL,
  `featured_on_companywebsite` varchar(40) DEFAULT NULL,
  `Exclusive_Rights` varchar(20) DEFAULT NULL,
  `geopoints` varchar(100) DEFAULT NULL,
  `Completion_Status` varchar(20) DEFAULT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8;

#
# Structure for the `dproperties_feature` table : 
#

CREATE TABLE `dproperties_feature` (
  `Property_Ref_No` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1579 DEFAULT CHARSET=utf8;

#
# Structure for the `dproperties_images` table : 
#

CREATE TABLE `dproperties_images` (
  `Property_Ref_No` varchar(100) NOT NULL,
  `value` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=838 DEFAULT CHARSET=utf8;

#
# Data for the `dproperties` table  (LIMIT 0,500)
#

INSERT INTO `dproperties` (`Property_Ref_No`, `Property_Status`, `Transaction_Number`, `Permit_Number`, `Property_purpose`, `propertyparenttype`, `Property_Type`, `Furnished`, `City`, `Locality`, `Sub_Locality`, `Tower_Name`, `Location_id`, `Property_Title`, `Property_Description`, `Property_Size`, `Property_Size_Unit`, `Bedrooms`, `Bathroom`, `Price`, `Listing_Agent`, `Listing_Agent_Phone`, `Listing_Agent_Email`, `Feature`, `Images`, `Videos`, `Last_Updated`, `featured_on_companywebsite`, `Exclusive_Rights`, `geopoints`, `Completion_Status`, `id`) VALUES 
  ('391-Ap-S-2305','live','53136','7182699990','Buy','Residential','Apartment','Yes','Dubai','Palm Jumeirah','The Grandeur Residences','Maurya',10430,'FULL SEA VIEW/VACANT/LUXURY APARTMENT','Dubayt Real Estate is proud to present you the luxurious 2 bedroom+ maid bedroom apartment located in  Maurya The Grandeu Residences, Palm Jumeirah, Dubai. Grand yourself the luxury of waking up to an astounding view like this every single morning.This beautiful apartment delivers exquisite views of the breathtaking sea where the famous Dubai Eye and Blue Waters are admirable. Maurya is a condominium complex on the Crescent of Palm Jumeirah that offers a range of luxurious apartments and villas. It is part of the Grandeur Residences, a residential development that resembles the grand historical palaces of Rajasthan. Grandeur Residences have two blocks known as Mughal and Maurya. Maurya offers 1-bedroom, 2-bedroom and 3-bedroom apartments. It also has a collection of four 3-bedroom penthouse suites on its top floors.<br><br>Property Details and Amenities:<br><br>- 2 Bedroom + Maids Room<br>- 1817 SF<br>- 4Bathrooms<br>- Fully Furnished<br>- Private Beach Access<br>- Swimming Pool<br>- Kids Play Area<br>- Jacuzzi<br>- Sauna<br>- Gym<br>- Tennis Court<br>- Billiard Table<br>- CCTV/24 Hour Security<br><br><br>Further information regarding this beautiful apartment , please contact : View Contact Detail: +971 55 529 9407<span><br><br>Dubayt established a permanent presence in Dubai since2014 with an office located in Office 36 Sheikh Zayed Road Dubai UAE. With a growing team of experienced professionals, operating across the Dubai real estate market, we provide a full range of property selling, renting, and property-related advisory services to the entire region, executed to the highest standards of quality. <br><br>Company Details:<br>RERA No. : 2571<br>Dubayt<br>Office 36, Ground floor, Emarat Atrium Building,</span><br><br><br><br><br><span><br>Living in Maurya gives a sense of splendour as the complex is designed like a royal palace. Residents enjoy </span>beautiful views of the beachfront and settlements of Palm Jumeirah from their balconies and terraces. These apartments are fully furnished and equipped with smart home systems.  Facilities offered include private beach access, swimming pool and gymnasium. The building has a convenience store on the ground floors and covered parking space with valet service. 5-star room service is also provided to residents by Taj Exotica.',1817,'SQFT',2,4,3450000,'Lorencia Windvogel','+971-55-5299407','lorencia@dubayt.com','','\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t\t\n\t\t','','2022-03-25 11:22:12','true','No','55.120651,25.098929','Ready',1);
COMMIT;

#
# Data for the `dproperties_feature` table  (LIMIT 0,500)
#

INSERT INTO `dproperties_feature` (`Property_Ref_No`, `value`, `id`) VALUES 
  ('391-Ap-S-2305','Balcony or Terrace',1),
  ('391-Ap-S-2305','Barbeque Area',2),
  ('391-Ap-S-2305','Lobby in Building',3),
  ('391-Ap-S-2305','Centrally Air-Conditioned',4),
  ('391-Ap-S-2305','Central Heating',5),
  ('391-Ap-S-2305','Electricity Backup',6),
  ('391-Ap-S-2305','Waste Disposal',7),
  ('391-Ap-S-2305','First Aid Medical Center',8),
  ('391-Ap-S-2305','Freehold',9),
  ('391-Ap-S-2305','Furnished',10),
  ('391-Ap-S-2305','Pet Allowed',11),
  ('391-Ap-S-2305','Gym or Health Club',12),
  ('391-Ap-S-2305','Prayer Room',13),
  ('391-Ap-S-2305','Broadband Internet',14),
  ('391-Ap-S-2305','Satellite/Cable TV',15),
  ('391-Ap-S-2305','Business Center',16),
  ('391-Ap-S-2305','Conference Room',17),
  ('391-Ap-S-2305','Intercom',18),
  ('391-Ap-S-2305','ATM Facility',19),
  ('391-Ap-S-2305','Jacuzzi',20),
  ('391-Ap-S-2305','Kids Play Area',21),
  ('391-Ap-S-2305','Lawn or Garden',22),
  ('391-Ap-S-2305','Maids Room',23),
  ('391-Ap-S-2305','Number of Bathrooms:4',24),
  ('391-Ap-S-2305','Number of Bedrooms:2 + Maid',25),
  ('391-Ap-S-2305','Reception/Waiting Room',26),
  ('391-Ap-S-2305','Sauna',27),
  ('391-Ap-S-2305','Steam Room',28),
  ('391-Ap-S-2305','Swimming Pool',29),
  ('391-Ap-S-2305','Maintenance Staff',30),
  ('391-Ap-S-2305','Security Staff',31),
  ('391-Ap-S-2305','CCTV Security',32),
  ('391-Ap-S-2305','Facilities for Disabled',33),
  ('391-Ap-S-2305','Parking Spaces:2',34),
  ('391-Ap-S-2305','Storage Areas',35),
  ('391-Ap-S-2305','Study Room',36);
COMMIT;

#
# Data for the `dproperties_images` table  (LIMIT 0,500)
#

INSERT INTO `dproperties_images` (`Property_Ref_No`, `value`, `id`) VALUES 
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479522228335_27326_l.jpeg?_v=1647954456',1),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479523908349_27326_l.jpeg?_v=1647954456',2),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479523056993_27326_l.jpeg?_v=1647954456',3),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479522784447_27326_l.jpeg?_v=1647954456',4),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479522878116_27326_l.jpeg?_v=1647954456',5),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_164795246843_27326_l.jpeg?_v=1647954456',6),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479523369833_27326_l.jpeg?_v=1647954456',7),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479524778633_27326_l.jpeg?_v=1647954456',8),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479523204242_27326_l.jpeg?_v=1647954456',9),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479523289454_27326_l.jpeg?_v=1647954456',10),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479524491992_27326_l.jpeg?_v=1647954456',11),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479523487026_27326_l.jpeg?_v=1647954456',12),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479523589971_27326_l.jpeg?_v=1647954456',13),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479523654926_27326_l.jpeg?_v=1647954456',14),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479524014959_27326_l.jpeg?_v=1647954456',15),
  ('391-Ap-S-2305','https://bcrm.s3.amazonaws.com/property/391/photos/3790/20220322_16479524291844_27326_l.jpeg?_v=1647954456',16);
COMMIT;
