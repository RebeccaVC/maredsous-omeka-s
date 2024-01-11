@ECHO OFF
docker build . -t omeka_s_maredsous
docker tag omeka_s_maredsous registry.docker.libis.be/omeka_s_maredsous
docker push registry.docker.libis.be/omeka_s_maredsous
ECHO Image built, tagged and pushed succesfully
PAUSE
