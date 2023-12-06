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

simpleauthドライバの利用準備
```
docker compose exec 'fuel-app' /bin/ash
```

```
/var/www # php oil refine migrate --packages=auth
Performed migrations for package:auth:
001_auth_create_usertables
002_auth_create_grouptables
003_auth_create_roletables
004_auth_create_permissiontables
005_auth_create_authdefaults
006_auth_add_authactions
007_auth_add_permissionsfilter
008_auth_create_providers
009_auth_create_oauth2tables
010_auth_fix_jointables
011_auth_group_optional
/var/www #
```

ユーザー関連のテーブルが作成されていれば成功
```
xxxx@xxxxnooMacBook-Air fuelphp-docker-composer % docker compose exec fuel_db /bin/bash
bash-4.2# mysql -u root
Welcome to the MySQL monitor.  Commands end with ; or \g.
Your MySQL connection id is 3
Server version: 5.7.44 MySQL Community Server (GPL)

Copyright (c) 2000, 2023, Oracle and/or its affiliates.

Oracle is a registered trademark of Oracle Corporation and/or its
affiliates. Other names may be trademarks of their respective
owners.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

mysql> use fuelphp_sample;
Reading table information for completion of table and column names
You can turn off this feature to get a quicker startup with -A

Database changed
mysql> show tables;
+--------------------------+
| Tables_in_fuelphp_sample |
+--------------------------+
| migration                |
| users                    |
| users_clients            |
| users_providers          |
| users_scopes             |
| users_sessions           |
| users_sessionscopes      |
+--------------------------+
7 rows in set (0.00 sec)

mysql>
```

# composer.json編集時
```
docker compose run -u "$(id -u):$(id -g)" --rm fuel-app composer update
```

# TODO
- [ ] ホストのmysqlサーバーに接続できるように（docker周りのネットワーク調査）
- [ ] mysql8にアップデート