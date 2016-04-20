#!/bin/bash

DESTINO_WOWZA="./web"

#Recibe como parametro el nombre del fichero
FICHERO=$1
echo "Procesando fichero $FICHERO"

FILENAME=${FICHERO%.*}
FICHERO_TMP=$FILENAME$".tmp"
mv $FICHERO $FICHERO_TMP

#Conversion a formato mas reproducible
EXT_VIDEO="mp4"
VIDEO=$FILENAME.$EXT_VIDEO
echo "  Codificando video ..."
ffmpeg -v error -i $FICHERO_TMP -c:v libx264 -c:a libmp3lame $VIDEO

#Obtencion de thumbnail
INSTANTE="00:00:05.000"
EXT_POSTER="png"
POSTER=$FILENAME.$EXT_POSTER
echo "  Generando poster ..."
ffmpeg -v error -i $VIDEO -ss $INSTANTE -frames 1 $POSTER

#Entrega en directorio WOWZA
echo "  Moviendo a directorio de WOWZA ..."
mv $VIDEO $DESTINO_WOWZA
mv $POSTER $DESTINO_WOWZA
rm $FICHERO_TMP

