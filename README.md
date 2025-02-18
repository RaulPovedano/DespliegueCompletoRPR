# DespliegueCompletoRPR


- BACKEND: Symfony
- FRONTEND: React
- BASE DE DATOS: SQL
## Creamos un .env en la raiz del proyecto añadiendo lo siguiente

MYSQL_ROOT_PASSWORD=root
MYSQL_DATABASE=RPR_BD
MYSQL_USER=alumnoDAW
MYSQL_PASSWORD=passRPR

PMA_HOST=database
PMA_USER=${MYSQL_USER}
PMA_PASSWORD= ${MYSQL_PASSWORD}

## Y lo sustituimos en docker-compose
env_file:
      - .env

## Raul Povedano Ruiz