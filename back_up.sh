#!/bin/sh

#mysqldump --host remotemysql.com -P 3306 -u fXA6bhxIBe -p2hKjIQAywq fXA6bhxIBe --skip-lock-tables > $(%Y%m%d).sql


zcDATE=$(date +%Y%m%d)
mkdir /data/mysql-data-backup/$zcDATE
(mysqldump --host 'remotemysql.com' -P 3306 -u fXA6bhxIBe -p2hKjIQAywq  fXA6bhxIBe --skip-lock-tables  --single-transaction > /data/mysql-data-backup/$zcDATE/hands.sql)
