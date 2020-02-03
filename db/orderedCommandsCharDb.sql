CREATE DATABASE smashbros_characters;

CREATE TABLE series (
    id int,
    name char(255), 
    PRIMARY KEY (id)
); 

CREATE TABLE characters (
    id int,
    name_of char(255),
    series_id int,
    votes int,
    PRIMARY KEY (id),
    FOREIGN KEY (series_id) REFERENCES series (id)
); 

CREATE TABLE users (
    id int,
    name char(255),
    pass char(255), 
    char_voted_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (char_voted_id) REFERENCES characters (id)
); 
