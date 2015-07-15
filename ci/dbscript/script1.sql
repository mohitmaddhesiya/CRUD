CREATE TABLE address (
  id int(11) NOT NULL AUTO_INCREMENT,
  contactus1_Line1 varchar(20) DEFAULT NULL,
  contactus1_line2 varchar(20) DEFAULT NULL,
  contactus1_city varchar(20) DEFAULT NULL,
  contactus1_zip int(7) DEFAULT NULL,
  contactus2_Line varchar(20) DEFAULT NULL,
  contactus2_line2 varchar(20) DEFAULT NULL,
  contactus2_city varchar(20) DEFAULT NULL,
  contactus2_zip int(7) DEFAULT NULL,
  mobile1 varchar(12) DEFAULT NULL,
  mobile2 varchar(12) DEFAULT NULL,
  phone varchar(20) DEFAULT NULL,
  email varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE course (
  id int(11) NOT NULL AUTO_INCREMENT,
  course_name varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE faculity (
  id int(11) NOT NULL AUTO_INCREMENT,
  faculty_name varchar(30) DEFAULT NULL,
  qualification varchar(30) DEFAULT NULL,
  mobile_no varchar(15) DEFAULT NULL,
  email varchar(40) DEFAULT NULL,
  spec_quali varchar(30) DEFAULT NULL,
  photo_name varchar(100) DEFAULT NULL,
  ath varchar(150) DEFAULT NULL,
  fullpath varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE jmd_sessions (
  session_id varchar(40) NOT NULL,
  ip_address varchar(45) DEFAULT NULL,
  user_agent varchar(120) DEFAULT NULL,
  last_activity int(10) DEFAULT NULL,
  user_data varchar(40) DEFAULT NULL,
  PRIMARY KEY (`session_id`)
);
CREATE TABLE newsupdate (
  id int(6) NOT NULL AUTO_INCREMENT,
  username varchar(15) DEFAULT NULL,
  name varchar(20) DEFAULT NULL,
  title varchar(20) DEFAULT NULL,
  subject varchar(50) DEFAULT NULL,
  description varchar(200) DEFAULT NULL,
  date date DEFAULT NULL,
  time date DEFAULT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE our_result (
  id int(11) NOT NULL AUTO_INCREMENT,
  student_name varchar(20) DEFAULT NULL,
  exam_name varchar(20) DEFAULT NULL,
  exam_type varchar(20) DEFAULT NULL,
  rank int(10) DEFAULT NULL,
  start varchar(10) DEFAULT NULL,
  end varchar(10) DEFAULT NULL,
  photo_name varchar(100) DEFAULT NULL,
  path varchar(150) DEFAULT NULL,
  fullpath varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE ourtopper (
  id int(11) NOT NULL AUTO_INCREMENT,
  photo_name varchar(50) DEFAULT NULL,
  path varchar(100) DEFAULT NULL,
  fullpath varchar(150) DEFAULT NULL,
  width int(5) DEFAULT NULL,
  height int(5) DEFAULT NULL,
  date varchar(10) DEFAULT NULL,
  name varchar(50) DEFAULT NULL,
  year varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
create table studymatrial (
	id int primary key auto_increment,
	subject varchar(50),
	title varchar(200),
	writter varchar(100),
	filename varchar(100),
	path varchar(250),
	fullpath varchar(300),
	date varchar(20),
	upadateby varchar(50)
);
CREATE TABLE toppersay (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(20) DEFAULT NULL,
  year varchar(10) DEFAULT NULL,
  description varchar(200) DEFAULT NULL,
  photo_name varchar(50) DEFAULT NULL,
  path varchar(200) DEFAULT NULL,
  fullpath varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
CREATE TABLE user (
  id int(6) NOT NULL DEFAULT '0',
  username varchar(15) DEFAULT NULL,
  password varchar(15) DEFAULT NULL,
  type varchar(15) DEFAULT NULL,
  type_id int(6) DEFAULT NULL,
  ip varchar(16) DEFAULT NULL,
  date date DEFAULT NULL,
  time date DEFAULT NULL,
  status varchar(2) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
