INSERT INTO `registred_users` (`app_id`, `first_name`, `middle_name`, `last_name`, `email`, `mobile_no`, `date_of_birth`, `gender`, `social_security_no`, `app_mailing_address`, `app_city`, `app_state`, `app_country`, `app_zip`, `landlord_name`, `landlord_address`, `landlord_city`, `landlord_state`, `landlord_country`, `landlord_zip`, `unit_type`, `renter`, `requested_amount`) VALUES ('M001', 'Rohan', 'kumar', 'jha', 'rohan@gmail.com', '99898978', '2021-11-10', 'Male', '6757', 'House no - 19', 'Bangalore', 'Karnataka', 'India', '670909', 'C chandra', 'House no 21', 'Bnagalore', 'Karnataka', 'India', '67808', 'house', '1', '9000'); 



YYYY-MM-DD - DB 

DD/MM/YYYY - Page 


CREATE TABLE `ml_fraud_detection`.`registred_users` ( `app_id` INT(5) NOT NULL AUTO_INCREMENT, `app_start_time` DATE NULL DEFAULT CURRENT_TIMESTAMP,`app_submission_date`date,`first_name` VARCHAR(25) NOT NULL,`middle_name` VARCHAR(25) NULL ,`last_name` VARCHAR (25) NOT NULL,`email` VARCHAR(25) NOT NULL,`mobile_no` INT(15) NOT NULL, `date_of_birth` VARCHAR(20) NOT NULL, `gender` VARCHAR(20) NOT NULL, `social_security_no` INT(20) NOT NULL, `app_mailing_address` VARCHAR(50) NOT NULL, `app_city` VARCHAR(15) NOT NULL, `app_state` VARCHAR(20) NOT NULL, `app_country` VARCHAR(15) NOT NULL, `app_zip` INT(10) NOT NULL, `landlord_name`VARCHAR (30) NOT NULL, `landlord_address` VARCHAR(50) NOT NULL, `landlord_city` VARCHAR (20) NOT NULL, `landlord_state` VARCHAR (15) NOT NULL, `landlord_country`VARCHAR(20) NOT NULL, `landlord_zip`INT (10) NOT NULL, `unit_type` VARCHAR (20) NOT NULL, `renter` VARCHAR(5) NOT NULL, `requested_amount` INT(10) NOT NULL, PRIMARY KEY (`app_id`)); 