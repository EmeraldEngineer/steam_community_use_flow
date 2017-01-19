<?php
namespace edu\cnm\Tmccarthy4\steam_community_use_flow;
/**
 *Profile Id and contact/account verification info.
 *
 * This stores and displays the user's profile Id, email address, and phone number.
 *
 * @author Taylor McCarthy <tmmccarthy4@cnm.edu>
 * @version 1.0
 **/
class Profile {
	/**
	 * id for the profile, primary key.
	 * @var int $profileId
	 **/
	private $profileId;
	/**
	 * email linked to user account.
	 * @var string $profileAccountEmail
	 **/
	private $profileAccountEmail;
	/**
	 * phone number linked to user account.
	 * @var int $profileAccountPhone
	 **/
	private $profileAccountPhone;

	/**
	 * accessor method for profileId
	 * @return int value of profileId
	 **/
	public function getProfileId() {
		return ($this->profileId);
	}
	/**
	 *mutator for profileId
	 * @param int $setProfileId new value of profileId
	 * @throws \InvalidArgumentException if $setProfileId is insecure
	 * @throws \TypeError if $setProfileId is not an integer
	 **/
	public function setProfileId(int $setProfileId = null) {
		// if profileId is null, this is a new profile without a mmySQL assigned id
		if($setProfileId === null) {
			$this->profileId = null;
			return;
		}
		//verify profileId is positive
		if($setProfileId <= 0) {
			throw(new \RangeException("Profile Id is not positive"));
		}
		//convert and store the profile id
		$this->profileId = $setProfileId;
	}
	/**
	 * accessor method for profileAccountEmail.
	 * @return string value of profileAccountEmail.
	 **/
	public function getProfileAccountEmail() {
		return ($this->profileAccountEmail);
	}

	/**
	 * mutator method for profileAccountEmail
	 * @param string $setProfileAccountEmail new value of profileAccountEmail
	 * @throws \InvalidArgumentException if $setProfileAccountEmail is not a valid email format or insecure.
	 * @throws \RangeException if $setProfileAccountEmail is > 128 characters.
	 *
	 **/
	public function setProfileAccountEmail(string $setProfileAccountEmail) {
		//verify the email is correctly formatted and secure.
		$setProfileAccountEmail = trim($setProfileAccountEmail);
		$setProfileAccountEmail = filter_var($setProfileAccountEmail, FILTER_SANITIZE_EMAIL);
		//verify new email is not blank
		if(empty($setProfileAccountEmail) === true) {
			throw(new \InvalidArgumentException("Email cannot be blank or insecure!"));
		}
		if(strlen($setProfileAccountEmail) > 128) {
			throw(new \RangeException("Email cannot be longer than 128 characters!"));
		}
		//store the email
		$this->profileAccountEmail = $setProfileAccountEmail;
	}

	/**
	 * accessor method for profileAccountPhone
	 * @return int value of profileAccountPhone
	 **/
	public function getProfileAccountPhone() {
		return ($this->profileAccountPhone);
	}
	/**
	 * mutator for profileAccountPhone
	 * @param string $setProfileAccountPhone new value of profileAccountPhone
	 * @throws \InvalidArgumentException if $setProfileAccountPhone is not a string or is insecure
	 * @throws \RangeException if $setProfileAccountPhone is > 32 characters
	 * @throws \TypeError if $setProfileAccountPhone is not a string
	 **/
	public function setProfileAccountPhone (string $setProfileAccountPhone) {
		//verify the content is secure
		$setProfileAccountPhone = trim($setProfileAccountPhone);
		$setProfileAccountPhone = filter_var($setProfileAccountPhone, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		if(empty($setProfileAccountPhone) === true) {
			throw(new \InvalidArgumentException("Phone number cannot be blank or insecure."));
		}
		//verify the phone number will fit in the database
		if(strlen($setProfileAccountPhone) > 32) {
			throw(new \RangeException("Phone number cannot be longer than 32 characters."));
		}
		//store the new phone number
		$this->profileAccountPhone = $setProfileAccountPhone;
	}

}