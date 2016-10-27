create database danmaku;

use danmaku;

GRANT ALL PRIVILEGES ON danmaku.* TO 'danmaku'@'localhost' IDENTIFIED BY '1234';

create table comment(
    id int NOT NULL AUTO_INCREMENT,
    user text,
    type int,
    color text,
    comment text,
    PRIMARY KEY(id)
);

create table allowed(
    id int NOT NULL AUTO_INCREMENT,
    user text,
    type int,
    color text,
    comment text,
    PRIMARY KEY(id)
);

create table client(
    cid int NOT NULL,
    history int,
    UNIQUE(cid)
);
