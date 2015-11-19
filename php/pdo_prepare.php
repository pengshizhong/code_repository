<?php
 
              #数据库连接
              $dbtype = 'mysql';
              $host = 'localhost';
              $db = 'yii2basic';
              $user = 'root';
              $psw = '123456';
             
             $dsn = $dbtype . ':host=' . $host . ';' . 'dbname=' . $db;
              try {
                 $dbh = new PDO($dsn, $user, $psw, array(PDO::ATTR_PERSISTENT=>true));
                 echo '连接成功<br>';
             } catch(Exception $e) {
                 die('Connect Failed Message: ' . $e->getMessage());
             }
             
             
             #使用query函数查询
              $sql = 'select * from user';
              $sth = $dbh->prepare($sql);

              //$sth = $dbh->prepare('update db set zh_CN= :str where SN=:SN');
              $id = 2;
              $sth->bindParam(':id',$id);
             // var_dump($sth);
              //$sth->bindParam(':SN',$SN);
              $result = $sth->execute();
              if($result){
                echo "ok";
              }
              else{
                echo "fail";
              }
             //$sql = 'lock tables user write';
             //var_dump($dbh);
             //$query = $dbh->query($sql);
              //var_dump($query);
              $sth->setFetchMode(PDO::FETCH_ASSOC);    //设置结果集返回格式,此处为关联数组,即不包含index下标
              $rs = $sth->fetchAll();
              var_dump($rs);