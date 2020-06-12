# php-http2-push-issue
Demo of PHP http2 push issue. This only happens when the http2 server is pushing resources.

The example page used is https://http2.golang.org/serverpush, which was referenced in a related issue [PHP Bug #77535	Invalid callback, h2 server push](https://bugs.php.net/bug.php?id=77535)

## Usage

```
$ docker build --tag php-http2-push-issue .

$ docker run --rm -i php-http2-push-issue php < test-1-inline-client-http2-with-push.php
$ docker run --rm -i php-http2-push-issue php < test-2-instantiated-client-http2-with-push.php
$ docker run --rm -i php-http2-push-issue php < test-3-inline-client-http2-without-push.php
$ docker run --rm -i php-http2-push-issue php < test-4-instantiated-client-http2-without-push.php
```
