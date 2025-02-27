#!/bin/sh

mysqld --datadir=./mysql-data --socket=./mysql.sock --port=3306 --initialize-insecure
mysqld --datadir=./mysql-data --socket=./mysql.sock --port=3306 --skip-networking=0 &
