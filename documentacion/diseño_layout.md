# Layout
* Creamos el layout siguiendo las especificiaciones
* Para ello añadimos las clases en [tailwind.config.js](../tailwind.config.js)
```json
height: {
"10v": "10vh",
"15v": "15vh",
"65v": "65vh"
},
colors: {
"header": "#E6621F",
"nav": "#EDEDEE",
"main": "#FFFFFF",
"footer": "#898989"
},
```
# Probarlo
1. Creo una nueva ruta que retorne una página que extienda de latyou
   1. Creamos la ruta
   ```php
        Route::view('main',"empresa.main");
    ```
   2. Creo la página [main.blade.php](../resources/views/empresa/main.blade.php)
2. Lo probamos http://localhost:8000/main
