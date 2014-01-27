USE test;

DROP TABLE IF EXISTS users;

CREATE TABLE users(
  id bigint(256) primary key auto_increment NOT NULL,
  name VARCHAR(256),
  rd VARCHAR(128),
  pass VARCHAR(512)
);
