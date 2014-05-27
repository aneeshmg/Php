USE test;

DROP TABLE IF EXISTS login_users;

CREATE TABLE login_users(
  id bigint(255) primary key auto_increment NOT NULL,
  name VARCHAR(256) NOT NULL,
  rd VARCHAR(256) NOT NULL,
  pass VARCHAR(512) NOT NULL
);

INSERT INTO login_users(name,rd,pass) VALUES("aneesh","216632976","edf8bfde7d9d0a346f6c136555edb44a");
