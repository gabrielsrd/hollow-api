Create TABLE backend (
    gender varchar(32),
    name_title varchar(32),
    name_first varchar(64),
    name_last varchar(64),
    location_street_number int,
    location_street_name varchar(128),
    location_city varchar(128),
    location_state varchar(128),
    location_country varchar(128),
    location_postcode varchar(32),
    location_coordinates_latitude float,
    location_coordinates_longitude float,
    location_timezone_offset varchar(32),
    location_timezone_description varchar(256),
    email varchar(128),
    login_uuid varchar(256),
    login_username varchar(128),
    login_password varchar(128),
    login_salt varchar(64),
    login_md5 varchar(256),
    login_sha1 varchar(256),
    login_sha256 varchar(256),
    dob_date varchar(128),
    dob_age int,
    registered_date varchar(128),
    registered_age int,
    phone varchar(64),
    cell varchar(64),
    id_name varchar(64),
    id_value varchar(64),
    pitcure_large varchar(256),
    picture_medium varchar(256),
    picture_thumbnail varchar(256),
    nat varchar(32),
    id int AUTO_INCREMENT PRIMARY KEY
);

LOAD DATA INFILE 'd:/wamp64/tmp/backend.csv' 
INTO TABLE backend
FIELDS TERMINATED BY ',' 
ENCLOSED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 ROWS;

