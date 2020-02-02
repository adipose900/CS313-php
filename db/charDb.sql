CREATE DATABASE smashbros_characters;

CREATE TABLE characters (
    char_id int,
    char_name char(255),
    ser_id int,
    votes int,   
); 
CREATE TABLE series (
    ser_id int,
    ser_name char(255),  
); 
CREATE TABLE serieslink (
    ser_id int,
    char_id int,
); 
CREATE TABLE users (
    user_id int,
    user_name char(255),
    user_pass char(255), 
    char_id int,
    votes int,   
); 
