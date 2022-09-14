<?php if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

define("BAD_REQUEST", "Bad request.");
define("SIGNUP_SUCCESS", "Signup successfully.");
define("INSERT_SUCCESS", "Insert successfully.");
define("INSERT_ERROR", "Error while inserting data.");
define("REC_FOUND", "Records found.");
define("REC_NOT_FOUND", "No record found.");
define("EMAIL_NOT_EXISTS", "Email does not exists.");
define("ID_NOT_EXISTS", "Id does not exists.");
define("LOGIN_FAIL", "Invalid email or password.");
define("LOGIN_SUCCESS", "User login successfully.");
define("UPDATE_SUCCESS", "Updated successfully.");
define("UPDATE_ERROR", "Error while updating data.");
define("PASS_SUCCESS", "A reset password link has been sent to your email. Please click the link in that message to reset your password.");
define("DELETE_SUCCESS", "Deleted successfully.");
define("DELETE_ERROR", "Error while deleting data.");
define("CHURCH_BOOKMARK_SUCCESS", "Church bookmarked successfully.");
define("CHURCH_BOOKMARK_ERROR", "Church not bookmarked.");
define("CHANGE_PASS_SUCCESS", "Password has been changed successfully.");
define("INVALID_OLD_PASS", "Invalid old password.");
define("CARD_NOT_EXISTS", "This card or user_id not exists.");
define("PIN_UPDATED", "Secure pin updated.");
define("PIN_NOT_UPDATE", "Secure pin not update.");

define("PHONE_REGEX", '/^([0-9\s\-\+\(\)]*)$/');
?>
