

CREATE TABLE user (
    id int(11) not null PRIMARY KEY AUTO_INCREMENT,
    fname varchar(128) not null,
    username varchar(128) not null,
    email varchar(128) not null,
    pwd varchar(1000) not null
);
