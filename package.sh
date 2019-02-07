#!/bin/sh

cd "$( dirname "$( readlink -e "$0" )" )"
tar caf ../example.tar.gz --exclude=".git" --exclude-ignore=".gitignore" -- .
mv ../example.tar.gz ./
