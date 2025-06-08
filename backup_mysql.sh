#!/bin/bash

# Infos MySQL
DB_USER="root"
DB_PASS="motdepasse"
DB_NAME="gestion_services"
DATE=$(date +%Y-%m-%d_%H-%M)
BACKUP_FILE="backup-$DB_NAME-$DATE.sql"

# Répertoire temporaire
mkdir -p /AKINCHERT/backup_mysql/
cd /AKINCHERT/backup_mysql/

# Export de la base
mysqldump -u $DB_USER -p$DB_PASS $DB_NAME > $BACKUP_FILE

# Compresser
zip $BACKUP_FILE.zip $BACKUP_FILE

# Supprimer le .sql brut
rm $BACKUP_FILE