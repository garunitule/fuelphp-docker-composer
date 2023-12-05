# 概要

下記の記事を参考にFuelPHP環境を構築し、簡単なサンプルアプリケーションを作成してます。

[【お手軽】DockerでFuelPHPを使いたい方へ](https://qiita.com/Bana7/items/beca2d5a4cbef5b52368)

# 実行準備
mysqlコンテナにログイン
```
docker compose exec fuel_db /bin/bash
```

テーブル作成
```
create table tasks (
    id int auto_increment,
    name varchar(255),
    status varchar(255),
    created_time timestamp,
    primary key(id)
);
```

下記のようなテーブルが作成される
```
mysql> describe tasks;
+--------------+--------------+------+-----+---------+----------------+
| Field        | Type         | Null | Key | Default | Extra          |
+--------------+--------------+------+-----+---------+----------------+
| id           | int          | NO   | PRI | NULL    | auto_increment |
| name         | varchar(255) | YES  |     | NULL    |                |
| status       | varchar(255) | YES  |     | NULL    |                |
| created_time | timestamp    | YES  |     | NULL    |                |
+--------------+--------------+------+-----+---------+----------------+
4 rows in set (0.00 sec)

mysql>
```

# composer.json編集時
```
docker compose run -u "$(id -u):$(id -g)" --rm fuel-app composer update
```

# TODO
- [ ] ホストのmysqlサーバーに接続できるように（docker周りのネットワーク調査）
- [ ] mysql8にアップデート