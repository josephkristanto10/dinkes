<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 4.8.3
 */

/**
 * Database `public_health_office`
 */

/* `public_health_office`.`action_doctor` */
$action_doctor = array(
  array('id' => '1','id_key_performance' => '2','id_officer_general' => '1','quantity' => '12','score_per_action' => '5','total_score' => '60','created_at' => '2021-10-27 09:20:49','updated_at' => '2021-10-27 09:20:49'),
  array('id' => '2','id_key_performance' => '4','id_officer_general' => '1','quantity' => '5','score_per_action' => '7','total_score' => '35','created_at' => '2021-10-28 09:33:33','updated_at' => '2021-10-27 09:33:33'),
  array('id' => '3','id_key_performance' => '1','id_officer_general' => '1','quantity' => '5','score_per_action' => '10','total_score' => '50','created_at' => '2021-10-27 09:58:30','updated_at' => '2021-10-27 09:58:30'),
  array('id' => '12','id_key_performance' => '1','id_officer_general' => '1','quantity' => '16','score_per_action' => '10','total_score' => '160','created_at' => '2021-09-29 04:27:57','updated_at' => '2021-10-29 04:34:15')
);

/* `public_health_office`.`failed_jobs` */
$failed_jobs = array(
);

/* `public_health_office`.`key_performance_doctor` */
$key_performance_doctor = array(
  array('id' => '1','name' => 'Injection','score' => '10','created_at' => '2021-10-18 00:00:00','updated_at' => '2021-10-18 00:00:00'),
  array('id' => '2','name' => 'Checkup','score' => '5','created_at' => '2021-10-18 00:00:00','updated_at' => '2021-10-18 00:00:00'),
  array('id' => '3','name' => 'Checkup Diabetes','score' => '7','created_at' => '2021-10-18 00:00:00','updated_at' => '2021-10-18 00:00:00'),
  array('id' => '4','name' => 'Checkup Cholestrol','score' => '7','created_at' => '2021-10-18 00:00:00','updated_at' => '2021-10-18 00:00:00')
);

/* `public_health_office`.`key_performance_officer` */
$key_performance_officer = array(
  array('id' => '1','name' => 'Presence','score' => '10','created_at' => '2021-10-18 00:00:00','updated_at' => '2021-10-18 00:00:00'),
  array('id' => '2','name' => 'UploadWork','score' => '5','created_at' => '2021-10-18 00:00:00','updated_at' => '2021-10-18 00:00:00'),
  array('id' => '3','name' => 'Clean up tables','score' => '15','created_at' => '2021-10-18 00:00:00','updated_at' => '2021-10-18 00:00:00'),
  array('id' => '4','name' => 'Clean up paper','score' => '15','created_at' => '2021-10-18 00:00:00','updated_at' => '2021-10-18 00:00:00')
);

/* `public_health_office`.`migrations` */
$migrations = array(
  array('id' => '1','migration' => '2014_10_12_000000_create_users_table','batch' => '1'),
  array('id' => '2','migration' => '2014_10_12_100000_create_password_resets_table','batch' => '1'),
  array('id' => '3','migration' => '2019_08_19_000000_create_failed_jobs_table','batch' => '1'),
  array('id' => '4','migration' => '2021_10_17_011000_role','batch' => '1'),
  array('id' => '5','migration' => '2021_10_17_030854_staff_position','batch' => '1'),
  array('id' => '6','migration' => '2021_10_18_015826_public_health_office','batch' => '1'),
  array('id' => '7','migration' => '2021_10_18_015929_public_health_center','batch' => '1'),
  array('id' => '8','migration' => '2021_10_18_020245_public_health_center_doctor','batch' => '1'),
  array('id' => '9','migration' => '2021_10_18_022920_key_performance_doctor','batch' => '1'),
  array('id' => '10','migration' => '2021_10_18_022939_key_performance_officer','batch' => '1'),
  array('id' => '11','migration' => '2021_10_18_023214_action_doctor','batch' => '1'),
  array('id' => '12','migration' => '2021_10_18_024158_public_health_office_officer','batch' => '1')
);

/* `public_health_office`.`officer_general` */
$officer_general = array(
  array('id' => '1','public_health_center' => '1','id_role' => '1','id_position' => '3','name' => 'Joseph','nik' => '111','address' => 'wonorejo','phone' => '083854942164','email' => 'owningmoon@gmail.com','password' => '$2y$11$z0Y.CPqqg7.tW6o.LjmzC.qEB6QW4kVno3rr1T6AXmCI9hQDml7PG','created_at' => NULL,'updated_at' => NULL),
  array('id' => '2','public_health_center' => '1','id_role' => '1','id_position' => '3','name' => 'Budiman','nik' => '1112','address' => 'wonorejo','phone' => '083854942164','email' => 'owningmoon@gmail.com','password' => '$2y$11$z0Y.CPqqg7.tW6o.LjmzC.qEB6QW4kVno3rr1T6AXmCI9hQDml7PG','created_at' => NULL,'updated_at' => NULL)
);

/* `public_health_office`.`password_resets` */
$password_resets = array(
);

/* `public_health_office`.`position` */
$position = array(
  array('id' => '1','name' => 'Ketua','created_at' => NULL,'updated_at' => NULL),
  array('id' => '2','name' => 'Sekretaris','created_at' => NULL,'updated_at' => NULL),
  array('id' => '3','name' => 'Anggota','created_at' => NULL,'updated_at' => NULL)
);

/* `public_health_office`.`public_health_center` */
$public_health_center = array(
  array('id' => '1','id_public_health_office' => '1','name' => 'Puskesmas Pacar Keling','phone' => '-','address' => '-','created_at' => '2021-10-12 13:22:00','updated_at' => '2021-10-12 13:22:00'),
  array('id' => '2','id_public_health_office' => '1','name' => 'Puskesmas Gayungsari','phone' => '-','address' => '-','created_at' => '2021-10-12 13:34:00','updated_at' => '2021-10-12 13:34:00'),
  array('id' => '3','id_public_health_office' => '1','name' => 'Puskesmas Manyar','phone' => '-','address' => '-','created_at' => '2021-10-12 13:34:00','updated_at' => '2021-10-12 13:34:00')
);

/* `public_health_office`.`public_health_office` */
$public_health_office = array(
  array('id' => '1','name' => 'Dinas Kesehatan','created_at' => '2021-10-18 07:09:00','updated_at' => '2021-10-18 07:09:00')
);

/* `public_health_office`.`public_health_office_officer` */
$public_health_office_officer = array(
);

/* `public_health_office`.`role` */
$role = array(
  array('id' => '1','name' => 'Dokter','created_at' => NULL,'updated_at' => NULL),
  array('id' => '2','name' => 'Dokter Gigi','created_at' => NULL,'updated_at' => NULL),
  array('id' => '3','name' => 'Perawat Gigi','created_at' => NULL,'updated_at' => NULL),
  array('id' => '4','name' => 'Bidan','created_at' => NULL,'updated_at' => NULL),
  array('id' => '5','name' => 'Perawat','created_at' => NULL,'updated_at' => NULL),
  array('id' => '6','name' => 'Penyuluh Kesehatan Masyarakat','created_at' => NULL,'updated_at' => NULL),
  array('id' => '7','name' => 'Perekam Medis','created_at' => NULL,'updated_at' => NULL),
  array('id' => '8','name' => 'Elektromedia','created_at' => NULL,'updated_at' => NULL),
  array('id' => '9','name' => 'Anestesi','created_at' => NULL,'updated_at' => NULL),
  array('id' => '10','name' => 'Apoteker','created_at' => NULL,'updated_at' => NULL),
  array('id' => '11','name' => 'Asisten Apoteker','created_at' => NULL,'updated_at' => NULL),
  array('id' => '12','name' => 'Radiografer','created_at' => NULL,'updated_at' => NULL),
  array('id' => '13','name' => 'Fisioterapi','created_at' => NULL,'updated_at' => NULL),
  array('id' => '14','name' => 'Pranata Laboratorium','created_at' => NULL,'updated_at' => NULL),
  array('id' => '15','name' => 'Sanitarian','created_at' => NULL,'updated_at' => NULL),
  array('id' => '16','name' => 'Nutrisionis','created_at' => NULL,'updated_at' => NULL)
);

/* `public_health_office`.`users` */
$users = array(
);
