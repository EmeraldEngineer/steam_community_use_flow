-- Delete any existing tables
DROP TABLE IF EXISTS 'profile';
DROP TABLE IF EXISTS 'guide';
DROP TABLE IF EXISTS 'guideProfile';

-- create new tables
CREATE TABLE profile (
	profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileAccountEmail VARCHAR (128) NOT NULL,
	profileAccountPhone VARCHAR (32),
	UNIQUE(profileAccountPhone)
	PRIMARY KEY(profileId)
);
CREATE TABLE guide (
	guideId INT UNSIGNED AUTO INCREMENT NOT NULL,
	guideOwnerId INT UNSIGNED NOT NULL,
	guideLanguage VARCHAR (32) NOT NULL,
	guideCatagory VARCHAR (32) NOT NULL,
	guideContent VARCHAR (2048) NOT NULL,
	guideCreateDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	guideModifyDate TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
	INDEX(guideOwnerId),
	FOREIGN KEY(guideOwnerId) REFERENCES profile(profileId)
	PRIMARY KEY(guideId)
);

CREATE TABLE guideProfile(
	guideProfileProfileId INT UNSIGNED NOT NULL,
	guideProfileGuideId INT UNSIGNED NOT NULL,
	INDEX(guideProfileProfileId),
	INDEX(guideProfileGuideId),
	FOREIGN KEY(guideProfileProfileId) REFERENCES profile(profileId),
	FOREIGN KEY(guideProfileGuideId) REFERENCES guide(guideId),
	PRIMARY KEY(guideProfileProfileId, guideProfileGuideId)
);

