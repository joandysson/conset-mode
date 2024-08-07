DROP TABLE IF EXISTS banner;
DROP TABLE IF EXISTS contacts;

CREATE TABLE banner (
	id INT NOT NULL AUTO_INCREMENT,
  banner_id VARCHAR(100) NULL,
  created_at DATETIME NOT NULL,
  updated_at DATETIME NOT NULL,
  deleted_at DATETIME,
  PRIMARY KEY(id)
) ENGINE = INNODB;

CREATE TABLE contacts (
	id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(100) NULL,
  email VARCHAR(100) NOT NULL,
  message TEXT NULL,
  created_at DATETIME NOT NULL,
  PRIMARY KEY(id)
) ENGINE = INNODB;

CREATE UNIQUE INDEX banner_id_index
ON banner (banner_id);

ALTER TABLE banner MODIFY short_id VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_bin;
