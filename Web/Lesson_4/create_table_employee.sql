CREATE TABLE CLASSMATES (
    id INTEGER PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    age INTEGER NOT NULL,
    address VARCHAR(255)
);

comment on column CLASSMATES.id is 'Идентификатор записи';
comment on column CLASSMATES.name is 'Имя одноклассника'
comment on column CLASSMATES.age is 'Возраст одноклассника';
comment on column CLASSMATES.address is 'Адресс проживания одноклассника'