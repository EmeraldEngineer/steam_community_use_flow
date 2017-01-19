<?php
namespace edu\cnm\Tmccarthy4\steam_community_use_flow;
/**
 * Created by PhpStorm.
 * User: blue
 * Date: 1/19/17
 * Time: 8:29 AM
 * Create Profile Class, defines user id (primary key), user email and user phone.
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
	 * accessor method for profileAccountEmail.
	 * @return string value of profileAccountEmail.
	 **/
	public function getProfileAccountEmail() {
		return ($this->profileAccountEmail);
	}

	/**
	 * accessor method for profileAccountPhone
	 * @return int value of profileAccountPhone
	 **/
	public function getProfileAccountPhone() {
		return ($this->profileAccountPhone);
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
}