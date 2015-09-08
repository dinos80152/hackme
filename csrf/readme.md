# Cross Site Request Forgery

## Attack
* User login hackme, server save user session
* Hackyou use img src or iframe to make a request which need authorization to hackme server

```html
<img src="http://hackme.com/csrf/change.php?award=1"> 
```

## Defence
* Http methods
* CSRF token
* Check Header Reference


## Reference
[CSRF@wikipedia](https://en.wikipedia.org/wiki/Cross-site_request_forgery)