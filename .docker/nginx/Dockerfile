FROM nginx:latest
# Eliminando el archivo de configuración predeterminada
# incluida en la imagen descargada de NGiNX
RUN rm /etc/nginx/conf.d/default.conf
# Copiando el archivo de configuración personalizado
# -> aparentemente, se referencia el archivo de origen partiendo de la ubicación
#    en la que se encuentra el docker-compose.yml o,
#    más bien, desde dónde se establece el CONTEXT del servicio en cuestión
#    Por ello, si se mueve uno u otro archivo,
#    podría ser que necesario cambiar esta ruta de acceso al archivo a copiar
# COPY ./nginx/conf.d/default.conf /etc/nginx/conf.d/default.conf
COPY ./conf.d/default.conf /etc/nginx/conf.d/default.conf