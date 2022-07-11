#!/usr/bin/env bash

if [ -d .git/hooks/ ]; then
    cp contrib/hooks/* .git/hooks/
    chmod +x .git/hooks/*
fi