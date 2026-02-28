<?php 

//  CARA MASUK DATABASE LEWAT CMD

// mymac@192 XAMPP % cd xamppfiles 
// mymac@192 xamppfiles % cd bin
// mymac@192 bin % cd mysql            
// cd: not a directory: mysql
// mymac@192 bin % cd mysql
// cd: not a directory: mysql
// mymac@192 bin % mysql -u root -p
// Enter password: 
// Welcome to the MariaDB monitor.  Commands end with ; or \g.
// Your MariaDB connection id is 24
// Server version: 10.4.28-MariaDB Source distribution

// Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

// Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

// CARA MELIHAT DATABASE

// MariaDB [(none)]> show databases
//     -> ;
// +--------------------+
// | Database           |
// +--------------------+
// | euystore           |
// | euyteststore       |
// | information_schema |
// | laraveldb          |
// | mysql              |
// | newsportal         |
// | performance_schema |
// | phpmyadmin         |
// | ptkibaru           |
// | ptkibarunew        |
// | test               |
// | tokoeuystore       |
// +--------------------+
// 12 rows in set (0.001 sec)

// =========== CARA BUAT DATA BASE =========


// MariaDB [(none)]> create database phpdasar;
// Query OK, 1 row affected (0.001 sec)

// MariaDB [(none)]> show databases
//     -> ;
// +--------------------+
// | Database           |
// +--------------------+
// | euystore           |
// | euyteststore       |
// | information_schema |
// | laraveldb          |
// | mysql              |
// | newsportal         |
// | performance_schema |
// | phpdasar           |
// | phpmyadmin         |
// | ptkibaru           |
// | ptkibarunew        |
// | test               |
// | tokoeuystore       |
// +--------------------+
// 13 rows in set (0.001 sec)


// ========= CARA TABLE ATAU MENGIISI TABLE DARI DATABASE =======

// MariaDB [(none)]> use phpdasar;
// Database changed
// MariaDB [phpdasar]> create table mahasiswa (
//     -> id int primary key auto_increment,
//     -> nama varchar(100),
//     -> nim char(9),
//     -> email varchar(100),
//     -> jurusan varchar(100),
//     -> gambar varchar(100)
//     -> );
// Query OK, 0 rows affected (0.013 sec)

// MariaDB [phpdasar]> 

//========= CARA MELIHAT TABLENYA ============

// MariaDB [phpdasar]> show tables;
// +--------------------+
// | Tables_in_phpdasar |
// +--------------------+
// | mahasiswa          |
// +--------------------+
// 1 row in set (0.000 sec)

// ========= CARA MELIHAT ISI TABLENYA =======

// MariaDB [phpdasar]> describe mahasiswa;
// +---------+--------------+------+-----+---------+----------------+
// | Field   | Type         | Null | Key | Default | Extra          |
// +---------+--------------+------+-----+---------+----------------+
// | id      | int(11)      | NO   | PRI | NULL    | auto_increment |
// | nama    | varchar(100) | YES  |     | NULL    |                |
// | nim     | char(9)      | YES  |     | NULL    |                |
// | email   | varchar(100) | YES  |     | NULL    |                |
// | jurusan | varchar(100) | YES  |     | NULL    |                |
// | gambar  | varchar(100) | YES  |     | NULL    |                |
// +---------+--------------+------+-----+---------+----------------+
// 6 rows in set (0.006 sec)

// MariaDB [phpdasar]> 


// ====== CARA ISI DATANYA DARI PERTABLE =======

// MariaDB [phpdasar]> insert into mahasiswa values (1, 'Ryandra Lunox', '186828123', 'ryanox@gmail.com', 'Ilmu Komputer', 'ryanox.png');
// Query OK, 1 row affected (0.001 sec)

// MariaDB [phpdasar]> select * from mahasiswa;
// +----+---------------+-----------+------------------+---------------+------------+
// | id | nama          | nim       | email            | jurusan       | gambar     |
// +----+---------------+-----------+------------------+---------------+------------+
// |  1 | Ryandra Lunox | 186828123 | ryanox@gmail.com | Ilmu Komputer | ryanox.png |
// +----+---------------+-----------+------------------+---------------+------------+
// 1 row in set (0.000 sec)

// MariaDB [phpdasar]> insert into mahasiswa values (2,  'Lunox', '186828888', 'ryanoxgf@gmail.com', 'Ilmu Komputer', 'ryanox.png');
// Query OK, 1 row affected (0.000 sec)

// MariaDB [phpdasar]>  insert into mahasiswa values (3,  'Ryandra', '186828188', 'ryanlovelunox@gmail.com', 'Ilmu Komputer', 'ryanox.png');
// Query OK, 1 row affected (0.000 sec)

// MariaDB [phpdasar]> select * from mahasiswa;
// +----+---------------+-----------+-------------------------+---------------+------------+
// | id | nama          | nim       | email                   | jurusan       | gambar     |
// +----+---------------+-----------+-------------------------+---------------+------------+
// |  1 | Ryandra Lunox | 186828123 | ryanox@gmail.com        | Ilmu Komputer | ryanox.png |
// |  2 | Lunox         | 186828888 | ryanoxgf@gmail.com      | Ilmu Komputer | ryanox.png |
// |  3 | Ryandra       | 186828188 | ryanlovelunox@gmail.com | Ilmu Komputer | ryanox.png |
// +----+---------------+-----------+-------------------------+---------------+------------+
// 3 rows in set (0.000 sec)

// MariaDB [phpdasar]> 

// ======= CARA MELIHAT NAMA NYA SAJA ======

// MariaDB [phpdasar]> select nama from mahasiswa;
// +---------------+
// | nama          |
// +---------------+
// | Ryandra Lunox |
// | Lunox         |
// | Ryandra       |
// +---------------+
// 3 rows in set (0.001 sec)

// // ======= CARA MELIHAT NAMA DAN EMAIL NYA SAJA ======

// MariaDB [phpdasar]> select nama, email from mahasiswa;
// +---------------+-------------------------+
// | nama          | email                   |
// +---------------+-------------------------+
// | Ryandra Lunox | ryanox@gmail.com        |
// | Lunox         | ryanoxgf@gmail.com      |
// | Ryandra       | ryanlovelunox@gmail.com |
// +---------------+-------------------------+
// 3 rows in set (0.000 sec)

// ====== CARA MELIHAT DATA BERDASARKAN NIM =====

// MariaDB [phpdasar]> select * from mahasiswa where nrp = '186828123';
// ERROR 1054 (42S22): Unknown column 'nrp' in 'where clause'
// MariaDB [phpdasar]> select * from mahasiswa where nim = '186828123';
// +----+---------------+-----------+------------------+---------------+------------+
// | id | nama          | nim       | email            | jurusan       | gambar     |
// +----+---------------+-----------+------------------+---------------+------------+
// |  1 | Ryandra Lunox | 186828123 | ryanox@gmail.com | Ilmu Komputer | ryanox.png |
// +----+---------------+-----------+------------------+---------------+------------+
// 1 row in set (0.000 sec)


// MariaDB [phpdasar]> select * from mahasiswa;
// +----+---------------+-----------+-------------------------+---------------+------------+
// | id | nama          | nim       | email                   | jurusan       | gambar     |
// +----+---------------+-----------+-------------------------+---------------+------------+
// |  1 | Ryandra Lunox | 186828123 | ryanox@gmail.com        | Ilmu Komputer | ryanox.png |
// |  2 | Lunox         | 186828888 | ryanoxgf@gmail.com      | Ilmu Komputer | ryanox.png |
// |  3 | Ryandra       | 186828188 | ryanlovelunox@gmail.com | Ilmu Komputer | ryanox.png |
// +----+---------------+-----------+-------------------------+---------------+------------+
// 3 rows in set (0.000 sec)

// ====== CARA UPDATE DATA SEMUANYA =========
// MariaDB [phpdasar]> update mahasiswa set jurusan = 'Ilmu Komputer 2';


//====== CARA UPDATE DATA SPESIPIK =========
// MariaDB [phpdasar]> update mahasiswa set jurusan = 'Ilmu Komputer 2' where id = 1;
// Query OK, 1 row affected (0.001 sec)
// Rows matched: 1  Changed: 1  Warnings: 0

// MariaDB [phpdasar]> insert into mahasiswa values (4,  'Ryandraa', '186828188', 'ryanlovelunox@gmail.com', 'Ilmu Komputer', 'ryanox.png');
// Query OK, 1 row affected (0.001 sec)

// MariaDB [phpdasar]> select * from mahasiswa;
// +----+---------------+-----------+-------------------------+-----------------+------------+
// | id | nama          | nim       | email                   | jurusan         | gambar     |
// +----+---------------+-----------+-------------------------+-----------------+------------+
// |  1 | Ryandra Lunox | 186828123 | ryanox@gmail.com        | Ilmu Komputer 2 | ryanox.png |
// |  2 | Lunox         | 186828888 | ryanoxgf@gmail.com      | Ilmu Komputer   | ryanox.png |
// |  3 | Ryandra       | 186828188 | ryanlovelunox@gmail.com | Ilmu Komputer   | ryanox.png |
// |  4 | Ryandraa      | 186828188 | ryanlovelunox@gmail.com | Ilmu Komputer   | ryanox.png |
// +----+---------------+-----------+-------------------------+-----------------+------------+
// 4 rows in set (0.000 sec)

// =======CARA HAPUS DATA SEMUANYA=========

// MariaDB [phpdasar]> delete from mahasiswa;

// ====== CARA HAPUS DATA SPESIPIK =========
// MariaDB [phpdasar]> delete from mahasiswa where id = 4;
// Query OK, 1 row affected (0.001 sec)

// MariaDB [phpdasar]> select * from mahasiswa;
// +----+---------------+-----------+-------------------------+-----------------+------------+
// | id | nama          | nim       | email                   | jurusan         | gambar     |
// +----+---------------+-----------+-------------------------+-----------------+------------+
// |  1 | Ryandra Lunox | 186828123 | ryanox@gmail.com        | Ilmu Komputer 2 | ryanox.png |
// |  2 | Lunox         | 186828888 | ryanoxgf@gmail.com      | Ilmu Komputer   | ryanox.png |
// |  3 | Ryandra       | 186828188 | ryanlovelunox@gmail.com | Ilmu Komputer   | ryanox.png |
// +----+---------------+-----------+-------------------------+-----------------+------------+
// 3 rows in set (0.000 sec)

// MariaDB [phpdasar]> 


// ========= cara menghapus table smunya meskipun ada isinya =========
// MariaDB [phpdasar]> drop table mahasiswa; 

// ========= cara menghapus database smunya meskipun ada isinya =========
// MariaDB [phpdasar]> drop database phpdasar; 



?>