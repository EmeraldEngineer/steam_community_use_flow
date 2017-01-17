-- Delete any existing tables
DROP TABLE IF EXISTS 'profile';
DROP TABLE IF EXISTS 'guide';
DROP TABLE IF EXISTS 'guideProfile';

-- create new tables
CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileAccountEmail VARCHAR(128) NOT NULL,
	profileAccountPhone VARCHAR (32),
	UNIQUE(profileAccountPhone)
	PRIMARY KEY(profileId)
);