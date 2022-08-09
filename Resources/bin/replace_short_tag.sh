#!/bin/bash

_TARGET="$1"

__DIR__ ()
{
    echo $(dirname "$(readlink -f "$0")");
}

exit 1

fix_short_tags()
{
    file="$1"
    #remove caracteres de quebra de linha
    not_accept=$(echo "$file" |grep -E '\.png|\.jpg|\.jpeg|\.mp3|\.mp4|\.mp3|\.bmp' |wc -l)

    if [ $not_accept -eq 0 ]; then
        echo -e "File: $file\n"
        `__DIR__`"/replace_short_tag.php" "$file"
    else
        echo -e "File not accepted: $file\n"
    fi
}

if [ -d "$_TARGET" ]; then
    for file in $(find "$_TARGET" -type f -name '*.php'); do
        fix_short_tags "$file"
    done
fi

if [ -f "$_TARGET" ]; then
        fix_short_tags "$_TARGET"
fi
