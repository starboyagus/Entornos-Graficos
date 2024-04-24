<h3> ¿Que es HTML, cuando fue creado, cuales fueron las distintas versiones y cual es la ultima?</h3>
<p> HTML (HyperText Markup Language) es un lenguaje de marcado para la elaboracion de paginas web. Define una estructura basica y un codigo (denominado codigo HTML) para la definicion del contenido que va a tener la pagina web

Este fue creado en los años 90

- HTML 2.0 
- HTML 3.2
- HTML 4.01: Esta fue la mas utilizada por un tiempo teniendo diferentes versiones
    - HTML 4.01 Strict
    - HTML 4.01 Transitional
    - HTML 4.01 Frameset
- HTML 5: Su version mas nueva
</p>

<h3> ¿Cuales son los principios basicos que el W3C recomienda seguir para la creacion de documentos con HTML? </h3>
<p> Las WCAG son pautas de accesibilidad para el contenido web establecidas e impulsadas por el W3C quienes definen un aplio rango de recomendaciones para la creacion de documentos con HTML

1. Perceptible: tanto los contenidos como la interfaz de un sitio web deben poder ser percibidos por todos los usuarios
2. Operable: Un sitio web debe tener muchas maneras, y todas muy claras y advertidas, para realizar una accion o buscar un contenido
3. Comprensible: Que todos los usuarios puedan entender los diferentes textos, imagenes en la pagina web
4. Robusta: Los sitios web o aplicaciones deben ser compatibles con todos los navegadores web y todos los sistemas operativos </p>

<h3> En las especificaciones HTML, ¿Cuando un elemento o atributo se considera desaprobado? ¿y obsoleto? </h3>
<p> Un elemento o atributo desaprobado es aquel que ha quedado anticuado por la presencia de estructuras nuevas. EJ: APPLET, FONT, MENU

Un elemento o atributo obsoleto es aquel para el cual no hay garantia de soporte por parte de un agente de usuario. EJ: LISTING, PLAINTEXT, XMP

<h3> Que es el DTD y cuales son los posibles DTDs contemplados en la especificacion de HTML 4.01 </h3>
<p> La DTD es la declaracion del tipo de documento, esta seccion se ubica en la primera linea del archivo HTML.

Segun el rigor del HTML 4.01 utilizado podemos declararla como:

    Declaracion Historica: <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

    Declaracion Estricta: <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN>

Ahora en HTML 5 se simplifica con la siguiente sintaxis:
    
    <!DOCTYPE HTML>
</p>

<h3> Que son los Metadatos y como se especifican en HTML </h3>

<p> Los metadatos son datos que describen datos y sirven para suministrar informacion sobre los datos producidos

En HTML se puede utilizar el elemento 'meta' para especificar el autor de un documento: 
    
    <META name="Author" content=Agustin Gil>

O tambien desde fuera del documento vinculando los metadatos por medio del elemento 'link'
