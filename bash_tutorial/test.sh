#!/bin/bash
SCRIPT_DIR=$(cd $(dirname $0); pwd)

echo $SCRIPT_DIR

if [ -f "$SCRIPT_DIR/input.txt" ] 
then
   wc -l ./input.txt >> "$SCRIPT_DIR/output.txt"    
else
    echo "file not found" >> "$SCRIPT_DIR/output.txt"
fi
