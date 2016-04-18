#!/bin/bash

DESTINO_WOWZA="./wowza"

#Recibe como parametro el nombre del fichero
FICHERO=$1
FILENAME=${FICHERO%.*}
echo "Procesando fichero $FICHERO"

#Conversion a formato mas reproducible
EXT_VIDEO="mp4"
echo "  Codificando video ..."
`ffmpeg -v error -i $FICHERO -c:v libx264 -c:a libmp3lame $FILENAME.$EXT_VIDEO`

#Obtencion de thumbnail
INSTANTE="00:00:05.000"
EXT_POSTER="png"
echo "  Generando poster ..."
`ffmpeg -v error -i $FICHERO -ss $INSTANTE -frames 1 $FILENAME.$EXT_POSTER`

#Entrega en directorio WOWZA
echo "  Moviendo a directorio de WOWZA ..."
`mv $FILENAME.$EXT_VIDEO $DESTINO_WOWZA`
`mv $FILENAME.$EXT_POSTER $DESTINO_WOWZA`

