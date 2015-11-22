<?php
 
              #数据库连接
              $dbtype = 'mysql';
              $host = 'localhost';
              $db = 'movie';
              $user = 'root';
             $psw = '123456';
             
             $dsn = $dbtype . ':host=' . $host . ';' . 'dbname=' . $db;
              try {
                 $dbh = new PDO($dsn, $user, $psw, array(
                  PDO::ATTR_PERSISTENT=>true
                  ));
                 echo '连接成功<br>';
             } catch(Exception $e) {
                 die('Connect Failed Message: ' . $e->getMessage());
             }
             
             #使用query函数查询
             //$sql = 'select * from user';
             $sql = 'lock tables user write';
             var_dump($dbh);
            // $query = $dbh->query($sql);
              //var_dump($query);
           //   $query->setFetchMode(PDO::FETCH_ASSOC);    //设置结果集返回格式,此处为关联数组,即不包含index下标
            //  $rs = $query->fetchAll();
            //  var_dump($rs);