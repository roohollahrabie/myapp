#!/bin/bash

j2 /site.conf.j2 > /etc/nginx/conf.d/default.conf

exec "$@"

