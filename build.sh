PROJ_ROOT=/

docker build -t duhovka-app-image -f "Dockerfile" "$PROJ_ROOT"
docker build -t duhovka-db-image -f "Dockerfile-DB" "$PROJ_ROOT"