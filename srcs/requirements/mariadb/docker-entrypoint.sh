#!/bin/bash

service mysql start;

exec "$@"
