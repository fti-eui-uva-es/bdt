<?php
require_once __DIR__ . "/init.php";

// Check tables exist
echo "==== BdT database installer ====\n";
echo "[i] Checking existing tables . . .\n";
$tables = DB::query('SHOW TABLES');
if (count($tables['rows']) > 0) {
	echo "[i] Database is not empty. Exiting installer...\n";
	exit;
}

// Create tables
DB::query('CREATE TABLE `acceptservice` (
  `acceptService_user_id` int(11) NOT NULL,
  `acceptService_service_id` int(11) NOT NULL,
  `acceptService_done` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8');

DB:: query('CREATE TABLE `commentary` (
  `commentary_id` int(11) NOT NULL,
  `commentary_opinion` varchar(5000) NOT NULL,
  `commentary_user_id` int(11) NOT NULL,
  `commentary_service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8');


DB:: query('CREATE TABLE `incidence` (
  `incidence_id` int(11) NOT NULL,
  `incidence_subject` char(100) NOT NULL,
  `incidence_commentary` mediumtext NOT NULL,
  `incidence_state` tinyint(11) NOT NULL,
  `incidence_resolution` char(50) NOT NULL,
  `incidence_user_id` int(11) NOT NULL,
  `incidence_service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8');


DB:: query('CREATE TABLE `service` (
  `service_id` int(11) NOT NULL,
  `service_name` char(50) NOT NULL,
  `service_description` varchar(5000) NOT NULL,
  `service_category` tinyint(4) NOT NULL,
  `service_number_voters` int(11) NOT NULL,
  `service_qualitymark` int(11) NOT NULL,
  `service_metadata` varchar(5000) NOT NULL,
  `service_cancel` tinyint(4) NOT NULL,
  `service_date` char(20) NOT NULL,
  `service_user_id` int(11) NOT NULL,
  `service_time` int(11) NOT NULL,
  `service_endDate` int(11) NOT NULL,
  `service_cancelationDate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8');


DB:: query('CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_nick` char(50) NOT NULL,
  `user_name` char(50) NOT NULL,
  `user_lastname` char(50) NOT NULL,
  `user_dni` char(50) NOT NULL,
  `user_password` char(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_birthday` date NOT NULL,
  `user_superuser` tinyint(1) NOT NULL,
  `user_suspended` tinyint(1) NOT NULL DEFAULT \'0\',
  `user_expelled` tinyint(1) NOT NULL,
  `user_time` int(11) NOT NULL,
  `user_metadata` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8');


DB:: query('ALTER TABLE `acceptservice`
  ADD PRIMARY KEY (`acceptService_service_id`)');


DB::query('ALTER TABLE `commentary`
  ADD PRIMARY KEY (`commentary_id`)');


DB:: query('ALTER TABLE `incidence`
  ADD PRIMARY KEY (`incidence_id`)');

DB::quety('ALTER TABLE `service`
  ADD PRIMARY KEY (`service_id`)');

DB::query('ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`)');


DB: query('ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT');

// Exit installer
echo "[i] Finished installing database. Exiting...\n";
?>
