#!/bin/bash

docker exec -it -w /app laravel_php $@

# When docker creates files in a mounted volume, it creates them as root. 
# That means that you can't edit them from your host machine. 
# This script will change the owner of all files in the current directory to the current user.

# Find all files and directories in the directory, excluding specific folders
files=$(find . \( \
   -not -path "./.docker/*" \
   -and -not -path "./node_modules/*" \
   -and -not -path "./**/node_modules/*" \
   -and -not -path "./vendor/*" \
   -and -not -path "./.git/*" \
   -and -not -path "./.github/*" \
   -and -not -path "./public/*" \
   -and -not -path "./storage/*" \
   \) 2>/dev/null)

#   Get the current user
current_user=$(whoami)

#  Loop through the files and change the owner to the current user
for file in $files; do
   file_owner=$(stat -c '%U' "$file")
   if [ "$file_owner" != "$current_user" ]; then
        sudo chown "$current_user":"$current_user" "$file"
        echo -n '.';
    fi
done
echo "";