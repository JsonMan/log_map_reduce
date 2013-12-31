#!/bin/bash
/usr/bin/hadoop fs -rmr /user/hmthdfs/log/out
/usr/bin/hadoop fs -lsr /user/hmthdfs/log
/usr/bin/hadoop jar /usr/lib/hadoop/contrib/streaming/hadoop-streaming-0.20.2-cdh3u4.jar  -input /user/hmthdfs/log/allinone  -output /user/hmthdfs/log/out  -file /search/hadoop/log/mapper.php -file /search/hadoop/log/reducer.php  -mapper mapper.php -reducer reducer.php -jobconf mapred.map.tasks=1000 -jobconf mapred.reduce.tasks=10 
/usr/bin/hadoop fs -lsr /user/hmthdfs/log/out