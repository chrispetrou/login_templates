create database mycreds;
use mycreds;
show tables;

-- create table credentials
-- if you choose to rename the table make
-- also the change to login.php
create table credentials(
	userid int not null AUTO_INCREMENT,
	username varchar(15) not null,
	password varchar(100) not null,
primary key(userid) );

-- default creds: testuser, testpassword (in sha1) - change those !!!
insert into credentials values(1, 'testuser', '8bb6118f8fd6935ad0876a3be34a717d32708ffd');
commit;
quit;