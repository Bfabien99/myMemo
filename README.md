# MEMO
Petite application pour insere des notes

## STRUCTURE DE LA BASE DE DONNEE
Utilisation de Sqlite

## TABLES
- sujet
    * id PRIMARY AUTOINCREMENT
    * content TEXT NOT NULL
    * category VARCHAR(255) NULL
    * tags VARCHAR(255) NULL
    * date DATETIME current_timestamp
