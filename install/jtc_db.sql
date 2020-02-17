
CREATE DATABASE IF NOT EXISTS 'jtc_db' DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE 'jtc_db';

CREATE TABLE IF NOT EXISTS 'users' (
  'UID' int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  'firstName' varchar(255) not null,
  'middleName' varchar(255),
  'lastName' varchar(255)
);

CREATE TABLE IF NOT EXISTS 'user2wordlist'(
  'ID' int(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  'wordlistID' int(11),
  'UID' int(11),
  foreign key (wordlistID) references wordlists(wordlistID) on delete cascade,
  foreign key (UID) references users(UID) on delete cascade
);
