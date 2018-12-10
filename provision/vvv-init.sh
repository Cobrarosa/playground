#!/usr/bin/env bash

echo -e "\nLocal development set, creating database '${VVV_SITE_NAME}' (if it's not already there)"

DB_HOST="127.0.0.1"
DB_USER="root"
DB_PASS="${DB_USER}"
DB_NAME="${VVV_SITE_NAME}"

mysql -u root --password=root -e "CREATE DATABASE IF NOT EXISTS \`${VVV_SITE_NAME}\`"

SITE_DOMAIN=''

for line in $(cat "$VM_DIR/provision/vvv-hosts"); do
	if [[ "#" != ${line:0:1} ]]; then
		SITE_DOMAIN=$line
		break
	fi
done

if [[ ! -z $SITE_DOMAIN ]]; then
	noroot wp core config --dbhost=$DB_HOST --dbuser=$DB_USER --dbpass=$DB_PASS --dbname=$DB_NAME --force --extra-php <<PHP
define( 'WP_SITEURL', 'https://${SITE_DOMAIN}' );
define( 'WP_HOME', 'https://${SITE_DOMAIN}' );

define( 'WP_POST_REVISIONS', 3 );
PHP
fi
