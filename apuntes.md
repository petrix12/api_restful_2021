# API RESTful con Laravel: Guía Definitiva
+ [URL del curso en Udemy](https://www.udemy.com/course/api-restful-con-laravel-php-homestead-passport/)
+ [URL del repositorio en GitHub]()
+ [URL del repositorio GitHub del autor]()

## Antes de iniciar:
1. Crear proyecto en la página de [GitHub](https://github.com) con el nombre: **api_restful_2021**.
    + **Description**: Proyecto para seguir el curso de "API RESTful con Laravel: Guía Definitiva", creado por Juan David Meza González para Udemy.
    + **Public**.
2. En la ubicación raíz del proyecto en la terminal de la máquina local:
    + $ git init
    + $ git add .
    + $ git commit -m "Commit 000: Antes de iniciar"
    + $ git branch -M main
    + $ git remote add origin https://github.com/petrix12/api_restful_2021.git
    + $ git push -u origin main






## Contenido del curso

### Video 01. Vista Previa
+ **Contenido**: Presentación de la aplicación a desarrollar.
1. Commit Video 01:
    + $ git add .
    + $ git commit -m "Commit 01: Vista Previa"
    + $ git push -u origin main

### Nota 02. Proyecto en github
1. **Nota del autor**:
    + Proyecto en github: Hola queridos alumnos.
        + El código completo está en mi cuenta de github.
            + https://github.com/jhonatanfdez/crudlstva
2. Commit Nota 02:
    + $ git add .
    + $ git commit -m "Commit 02: Proyecto en github"
    + $ git push -u origin main

### Video 03. Instalar laravel y el sistema de autenticación
1. Programas requeridos:
    + [Git](https://git-scm.com/downloads)
    + [XAMPP](https://www.apachefriends.org/es/download.html)
    + [Composer](https://getcomposer.org)
    + [Visual Studio Code](https://code.visualstudio.com/download)
    + [Node Js](https://nodejs.org)
2. Otra opción podría ser Laragon ya que instala todos los programas mencionados anteriormente:
    + [Laragon](https://laragon.org/download/index.html)
3. Instalar el instalador de Laravel:
    + $ composer global require laravel/installer
4. Crear proyecto para la **laravel-vue-2021**:
    + $ composer create-project laravel/laravel laravel-vue-2021 "7.*"
5. Crear base de datos **laravel_vue-2021**.
6. Configurar el archivo de variables **.env** de entorno con nuestro proyecto:
    ```env
    APP_NAME=Laravel-Vue
    ≡
    APP_URL=http://laravel-vue-2021.test
    ≡
    DB_DATABASE=laravel_vue-2021
    ≡
    ```
7. Instalar y habilitar el sistema de autenticación con Vue.js:
    + $ composer require laravel/ui:^2.4
    + $ php artisan ui vue --auth
8. Instalar las dependencias de Node Package Manager:
    + $ npm install
    + $ npm run dev
9. Ejecutar las migraciones:
    + $ php artisan migrate
10. Commit Video 03:
    + $ git add .
    + $ git commit -m "Commit 03: Instalar laravel y el sistema de autenticación"
    + $ git push -u origin main

### Video 04. Instalar Toastr y aprender a usarlo
+ https://codeseven.github.io/toastr
1. Descargar Toastr en formato zip en https://codeseven.github.io/toastr.
2. Descomprimir la descarga en **public\libreria\toastr**.
3. Modificar la plantilla **resources\views\layouts\app.blade.php** para referenciar los estilos y script de Toastr:
    ```php
    ≡
    <head>
        ≡
        <!-- jQuery Core 3.4.1 -->
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
        </script>

        <!-- Toastr -->
        <link href="{{ asset('libreria/toastr/toastr.scss') }}" rel="stylesheet"/>
        <script src="{{ asset('libreria/toastr/toastr.js') }}"></script>
    </head>
    ≡
    ```
    + Para obtener el script de **jQuery Core 3.4.1** ir a: https://releases.jquery.com/jquery/
4. Para proba Toastr introduzca el siguiente comando en la consola del navegador en donde se esta ejecutando la aplicación:
    + > toastr.error('Necesita digitar un valor', 'Error')
    + **Nota 1**: al ejecutar esta instrucción se deberá mostrar un mensaje en la aplicación.
    + **Nota 2**: para ver ejemplos del uso de Toastr ir a: https://codeseven.github.io/toastr/demo.html
5. Commit Video 04:
    + $ git add .
    + $ git commit -m "Commit 04: Instalar Toastr y aprender a usarlo"
    + $ git push -u origin main

### Video 05. Instalar sweetalert2 y aprender a usarlo
+ https://sweetalert2.github.io
1. Modificar la plantilla **resources\views\layouts\app.blade.php** para referenciar los script de sweetalert2:
    ```php
    ≡
    <head>
        ≡
        <!-- sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    </head>
    ≡
    ```
2. Commit Video 05:
    + $ git add .
    + $ git commit -m "Commit 05: Instalar sweetalert2 y aprender a usarlo"
    + $ git push -u origin main

### Video 06. Crear Modelo, migración, controlador y rutas API
1. Crear modelo **DatosP** con su migración:
    + $ php artisan make:model DatosP -m
2. Crear controlador tipo recurso **ApiDatosPController**:
    + $ php artisan make:controller ApiDatosPController --resource
3. Agregar rutas **datosp** en **routes\api.php**:
    ```php
    Route::resource('datosp', 'ApiDatosPController')->names('api.datosp');
    ```
4. Establecer los campos de la tabla **datos_p_s** en el método **up** de la migración **database\migrations\2021_10_27_004650_create_datos_p_s_table.php**:
    ```php
    public function up()
    {
        Schema::create('datos_p_s', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('posicion');
            $table->decimal('salario', 10, 2);
            $table->timestamps();
        });
    }
    ```
5. Ejecutar las migraciones:
    + $ php artisan migrate
6. Ejecutar una Tinker:
    + $ php artisan tinker
    + Introducir en la terminal de tinker el siguiente código:
        ```php
        $datos = new App\DatosP;
        $datos->nombre = 'Pedro Bazó';
        $datos->posicion = 'Desarrollador Web';
        $datos->salario = 1800;
        $datos->save();

        $datos = new App\DatosP;
        $datos->nombre = 'Leticia Rodríguez';
        $datos->posicion = 'Analista de Genealogía';
        $datos->salario = 500;
        $datos->save();
        ```
7. Programar el método **index** del controlador **app\Http\Controllers\ApiDatosPController.php**:
    ```php
    public function index()
    {
        return DatosP::orderBy('id', 'desc')->get();
    }
    ```
    + Importar la definición del modelo **DatosP**:
    ```php
    use App\DatosP;
    ```
8. Commit Video 06:
    + $ git add .
    + $ git commit -m "Commit 06: Crear Modelo, migración, controlador y rutas API"
    + $ git push -u origin main

### Video 07. Instalar vue y axios
+ https://vuejs.org/v2/guide
+ https://github.com/axios/axios
1. Modificar la plantilla **resources\views\layouts\app.blade.php** para referenciar los estilos y secipt de Bootstrap 4.6, Vue2 y Axios:
    ```php
    ≡
    <head>
        ≡
        <!-- Fonts -->
        ≡

        <!-- CSS Bootstrap 4.6 -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

        <!-- jQuery Core 3.4.1 -->
        <script
            src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous">
        </script>

        <!-- JS Bootstrap 4.6 -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

        <!-- Toastr -->
        <link href="{{ asset('libreria/toastr/toastr.scss') }}" rel="stylesheet"/>
        <script src="{{ asset('libreria/toastr/toastr.js') }}"></script>

        <!-- sweetalert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

        <!-- Vue2 -->
        <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>

        <!-- Axios -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    </head>
    <body>
        ≡
        <!-- Scripts -->
        <script src="{{ asset('js/vue.js') }}"></script>
    </body>
    </html>
    ```
2. Crear script para Vue **public\js\vue.js**:
    ```php
    var app = new Vue({
        el: '#app',
        data: {
            datos: [],
            mensaje: ''
        },
        methods:{
            getDatos(){
                const url = '/api/datosp'
                axios.get(url).then(response => {
                    console.log(response.data)
                    this.datos = response.data
                })
            }
        },
        mounted() {
            this.getDatos()
        },
    })
    ```
3. Rediseñar la vista **resources\views\home.blade.php**:
    ```php
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Posicion</th>
                                    <th scope="col">Salario</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="dato in datos">
                                    <th scope="row">@{{ dato.id }}</th>
                                    <td>@{{ dato.nombre }}</td>
                                    <td>@{{ dato.posicion }}</td>
                                    <td>@{{ dato.salario }}</td>
                                    <td>@mdo</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection   
    ```
4. Commit Video 07:
    + $ git add .
    + $ git commit -m "Commit 07: Instalar vue y axios"
    + $ git push -u origin main

### Video 08. Nuevo registro
+ https://getbootstrap.com/docs/4.6/components/buttons/#button-tags
+ https://sweetalert2.github.io
1. Modificar la vista **resources\views\home.blade.php** para agregar los botones para el CRUD y un evento clic al botón **Nuevo**:
    ```php
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        ≡
                        <button type="button" class="btn btn-outline-primary float-right mb-3" @click="NuevoDato()">Nuevo</button>

                        <table class="table">
                            <thead>
                                <tr>
                                    ≡
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="dato in datos">
                                    ≡
                                    <td>
                                        <button type="button" class="btn btn-outline-info">Editar</button>
                                        <button type="button" class="btn btn-outline-danger">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    ```
2. Modificar el componente **public\js\vue.js** para agreagar el método **NuevoDato**:
    ```js
    var app = new Vue({
        el: '#app',
        data: {
            ≡
        },
        methods:{
            getDatos(){
                ≡
            },
            NuevoDato(){
                console.log('Nuevo dato')

                Swal.mixin({
                    confirmButtonText: 'Next &rarr;',
                    showCancelButton: true,
                    progressSteps: ['1', '2', '3']
                }).queue([
                    {
                        title: 'Digita tu nombre completo',
                        text:  'Nombre y apellido',
                        input: 'text',
                        inputValidator: (value) => {
                            if (!value) {
                                toastr.error('Debes digitar un nombre','Error')
                                return ' '
                            }
                        }
                    },
                    {
                        title: 'Selecciona la posición',
                        text:  'Posición de este empleado',
                        input: 'select',
                        inputOptions: {
                            Auditor: 'Auditor',
                            Soporte: 'Soporte',
                            Seguridad: 'Seguridad'                      
                        },
                        inputPlaceholder: 'Selecciona una posición',
                        inputValidator: (value) => {
                            if (!value) {
                            toastr.error('Necesitas seleccionar una opción','Error')
                            return ' '
                            }
                        }
                    },
                    {
                        title: 'Escribe el salario de este empleado',
                        text:  'Este campo acepta decimales',
                        input: 'number',
                        inputAttributes: {
                            min: 4,                        
                            step: 0.01
                        },
                        inputValidator: (value) => {
                            if (!value) {
                            toastr.error('Debes escribir un salario','Error')  
                            return ' '
                            }
                        }
                    }  
                ]).then( async  (result) => {
                    if (result.value) {

                    datos= {
                        nombre   : result.value[0],
                        posicion : result.value[1],
                        salario  : result.value[2],
                    
                    }   
                    // console.log(datos);

                    let url = '/api/datosp';
                    await axios.post(url, datos).then(response=>{
                        console.log(response.data);
                        this.mensaje=response.data;
                    });

                    this.getDatos();                  
                    toastr.success(this.mensaje);
                    }
                })
            }
        },
        mounted() {
            ≡
        },
    })
    ```
3. Programar el método **store** del controlador **app\Http\Controllers\ApiDatosPController.php**:
    ```php
    public function store(Request $request)
    {
        // Pruebas:
        /* return 'datos recibidos'; */
        /* return $request->all(); */
        
        $datos = new DatosP;
        $datos->nombre = $request->nombre;
        $datos->posicion = $request->posicion;
        $datos->salario = $request->salario;
        $datos->save();
        return 'Datos guardados correctamente';
    }
    ```
4. Commit Video 08:
    + $ git add .
    + $ git commit -m "Commit 08: Nuevo registro"
    + $ git push -u origin main

### Video 09. Eliminar registro
1. Modificar la vista **resources\views\home.blade.php** para agregar un evento clic al botón **Elimar**:
    ```php
    ≡
    <td>
        <button type="button" class="btn btn-outline-info">Editar</button>
        <button type="button" class="btn btn-outline-danger" @click="EliminarDato(dato)">Eliminar</button>
    </td>
    ≡
    ```
2. Crear método **EliminarDato** en el componente **public\js\vue.js**:
    ```js
    var app = new Vue({
        el: '#app',
        data: {
            ≡''
        },
        methods:{
            getDatos(){
                ≡
            },
            NuevoDato(){
                ≡
            },
            EliminarDato(dato){
                console.log(dato)

                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: true
                })
                
                swalWithBootstrapButtons.fire({
                    title: '¿Estas Seguro?',
                    html: "Si eliminas el registro de <strong>"+ dato.nombre +"</strong>, <br>¡No podrás revertir esto!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Eliminar!',
                    cancelButtonText: 'Cancelar!',
                    confirmButtonColor: '#28a745',
                    cancelButtonColor: '#d33',
                    reverseButtons: true
                }).then( async (result) => {
                    if (result.value) {
                        const url = '/api/datosp/'+dato.id;
                        await axios.delete(url).then(response=>{
                            console.log(response.data)
                            this.mensaje=response.data
                        });

                        this.getDatos();                  
                        toastr.warning(this.mensaje);
                    } else if (
                        /* Read more about handling dismissals below */
                        result.dismiss === Swal.DismissReason.cancel
                    ) {
                        toastr.error('Acción Cancelada!')
                    }
                })
            }
        },
        mounted() {
            this.getDatos()
        },
    })
    ```
3. Programar el método **destroy** del controlador **app\Http\Controllers\ApiDatosPController.php**:
    ```php
    public function destroy(DatosP $datosp)
    {
        $datosp->delete();
        return 'Registro eliminado correctamente!';
    }
    ```
4. Commit Video 09:
    + $ git add .
    + $ git commit -m "Commit 09: Eliminar registro"
    + $ git push -u origin main

### Video 10. Editar registro
1. Modificar la vista **resources\views\home.blade.php** para agregar un evento clic al botón **Editar**:
    ```php
    ≡
    <td>
        <button type="button" class="btn btn-outline-info" @click="EditarDato(dato)">Editar</button>
        <button type="button" class="btn btn-outline-danger" @click="EliminarDato(dato)">Eliminar</button>
    </td>
    ≡
    ```
2. Crear método **EditarDato** en el componente **public\js\vue.js**:
    ```js
    var app = new Vue({
        el: '#app',
        data: {
            ≡
        },
        methods:{
            getDatos(){
                ≡
            },
            NuevoDato(){
                ≡
            },
            EliminarDato(dato){
                ≡
            },
            EditarDato(dato){
                console.log(dato)

                formulario = 
                    '<div id="swal2-content" class="swal2-html-container" style="display: block;">Nombre y apellido</div>'+
                    '<input id="nombre" name="nombre" class="swal2-input" placeholder="" type="text" style="display: flex;">'+

                    '<div id="swal2-content" class="swal2-html-container" style="display: block;">Posicion de este empleado</div>'+
                    '<select id="posicion" name="posicion" class="swal2-select" style="display: flex;"><option value="" disabled="">Selecciona una posicion</option><option value="Auditor">Auditor</option><option value="Soporte">Soporte</option><option value="Seguridad">Seguridad</option></select>'+

                    '<div id="swal2-content" class="swal2-html-container" style="display: block;">Salario</div>'+
                    '<input id="salario" name="salario" min="4" step="0.01" class="swal2-input" placeholder="" type="number" style="display: flex;">'

                Swal.fire({
                    title: 'Editar Registro',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    cancelButtonText: 'Cancelar',
                    confirmButtonText: 'Guardar',
                    html: formulario,
                    focusConfirm: false,
                    preConfirm: async () => {
                        ultimosdatoseditados = {
                            nombre:    document.getElementById('nombre').value,
                            posicion:  document.getElementById('posicion').value, 
                            salario:   document.getElementById('salario').value,            
                        }

                        const url = '/api/datosp/'+dato.id;
                        await axios.put(url, ultimosdatoseditados).then(response=>{
                            console.log(response.data)
                            this.mensaje=response.data
                        })
                        this.getDatos();
                        return toastr.success(this.mensaje);
                    }
                })
                document.getElementById('nombre').value    = dato.nombre
                document.getElementById('posicion').value  = dato.posicion
                document.getElementById('salario').value   = dato.salario
            }
        },
        mounted() {
            ≡
        },
    })
    ```
3. Programar el método **update** del controlador **app\Http\Controllers\ApiDatosPController.php**:
    ```php
    public function update(Request $request, DatosP $datosp)
    {
        $datosp->nombre = $request->nombre;
        $datosp->posicion = $request->posicion;
        $datosp->salario = $request->salario;
        $datosp->save();
        return 'Datos actualizados correctamente';
    }
    ```
4. Commit Video 10:
    + $ git add .
    + $ git commit -m "Commit 10: Editar registro"
    + $ git push -u origin main

### Video 11. Fin del curso
+ **Contenido**: despedida del curso.
1. Commit Video 11:
    + $ git add .
    + $ git commit -m "Commit 11: Fin del curso"
    + $ git push -u origin main

## Ajustes finales:
1. Reemplazar el favicon de la aplicación por el de tu organización en **public\favicon.ico** y agregar el siguiente código dentro de la etiqueta heat de la plantilla resources\views\layouts\app.blade.php:
    ```php
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    ```
2. Modificar la vista **resources\views\welcome.blade.php**:
    ```php
    @extends('layouts.app')

    @section('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <img src="https://blogger.googleusercontent.com/img/a/AVvXsEi6G3DYPhX_zU3sA_hSYxJ4DN_FW9jZOtVTnMPyGx4Po-hzAu2CiyY-LWhMIgNwud0uVrwVn0tBcEZvHqTtIDeIQA9zkYQguDXgB48jhNcpzgh-WIo6ZW9UW_PYGCrn4R2XInHdF1YxSP2kk1ldHlCTr_fDhzXpLnwNbhYJ5JMCcFfUFvW7x_NKJBPY6g=s314" alt="Logo Soluciones++">
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><strong>CRUD con Laravel, Sweetalert2, Toastr, Vue.js y Axios</strong></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        
                        <h4>Para probar la aplicación</h4>
                        <p>Regístrese como usuario y comience a explorar la aplicación.</p>
                        <h4>Paso a paso para construir la aplicación</h4>
                        <iframe
                            title="Inline Frame Example"
                            width="100%"
                            height="800"
                            src="{{ asset('paso-paso.html') }}">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    ```
3. Ir a https://dillinger.io y convertir en HTML el archivo de instrucciones realizado en formato Markdown y ubicarlo en:
    + public\paso-paso.html
4. Commit Ajustes finales:
    + $ git add .
    + $ git commit -m "Commit 12: Ajustes finales"
    + $ git push -u origin main

## Deploy del proyecto en Heroku
1. Crear en la raíz del proyecto el archivo **Procfile** (sin extensión) para elegir un servidor apache en Heroku y también indicarle la ubicación del archivo incial index.php:
    ```
    web: vendor/bin/heroku-php-apache2 public/
    ```
2. Ingresar a [Heroku](https://dashboard.heroku.com/apps) e ir a **Dashboard**.
3. Crear un nuevo proyecto en **New > Create new app**
    + Nombre: **laravelvue-2021**
4. Ir a Deploy y dar clic en GitHub.
5. Clic en el botón Connect to GitHub e ingresar las credenciales.
6. Seleccionar el repositorio **laravel_vue_2021** y presionar el botón **Connect**.
7. Para tener siempre la ultima actualización de nuestro proyecto se recomienda presionar el botón **Enable Automatic Deploys**.
8. Presionar el botón Deploy Branch.
9. Descargar e instalar [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli).
10. En la terminal en la raíz del proyecto en local e iniciar sesión en Heroku:
    + $ heroku login
11. Víncular con la aplicación de Heroku **laravelvue-2021**:
    + $ git remote add heroku git.heroku.com/laravelvue-2021.git
        + (git remote set-url Origin git.heroku.com/laravelvue-2021.git)
    + $ heroku git:remote -a laravelvue-2021
12. Registrar variables de entorno de la aplicación desde la terminal:
    + $ heroku config:add APP_NAME=Laravel-Vue
    + $ heroku config:add APP_ENV=production
    + $ heroku config:add APP_KEY=base64:4vCNmy9+8/VoX1+btrJhzQmUoQH9rQRhhj3FJFKxvXs=
    + $ heroku config:add APP_DEBUG=false
    + $ heroku config:add APP_URL=https://laravelvue-2021.herokuapp.com
13. Crear base de datos Postgre SQL desde la terminal:
    + $ heroku addons:create heroku-postgresql:hobby-dev
    + $ heroku pg:credentials:url
    + **Nota**: la salida de la última línea de comando nos servirá para configurar las variables de entorno de la base de datos:
    ```
    Connection information for default credential.
    Connection info string:
    "dbname=*** host=*** port=*** user=*** password=*** sslmode=require"
    Connection URL:
    postgres://mmtmzssdyxkfyt:9336263e704b06d0a1ba7c979c426e7d8eb77f3958e4114cea9a21973ba08d84@ec2-35-168-145-180.compute-1.amazonaws.com:5432/dbhkpp3vfen6vd
    ```
14. Registrar variables de entorno de la base de datos desde la terminal:
    + $ heroku config:add DB_CONNECTION=pgsql
    + $ heroku config:add DB_HOST=ec2-18-235-4-83.compute-1.amazonaws.com
    + $ heroku config:add DB_PORT=5432
    + $ heroku config:add DB_DATABASE=db6unq9m90dvkv
    + $ heroku config:add DB_USERNAME=vcsyvufmsdpbhn
    + $ heroku config:add DB_PASSWORD=******
15. Ejecutar migraciones:
    + $ heroku run bash
    + ~ $ php artisan migrate --seed
        + Do you really wish to run this command? (yes/no) [no]: **yes**
    + ~ $ exit
16. Salir de Heroku:
    + $ heroku logout
17. Desconectar con repositorio Heroku:
    + $ git remote rm heroku

## Comandos Git:
+ Historial de commit:
    + git log --pretty=oneline
+ Borrar ultimo commit:
    + git reset HEAD^ --soft
+ Forzar push
    + git push origin -f