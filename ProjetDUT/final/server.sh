#!/usr/bin/env bash

php -S localhost:${1:-8080} -t ./ -ddisplay_errors=1 -dzned_extensions=xdebug.so