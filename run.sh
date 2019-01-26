PROJ_ROOT=/

docker run -d -e MYSQL_ROOT_PASSWORD=root --name duhovka duhovka

# Теперь контейнер с приложением, связав его с БД-контейнером
docker run -d \
    -p 80:80 \
    -v "$PROJ_ROOT":/var/www/html \
    --name duhovka \
    --link duhovka \
   duhovka
