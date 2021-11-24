#!/bin/bash

_TARGET="$1"

clear_crlf()
{
    file="$1"
    #remove caracteres de quebra de linha
    not_accept=$(echo "$file" |grep -E '\.png|\.jpg|\.jpeg|\.mp3|\.mp4|\.mp3|\.bmp' |wc -l)

    if [ $not_accept -eq 0 ]; then
        echo -e "File: $file\n"
        sed -i 's/\r$//g' "$file"
    else
        echo -e "File not accepted: $file\n"
    fi
}

if [ -d "$_TARGET" ]; then
    for file in $(find "$_TARGET" -type f -name '*.php'); do
        clear_crlf "$file"
    done
fi

if [ -f "$_TARGET" ]; then
        clear_crlf "$_TARGET"
fi
