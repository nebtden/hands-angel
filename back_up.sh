#!/bin/sh

#mysqldump --host remotemysql.com -P 3306 -u fXA6bhxIBe -p2hKjIQAywq fXA6bhxIBe --skip-lock-tables > fXA6bhxIBe.sql


zcDATE=$(date +%Y%m%d)
mkdir /data/mysql-data-backup/$zcDATE
(mysqldump --host 'remotemysql.com' -u fXA6bhxIBe -p2hKjIQAywq  fXA6bhxIBe --skip-lock-tables > /data/mysql-data-backup/$zcDATE/hands.sql)
