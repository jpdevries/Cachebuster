This is the README file for the Extra described at:

[Cachebuster Extra](http://modx.com/extras/package/cachebuster)

A simple plugin that is handy for ensuring assets load fresh by generating a truly unique number.

Now use cachebuster to set an optional placeholder to be used for consecutive cache-busting!

[[$smartcache? &m=`cb=` &placeholder=`cbtime`]] will output something like cb=1362093673.

You'll then have a [[+cbtime]] placeholer to use in any of your Templates with the value of 1362093673.

Examples:

Let's say we always want a particular JavaScript file or AJAX request to load from the server. Just call the smartcache Chunk. If the Cache Bust System Setting is true, a truely unique string will be returned. Otherwise, your site version will be returned for cache control (ex 0.1)

Thanks for using cachebuster!

JP DeVries

mail@devries.jp
