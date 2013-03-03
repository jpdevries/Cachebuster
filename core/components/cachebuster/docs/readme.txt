--------------------
Extra: cachebuster
--------------------
Version: 1.3
Created: September 22, 2012
Author: JP DeVries <mail@devries.jp>
License: GNU GPLv2 (or later at your option)

A simple plugin that is handy for ensuring assets load fresh by generating a truly unique number.

Examples:
Let's say we always want a particular JavaScript file to load from the server. Just call the smartcache Chunk. If the Cache Bust System Setting is true, a truely unique string will be returned. Otherwise, your site version will be returned for cache control (ex 0.1)
<script src="/assets/js/script.js?[[$smartcache]]"></script>

If Cache Bust is turned on
<script src="/assets/js/script.js?cb=1348369898"></script>

If Cache Bust is truned off
<script src="/assets/js/script.js?cb=0.1"></script>

Thanks for using cachebuster!
JP DeVries	
mail@devries.jp