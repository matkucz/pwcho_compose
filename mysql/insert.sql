use apache_test;
create table test(
id int auto_increment primary key not null,
imie varchar(45) not null,
nazwisko varchar(45) not null
);
insert into test(id,imie, nazwisko) values
(null, 'Uzytkownik', 'Testowy'),
(null, 'Drugi', 'Uzytkownik'),
(null, 'Trzeci', 'Uzytkownik');
