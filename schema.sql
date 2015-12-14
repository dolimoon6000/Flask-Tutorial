drop table if exists entries;
create table entries (
id INTEGER PRIMARY KEY autoincrement,
title text not null,
text text not null
);