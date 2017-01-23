<?php
/**
 *
 * Steam Guide Main Content
 *
 * This modifies and displays a user's guide's content and info.
 *
 * @author Taylor McCarthy <tmccarthy4@cnm.edu>
 * @version 1.0
 */

class guide {
	/**
	 * id for guide, primary key
	 * @var int $guideId
	 **/
	private $guideId;

	/**
	 * id of the profile that created this guide, foreign key
	 * @var int $guideOwnerId
	 **/
	private $guideOwnerId;

	/**
	 * language(s) the guide is written in
	 * @var string $guideLanguage
	 **/
	private $guideLanguage;

	/**
	 * catagory(ies) that the owner has chosen to list this guide under
	 * @var string $guideCatagory
	 **/
	private $guideCatagory;

	/**
	 * the actual content of the guide
	 * @var $guideContent
	 **/
	private $guideContent;

	/**
	 * the date the guide was created on
	 * @var \DateTime $guideCreateDate
	 **/
	private $guideCreateDate;

	/**
	 * the date of the most recent change to the guide
	 * @var \DateTime $guideModifyDate
	 **/
	private $guideModifyDate;

	/**
	 * accessor method for $guideId
	 * @return int value of $guideId
	 **/
	public function getGuideId() {
		return($this->guideId);
	}

	/**
	 * accessor method for guideOwnerId
	 * @return
	 **/
	public function getGuideOwnerId() {

	}


}