# API RESTful con Laravel: Guía Definitiva
+ **URL**: https://www.udemy.com/course/api-restful-con-laravel-php-homestead-passport

## Sección 01: Introducción

### Video 001. Acerca del Instructor y el Curso
+ **Contenido**: Presentación del curso.

### Video 002. Sacando Provecho del Curso y sus Contenidos
+ **Contenido**: Explicación de la dinámica del curso.

## Sección 02: Descarga e Instala las Herramientas para Desarrollar la API RESTful con Laravel

### Video 003. Descargando e Instalando PHP con XAMPP
+ **Contenido**: Instalación de XAMPP.
+ **URL**: https://www.apachefriends.org

### Video 004. Descargando e Instalando Composer
+ **Contenido**: Instalación de Composer.
+ **URL**: https://getcomposer.org

### Video 005. Descargando e Instalando Virtual Box
+ **Contenido**: Instalación de Virtual Box.
+ **URL**: https://www.virtualbox.org/wiki/Downloads

### Video 006. Descargando e Instalando Vagrant
+ **Contenido**: Instalación de Vagrant.
+ **URL**: https://www.vagrantup.com/downloads

### Video 007. Descargando e Instalando Sublime Text 3
+ **Contenido**: Instalación de Sublime Text 3.
+ **URL**: https://www.sublimetext.com/3

### Video 008. Descargando e Instalando Github Shell
+ **Contenido**: Instalación de GitHub para escritorio.
+ **URL**: https://desktop.github.com
+ **Nota**: La instalación de esta aplicación es importante para poder ejecutar la terminal de **Git Shell**.

### Video 009. Descargando e Instalando Node y NPM
+ **Contenido**: Instalación de Node y NPM.
+ **URL**: https://nodejs.org/es/download

### Video 010. Descargando e Instalando Postman para Probar la API RESTful
+ **Contenido**: Instalación de Postman.
+ **URL**: https://www.postman.com

## Sección 03: Creando y Estableciendo la Estructura Inicial de Laravel para la API RESTful

### Video 011. Obteniendo Laravel Usando Composer
1. Crear proyecto Laravel:
    + $ laravel new APIRestful

### Video 012. Agregando Homestead de Laravel Como una Dependencia del Proyecto
1. Agregar **Nomestead** al proyecto **APIRestful**:
    + $ composer require laravel/homestead

### Nota 013. Laravel 6 (o superior): Un paso adicional
>
    Laravel 6 (o superior): Un paso adicional
    Después de Laravel 6.0, algunos componentes visuales y relacionados con la autenticación (a partir de Laravel 7.0 con exactitud) se eliminaron de la estructura predeterminada de Laravel y se trasladaron a un paquete independiente.

    Durante el curso, para mayor facilidad, utilizaremos algunos componentes para la interfaz de usuario, y para eso necesitaremos instalar un paquete llamado laravel/ui.

    Para esto, solo necesita usar Composer (como en la clase anterior), pero requiriendo este paquete. Así que ejecuta esto en la consola de tu proyecto:

    composer require laravel/ui

    Eso es todo, esto será especialmente útil cuando generemos algunos componente de autenticación (más adelante)

### Video 014. Estableciendo la Configuración para Homestead de Laravel
1. Para instalar **Homestead** ejecutar en terminal:
    Para Linux o Mac:
       + $ php vendor/bin/homestead make
    Para Windows:
       + $ vendor\\bin\\homestead make
    **Nota**: entre otras cosas se generan dos archivos:
       + Homestead.yaml
       + Vagrantfile
2. Configurar el archivo **Homestead.yaml**:
    ```yaml
    ip: 192.168.10.10
    memory: 512
    cpus: 2
    provider: virtualbox
    authorize: ~/.ssh/id_rsa.pub
    keys:
        - ~/.ssh/id_rsa
    folders:
        -
            map: 'C:\xampp\htdocs\cursos\25apirestful\APIRestful'
            to: /home/vagrant/apirestful
    sites:
        -
            map: apirestful.dev
            to: /home/vagrant/apirestful/public
    databases:
        - apirestful
    features:
        -
            mysql: true
        -
            mariadb: false
        -
            postgresql: false
        -
            ohmyzsh: false
        -
            webdriver: false
    name: apirestful
    hostname: apirestful
    ```
    **Nota**: en caso de tener varias máquinas virtuales, asegurarse de que la dirección IP no se repita.
3. Crear llaves SSH:
    + $ ssh-keygen -t rsa -b 4096
        + Enter file in which to save the key (C:\Users\bazop/.ssh/id_rsa): **[ENTER: para mantener el nombre de la llave en id_rsa]**
        + Enter passphrase (empty for no passphrase): **[ENTER]**
        + Enter same passphrase again: **[ENTER]**

### Video 015. Agregando el Dominio de Desarrollo al Sistema
**URL**: https://es.wikipedia.org/wiki/Archivo_hosts
1. Crear un virtual host para el nuevo proyecto **APIRestful**:
    1. Ejecutar el bloc de notas como administrador.
    2. Abrir el archivo: **C:\Windows\System32\drivers\etc\hosts**.
    3. En la parte final del archivo escribir:
		```
		192.168.10.10     apirestful.dev
		```
    4. Guardar y cerrar.

### Video 016. Usando Vagrant para Controlar la Máquina Virtual Homestead de Laravel
1. Crear máquina virtual:
    + $ vagrant up

    **Notas**:
    + Para ver los comandos de vagrant:
        + $ vagrant
    + Para crear/encender la máquina virtual
        + $ vagrant up
    + Para apagar la máquina virtual
        + $ vagrant halt
    + Para destruir la máquina virtual
        + $ vagrant destroy
    + Para ver el estatus de la máquina virtual
        + $ vagrant status
    + Para establecer conexión con la máquina virtual:
        + $ vagrant ssh
2. Verificar que se esta ejecutando la máquina virtual:
    + $ vagrant status
    
    **Nota**: Respuesta esperada:
    ```
    Current machine states:

    apirestful                running (virtualbox)

    The VM is running. To stop this VM, you can run `vagrant halt` to
    shut it down forcefully, or you can run `vagrant suspend` to simply
    suspend the virtual machine. In either case, to restart it again,
    simply run `vagrant up`.
    ```
3. Establecer conexión con la máquina virtual:
    + $ vagrant ssh
        + Para salir del terminal de la máquina virtual:
            + $ exit

### Cuestionario 1: Averigua cómo salir de la máquina virtual
**Contenido**: Pregunta relacionadas con el asunto.

### Video 017. Mantén el Proyecto de Laravel Actualizado
**URL**: https://styde.net/diferencias-entre-composer-install-y-composer-update
**Notas**: Para actualizar nuestro proyecto de Laravel:
   + $ composer update

## Sección 04: Configurando y Usando Sublime Text 3 para Desarrollar la API RESTful con Laravel

### Video 018. Instalando el Package Control
**URL**: https://packagecontrol.io/installation
**Contenido**: Crear una instalador en Sublime Text.

### Video 019. Creando y Usando Proyectos
**Contenido**: Manipular proyectos con Sublime Text.

### Video 020. Instalando y Usando SublimeCodeIntel para Acceder las Clases de Laravel y la API
**Contenido**: Instalación de SublimeCodeIntel.

### Video 021. Instalando y Usando SideBarEnhancement
**Contenido**: Instalación de SideBarEnhancement.

### Video 022. Instalando y Usando SublimeLinter para PHP
**Contenido**: Instalación de SublimeLinter.

### Video 023. Instalando y Usando PHPCompanion para Importar Definiciones de Laravel
**URL**: https://github.com/erichard/SublimePHPCompanion/blob/master/Default.sublime-keymap-sample
**Contenido**: Instalación de PHPCompanion.

## Sección 05: Comprendiendo el Caso de Estudio para la API RESTful

### Video 024. Comprendiendo los Recursos (Modelos) y Relaciones de la API RESTful
![Relaciones]([12-01-2017]Purchase_Sale_System.png)
**Contenido**: Relaciones entre entidades, tipos de relaciones y restricciones.

### Video 025. Comprendiendo los “End-Points” Principales para la API RESTful
**Lista de End-Point**:
```
+---------+-----------------------------------------------+----------------------------------------+
| Método  | URI                                           | Acción                                 |
+---------+-----------------------------------------------+----------------------------------------+
|GET      | buyers                                        | BuyerController@index                  |
|GET      | buyers/{buyer}                                | BuyerController@show                   |
|GET      | buyers/{buyer}/categories                     | BuyerCategoryController@index          |
|GET      | buyers/{buyer}/products                       | BuyerProductController@index           |
|GET      | buyers/{buyer}/sellers                        | BuyerSellerController@index            |
|GET      | buyers/{buyer}/transactions                   | BuyerTransactionController@index       |
|POST     | categories                                    | CategoryController@store               |
|GET      | categories                                    | CategoryController@index               |
|PUT|PATCH| categories/{category}                         | CategoryController@update              |
|DELETE   | categories/{category}                         | CategoryController@destroy             |
|GET      | categories/{category}                         | CategoryController@show                |
|GET      | categories/{category}/buyers                  | CategoryBuyerController@index          |
|GET      | categories/{category}/products                | CategoryProductController@index        |
|GET      | categories/{category}/sellers                 | CategorySellerController@index         |
|GET      | categories/{category}/transactions            | CategoryTransactionController@index    |
|GET      | products                                      | ProductController@index                |
|GET      | products/{product}                            | ProductController@show                 |
|GET      | products/{product}/buyers                     | ProductBuyerController@index           |
|POST     | products/{product}/buyers/{buyer}/transactions| ProductBuyerTransactionController@store|
|GET      | products/{product}/categories                 | ProductCategoryController@index        |
|DELETE   | products/{product}/categories/{category}      | ProductCategoryController@destroy      |
|PUT|PATCH| products/{product}/categories/{category}      | ProductCategoryController@update       |
|GET      | products/{product}/transactions               | ProductTransactionController@index     |
|GET      | sellers                                       | SellerController@index                 |
|GET      | sellers/{seller}                              | SellerController@show                  |
|GET      | sellers/{seller}/buyers                       | SellerBuyerController@index            |
|GET      | sellers/{seller}/categories                   | SellerCategoryController@index         |
|GET      | sellers/{seller}/products                     | SellerProductController@index          |
|POST     | sellers/{seller}/products                     | SellerProductController@store          |
|DELETE   | sellers/{seller}/products/{product}           | SellerProductController@destroy        |
|PUT|PATCH| sellers/{seller}/products/{product}           | SellerProductController@update         |
|GET      | sellers/{seller}/transactions                 | SellerTransactionController@index      |
|GET      | transactions                                  | TransactionController@index            |
|GET      | transactions/{transaction}                    | TransactionController@show             |
|GET      | transactions/{transaction}/categories         | TransactionCategoryController@index    |
|GET      | transactions/{transaction}/sellers            | TransactionSellerController@index      |
|POST     | users                                         | UserController@store                   |
|GET      | users                                         | UserController@index                   |
|GET      | users/verify/{token}                          | UserController@verify                  |
|DELETE   | users/{user}                                  | UserController@destroy                 |
|PUT|PATCH| users/{user}                                  | UserController@update                  |
|GET      | users/{user}                                  | UserController@show                    |
|GET      | users/{user}/resend                           | UserController@resend                  |
+---------+-----------------------------------------------+----------------------------------------+	
```

## Sección 06: Descubriendo y Configurando la Estructura de Laravel para la API RESTful

### Video 026. Descubriendo la Estructura de Laravel
**Contenido**: Explicación de la estructura de un proyecto Laravel.

### Video 027. Descubriendo PHP Artisan
1. Encender máquina virtual:
    + $ vagrant up
2. Conectarse al terminal de la máquina virtual:
    + $ vagrant ssh
3. Dentro de la terminal de la máquina virtual:
    + Ir a la carpeta del proyecto:
      + $ cd apirestful
    + Ver las funcionalidades que proporciona migrate:
      + $ php artisan migrate --help

### Video 028. Configurando las variables de entorno de Laravel
1. Modificar el archivo de variables de entorno **.env**:
    ```
    APP_NAME=APIRestful
    APP_ENV=local
    APP_KEY=base64:DiC18bCQPQmtkf5CoT8eb0Fhmzgw4/yBzadeqG4yQ0g=
    APP_DEBUG=true
    APP_URL=http://apirestful.dev

    LOG_CHANNEL=stack
    LOG_LEVEL=debug

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=apirestful
    DB_USERNAME=homestead
    DB_PASSWORD=secret
    ≡
    ```

### Video 029. Comprendiendo y Configurando el Sistema de Rutas de Laravel para APIs RESTful
1. Modificar el archivo de rutas **routes\web.php**:
    ```php
    <?php

    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | Web Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register web routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | contains the "web" middleware group. Now create something great!
    |
    */

    /* Route::get('/', function () {
        return view('welcome');
    }); */
    ```
2. Modificar el archivo de rutas **routes\api.php**:
    ```php
    <?php

    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */
    ```
3. Modificar el método **boot** del provider app\Providers\RouteServiceProvider.php:
    ```php
    public function boot()
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
        });
    }
    ```
    **Nota**: esta modificación no será problema siempre no tengamos dos rutas iguales en los archivos de rutas **routes\api.php** y **routes\web.php**.

## Sección 07: Creando los Componentes Iniciales de Laravel para la API RESTful

### Nota 030. Cómo Resolver Errores Comunes Durante el Desarrollo de la API RESTful
**Reposotorio del proyecto**: https://github.com/JuanDMeGon/API-RESTful-con-Laravel-Guia-Definitiva
**Cómo Resolver Errores Comunes Durante el Desarrollo de la API RESTful**:
>
    Es natural que durante el curso enfrentes problemas con el funcionamiento de tu proyecto, quizá obtienes un error, mientras que durante la clase todo salió bien. Para este tipo de situaciones, te invito a que verifiques el código original del curso en el repositorio público del curso, acá.

    Allí, podrás mirar clase por clase, el código que se va realizando en cada una. El titulo de cada commit enviado al repositorio, coincide con el título de las clases.

    Si ingresas a la lista de commits, podrás encontrar del más reciente al más antiguo cada uno de lso commit del curso, cada commit coincide con una clase. Por supuesto son muchísimos commits, así que puedes hacer una búsqueda para llegar al estado del proyecto en una clase expecífica.

    Es importante que verifiques el estado del código en el momentro exacto de esa clase, pued a lo largo del curso un mismo archivo puede sufrir muchos cambios diferentes que no tienen nada que ver con la clase en la que te encuentras. Veamos cómo obtener el estado del código en un momento dado.

    Supongamos que tienes problemas en la clase titulada "Creando la Estructura Inicial de Controladores".

    Una vez se haga la búsqueda, se obtienen los resulatdos asegúrate de ir a la pestaña de commits para ver los resultados correspondientes.

    Ingresas al resultado correspondiente (en caso de haber más de uno) y allí obtendrás los detalles de lo que se hizo en esa clase en específico.

    En este caso, se cambiaron/crearon 6 archivos, si verificas más abajo aparecen los detalles de cada uno de los archivos cambiados. Las partes en verde significan partes nuevas y las partes en rojo son partes que se eliminaron. Si se han creado archivos nuevos, todo aparerecía en verde (como es en este caso.).

    En este punto tienes dos opciones.

    Si deseas ver el estado del proyecto completo, y no sólo de los archivos modificados durante esa clase, entonces puedes hacer clic en el botón de "Browse Files" a la derecha.

    Por otro lado, si deseas es obtener el estado exacto de uno de los archivos modificados entonce usas el botón view que aperece en ese archivo específico. Por ejemplo, en este caso imaginemos quieres ver el estado exacto del archivo CategoryController, el cual se creó durante esa clase, para ello vas hasta donde está el detalle de este archivo y presionas "View".

    Una vez ingresas allí podrás ver el código exacto de ese archivo al momento en el que esa clase finalizó.

    Una vez que conoces esto podrás seguirle la pista a cada línea de código en cada clase del curso y nunca tendrá por qué fallar.

    Asegúrate de seguir la clase paso a paso y que el código coincida. Normalmente si algo no funciona es porque no quedó como se hizo en la clase y es allí donde usar Github del modo adecuado te puede salvar horas de tu tiempo.

    Por supuesto, si después de verificar el código línea por línea e incluso copiar y pegar el código tal cual está, algo sigue fallando o te genera dudas, puedes dejar en cualquier momento una pregunta con el detalle del problema.

    Estoy seguro que esto será de enorme ayuda para que todo vaya de maravilla en el curso.

    ¡Mucha suerte!

    Recursos de esta clase
    Repositorio oficial del curso

### Video 031. Creando la Estructura Inicial de Laravel para los Modelos y sus Migraciones
1. Iniciar máquina virtual:
    + $ vagrant up
2. Conectar al terminal:
    + $ vagrant ssh
3. Ir a la carpeta del proyecto:
    + $ cd apirestful
4. Crear el modelo **Buyer**:
    + $ php artisan make:model Buyer
5. Crear el modelo **Seller**:
    + $ php artisan make:model Seller
5. Modificar el modelo **app\Models\Buyer.php**:
    ```php
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;

    class Buyer extends User
    {
        use HasFactory;
    }
    ```
6. Modificar el modelo **app\Models\Seller.php**:
    ```php
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;

    class Seller extends User
    {
        use HasFactory;
    }
    ```
7. Crear el modelo **Product** junto a su migración:
    + $ php artisan make:model Product -m
8. Crear el modelo **Transaction** junto a su migración:
    + $ php artisan make:model Transaction -m
8. Crear el modelo **Category** junto a su migración:
    + $ php artisan make:model Category -m

### Video 032. Creando la Estructura Inicial de Laravel para Controladores
1. Crear el controlador **UserController** con todos sus recursos:
    + $ php artisan make:controller User/UserController -r
2. Crear el controlador **BuyerController** con todos sus recursos:
    + $ php artisan make:controller Buyer/BuyerController -r
3. Crear el controlador **CategoryController** con todos sus recursos:
    + $ php artisan make:controller Category/CategoryController -r
4. Crear el controlador **ProductController** con todos sus recursos:
    + $ php artisan make:controller Product/ProductController -r
5. Crear el controlador **SellerController** con todos sus recursos:
    + $ php artisan make:controller Seller/SellerController -r
6. Crear el controlador **TransactionController** con todos sus recursos:
    + $ php artisan make:controller Transaction/TransactionController -r

### Video 033. Creando algunos End-Point para la API RESTful Usando Rutas de Recurso de Laravel
1. Crear rutas para xxxxxxxxxx en el archivo de rutas routes\api.php:
    ```php
    <?php

    use App\Http\Controllers\Buyer\BuyerController;
    use App\Http\Controllers\Category\CategoryController;
    use App\Http\Controllers\Product\ProductController;
    use App\Http\Controllers\Seller\SellerController;
    use App\Http\Controllers\Transaction\TransactionController;
    use App\Http\Controllers\User\UserController;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\Route;

    /*
    |--------------------------------------------------------------------------
    | API Routes
    |--------------------------------------------------------------------------
    |
    | Here is where you can register API routes for your application. These
    | routes are loaded by the RouteServiceProvider within a group which
    | is assigned the "api" middleware group. Enjoy building your API!
    |
    */

    Route::resource('buyers', BuyerController::class, ['only' => ['index', 'show']]);
    Route::resource('categories', CategoryController::class, ['except' => ['create', 'edit']]);
    Route::resource('products', ProductController::class, ['only' => ['index', 'show']]);
    Route::resource('transactions', TransactionController::class, ['only' => ['index', 'show']]);
    Route::resource('sellers', SellerController::class, ['only' => ['index', 'show']]);
    Route::resource('users', UserController::class, ['except' => ['create', 'edit']]);
    ```

## Sección 08: Implementando los Modelos de la API RESTful y sus Relaciones con Eloquent

### Video 034. Implementando las Propiedades de Category
1. Establecer campos de asignación masiva en el recurso **app\Models\Category.php**:
    ```php
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Category extends Model
    {
        use HasFactory;

        protected $fillable = [
            'name',
            'description'
        ];
    }
    ```

### Video 035. Implementando las Propiedades para Product
1. Programar el recurso **app\Models\Product.php**:
    ```php
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Product extends Model
    {
        use HasFactory;

        const PRODUCTO_DISPONIBLE = 'disponible';
        const PRODUCTO_NO_DISPONIBLE = 'no disponible';

        protected $fillable = [
            'name',
            'description',
            'quantity',
            'status',
            'image',
            'seller_id'
        ];

        public function estaDisponible(){
            return $this->status == Product::PRODUCTO_DISPONIBLE;
        }
    }
    ```

### Video 036. Implementando las Propiedades para Transaction
1. Establecer campos de asignación masiva en el recurso **app\Models\Transaction.php**:
    ```php
    <?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;

    class Transaction extends Model
    {
        use HasFactory;

        protected $fillable = [
            'quantity',
            'buyer_id',
            'product_id'
        ];
    }
    ```

### Video 037. Implementando las Propiedades de User
1. Modificar el recurso **app\Models\User.php**:
    ```php
    <?php

    namespace App\Models;

    use Illuminate\Contracts\Auth\MustVerifyEmail;
    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Laravel\Sanctum\HasApiTokens;
    use Illuminate\Support\Str;

    class User extends Authenticatable
    {
        use HasApiTokens, HasFactory, Notifiable;

        const USUARIO_VERIFICADO = '1';
        const USUARIO_NO_VERIFICADO = '0';

        const USUARIO_ADMINISTRADOR = 'true';
        const USUARIO_REGULAR = 'false';

        /**
        * The attributes that are mass assignable.
        *
        * @var string[]
        */
        protected $fillable = [
            'name',
            'email',
            'password',
            'verified',
            'verification_token',
            'admin'
        ];

        /**
        * The attributes that should be hidden for serialization.
        *
        * @var array
        */
        protected $hidden = [
            'password',
            'remember_token',
            'verification_token'
        ];

        /**
        * The attributes that should be cast.
        *
        * @var array
        */
        protected $casts = [
            'email_verified_at' => 'datetime',
        ];

        public function esVerificado(){
            return $this->verified == User::USUARIO_VERIFICADO;
        }

        public function esAdministrador(){
            return $this->admin == User::USUARIO_ADMINISTRADOR;
        }

        public static function generarVerificationToken(){
            return Str::random(40);  // Devuelve una cadena aleatoria de 40 caracteres
        }
    }
    ```

### Video 038. Implementando las Relaciones Entre los Modelos
1. Establecer relaciones en el recurso **app\Models\Buyer.php**:
    ```php
    public function transactions(){
        return $this->hasMany(Transaction::class);
    }
    ```
2. Establecer relaciones en el recurso **app\Models\Category.php**:
    ```php
    public function products(){
        return $this->belongsToMany(Product::class);
    }
    ```
3. Establecer relaciones en el recurso **app\Models\Product.php**:
    ```php
    public function seller(){
        return $this->belongsTo(Seller::class);
    }

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    ```
4. Establecer relaciones en el recurso **app\Models\Seller.php**:
    ```php
    public function products(){
        return $this->hasMany(Product::class);
    }
    ```
5. Establecer relaciones en el recurso **app\Models\Transaction.php**:
    ```php
    public function buyer(){
        return $this->belongsTo(Buyer::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
    ```

## Sección 09: Generando la Estructura de la Base de Datos Usando Migraciones de Laravel

### Video 039. Resolviendo un Problema Común con la Base de Datos y Laravel
1. Modificar el método **boot** del provider **app\Providers\AppServiceProvider.php**:
    ```php
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
    ```
    Importar el facde **Schema**:
    ```php
    use Illuminate\Support\Facades\Schema;
    ```

### Video 040. Implementando la Migración Para Users
**URL 1**: https://laravel.com/docs/5.4/migrations#column-modifiers
**URL 2**: https://laravel.com/docs/5.4/migrations#creating-columns
1. Preparar la migración para el modelo **User** en **database\migrations\2014_10_12_000000_create_users_table.php**:
    ```php
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('verified')->default(User::USUARIO_NO_VERIFICADO);
            $table->string('verification_token')->nullable();
            $table->string('admin')->default(User::USUARIO_REGULAR);
            $table->timestamps();
        });
    }
    ```
    Importar el modelo **User**:
    ```php
    use App\Models\User;
    ```

### Video 041. Implementando la Migración Para Products
1. Preparar la migración para el modelo **Product** en **database\migrations\2021_09_11_021526_create_products_table.php**:
    ```php
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description', 1000);
            $table->integer('quantity')->unsigned();
            $table->string('status')->default(Product::PRODUCTO_NO_DISPONIBLE);
            $table->string('image');
            $table->BigInteger('seller_id')->unsigned();
            /* $table->foreignId('seller_id')->constrained()->onDelete('cascade'); */
            /* $table->foreignId('seller_id')->constrained(); */
            $table->timestamps();
            $table->foreign('seller_id')->references('id')->on('users');
        });
    }
    ```
    Importar el modelo **Product**:
    ```php
    use App\Models\Product;
    ```

### Video 042. Implementando la Migración Para Transactions
1. Preparar la migración para el modelo **Transaction** en **database\migrations\2021_09_11_021636_create_transactions_table.php**:
    ```php
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity')->unsigned();
            $table->BigInteger('buyer_id')->unsigned();
            $table->BigInteger('product_id')->unsigned();
            $table->timestamps();
            $table->foreign('buyer_id')->references('id')->on('users');
            $table->foreign('product_id')->references('id')->on('products');
        });
    }
    ```

### Video 043. Implementando la Migración Para Categories
1. Preparar la migración para el modelo **Category** en **database\migrations\2021_09_11_021720_create_categories_table.php**:
    ```php
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description', 1000);
            $table->timestamps();
        });
    }
    ```

### Video 044. Creando la Migración Para la Tabla Pivote
1. Crear la tabla pivote entre productos y categorias:
    + $ php artisan make:migration category_product_table --create=category_product
2. Preparar la tabla pivote **category_product** en **database\migrations\2021_09_11_163830_category_product_table.php**:
    ```php
    public function up()
    {
        Schema::create('category_product', function (Blueprint $table) {
            $table->integer('category_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->BigInteger('category_id')->references('id')->on('categories');
            $table->BigInteger('product_id')->references('id')->on('products');
        });
    }
    ```

## Sección 10: Creando Factories de Laravel para Insertar Información en la Base de Datos

### Video 045. Creando el Factory para User
1. Modificar el método **definition** del factory **database\factories\UserFactory.php**:
    ```php
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'verified' => $verificado = $this->faker->randomElement([User::USUARIO_VERIFICADO, User::USUARIO_NO_VERIFICADO]),
            'verification_token' => $verificado == User::USUARIO_VERIFICADO ? null : User::generarVerificationToken(),
            'verified' => $this->faker->randomElement([User::USUARIO_ADMINISTRADOR, User::USUARIO_REGULAR]),
        ];
    }
    ```

### Video 046. Creando el Factory para Category
1. Crear factory para el modelo **Category**:
    + $ php artisan make:factory CategoryFactory
2. Programar el método **definition** del factory **database\factories\CategoryFactory.php**:
    ```php
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(1),
        ];
    }
    ```

### Video 047. Creando el Factory de Product
1. Almacenar tres imagenes cualquiera en **public\img** con los nombres **1.jpg**, **2.jpg** y **3.jpg**.
2. Crear factory para el modelo **Product**:
    + $ php artisan make:factory ProductFactory
3. Programar el método **definition** del factory **database\factories\ProductFactory.php**:
    ```php
    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->paragraph(1),
            'quantity' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->randomElement([Product::PRODUCTO_DISPONIBLE, Product::PRODUCTO_NO_DISPONIBLE]),
            'image' => $this->faker->randomElement(['1.jpg', '2.jpg', '3.jpg']),
            /* 'seller_id' => User::inRandomOrder()->first()->id, */
            'seller_id' => User::all()->random()->id,   // Esta forma y la comentada anteriormente son formas diferentes de conseguir los mismo
        ];
    }
    ```
    Importar el model **User**:
    ```php
    use App\Models\User;
    ```

### Video 048. Creando el Factory de Transaction
1. Crear factory para el modelo **Transaction**:
    + $ php artisan make:factory TransactionFactory
2. Programar el método **definition** del factory **database\factories\TransactionFactory.php**:
    ```php
    public function definition()
    {
        $vendedor = Seller::has('products')->get()->random();
        $comprador = User::all()->except($vendedor->id)->random();
        return [
            'quantity' => $this->faker->numberBetween(1, 3),
            'buyer_id' => $comprador->id,
            'product_id' => $vendedor->products->random()->id,
        ];
    }
    ```
    Importar los modelos **Seller** y **User**:
    ```php
    use App\Models\Seller;
    use App\Models\User;
    ```

### Video 049. Usando los Factories Desde el DatabaseSeeder de Laravel
1. Programar el método **run** del seeder **database\seeders\DatabaseSeeder.php**:
    ```php
    public function run()
    {
        // Desactivar claves foráneas
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        // Vaciar todas las tablas
        User::truncate();
        Category::truncate();
        Product::truncate();
        Transaction::truncate();
        DB::table('category_product')->truncate();

        // Establecer las cantidades de registros a crear por tablas
        $cantidadesUsuarios = 200;
        $cantidadesCategorias = 30;
        $cantidadesProductos = 1000;
        $cantidadesTransacciones = 1000;

        // Crear los registros de prueba
        User::factory($cantidadesUsuarios)->create();
        Category::factory($cantidadesCategorias)->create();
        Product::factory($cantidadesProductos)->create()->each(
            function ($producto){
                $categorias = Category::all()->random(mt_rand(1, 5))->pluck('id');
                $producto->categories()->attach($categorias);
            }
        );
        Transaction::factory($cantidadesTransacciones)->create();
    }
    ```
    Importar a los modelos **Category**, **Product**, **Transaction** y **User** y el facde **DB**:
    ```php
    use App\Models\Category;
    use App\Models\Product;
    use App\Models\Transaction;
    use App\Models\User;
    use Illuminate\Support\Facades\DB;
    ```

### Video 050. Cómo Ejecutar Las Migraciones y El Seeder Usando Artisan de Laravel
1. Modificar el modelo **app\Models\User.php**:
    ```php
    ≡
    class User extends Authenticatable
    {
        ≡

        const USUARIO_ADMINISTRADOR = 'true';
        const USUARIO_REGULAR = 'false';

        protected $table = 'users';

        ≡
    }
    ```
2. Ejecutar las migraciones y los seeder reestableciendo las tablas de la base de datos:
    + $ php artisan migrate:fresh --seed

## Sección 11: Implementando las Operaciones para UserController

### Video 051. Mostrando la Lista de Usuarios con el Método Index de UserController
1. Eliminar los métodos **create** y **edit** del controlador **app\Http\Controllers\User\UserController.php**.
2. Programar el método **index** del controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    public function index()
    {
        $usuarios = User::all();
        return response()->json(['data' => $usuarios], 200);
    }
    ```
    Importar el modelo **User**:
    ```php
    use App\Models\User;
    ```
3. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users
    **Nota**: debe mostrar la lista de usuarios.

### Video 052. Mostrando un Usuario con el Método Show de UserController
1. Programar el método **show** del controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    public function show($id)
    {
        $usuario = User::findOrFail($id);
        return response()->json(['data' => $usuario], 200);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users/1
    **Nota**: debe mostrar el usuario con id 1.

### Video 053. Creando un Usuario con el Método Store de UserController
1. Programar el método **store** del controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        $campos = $request->all();
        $campos['password'] = bcrypt($request->password);
        $campos['verified'] = User::USUARIO_NO_VERIFICADO;
        $campos['verification_token'] = User::generarVerificationToken();
        $campos['admin'] = User::USUARIO_REGULAR;

        $usuario = User::create($campos);
        return response()->json(['data' => $usuario], 201);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: POST
    + URL: apirestful.dev/users
    + Body: Form
        + Field name: name                  | Value: test
        + Field name: email                 | Value: test3@test.com
        + Field name: password              | Value: password
        + Field name: admin                 | Value: true
        + Field name: verified              | Value: 1
        + Field name: password_confirmation | Value: password
    **Nota 1**: debe mostrar el usuario creado.
    **Nota 2**: respuesta JSON:
    ```json
    {
        "data": {
            "name": "test",
            "email": "test3@test.com",
            "admin": "false",
            "verified": "0",
            "updated_at": "2021-09-12T13:44:00.000000Z",
            "created_at": "2021-09-12T13:44:00.000000Z",
            "id": 202
        }
    }
    ```

### Video 054. Editando un Usuario con el Método Update de UserController
1. Programar el método **update** del controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'email' => 'email|unique:users,email,' . $user->id,
            'password' => 'min:6|confirmed',
            'admin' => 'in:' . User::USUARIO_ADMINISTRADOR . ',' . User::USUARIO_REGULAR
        ]);

        if($request->has('name')){
            $user->name = $request->name;
        }

        if($request->has('email') && $user->email != $request->email){
            $user->verified = User::USUARIO_NO_VERIFICADO;
            $user->verification_token = User::generarVerificationToken();
            $user->email = $request->email;
        }

        if($request->has('password')){
            $user->password = bcrypt($request->password);
        }

        if($request->has('admin')){
            if(!$user->esVerificado()){
                return response()->json(['error' => 'Unicamente los usuarios verificados pueden cambiar su valor de administrador', 'code' => 409], 409);
            }
            $user->admin = $request->admin;
        }

        // En caso de que realmente en $user no ocurriese ninguan modificación
        if(!$user->isDirty()){
            return response()->json(['error' => 'Se debe especificar al menos un valor diferente para actualizar', 'code' => 422], 422);
        }

        $user->save();
        return response()->json(['data' => $user], 200);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: PUT
    + URL: apirestful.dev/users/202
    + Body: Form-encode
        + Field name: email                 | Value: test44@test.com
    **Nota 1**: debe mostrar el usuario con id 202 con su email modificado.
    **Nota 2**: si se vuelve a ejecutar la petición debe aparecer la siguiente respuesta JSON:
    ```json
    {
    "error": "Se debe especificar al menos un valor diferente para actualizar",
    "code": 409
    }
    ```
    **Nota 3**: si agrega el campo **admin** con el valor **true** a la petición anterior debe aparecer la siguiente respuesta JSON:
    ```json
    {
    "error": "Unicamente los usuarios verificados pueden cambiar su valor de administrador",
    "code": 422
    }
    ```

### Video 055. Removiendo un Usuario el Método Destroy de UserController
1. Programar el método **destroy** del controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['data' => $user], 200);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: DELETE
    + URL: apirestful.dev/users/202
    **Nota 1**: debe mostrar el usuario eliminado.
    **Nota 2**: si se vuelve a ejecutar la petición debe aparecer una respuesta JSON indicando que el usuario no existe.

## Sección 12: Implementando las Operaciones para Buyer

### Video 056. Implementando el Método Index en BuyerController
1. Eliminar los métodos **create**, **store**, **edit**, **update** y **destroy** del controlador **app\Http\Controllers\Buyer\BuyerController.php**.
2. Programar el método **index** del controlador **app\Http\Controllers\Buyer\BuyerController.php**:
    ```php
    public function index()
    {
        $compradores = Buyer::has('transactions')->get();
        return response()->json(['data' => $compradores], 200);
    }
    ```
    Importar el modelo **Buyer**:
    ```php
    use App\Models\Buyer;
    ``` 
3. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/buyers
    **Nota**: debe mostrar la lista de los compradores.

### Video 057. Implementando el Método Show en BuyerController
1. Modificar la cantidad de usuarios en **database\seeders\DatabaseSeeder.php**:
    ```php
    ≡
    $cantidadesUsuarios = 1000;
    ≡
    ```
2. Reestablecer la base de datos:
    + $ php artisan migrate:fresh --seed
3. Programar el método **show** del controlador **app\Http\Controllers\Buyer\BuyerController.php**:
    ```php
    public function show($id)
    {
        $comprador = Buyer::has('transactions')->findOrFail($id);
        return response()->json(['data' => $comprador], 200);
    }
    ```
4. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/buyers/2
    **Nota**: debe mostrar el comprador con el id 2.

## Sección 13: Implementando las Operaciones para Seller

### Video 058. Implementando el Método Index en SellerController
1. Eliminar los métodos **create**, **store**, **edit**, **update** y **destroy** del controlador **app\Http\Controllers\Seller\SellerController.php**.
2. Programar el método **index** del controlador **app\Http\Controllers\Buyer\BuyerController.php**:
    ```php
    public function index()
    {
        $vendedores = Seller::has('products')->get();
        return response()->json(['data' => $vendedores], 200);
    }
    ```
    Importar el modelo **Buyer**:
    ```php
    use App\Models\Seller;
    ``` 
3. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/sellers
    **Nota**: debe mostrar la lista de los vendedores.

### Video 059. Implementando el Método Show en SellerController
1. Programar el método **show** del controlador **app\Http\Controllers\Buyer\BuyerController.php**:
    ```php
    public function show($id)
    {
        $vendedor = Buyer::has('products')->findOrFail($id);
        return response()->json(['data' => $vendedor], 200);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/bullers/5
    **Nota**: debe mostrar el vendedor con el id 5.

## Sección 14: Mejorando las Operaciones Actuales de la API RESTful

### Video 060. Definiendo Mutadores y Accesores en los Modelos
1. Ingresar a MySQL:
    + $ mysql
2. Selecconar la base de datos **apirestful**:
    + mysql> use apirestful
3. Mostrar todos los nombres y emails de los usuarios de la tabla **users**:
    + mysql> select name, email from users;
4. Salir de MySQL:
    + mysql> exit
5. Modificar el modelo **app\Models\User.php** para anexar los mutadores y accesores:
    ```php
    ≡
    class User extends Authenticatable
    {
        ≡
        protected $fillable = [
            'name',
            'email',
            'password',
            'verified',
            'verification_token',
            'admin'
        ];

        // Mutador para el campo name
        public function setNameAttribute($valor){
            $this->attributes['name'] = strtolower($valor);
        }

        // Accesor para el campo name
        public function getNameAttribute($valor){
            // ucfirst solo camiba la primera letra del campo a mayúscula
            return ucwords($valor);
        }

        // Mutador para el campo email
        public function setEmailAttribute($valor){
            $this->attributes['email'] = strtolower($valor);
        }
        ≡
    }
    ```
6. Reestablecer la base de datos:
    + $ php artisan migrate:fresh --seed

### Video 061. Generalizando las Respuestas de la API
1. Crear el controlador **ApiController**:
    + $ php artisan make:controller ApiController
2. Modificar los controladores:
    + **app\Http\Controllers\Buyer\BuyerController.php**.
    + **app\Http\Controllers\Category\CategoryController.php**.
    + **app\Http\Controllers\Product\ProductController.php**.
    + **app\Http\Controllers\Seller\SellerController.php**.
    + **app\Http\Controllers\Transaction\TransactionController.php**.
    + **app\Http\Controllers\User\UserController.php**.
    Para que extienda ahora de **ApiController** en lugar de **Controller** e importar también su contralador en lugar del anterior:
    Cambiar:
    ```php
    ≡
    use App\Http\Controllers\Controller;
    ≡

    class XxxxxxController extends Controller
    {
        ≡
    }
    ```
    Por:
    ```php
    ≡
    use App\Http\Controllers\ApiController;
    ≡

    class XxxxxxController extends ApiController
    {
        ≡
    }
    ```
    **Nota**: de este modo, cualquier método que agreguemos dentro de **ApiController** podrá ser usado por cada uno de nuestros controladores.
3. Crear el trait **app\Traits\ApiResponser.php**:
    ```php
    <?php

    namespace App\Traits;

    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Support\Collection;


    trait ApiResponser{
        private function successResponse($data, $code){
            return response()->json($data, $code);
        }

        protected function errorResponse($message, $code){
            return response()->json(['error' => $message, 'code' => $code], $code);
        }

        protected function showAll(Collection $collection, $code = 200){
            return $this->successResponse(['data' => $collection], $code);
        }

        protected function showOne(Model $instance, $code = 200){
            return $this->successResponse(['data' => $instance], $code);
        }
    }
    ```

### Video 062. Haciendo Uso de los Métodos Generalizados
1. Programar el controlador **app\Http\Controllers\ApiController.php**:
    ```php
    <?php

    namespace App\Http\Controllers;

    use App\Traits\ApiResponser;
    use Illuminate\Http\Request;

    class ApiController extends Controller
    {
        use ApiResponser;
    }
    ```
2. Modificar las respuestas de los métodos de los controladores:
    + **app\Http\Controllers\Buyer\BuyerController.php**.
    + **app\Http\Controllers\Seller\SellerController.php**.
    + **app\Http\Controllers\User\UserController.php**.
    Por la de los métodos según corresponda, ofrecidos por el trait **ApiResponser** a traves del controlador **ApiController**.
    Cambiar:
      + return response()->json(['data' => $compradores], 200);
      + return response()->json(['data' => $comprador], 200);
      + return response()->json(['data' => $vendedores], 200);
      + return response()->json(['data' => $vendedor], 200);
      + return response()->json(['data' => $usuarios], 200);
      + return response()->json(['data' => $usuario], 201);
      + return response()->json(['data' => $usuario], 200);
      + return response()->json(['data' => $user], 200);
    Respectivamente por:
      + return $this->showAll($compradores);
      + return $this->showOne($comprador);
      + return $this->showAll($vendedores);
      + return $this->showOne($vendedor);
      + return $this->showAll($usuarios);
      + return $this->showOne($usuario, 201);
      + return $this->showOne($usuario);
      + return $this->showOne($user);

### Video 063. Usando los Métodos Generalizados para Respuestas de Error
1. Modificar el método **update** del controlador **app\Http\Controllers\User\UserController.php** para cambiar el código que involucra mensajes de error por los definidos en el trait **app\Traits\ApiResponser.php**:
    ```php
    public function update(Request $request, $id)
    {
        ≡

        if($request->has('admin')){
            if(!$user->esVerificado()){
                return $this->errorResponse('Unicamente los usuarios verificados pueden cambiar su valor de administrador', 409);
            }
            $user->admin = $request->admin;
        }

        // En caso de que realmente en $user no ocurriese ninguan modificación
        if(!$user->isDirty()){
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $user->save();
        return $this->showOne($user);
    }
    ```

## Sección 15: Manejando Errores y Excepciones con el Handler de Laravel
**Nota**: No se recomienda seguir del todo esta sección porque los métodos que propone ya están desactualizados, y buscar una solución más actualizada para la versión de Laravel del momento.
**REVISAR - REVISAR - REVISAR - REVISAR**
**Nota principal**: Lo que se pretende lograr en esta sección es capturar las excepciones http: 422, 404, 401 y dar como respuestas la salida tipo JSON definidas en el trait **app\Traits\ApiResponser.php**:
```php
// Para la excepción 422:
$errors = $e->validator->errors()->getMessages();
return $this->errorResponse($errors, 422)
// Para la excepción 404:
$modelo = strolower(class_basename($exception->getModel()));
return $this->errorResponse('No existe ninguna instancia de {$modelo} con el id especificado.', 404);
// Para la excepción 401:
return $this->errorResponse('No autenticado.', 401);
// Para la excepción 403:
return $this->errorResponse('No posee permisos para ejecutar esta acción.', 403);
// Para la excepción 404: (Cuando se escribe mal una URL)
return $this->errorResponse('No se encontró la URL especificada.', 403);
// Para la excepción 405:
return $this->errorResponse('El método especificado en la petición no es valido.', 405);
// Para otras excepciones:
return $this->errorResponse($exception->getMessage(), $exception->getStatusCode());
// Para cuando se intenta eliminar un registro de la base de datos que no esta permitido:
$codigo = $exception->errorInfo[1];
if($codigo == 1451){
    return $this->errorResponse('No se puede eliminar de forma permanente el recurso porque está relacionado con algún otro.', 409);
}
// Para cuando ocurre una falla inesperada
return $this->errorResponse('Falla inesperada. Intente luego.', 500);
```
**Modelo de respuesta JSON esperada**:
```json
{
    "error": "xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx",
    "code": 400
}
```
**Nota**: Como los métodos propuestos en esta sección no son compatibles con Laravel 8, esta sección quedará pendiente.
**Apunte 1 de interes**: Para publicar y personalizar páginas de errores http. 
+ $ php artisan vendor:publish --tag=laravel-errors
**Apunte 2 de interes**: Un ejemplo para cambiar la respuesta http a json desde el cliente:
```php
$response = Http::withHeaders([
    'Accept' => 'application/json'
])->post('http://api.solucionespp.test/oauth/token', [
    'grant_type' => 'password',
    'client_id' => config('services.solucionespp.client_id'),
    'client_secret' => config('services.solucionespp.client_secret'),
    'username' => request('email'),
    'password' => request('password'),
    'scope' => 'create-post read-post update-post delete-post'
]);
```

### Video 064. Retornando los Errores de Validación en Formato JSON
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.
**EXCEPCIÓN 422**

1. Sobreescribir el método **convertValidationExceptionToResponse** e incertarlo al final del archivo de excepciones **app\Exceptions\Handler.php**:
    ```php
    /**
     * Create a response object from the given validation exception.
     *
     * @param  \Illuminate\Validation\ValidationException  $e
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    /* protected function convertValidationExceptionToResponse(ValidationException $e, $request)
    {
        $errors = $e->validator->errors()->getMessages();

        return response()->json($errors, 422);
    } */
    ```
    **Nota**: estoy incertando este método comentado porque no es compatible con Laravel 8.
2. Importar y usar el trait **ApiResponser** en el archivo de excepciones **app\Exceptions\Handler.php**:
    ```php
    <?php

    namespace App\Exceptions;

    use App\Traits\ApiResponser;
    use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
    use Throwable;

    class Handler extends ExceptionHandler
    {
        use ApiResponser;  
        ≡
    }
    ```
**Nota**: Otra manera de obtener un resultado tipo JSON es solicitarlo en la petición http:
Ejemplo de endpoint mediante una petición http que generará una excepción 422:
   + Petición: POST
   + URL: apirestful.dev/users
   + Headers:
      + Header: Accept
      + Value: application/json
   + Respuesta JSON:
    ```json
    {
        "message": "The given data was invalid.",
        "errors": {
            "name": [
                "The name field is required."
            ],
            "email": [
                "The email field is required."
            ],
            "password": [
                "The password field is required."
            ]
        }
    }
    ```
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.

### Video 065. Retornando el Error de “Modelo No Encontrado” como JSON
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.
**EXCEPCIÓN 404**
**Nota**: En este video como en el anterior capturaremos las excepciones de otra manera, tal cual como se hizo en la nota del apartado anterior.
Ejemplo de endpoint mediante una petición http que generará una excepción 404:
   + Petición: GET
   + URL: apirestful.dev/users/11639889
   + Headers:
      + Header: Accept
      + Value: application/json

### Video 066. Controlando Excepciones de Autenticación
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.
**EXCEPCIÓN 401**

### Video 067. Controlando Excepciones de Autorización
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.
**EXCEPCIÓN 403**

### Video 068. Controlando Excepciones de No Encontrado (HTTP)
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.
**EXCEPCIÓN 404**

### Video 069. Controlando Excepciones de Método No Permitido
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.
**EXCEPCIÓN 405**

### Video 070. Controlando Diferentes Excepciones de HTTP
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.
**OTROS TIPOS DE EXCEPCIONES**

### Video 071. Manejando la Eliminación de Recursos Relacionados
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.
**EXCEPCIÓN CUANDO SE INTENTA ELIMINAR UN REGISTRO DE LA BASE DE DATOS QUE NO ESTA PERMITIDO**

### Video 072. Manejando Excepciones Inesperadas
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.
**EXCEPCIÓN 500**

## Sección 16: Inyección Implícita de Modelos en Rutas y Métodos

### Video 073. Usando Inyección de Modelos en Algunos Métodos
1. Modificar el método **show** del controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    public function show(User $user)
    {
        return $this->showOne($user);
    }
    ```
2. Modificar el método **update** del controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    public function update(Request $request, User $user)
    {
        $request->validate([
            'email' => 'email|unique:users,email,' . $user->id,
            'password' => 'min:6|confirmed',
            'admin' => 'in:' . User::USUARIO_ADMINISTRADOR . ',' . User::USUARIO_REGULAR
        ]);

        if($request->has('name')){
            $user->name = $request->name;
        }

        if($request->has('email') && $user->email != $request->email){
            $user->verified = User::USUARIO_NO_VERIFICADO;
            $user->verification_token = User::generarVerificationToken();
            $user->email = $request->email;
        }

        if($request->has('password')){
            $user->password = bcrypt($request->password);
        }

        if($request->has('admin')){
            if(!$user->esVerificado()){
                return $this->errorResponse('Unicamente los usuarios verificados pueden cambiar su valor de administrador', 409);
            }
            $user->admin = $request->admin;
        }

        // En caso de que realmente en $user no ocurriese ninguan modificación
        if(!$user->isDirty()){
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $user->save();
        return $this->showOne($user);
    }
    ```
3. Modificar el método **destroy** del controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    public function destroy(User $user)
    {
        $user->delete();
        return $this->showOne($user);
    }
    ```

### Video 074. Resolviendo la Inyección de Buyer Usando “Global Scopes”
1. Modificar el método **show** del controlador **app\Http\Controllers\Buyer\BuyerController.php**:
    ```php
    public function show(Buyer $buyer)
    {
        return $this->showOne($buyer);
    }
    ```
2. Crear un Global Scopes para el modelo **Buyer**: **Scopes/BuyerScope.php**:
    ```php
    <?php

    namespace App\Scopes;

    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Scope;

    class BuyerScope implements Scope
    {
        public function apply(Builder $builder, Model $model){
            $builder->has('transactions');
        }
    }
    ```
3. Modificar el modelo **app\Models\Buyer.php** para implementar el método **boot**:
    ```php
    <?php

    namespace App\Models;

    use App\Scopes\BuyerScope;
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    class Buyer extends User
    {
        use HasFactory;

        protected static function boot(){
            parent::boot();
            static::addGlobalScope(new BuyerScope);
        }

        public function transactions(){
            return $this->hasMany(Transaction::class);
        }
    }
    ```

### Video 075. Resolviendo la Inyección de Seller Usando “Global Scopes”
1. Modificar el método **show** del controlador **app\Http\Controllers\Seller\SellerController.php**:
    ```php
    public function show(Seller $seller)
    {
        return $this->showOne($seller);;
    }
    ```
2. Crear un Global Scopes para el modelo **Seller**: **Scopes/SellerScope.php**:
    ```php
    <?php

    namespace App\Scopes;

    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Scope;

    class SellerScope implements Scope
    {
        public function apply(Builder $builder, Model $model){
            $builder->has('products');
        }
    }
    ```
3. Modificar el modelo **app\Models\Buyer.php** para implementar el método **boot**:
    ```php
    <?php

    namespace App\Models;

    use App\Scopes\SellerScope;
    use Illuminate\Database\Eloquent\Factories\HasFactory;

    class Seller extends User
    {
        use HasFactory;

        protected static function boot(){
            parent::boot();
            static::addGlobalScope(new SellerScope);
        }

        public function products(){
            return $this->hasMany(Product::class);
        }
    }
    ```

## Sección 17: Implementando “Soft Deleting” en Todos los Modelos

### Video 076. Modificando las Migraciones para Usar “Soft Deleting·
1. En el método **up** de las migraciones: **users**, **products**, **transactions** y **categories** agregar luego de la llamada a **timestamps**, la llamada al método **softDeletes**:
    ```php
    ≡
    $table->timestamps();
    $table->softDeletes();
    ≡
    ```
    **Nota**: esta acción creará el campo **deleted_at** en cada una de las tablas indicadas.
2. Reestablecer la base de datos:
    + $ php artisan migrate:fresh --seed

### Video 077. Preparando Todos los Modelos para Usar “Soft Deleting”
1. Implementar el uso de SoftDeletes en el modelo **app\Models\User.php**:
    ```php
    ≡
    class User extends Authenticatable
    {
        use HasApiTokens, HasFactory, Notifiable, SoftDeletes;

        const USUARIO_VERIFICADO = '1';
        const USUARIO_NO_VERIFICADO = '0';

        const USUARIO_ADMINISTRADOR = 'true';
        const USUARIO_REGULAR = 'false';

        protected $table = 'users';
        protected $date = ['deleted_at'];
        ≡
    }
    ```
    Importar la clase **SoftDeletes**:
    ```php
    use Illuminate\Database\Eloquent\SoftDeletes;
    ```
2. Implementar el uso de SoftDeletes en el modelo **app\Models\Category.php**:
    ```php
    ≡
    class Category extends Model
    {
        use HasFactory, SoftDeletes;

        protected $date = ['deleted_at'];
        ≡
    }
    ```
    Importar la clase **SoftDeletes**:
    ```php
    use Illuminate\Database\Eloquent\SoftDeletes;
    ```
3. Implementar el uso de SoftDeletes en el modelo **app\Models\Product.php**:
    ```php
    ≡
    class Product extends Model
    {
        use HasFactory, SoftDeletes;

        const PRODUCTO_DISPONIBLE = 'disponible';
        const PRODUCTO_NO_DISPONIBLE = 'no disponible';

        protected $date = ['deleted_at'];
        ≡
    }
    ```
    Importar la clase **SoftDeletes**:
    ```php
    use Illuminate\Database\Eloquent\SoftDeletes;
    ```
4. Implementar el uso de SoftDeletes en el modelo **app\Models\Transaction.php**:
    ```php
    ≡
    class Transaction extends Model
    {
        use HasFactory, SoftDeletes;

        protected $date = ['deleted_at'];
        ≡
    }
    ```
    Importar la clase **SoftDeletes**:
    ```php
    use Illuminate\Database\Eloquent\SoftDeletes;
    ```
    
## Sección 18: Implementando las Operaciones para Category

### Video 078. Implementando el Método Index de CategoryController
1. Eliminar el archivo del controlador **app\Http\Controllers\Category\CategoryController.php**.
2. Crear nuevamente el controlador **CategoryController** pero indicandole que queremos inyectarle el modelo **Category**:
    + $ php artisan make:controller Category/CategoryController -r -m Category
3. Eliminar los métodos **create** y **edit** del controlador **app\Http\Controllers\Category\CategoryController.php**.
4. Programar el método **index** del controlador **app\Http\Controllers\Category\CategoryController.php**:
    ```php
    public function index()
    {
        $categories = Category::all();
        return $this->showAll($categories);
    }
    ```
5. En el controlador **app\Http\Controllers\Category\CategoryController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class CategoryController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class CategoryController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/categories
    **Nota**: debe mostrar la lista de categorias.

### Video 079. Implementando el Método Show de CategoryController
1. Programar el método **show** del controlador **app\Http\Controllers\Category\CategoryController.php**:
    ```php
    public function show(Category $category)
    {
        return $this->showOne($category);
    }
    ```
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/categories/2
    **Nota**: debe mostrar la categoria con el id 2.

### Video 080. Implementando el Método Store de CategoryController
1. Programar el método **store** del controlador **app\Http\Controllers\Category\CategoryController.php**:
    ```php
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $category = Category::create($request->all());
        return $this->showOne($category, 201);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: POST
    + URL: apirestful.dev/categories
    + Body: Form
        + Field name: name          | Value: test
        + Field name: description   | Value: test
    **Nota**: debe mostrar la categoría creada.

### Video 081. Implementando el Método Update de CategoryController
1. Programar el método **update** del controlador **app\Http\Controllers\Category\CategoryController.php**:
    ```php
    public function update(Request $request, Category $category)
    {
        $category->fill($request->only([
            'name',
            'description'
        ]));

        if($category->isClean()){
            return $this->errorResponse('Debe especificar al menos un valor diferente para actualizar', 422);
        }
        $category->save();
        return $this->showOne($category);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: PUT
    + URL: apirestful.dev/categories/31
    + Body: Form-encode
        + Field name: name          | Value: test2
        + Field name: description   | Value: test
    **Nota**: debe mostrar la categoría actualizada.

### Video 082. Implementando el Método Destroy de CategoryController
1. Programar el método **destroy** del controlador **app\Http\Controllers\Category\CategoryController.php**:
    ```php
    public function destroy(Category $category)
    {
        $category->delete();
        return $this->showOne($category);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: DELETE
    + URL: apirestful.dev/categories/31
    **Nota**: debe mostrar la categoría eliminada.

## Sección 19: Implementando las Operaciones para Product

### Video 083. Implementando el Método Index para ProductController
1. Eliminar el archivo del controlador **app\Http\Controllers\Product\ProductController.php**.
2. Crear nuevamente el controlador **ProductController** pero indicandole que queremos inyectarle el modelo **Product**:
    + $ php artisan make:controller Product/ProductController -r -m Product
3. Eliminar los métodos **create**, **store**, **edit**, **update** y **destroy** del controlador **app\Http\Controllers\Product\ProductController.php**.
4. Programar el método **index** del controlador **app\Http\Controllers\Product\ProductController.php**:
    ```php
    public function index()
    {
        $products = Product::all();
        return $this->showAll($products);
    }
    ```
5. En el controlador **app\Http\Controllers\Product\ProductController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class ProductController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class ProductController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/products
    **Nota**: debe mostrar la lista de productos.

### Video 084. Implementando el Método Show para ProductController
1. Programar el método **show** del controlador **app\Http\Controllers\Product\ProductController.php**:
    ```php
    public function show(Product $product)
    {
        return $this->showOne($product);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/products/2
    **Nota**: debe mostrar el producto con el id 2.

## Sección 20: (Ejercicios) Implementando las Operaciones para Transaction

### Nota 085. Implementando el Método Index para TransactionController
1. Eliminar el archivo del controlador **app\Http\Controllers\Transaction\TransactionController.php**.
2. Crear nuevamente el controlador **TransactionController** pero indicandole que queremos inyectarle el modelo **Product**:
    + $ php artisan make:controller Transaction/TransactionController -r -m Transaction
3. Eliminar los métodos **create**, **store**, **edit**, **update** y **destroy** del controlador **app\Http\Controllers\Transaction\TransactionController.php**.
4. Programar el método **index** del controlador **app\Http\Controllers\Transaction\TransactionController.php**:
    ```php
    public function index()
    {
        $transactions = Transaction::all();
        return $this->showAll($transactions);
    }
    ```
5. En el controlador **app\Http\Controllers\Transaction\TransactionController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class TransactionController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class TransactionController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/transactions
    **Nota**: debe mostrar la lista de transacciones.

### Nota 086. Implementando el Método Show para TransactionController
1. Programar el método **show** del controlador **app\Http\Controllers\Transaction\TransactionController.php**:
    ```php
    public function show(Transaction $transaction)
    {
        return $this->showOne($transaction);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/transactions/2
    **Nota**: debe mostrar la transacción con el id 2.

## Sección 21: Implementando las Operaciones Complejas con Transaction

### Video 087. Implementando el Método Index de TransactionCategoryController
1. Crear el controlador **TransactionCategoryController**:
    + $ php artisan make:controller Transaction/TransactionCategoryController -r -m Transaction
2. Borrar todos los métodos del controlador **app\Http\Controllers\Transaction\TransactionCategoryController.php**, excepto **index**.
3. Crear la ruta **transactions.categories** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('transactions.categories', TransactionCategoryController::class, ['only' => ['index']]);
    ```
    Importar el controlador **TransactionCategoryController**:
    ```php
    use App\Http\Controllers\Transaction\TransactionCategoryController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Transaction\TransactionCategoryController.php**
    ```php
    public function index(Transaction $transaction)
    {
        $categories = $transaction->product->categories;
        return $this->showAll($categories);
    }
    ```
5. En el controlador **app\Http\Controllers\Transaction\TransactionCategoryController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class TransactionCategoryController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class TransactionCategoryController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/transactions/3/categories
    **Nota**: debe mostrar la lista de las categorías de la transaccion con id 3.

### Video 088. Implementando el Método Index de TransactionSellerController
1. Crear el controlador **TransactionSellerController**:
    + $ php artisan make:controller Transaction/TransactionSellerController -r -m Transaction
2. Borrar todos los métodos del controlador **app\Http\Controllers\Transaction\TransactionSellerController.php**, excepto **index**.
3. Crear la ruta **transactions.sellers** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('transactions.sellers', TransactionSellerController::class, ['only' => ['index']]);
    ```
    Importar el controlador **TransactionSellerController**:
    ```php
    use App\Http\Controllers\Transaction\TransactionSellerController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Transaction\TransactionSellerController.php**
    ```php
    public function index(Transaction $transaction)
    {
        $seller = $transaction->product->seller;
        return $this->showOne($seller);
    }
    ```
5. En el controlador **app\Http\Controllers\Transaction\TransactionSellerController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class TransactionSellerController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class TransactionSellerController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/transactions/3/sellers
    **Nota**: debe mostrar el vendedor de la transaccion con id 3.

## Sección 22: Implementando las Operaciones Complejas con Buyer

### Video 089. Implementando el Método Index de BuyerTransactionController
1. Crear el controlador **BuyerTransactionController**:
    + $ php artisan make:controller Buyer/BuyerTransactionController -r -m Buyer
2. Borrar todos los métodos del controlador **app\Http\Controllers\Buyer\BuyerTransactionController.php**, excepto **index**.
3. Crear la ruta **buyers.transactions** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('buyers.transactions', BuyerTransactionController::class, ['only' => ['index']]);
    ```
    Importar el controlador **BuyerTransactionController**:
    ```php
    use App\Http\Controllers\Buyer\BuyerTransactionController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Buyer\BuyerTransactionController.php**
    ```php
    public function index(Buyer $buyer)
    {
        $transactions = $buyer->transactions;
        return $this->showAll($transactions);
    }
    ```
5. En el controlador **app\Http\Controllers\Buyer\BuyerTransactionController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class BuyerTransactionController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class BuyerTransactionController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/buyers/4/transactions
    **Nota**: debe mostrar las transacciones del comprador con id 4.

### Video 090. Implementando el Método Index de BuyerProductController
1. Crear el controlador **BuyerProductController**:
    + $ php artisan make:controller Buyer/BuyerProductController -r -m Buyer
2. Borrar todos los métodos del controlador **app\Http\Controllers\Buyer\BuyerProductController.php**, excepto **index**.
3. Crear la ruta **buyers.products** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('buyers.products', BuyerProductController::class, ['only' => ['index']]);
    ```
    Importar el controlador **BuyerProductController**:
    ```php
    use App\Http\Controllers\Buyer\BuyerProductController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Buyer\BuyerProductController.php**
    ```php
    public function index(Buyer $buyer)
    {
        $products = $buyer->transactions()->with('product')
            ->get()
            ->pluck('product');
        return $this->showAll($products);
    }
    ```
5. En el controlador **app\Http\Controllers\Buyer\BuyerProductController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class BuyerProductController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class BuyerProductController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/buyers/4/products
    **Nota**: debe mostrar los productos del comprador con id 4.

### Video 091. Implementando el Método Index de BuyerSellerController
1. Crear el controlador **BuyerSellerController**:
    + $ php artisan make:controller Buyer/BuyerSellerController -r -m Buyer
2. Borrar todos los métodos del controlador **app\Http\Controllers\Buyer\BuyerSellerController.php**, excepto **index**.
3. Crear la ruta **buyers.sellers** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('buyers.sellers', BuyerSellerController::class, ['only' => ['index']]);
    ```
    Importar el controlador **BuyerProductController**:
    ```php
    use App\Http\Controllers\Buyer\BuyerSellerController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Buyer\BuyerSellerController.php**
    ```php
    public function index(Buyer $buyer)
    {
        $sellers = $buyer->transactions()->with('product.seller')
            ->get()
            ->pluck('product.seller')
            ->unique('id')
            ->values();
        return $this->showAll($sellers);
    }
    ```
5. En el controlador **app\Http\Controllers\Buyer\BuyerSellerController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class BuyerSellerController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class BuyerSellerController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/buyers/4/sellers
    **Nota**: debe mostrar los vendedores del comprador con id 4.

### Video 092. Implementando el Método Index de BuyerCategoryController
1. Crear el controlador **BuyerCategoryController**:
    + $ php artisan make:controller Buyer/BuyerCategoryController -r -m Buyer
2. Borrar todos los métodos del controlador **app\Http\Controllers\Buyer\BuyerCategoryController.php**, excepto **index**.
3. Crear la ruta **buyers.categories** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('buyers.categories', BuyerCategoryController::class, ['only' => ['index']]);
    ```
    Importar el controlador **BuyerCategoryController**:
    ```php
    use App\Http\Controllers\Buyer\BuyerCategoryController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Buyer\BuyerCategoryController.php**
    ```php
    public function index(Buyer $buyer)
    {
        $sellers = $buyer->transactions()->with('product.seller')
            ->get()
            ->pluck('product.seller')
            ->unique('id')
            ->values();
        return $this->showAll($sellers);
    }
    ```
5. En el controlador **app\Http\Controllers\Buyer\BuyerCategoryController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class BuyerCategoryController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class BuyerCategoryController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/buyers/4/categories
    **Nota**: debe mostrar las categorias de los productos del comprador con id 4.

## Sección 23: Implementando las Operaciones Complejas con Category

### Video 093. Implementando el Método Index para CategoryProductController
1. Crear el controlador **CategoryProductController**:
    + $ php artisan make:controller Category/CategoryProductController -r -m Category
2. Borrar todos los métodos del controlador **app\Http\Controllers\Category\CategoryProductController.php**, excepto **index**.
3. Crear la ruta **categories.products** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('categories.products', CategoryProductController::class, ['only' => ['index']]);
    ```
    Importar el controlador **CategoryProductController**:
    ```php
    use App\Http\Controllers\Category\CategoryProductController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Category\CategoryProductController.php**
    ```php
    public function index(Category $category)
    {
        $products = $category->products;
        return $this->showAll($products);
    }
    ```
5. En el controlador **app\Http\Controllers\Category\CategoryProductController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class CategoryProductController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class CategoryProductController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/categories/4/products
    **Nota**: debe mostrar los productos de la categoria con id 4.

### Video 094. Implementando el Método Index para CategorySellerController
1. Crear el controlador **CategorySellerController**:
    + $ php artisan make:controller Category/CategorySellerController -r -m Category
2. Borrar todos los métodos del controlador **app\Http\Controllers\Category\CategorySellerController.php**, excepto **index**.
3. Crear la ruta **categories.sellers** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('categories.sellers', CategorySellerController::class, ['only' => ['index']]);
    ```
    Importar el controlador **CategorySellerController**:
    ```php
    use App\Http\Controllers\Category\CategorySellerController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Category\CategorySellerController.php**
    ```php
    public function index(Category $category)
    {
        $sellers = $category->products()
            ->with('seller')
            ->get()
            ->pluck('seller')
            ->unique()
            ->values();
        return $this->showAll($sellers);
    }
    ```
5. En el controlador **app\Http\Controllers\Category\CategorySellerController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class CategorySellerController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class CategorySellerController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/categories/4/sellers
    **Nota**: debe mostrar los vendedores de la categoria con id 4.

### Video 095. Implementando el Método Index para CategoryTransactionController
1. Crear el controlador **CategoryTransactionController**:
    + $ php artisan make:controller Category/CategoryTransactionController -r -m Category
2. Borrar todos los métodos del controlador **app\Http\Controllers\Category\CategoryTransactionController.php**, excepto **index**.
3. Crear la ruta **categories.transactions** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('categories.transactions', CategoryTransactionController::class, ['only' => ['index']]);
    ```
    Importar el controlador **CategoryTransactionController**:
    ```php
    use App\Http\Controllers\Category\CategoryTransactionController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Category\CategoryTransactionController.php**
    ```php
    public function index(Category $category)
    {
        $transactions = $category->products()   // Seleccionar todos los productos
            ->whereHas('transactions')          // Filtrar solo los productos que tiene al menos una transacción
            ->with('transactions')              // Nos traemos la transacción
            ->get()
            ->pluck('transactions')             // Obtener unicamente la lista de las transacciones
            ->collapse();                       // Obtener unicamente una lista y no una lista de colecciones      
        return $this->showAll($transactions);
    }
    ```
5. En el controlador **app\Http\Controllers\Category\CategoryTransactionController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class CategoryTransactionController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class CategoryTransactionController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/categories/4/transactions
    **Nota**: debe mostrar las transacciones de la categoria con id 4.

### Video 096. Implementando el Método Index para CategoryBuyerController
1. Crear el controlador **CategoryBuyerController**:
    + $ php artisan make:controller Category/CategoryBuyerController -r -m Category
2. Borrar todos los métodos del controlador **app\Http\Controllers\Category\CategoryBuyerController.php**, excepto **index**.
3. Crear la ruta **categories.buyers** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('categories.buyers', CategoryBuyerController::class, ['only' => ['index']]);
    ```
    Importar el controlador **CategoryBuyerController**:
    ```php
    use App\Http\Controllers\Category\CategoryBuyerController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Category\CategoryBuyerController.php**
    ```php
    public function index(Category $category)
    {
        $buyers = $category->products()     // Seleccionar todos los productos
            ->whereHas('transactions')      // Filtrar solo los productos que tiene al menos una transacción
            ->with('transactions.buyer')    // Requerir el comprador de la transacción
            ->get()
            ->pluck('transactions')         // Obtener unicamente la lista de las transacciones
            ->collapse()                    // Obtener unicamente una lista y no una lista de colecciones  
            ->pluck('buyer')                // pluck nuevamente pero ahora para obtener los compradores
            ->unique()                      // Vaciar los registros repetidos
            ->values();                     // Eliminar los registros vacios
        return $this->showAll($buyers);
    }
    ```
5. En el controlador **app\Http\Controllers\Category\CategoryBuyerController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class CategoryBuyerController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class CategoryBuyerController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/categories/4/buyers
    **Nota**: debe mostrar los compradores de la categoria con id 4.

### Video 097. Removiendo la Tabla Pivote de los Resultados
1. Modificar el modelo **app\Models\Category.php** para ocultar el atributo **pivot**:
    ```php
    ≡
    class Category extends Model
    {
        ≡

        protected $fillable = [
            'name',
            'description'
        ];

        protected $hidden = [
            'pivot'
        ];

        ≡
    }
    ``` 
2. Modificar el modelo **app\Models\Product.php** para ocultar el atributo **pivot**:
    ```php
    ≡
    class Product extends Model
    {
        ≡

        protected $fillable = [
            'name',
            'description',
            'quantity',
            'status',
            'image',
            'seller_id'
        ];

        protected $hidden = [
            'pivot'
        ];

        ≡
    }
    ```

## Sección 24: Implementando las Operaciones Complejas con Seller

### Video 098. Implementando el Método Index para SellerTransactionController
1. Crear el controlador **SellerTransactionController**:
    + $ php artisan make:controller Seller/SellerTransactionController -r -m Seller
2. Borrar todos los métodos del controlador **app\Http\Controllers\Seller\SellerTransactionController.php**, excepto **index**.
3. Crear la ruta **sellers.transactions** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('sellers.transactions', SellerTransactionController::class, ['only' => ['index']]);
    ```
    Importar el controlador **SellerTransactionController**:
    ```php
    use App\Http\Controllers\Seller\SellerTransactionController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Seller\SellerTransactionController.php**
    ```php
    public function index(Seller $seller)
    {
        $transactions = $seller->products()     // Lista de productos del vendedor
            ->whereHas('transactions')          // Unicamente los productos con transacciones
            ->with('transactions')              // Traer las transacciones
            ->get()                             // Obtener los resultados
            ->pluck('transactions')             // De la colección completa dejar solo las transacciones
            ->collapse();                       // Para juntar todas las listas en una
        return $this->showAll($transactions);
    }
    ```
5. En el controlador **app\Http\Controllers\Seller\SellerTransactionController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class SellerTransactionController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class SellerTransactionController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/sellers/4/transactions
    **Nota**: debe mostrar las transacciones del vendedor con id 4.

### Video 099. Implementando el Método Index para SellerCategoryController
1. Crear el controlador **SellerCategoryController**:
    + $ php artisan make:controller Seller/SellerCategoryController -r -m Seller
2. Borrar todos los métodos del controlador **app\Http\Controllers\Seller\SellerCategoryController.php**, excepto **index**.
3. Crear la ruta **sellers.categories** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('sellers.categories', SellerCategoryController::class, ['only' => ['index']]);
    ```
    Importar el controlador **SellerCategoryController**:
    ```php
    use App\Http\Controllers\Seller\SellerCategoryController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Seller\SellerCategoryController.php**
    ```php
    public function index(Seller $seller)
    {
        $categories = $seller->products()   // Lista de productos del vendedor
            ->with('categories')            // Traer las categorias
            ->get()                         // Obtener los resultados
            ->pluck('categories')           // Nos aseguramos de tener en la lista unicamente las categorías
            ->collapse()                    // Para juntar todas las listas en una
            ->unique('id')                  // Nos aseguramos que las categorías no se repitan
            ->values();                     // Nos aseguramos de eliminar los elementos vacios
        return $this->showAll($categories);
    }
    ```
5. En el controlador **app\Http\Controllers\Seller\SellerCategoryController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class SellerCategoryController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class SellerCategoryController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/sellers/4/categories
    **Nota**: debe mostrar las categorias de los productos del vendedor con id 4.

### Video 100. Implementando el Método Index para SellerBuyerController
1. Crear el controlador **SellerBuyerController**:
    + $ php artisan make:controller Seller/SellerBuyerController -r -m Seller
2. Borrar todos los métodos del controlador **app\Http\Controllers\Seller\SellerBuyerController.php**, excepto **index**.
3. Crear la ruta **sellers.buyers** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('sellers.buyers', SellerBuyerController::class, ['only' => ['index']]);
    ```
    Importar el controlador **SellerBuyerController**:
    ```php
    use App\Http\Controllers\Seller\SellerBuyerController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Seller\SellerBuyerController.php**
    ```php
    public function index(Seller $seller)
    {
        $buyers = $seller->products()       // Lista de productos del vendedor
            ->whereHas('transactions')      // Unicamente los productos que tengan transacciones
            ->with('transactions.buyer')    // Traer los comprador presentes en la transacción
            ->get()                         // Obtener los resultados
            ->pluck('transactions')         // Obtener las colecciones de transacciones independientes
            ->collapse()                    // Juntar todas las colecciones de las transacciones
            ->pluck('buyer')                // Obtener el comprador de cada una de esas transacciones
            ->unique('id')                  // Nos aseguramos que los compradores no se repitan
            ->values();                     // Nos aseguramos de eliminar los elementos vacios
        return $this->showAll($buyers);
    }
    ```
5. En el controlador **app\Http\Controllers\Seller\SellerBuyerController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class SellerBuyerController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class SellerBuyerController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/sellers/4/buyers
    **Nota**: debe mostrar los compradores del vendedor con id 4.

### Video 101. Implementando el Método Index para SellerProductController
1. Crear el controlador **SellerProductController**:
    + $ php artisan make:controller Seller/SellerProductController -r -m Seller
2. Borrar los métodos **create**, **show** y **edit** del controlador **app\Http\Controllers\Seller\SellerProductController.php**.
    **Nota**: el método show se elimina porque se puede obtener el mismo resultado con el endpoint:
    + apirestful.dev/products/[id del vendedor]
3. Crear la ruta **sellers.products** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('sellers.products', SellerProductController::class, ['except' => ['create', 'show', 'edit']]);
    ```
    Importar el controlador **SellerProductController**:
    ```php
    use App\Http\Controllers\Seller\SellerProductController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Seller\SellerProductController.php**
    ```php
    public function index(Seller $seller)
    {
        $products = $seller->products;       // Lista de productos del vendedor de manera directa
        return $this->showAll($products);
    }
    ```
5. En el controlador **app\Http\Controllers\Seller\SellerProductController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class SellerProductController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class SellerProductController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/sellers/4/products
    **Nota**: debe mostrar los productos que ofrece el vendedor con id 4.

### Video 102. Implementando el Método Store para SellerProductController
1. Implementar el método **store** del controlador **app\Http\Controllers\Seller\SellerProductController.php**
    ```php
    public function store(Request $request, User $seller)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'quantity' => 'required|integer|min:1',
            'image' => 'required|image'
        ]);

        $data = $request->all();
        $data['status'] = Product::PRODUCTO_NO_DISPONIBLE;
        $data['image'] = '1.jpg';
        $data['seller_id'] = $seller->id;

        $product = Product::create($data);

        return $this->showOne($product, 201);
    }
    ```
    Importar los modelos **Product** y **User**:
    ```php
    use App\Models\Product;
    use App\Models\User;
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: POST
    + URL: apirestful.dev/sellers/5/products
    + Body: Form
        + Field name: name   | Value: test
        + Field name: description   | Value: testing
        + Field name: quantity   | Value: 5
        + Field name: image   | Tipo File: [Introducir la imagen public\img\1.jpg]
    **Nota**: debe mostrar el productos agregado por el vendedor con id 5.

### Video 103. Implementando el Método Update para SellerProductController
1. Implementar el método **update** del controlador **app\Http\Controllers\Seller\SellerProductController.php**:
    ```php
    public function update(Request $request, Seller $seller, Product $product)
    {
        $request->validate([
            'quantity' => 'integer|min:1',
            'status' => 'in: ' . Product::PRODUCTO_DISPONIBLE . ',' . Product::PRODUCTO_NO_DISPONIBLE,
            'image' => 'image'
        ]);

        if($seller->id != $product->seller_id) {
            return $this->errorResponse('El vendedor especificado no es el vendedor real del producto',422);
        }

        $product->fill($request->only([
            'name',
            'description',
            'quantity'
        ]));

        if ($request->has('status')) {
            $product->status = $request->status;
            if($product->estaDisponible() && $product->categories()->count() == 0){
                return $this->errorResponse('Un producto activo debe tener al menos una categoría', 409);
            }
        }

        if ($product->isClean()){
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar', 422);
        }

        $product->save();

        return $this->showOne($product);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: PUT
    + URL: apirestful.dev/sellers/3/products/1001
    + Body: Form-code
        + Field name: name   | Value: test44
    **Nota**: debe mostrar el producto con id 1001 por el vendedor con id 3.

### Video 104. Implementando el Método Destroy para SellerProductController
1. Crear método **verificarVendedor** en el controlador **app\Http\Controllers\Seller\SellerProductController.php**:
    ```php
    protected function verificarVendedor(Seller $seller, Product $product){
        if($seller->id != $product->seller_id) {
            throw new HttpException(422, 'El vendedor especificado no es el vendedor real del producto');
        }        
    }
    ```
    Importar la excepción **HttpException**:
    ```php
    use Symfony\Component\HttpKernel\Exception\HttpException;
    ```
2. Modificar el método **update** del controlador **app\Http\Controllers\Seller\SellerProductController.php**:
    ```php
    public function update(Request $request, Seller $seller, Product $product)
    {
        $request->validate([
            'quantity' => 'integer|min:1',
            'status' => 'in: ' . Product::PRODUCTO_DISPONIBLE . ',' . Product::PRODUCTO_NO_DISPONIBLE,
            'image' => 'image'
        ]);

        $this->verificarVendedor($seller, $product);

        $product->fill($request->only([
            'name',
            'description',
            'quantity'
        ]));

        ≡
    }
    ```
3. Implementar el método **destroy** del controlador **app\Http\Controllers\Seller\SellerProductController.php**:
    ```php
    public function destroy(Seller $seller, Product $product)
    {
        $this->verificarVendedor($seller, $product);

        $product->delete();

        return $this->showOne($product);
    }
    ```
4. Prueba de endpoint mediante una petición http:
    + Petición: DELETE
    + URL: apirestful.dev/sellers/3/products/1001
    **Nota**: debe mostrar el producto con id 1001 por el vendedor con id 3.

## Sección 25: Implementando las Operaciones Complejas para Product

### Video 105. (Reto) Implementando la Operación Index de ProductTransaction
1. Crear el controlador **ProductTransactionController**:
    + $ php artisan make:controller Product/ProductTransactionController -r -m Product
2. Borrar todos los métodos del controlador **app\Http\Controllers\Product\ProductTransactionController.php**, excepto **index**.
3. Crear la ruta **products.transactions** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('products.transactions', ProductTransactionController::class, ['only' => ['index']]);
    ```
    Importar el controlador **ProductTransactionController**:
    ```php
    use App\Http\Controllers\Seller\ProductTransactionController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Product\ProductTransactionController.php**
    ```php
    public function index(Product $product)
    {
        $transactions = $product->transactions;
        return $this->showAll($transactions);
    }
    ```
5. En el controlador **app\Http\Controllers\Product\ProductTransactionController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class ProductTransactionController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class ProductTransactionController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/products/4/transactions
    **Nota**: debe mostrar las transacciones del producto con id 4.

### Video 106. (Reto) Implementando la Operación Index de ProductBuyer
1. Crear el controlador **ProductBuyerController**:
    + $ php artisan make:controller Product/ProductBuyerController -r -m Product
2. Borrar todos los métodos del controlador **app\Http\Controllers\Product\ProductBuyerController.php**, excepto **index**.
3. Crear la ruta **products.buyers** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('products.buyers', ProductBuyerController::class, ['only' => ['index']]);
    ```
    Importar el controlador **ProductBuyerController**:
    ```php
    use App\Http\Controllers\Seller\ProductBuyerController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Product\ProductBuyerController.php**
    ```php
    public function index(Product $product)
    {
        $buyers = $product->transactions()
            ->with('buyer')
            ->get()
            ->pluck('buyer')
            ->unique('id')
            ->values();
        return $this->showAll($buyers);
    }
    ```
5. En el controlador **app\Http\Controllers\Product\ProductBuyerController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class ProductBuyerController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class ProductBuyerController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/products/4/buyers
    **Nota**: debe mostrar los compradores del producto con id 4.

### Video 107. (Reto) Implementando la Operación Index de ProductCategory
1. Crear el controlador **ProductCategoryController**:
    + $ php artisan make:controller Product/ProductCategoryController -r -m Product
2. Borrar todos los métodos del controlador **app\Http\Controllers\Product\ProductCategoryController.php**, excepto **index**, **update** y **destroy**.
3. Crear la ruta **products.categories** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('products.categories', ProductCategoryController::class, ['only' => ['index', 'update', 'destroy']]);
    ```
    Importar el controlador **ProductCategoryController**:
    ```php
    use App\Http\Controllers\Seller\ProductCategoryController;
    ```
4. Programar el método **index** del controlador **app\Http\Controllers\Product\ProductCategoryController.php**
    ```php
    public function index(Product $product)
    {
        $categories = $product->categories;
        return $this->showAll($categories);
    }
    ```
5. En el controlador **app\Http\Controllers\Product\ProductCategoryController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class ProductCategoryController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class ProductCategoryController extends ApiController 
6. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/products/4/categories
    **Nota**: debe mostrar las categorias del producto con id 4.

### Video 108. Implementando la Operación Update de ProductCategory
1. Implementar el método **update** del controlador **app\Http\Controllers\Product\ProductCategoryController.php**:
    ```php
    public function update(Request $request, Product $product, Category $category)
    {
        $product->categories()->syncWithoutDetaching([$category->id]);
        return $this->showAll($product->categories);
    }
    ```
    Importar el modelo **Category**:
    ```php
    use App\Models\Category;
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: PUT
    + URL: apirestful.dev/products/4/categories/7
    **Nota**: debe mostrar el producto con id 4 con sus categorias anteriores y la nueva categoria con id 7

### Video 109. Implementando la Operación Destroy de ProductCategory
1. Implementar el método **destroy** del controlador **app\Http\Controllers\Product\ProductCategoryController.php**:
    ```php
    public function destroy(Product $product, Category $category)
    {
        if(!$product->categories()->find($category->id)){
            return $this->errorResponse('La categoría especificada no es una categoría de este producto', 404);
        }

        $product->categories()->detach([$category->id]);
        return $this->showAll($product->categories);
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: DELETE
    + URL: apirestful.dev/products/4/categories/10
    **Nota**: debe mostrar las categorias del producto con id 4 con la categoria de id 10 eliminada.

### Video 110. Implementando la Operación Store de ProductBuyerTransaction
1. Crear el controlador **ProductBuyerTransactionController**:
    + $ php artisan make:controller Product/ProductBuyerTransactionController -r -m Product
2. Borrar todos los métodos del controlador **app\Http\Controllers\Product\ProductBuyerTransactionController.php**, excepto **store**.
3. Crear la ruta **products.buyers.transactions** en el archivo de **rutas routes\api.php**:
    ```php
    Route::resource('products.buyers.transactions', ProductBuyerTransactionController::class, ['only' => ['store']]);
    ```
    Importar el controlador **ProductBuyerTransactionController**:
    ```php
    use App\Http\Controllers\Seller\ProductBuyerTransactionController;
    ```
4. Implementar el método **store** del controlador **app\Http\Controllers\Product\ProductBuyerTransactionController.php**
    ```php
    public function store(Request $request, Product $product, User $buyer)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);
        // Verificar que el comprador y el vendedor no sea el mismo usuario
        if($buyer->id == $product->seller_id){
            return $this->errorResponse('El comprador debe ser diferente al vendedor', 409);
        }
        // Comprobar que el comprador es usuario verificado
        //if(!$buyer->esVerificado()){
        if(!$buyer->verified){
            return $this->errorResponse('El comprador debe ser un usuario verificado', 409);
        }
        // Comprobar que el vendedor es usuario verificado
        //if(!$product->seller->esVerificado()){
        if(!$product->seller->verified){
            return $this->errorResponse('El vendedor debe ser un usuario verificado', 409);
        }
        // Verificar que el producto esté disponible
        if(!$product->estaDisponible()){
            return $this->errorResponse('El producto para esta transacción no está disponible', 409);
        }
        // Verificar que la cantidad solicitada no sea mayor a la cantidad disponible
        if($product->quantity < $request->quantity){
            return $this->errorResponse('El producto no tiene la cantidad disponible requerida para esta transacción', 409);
        }

        return DB::transaction(function () use ($request, $product, $buyer) {
            $product->quantity -= $request->quantity;   // Actualizar la cantidad del producto
            $product->save();

            $transaction = Transaction::create([
                'quantity' => $request->quantity,
                'buyer_id' => $buyer->id,
                'product_id' => $product->id
            ]);

            return $this->showOne($transaction, 201);
        });
    }
    ```
    Importar los modelos **Product**, **Transaction** y **User** y el facde **DB**:
    ```php
    use App\Models\Product;
    use App\Models\Transaction;
    use App\Models\User;
    use Illuminate\Support\Facades\DB;
    ```
5. En el controlador **app\Http\Controllers\Product\ProductBuyerTransactionController.php**:
    Cambiar:
    + use App\Http\Controllers\Controller;
    + class ProductBuyerTransactionController extends Controller
    Respectivamente por:
    + use App\Http\Controllers\ApiController;
    + class ProductBuyerTransactionController extends ApiController 


6. Prueba de endpoint mediante una petición http:
    + Petición: POST
    + URL: apirestful.dev/products/3/buyers/2/transactions
    + Body: Form
        + Field name: quantity | Value: 1
    **Nota**: debe mostrar la transacción correspondiente a la venta del producto con id 3 por el comprador con id 2

### Video 111. Manejando la Disponibilidad de Productos Usando Eventos
1. Modificar el método **boot** del provide **app\Providers\AppServiceProvider.php**:
    ```php
    public function boot()
    {
        Schema::defaultStringLength(191);
        Product::updated(function($product){
            if($product->quantity == 0 && $product->estaDisponible()){
                $product->status = Product::PRODUCTO_NO_DISPONIBLE;
                $product->save();
            }
        });
    }
    ```
    Importar el modelo **Product**:
    ```php
    use App\Models\Product;
    ```

## Sección 26: Agregando una Imagen a los Productos

### Video 112. Preparando la API para la Subida de Imágenes
1. Para evitar que se suban imagenes de prueba al repositorio crear archivo **public\img\\.gitignore**:
    ```
    *
    !.gitignore
    ```
2. Crear nuestro sistema de almacenamiento de imagenes en el archivo de configuración **config\filesystems.php**:
    ```php
    ≡
    'disks' => [

        ≡

        'images' => [
            'driver' => 'local',
            'root' => public_path('img'),
            'visibility' => 'public',
        ],

        ≡

    ],
    ≡
    ```
3. Modificar el archivo de variables de entorno **.env** para indicar que por defecto los archivos se guarden en **public\img**:
    ```
    ≡
    FILESYSTEM_DRIVER=images
    ≡
    ```

### Video 113. Guardando la Imagen al Crear un Producto
1. Modificar el método **store** del controlador **app\Http\Controllers\Seller\SellerProductController.php**:
    ```php
    public function store(Request $request, User $seller)
    {
        ≡
        $data['image'] = $request->image->store('');
        ≡
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: POST
    + URL: apirestful.dev/sellers/2/products
    + Body: Form
        + Field name: name          | Value: test 33
        + Field name: description   | Value: prueba
        + Field name: quantity      | Value: 5
        + Field name: image         | Tipo Field: [Seleccionar una imagen cualquiera]
    **Nota**: debe mostrar el producto agregado al vendedor con id 2

### Video 114. Removiendo la Imagen al Eliminar un Producto
1. Modificar el método **destroy** del controlador **app\Http\Controllers\Seller\SellerProductController.php**:
    ```php
    public function destroy(Seller $seller, Product $product)
    {
        $this->verificarVendedor($seller, $product);

        Storage::delete($product->image);

        $product->delete();

        return $this->showOne($product);
    }
    ```
    Importar el facade **Storage**:
    ```php
    use Illuminate\Support\Facades\Storage;
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: DELETE
    + URL: apirestful.dev/sellers/2/products/1005
    **Nota**: debe mostrar el producto eliminado con id 1005 del vendedor con id 2   

### Video 115. Actualizando la Imagen al Editar un Producto
1. Modificar el método **update** del controlador **app\Http\Controllers\Seller\SellerProductController.php**:
    ```php
    public function update(Request $request, Seller $seller, Product $product)
    {
        ≡

        if ($request->has('status')) {
            $product->status = $request->status;
            if($product->estaDisponible() && $product->categories()->count() == 0){
                return $this->errorResponse('Un producto activo debe tener al menos una categoría', 409);
            }
        }

        // Verificar si se ha recibido un archivo
        if($request->hasFile('image')){
            Storage::delete($product->image);
            $product->image = $request->image->store('');
        }

        ≡
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: POST
    + URL: apirestful.dev/sellers/8/products
    + Body: Form
        + Field name: name          | Value: test 33
        + Field name: description   | Value: prueba
        + Field name: quantity      | Value: 5
        + Field name: image         | Tipo Field: [Seleccionar una imagen cualquiera]
    **Nota**: debe mostrar el producto agregado al vendedor con id 8
3. Prueba de endpoint mediante una petición http:
    + Petición: POST    (En realidad cambiaremos el método a PUT en Laravel mediante el parámetro **_method**)
    + URL: apirestful.dev/sellers/8/products
    + Body: Form-code
        + Field name: name          | Value: test 35
        + Field name: description   | Value: prueba actualizada
        + Field name: quantity      | Value: 5
        + Field name: _method       | Value: put
        + Field name: image         | Tipo Field: [Seleccionar una imagen cualquiera diferente a la anterior]
    **Nota**: debe mostrar el producto agregado al vendedor con id 8

## Sección 27: Enviando Correos para la Verificación de Cuentas de Usuario
**Nota**: No se recomienda seguir del todo esta sección porque los métodos que propone ya están desactualizados, y buscar una solución más actualizada para la versión de Laravel del momento.

### Video 116. Preparando el Proyecto para el Envío de Correos
1. Instalar Guzzle en nuestro proyecto:
    + $ composer require guzzlehttp/guzzle
    **Nota**: creo que este punto no es necesario para Laravel 7 en adelante.
2. Modificar el archivo de variables de entorno **.env** para agregar parámetros relacionados con el envío de correos:
    ```
    MAIL_FROM_ADDRESS=postmaster@apirestful.dev
    ≡
    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=7c67f786972696
    MAIL_PASSWORD=8f37b2d25228ba
    MAIL_ENCRYPTION=tls
    MAIL_FROM_ADDRESS=postmaster@apirestful.dev
    ≡
    ```
    **Nota**: para obtener los valores de estas variables de entorno es necesario abrir una cuenta en mailtrap:
    + https://mailtrap.io

### Video 117. Implementando el Sistema de Verificación
1. Agregar la ruta **verify** en el archivo de rutas **routes\api.php**:
    ```php
    Route::name('verify')->get('users/verify/{token}', [UserController::class, 'verify']);
    ```
2. Crear el método **verify** en el controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    public function verify($token){
        $user = User::where('verification_token', $token)->firsOrFail();
        $user->verified = User::USUARIO_VERIFICADO;
        $user->verification_token = null;
        $user->save();
        return $this->showMessage('La cuenta ha sido verificada');
    }
    ```
3. Agregar el método **showMessage** en el trait **app\Traits\ApiResponser.php**:
    ```php
    protected function showMessage($message, $code = 200){
        return $this->successResponse(['data' => $message], $code);
    }
    ```

### Video 118. Creando el Mailable para Usuarios Creados
1. Crear mailable UserCreated:
    + $ php artisan make:mail UserCreated

### Video 119. Implementando el Mailable para Usuarios Creados
1. Implementar el mailable **app\Mail\UserCreated.php**:
    ```php
    <?php

    namespace App\Mail;

    use App\Models\User;
    use Illuminate\Bus\Queueable;
    use Illuminate\Contracts\Queue\ShouldQueue;
    use Illuminate\Mail\Mailable;
    use Illuminate\Queue\SerializesModels;

    class UserCreated extends Mailable
    {
        use Queueable, SerializesModels;

        public $user;

        /**
        * Create a new message instance.
        *
        * @return void
        */
        public function __construct(User $user)
        {
            $this->user = $user;
        }

        /**
        * Build the message.
        *
        * @return $this
        */
        public function build()
        {
            return $this->text('email.welcome');
        }
    }
    ```
2. Crear la **vista resources\views\email\welcome.blade.php**:
    ```php
    Hola {{ $user->name }}
    Gracias por crear una cuenta. Por favor verificala usando el siguiente enlace: 

    {{ route('verify', $user->verification_token) }}
    ```

### Video 120. Enviar Correo de Verificiación Usando Eventos
1. Modificar el método **boot** del provider **app\Providers\AppServiceProvider.php**:
    ```php
    ***
    ```
    Importar las definciones del mailable **UserCreated**, del modelo **User** y el facade de **Mail**:
    ```php
    use App\Mail\UserCreated;
    use App\Models\User;
    use Illuminate\Support\Facades\Mail;
    ```   
2. Modificar el método **build** del mailable **app\Mail\UserCreated.php**:
    ```php
    ***
    ```
3. Crear una cuenta de usuario mediante una petición http:
    + Método: POST
    + URL: apirestful.dev/users
    + Body: Form
        + Field name: name                      | Value: Petrix
        + Field name: email                     | Value: petrix@gmail.com
        + Field name: password                  | Value: 12345678
        + Field name: password_confirmation     | Value: 12345678

### Video 121. Resolviendo un Problema con los Factories
1. Modificar el método **run** del seeder **database\seeders\DatabaseSeeder.php**:
    ```php
    public function run()
    {
        ≡
        // Vaciar todas las tablas
        User::truncate();
        Category::truncate();
        Product::truncate();
        Transaction::truncate();
        DB::table('category_product')->truncate();

        // Evitar que se disparen eventos como los correos de verificación
        User::flushEventListeners();
        Category::flushEventListeners();
        Product::flushEventListeners();
        Transaction::flushEventListeners();
        ≡
    }
    ```

### Video 122. Creando el Mailable para Validar un Nuevo Correo Electrónico
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.
1. Crear mailable UserMailChanged
    + $ php artisan make:mail UserMailChanged

### Video 123. Implementando el Mailable de UserMailChanged
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.

### Video 124. Enviar Verificación para Email Modificado Usando Eventos
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.

### Video 125. Reenviando el Correo de Verificación
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.

### Video 126. Manejando Acciones Propensas a Errores
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.

### Video 127. Usando Mailables y Markdown
**Nota**: por problemas de versión de Laravel no puedo continuar con esta clase.

## Sección 28: Los Middleware y el Limitador de Peticiones

### Video 128. Acerca de los Middleware y Cómo Funcionan
**Contenido**: explicación sobre los middleware.

### Video 129. Creando un Middleware Personalizado
1. Crear middleware **SignatureMiddleware**:
    + $ php artisan make:middleware SignatureMiddleware
2. Modificar el método **handle** del middleware **app\Http\Middleware\SignatureMiddleware.php**:
    ```php
    public function handle(Request $request, Closure $next, $header = 'X-Name')
    {
        $response = $next($request);
        $response->headers->set($header, config('app.name'));
        return $response;
    }
    ```
3. Registrar el middleware **SignatureMiddleware** en **app\Http\Kernel.php**:
    ```php
    <?php

    namespace App\Http;

    use Illuminate\Foundation\Http\Kernel as HttpKernel;

    class Kernel extends HttpKernel
    {
        ≡
        protected $middlewareGroups = [
            'web' => [
                'signature:X-Application-Name', // Importante registrar nuestros middleware al principio
                ≡
            ],

            'api' => [
                'signature:X-Application-Name', // Importante registrar nuestros middleware al principio
                ≡
            ],
        ];

        ≡
        protected $routeMiddleware = [
            ≡
            'signature' => \App\Http\Middleware\SignatureMiddleware::class, // Lo añadimos al final
        ];
    }
    ```

### Video 130. Acerca del Limitador de Peticiones
**Contenido**: explicación del middelware **throttle**.

### Video 131. (Opcional) Personalizando la Respuesta para “Límite Excedido”
**Nota**: esta clase ya no es necesaria a partir de Laravel 5.5.

## Sección 29: Transformando Respuestas por Seguridad y Compatibilidad

### Video 132. Acerca de las Transformaciones y Por Qué Usarlas
**URL**: https://fractal.thephpleague.com

### Video 133. Preparando el Proyecto para la Transformación de Datos
**URL**: https://github.com/spatie/laravel-fractal

1. Instalación de Laravel Fractal:
    + $ composer require spatie/laravel-fractal
2. Registrar el provider para Laravel Fractal en el archivo de configuración **config\app.php**:
    ```php
    <?php

    return [
        ≡
        'providers' => [
            ≡
            /*
            * Package Service Providers...
            */
            Spatie\Fractal\FractalServiceProvider::class,

            /*
            * Application Service Providers...
            */
            ≡
        ],
        ≡
    ];
    ```

### Video 134. Creando la Transformación para User
1. Crear el transformador para el modelo **User** llamado **UserTransformer**:
    + $ php artisan make:transformer UserTransformer
2. Implementar el método **transform** del transformador **app\Transformers\UserTransformer.php**:
    ```php
    public function transform(User $user)
    {
        return [
            'identificador' => (int)$user->id,
            'nombre' => (string)$user->name,
            'correo' => (string)$user->email,
            'esVerificado' => (int)$user->verified,
            'esAdministrador' => ($user->admin === 'true'),
            'fechaCreacion' => (string)$user->created_at,
            'fechaActualizaciln' => (string)$user->updated_at,
            'fechaEliminacion' => isset($user->deleted_at) ? (string) $user->deleted_at : null
        ];
    }
    ```
    Importar el modelo **User**:
    ```php
    use App\Models\User;
    ```

### Video 135. Creando la Transformación para Seller y Buyer
1. Crear el transformador para el modelo **Buyer** llamado **BuyerTransformer**:
    + $ php artisan make:transformer BuyerTransformer
2. Crear el transformador para el modelo **Seller** llamado **SellerTransformer**:
    + $ php artisan make:transformer SellerTransformer
3. Implementar el método **transform** del transformador **app\Transformers\BuyerTransformer.php**:
    ```php
    public function transform(Buyer $buyer)
    {
        return [
            'identificador' => (int)$buyer->id,
            'nombre' => (string)$buyer->name,
            'correo' => (string)$buyer->email,
            'esVerificado' => (int)$buyer->verified,
            'fechaCreacion' => (string)$buyer->created_at,
            'fechaActualizaciln' => (string)$buyer->updated_at,
            'fechaEliminacion' => isset($buyer->deleted_at) ? (string) $buyer->deleted_at : null
        ];
    }
    ```
    Importar el modelo **Buyer**:
    ```php
    use App\Models\Buyer;
    ```
4. Implementar el método **transform** del transformador **app\Transformers\SellerTransformer.php**:
    ```php
    public function transform(Seller $seller)
    {
        return [
            'identificador' => (int)$seller->id,
            'nombre' => (string)$seller->name,
            'correo' => (string)$seller->email,
            'esVerificado' => (int)$seller->verified,
            'fechaCreacion' => (string)$seller->created_at,
            'fechaActualizaciln' => (string)$seller->updated_at,
            'fechaEliminacion' => isset($seller->deleted_at) ? (string) $seller->deleted_at : null
        ];
    }
    ```
    Importar el modelo **Seller**:
    ```php
    use App\Models\Seller;
    ```

### Video 136. Creando la Transformación para Category
1. Crear el transformador para el modelo **Category** llamado **CategoryTransformer**:
    + $ php artisan make:transformer CategoryTransformer
2. Implementar el método **transform** del transformador **app\Transformers\CategoryTransformer.php**:
    ```php
    public function transform(Category $category)
    {
        return [
            'identificador' => (int)$category->id,
            'titulo' => (string)$category->name,
            'detalles' => (string)$category->description,
            'fechaCreacion' => (string)$category->created_at,
            'fechaActualizaciln' => (string)$category->updated_at,
            'fechaEliminacion' => isset($category->deleted_at) ? (string) $category->deleted_at : null
        ];
    }
    ```
    Importar el modelo **Category**:
    ```php
    use App\Models\Category;
    ```

### Video 137. Creando la Transformación para Transaction
1. Crear el transformador para el modelo **Transaction** llamado **TransactionTransformer**:
    + $ php artisan make:transformer TransactionTransformer
2. Implementar el método **transform** del transformador **app\Transformers\TransactionTransformer.php**:
    ```php
    public function transform(Transaction $transaction)
    {
        return [
            'identificador' => (int)$transaction->id,
            'cantidad' => (int)$transaction->quantity,
            'comprador' => (int)$transaction->buyer_id,
            'producto' => (int)$transaction->product_id,
            'fechaCreacion' => (string)$transaction->created_at,
            'fechaActualizaciln' => (string)$transaction->updated_at,
            'fechaEliminacion' => isset($transaction->deleted_at) ? (string) $transaction->deleted_at : null
        ];
    }
    ```
    Importar el modelo **Transaction**:
    ```php
    use App\Models\Transaction;
    ```

### Video 138. Creando la Transformación para Product
1. Crear el transformador para el modelo **Product** llamado **ProductTransformer**:
    + $ php artisan make:transformer ProductTransformer
2. Implementar el método **transform** del transformador **app\Transformers\ProductTransformer.php**:
    ```php
    public function transform(Product $product)
    {
        return [
            'identificador' => (int)$product->id,
            'titulo' => (string)$product->name,
            'detalles' => (string)$product->description,
            'cantidad' => (int)$product->quantity,
            'estado' => (string)$product->status,
            'imagen' => url("img/{$product->image}"),
            'vendedor' => (int)$product->seller_id,
            'fechaCreacion' => (string)$product->created_at,
            'fechaActualizaciln' => (string)$product->updated_at,
            'fechaEliminacion' => isset($product->deleted_at) ? (string) $product->deleted_at : null
        ];
    }
    ```
    Importar el modelo **Product**:
    ```php
    use App\Models\Product;
    ```

### Video 139. Relacionando los Modelos con su Transformación
1. Incluir el transformador **UserTransformer** en el modelo **app\Models\User.php**:
    ```php
    <?php

    namespace App\Models;

    use App\Transformers\UserTransformer;
    ≡

    class User extends Authenticatable
    {
        ≡
        const USUARIO_ADMINISTRADOR = 'true';
        const USUARIO_REGULAR = 'false';

        public $transformer = UserTransformer::class;
        ≡
    }
    ```
2. Incluir el transformador **TransactionTransformer** en el modelo **app\Models\Transaction.php**:
    ```php
    <?php

    namespace App\Models;

    use App\Transformers\TransactionTransformer;
    ≡

    class Transaction extends Model
    {
        use HasFactory, SoftDeletes;

        public $transformer = TransactionTransformer::class;
        ≡
    }
    ```
3. Incluir el transformador **SellerTransformer** en el modelo **app\Models\Seller.php**:
    ```php
    <?php

    namespace App\Models;

    use App\Scopes\SellerScope;
    ≡

    class Seller extends User
    {
        use HasFactory;

        public $transformer = SellerTransformer::class;
        ≡
    }
    ```
4. Incluir el transformador **ProductTransformer** en el modelo **app\Models\Product.php**:
    ```php
    <?php

    namespace App\Models;

    use App\Transformers\ProductTransformer;
    ≡

    class Product extends Model
    {
        ≡
        const PRODUCTO_DISPONIBLE = 'disponible';
        const PRODUCTO_NO_DISPONIBLE = 'no disponible';

        public $transformer = ProductTransformer::class;
        ≡
    }
    ```
5. Incluir el transformador **CategoryTransformer** en el modelo **app\Models\Category.php**:
    ```php
    <?php

    namespace App\Models;

    use App\Transformers\CategoryTransformer;
    ≡

    class Category extends Model
    {
        use HasFactory, SoftDeletes;

        public $transformer = CategoryTransformer::class;
        ≡
    }
    ```
6. Incluir el transformador **BuyerTransformer** en el modelo **app\Models\Buyer.php**:
    ```php
    <?php

    namespace App\Models;

    ≡
    use App\Transformers\BuyerTransformer;
    ≡

    class Buyer extends User
    {
        use HasFactory;

        public $transformer = BuyerTransformer::class;
        ≡
    }
    ```

### Video 140. Retornando las Nuevas Respuestas Transformadas
1. Crear el método **transformData** en el trait **app\Traits\ApiResponser.php** y modificar los métodos **showAll** y **showOne**:
    ```php
    ≡
    trait ApiResponser{
        ≡
        protected function showAll(Collection $collection, $code = 200){
            if($collection->isEmpty()){ // En caso de collection este vacia
                return $this->successResponse(['data' => $collection], $code);
            }
            $transformer = $collection->first()->transformer;   // Para obtener el transformer de la clase adecuada
            $collection = $this->transformData($collection, $transformer);
            return $this->successResponse($collection, $code);
        }

        protected function showOne(Model $instance, $code = 200){
            $transformer = $instance->transformer;   // Para obtener el transformer de la clase adecuada
            $instance = $this->transformData($instance, $transformer);
            return $this->successResponse($instance, $code);
        }
        ≡
        protected function transformData($data, $transformer){
            $transformation = fractal($data, $transformer);
            return $transformation->toArray();
        }
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users
    **Nota**: debe mostrar todos los usuarios con la transformación.
3. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users/22
    **Nota**: debe mostrar el usuario con id 22 con los nombres de los campos transformado.

## Sección 30: Ordenando y Filtrando Resultados Usando Parámetros de URL

### Video 141. Ordenando los Resultados Usando Cualquier Atributo
**URL**: https://elbauldelprogramador.com/buenas-practicas-para-el-diseno-de-una-api-restful-pragmatica/#ordenaci%C3%B3n
1. Crear el método **sortData** en el trait **app\Traits\ApiResponser.php** y modificar el método **showAll**:
    ```php
    ≡
    trait ApiResponser{
        ≡

        protected function showAll(Collection $collection, $code = 200){
            if($collection->isEmpty()){ // En caso de collection este vacia
                return $this->successResponse(['data' => $collection], $code);
            }
            $transformer = $collection->first()->transformer;   // Para obtener el transformer de la clase adecuada
            $collection = $this->sortData($collection);
            $collection = $this->transformData($collection, $transformer);
            return $this->successResponse($collection, $code);
        }

        ≡

        protected function sortData(Collection $collection){
            if(request()->has('sort_by')){  // Verifica que en la petición de la url exista un parámetro de nombre sort_by
                $attribute = request()->sort_by;
                $collection = $collection->sortBy->{$attribute};
            }
            return $collection;
        }
        ≡
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users?sort_by=name
    **Nota**: debe mostrar todos los usuarios ordenados por nombre.

### Video 142. El Problema con las Respuestas Ordenadas
**Contenido**: problematica con el ordenamiento con los parámetros originales y no con los transformados.

### Video 143. Mejorando las Transformaciones para Resolver el Problema
1. Crear método **originalAttribute** en el transformer **app\Transformers\UserTransformer.php**:
    ```php
    public static function originalAttribute($index){
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'correo' => 'email',
            'esVerificado' => 'verified',
            'esAdministrador' => 'admin',
            'fechaCreacion' => 'created_at',
            'fechaActualizaciln' => 'updated_at',
            'fechaEliminacion' => 'deleted_at'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```
2. Crear método **originalAttribute** en el transformer **app\Transformers\TransactionTransformer.php**:
    ```php
    public static function originalAttribute($index){
        $attributes = [
            'identificador' => 'id',
            'cantidad' => 'quantity',
            'comprador' => 'buyer_id',
            'producto' => 'product_id',
            'fechaCreacion' => 'created_at',
            'fechaActualizaciln' => 'updated_at',
            'fechaEliminacion' => 'deleted_at'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```
3. Crear método **originalAttribute** en el transformer **app\Transformers\SellerTransformer.php**:
    ```php
    public static function originalAttribute($index){
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'correo' => 'email',
            'esVerificado' => 'verified',
            'fechaCreacion' => 'created_at',
            'fechaActualizaciln' => 'updated_at',
            'fechaEliminacion' => 'deleted_at'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```
4. Crear método **originalAttribute** en el transformer **app\Transformers\ProductTransformer.php**:
    ```php
    public static function originalAttribute($index){
        $attributes = [
            'identificador' => 'id',
            'titulo' => 'name',
            'detalles' => 'description',
            'cantidad' => 'quantity',
            'estado' => 'status',
            'imagen' => 'image',
            'vendedor' => 'seller_id',
            'fechaCreacion' => 'created_at',
            'fechaActualizaciln' => 'updated_at',
            'fechaEliminacion' => 'deleted_at'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```
5. Crear método **originalAttribute** en el transformer **app\Transformers\CategoryTransformer.php**:
    ```php
    public static function originalAttribute($index){
        $attributes = [
            'identificador' => 'id',
            'titulo' => 'name',
            'detalles' => 'description',
            'fechaCreacion' => 'created_at',
            'fechaActualizaciln' => 'updated_at',
            'fechaEliminacion' => 'deleted_at'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```
6. Crear método **originalAttribute** en el transformer **app\Transformers\BuyerTransformer.php**:
    ```php
    public static function originalAttribute($index){
        $attributes = [
            'identificador' => 'id',
            'nombre' => 'name',
            'correo' => 'email',
            'esVerificado' => 'verified',
            'fechaCreacion' => 'created_at',
            'fechaActualizaciln' => 'updated_at',
            'fechaEliminacion' => 'deleted_at'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```

### Video 144. Resolviendo el Problema Usando las Transformaciones
1. Modificar los métodos **showAll** y **sortDate** del trait **app\Traits\ApiResponser.php**:
    ```php
    ≡
    trait ApiResponser{
        ≡

        protected function showAll(Collection $collection, $code = 200){
            if($collection->isEmpty()){ // En caso de collection este vacia
                return $this->successResponse(['data' => $collection], $code);
            }
            $transformer = $collection->first()->transformer;   // Para obtener el transformer de la clase adecuada
            $collection = $this->sortData($collection, $transformer);
            $collection = $this->transformData($collection, $transformer);
            return $this->successResponse($collection, $code);
        }

        ≡

        protected function sortData(Collection $collection, $transformer){
            if(request()->has('sort_by')){  // Verifica que en la petición de la url exista un parámetro de nombre sort_by
                $attribute = $transformer::originalAttribute(request()->sort_by);
                $collection = $collection->sortBy->{$attribute};
            }
            return $collection;
        }

        ≡
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users?sort_by=nombre
    **Nota**: debe mostrar todos los usuarios ordenados por nombre.

### Video 145. Filtrando Respuestas Según Múltiples Atributos
**URL**: https://elbauldelprogramador.com/buenas-practicas-para-el-diseno-de-una-api-restful-pragmatica/#filtrado
1. Crear el método **filterData** en el trait **app\Traits\ApiResponser.php** y modificar el método **showAll**:
    ```php
    ≡
    trait ApiResponser{
        ≡

        protected function showAll(Collection $collection, $code = 200){
            if($collection->isEmpty()){ // En caso de collection este vacia
                return $this->successResponse(['data' => $collection], $code);
            }
            $transformer = $collection->first()->transformer;   // Para obtener el transformer de la clase adecuada
            $collection = $this->filterData($collection, $transformer);
            $collection = $this->sortData($collection, $transformer);
            $collection = $this->transformData($collection, $transformer);
            return $this->successResponse($collection, $code);
        }

        ≡

        protected function filterData(Collection $collection, $transformer){
            foreach(request()->query() as $query => $value){
                $attribute = $transformer::originalAttribute($query);
                // Verifica que el atributo y el valor no sean vacios
                if(isset($attribute, $value)){
                    // Obtener la colección en donde el atributo sea igual al valor
                    $collection = $collection->where($attribute, $value);
                }
            }
            return $collection;
        }

        ≡
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users?esVerificado=0
    **Nota**: debe mostrar todos los usuarios que no están verificados.
3. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users?esVerificado=0&esAdministrador=false
    **Nota**: debe mostrar todos los usuarios que no están verificados y que no son administradores.

## Sección 31: Paginación de Resultados

### Video 146. Acerca de la Paginación
**URL**: https://www.udemy.com/course/api-restful-con-laravel-php-homestead-passport/learn/lecture/6819950#questions
**Contenido**: importancia de la páginación.

### Video 147. Paginando Colecciones
1. Modificar el método **showAll** del trait **app\Traits\ApiResponser.php** y crear el método **paginate**:
    ```php
    <?php

    namespace App\Traits;

    ≡
    use Illuminate\Pagination\LengthAwarePaginator;

    trait ApiResponser{
        ≡

        protected function showAll(Collection $collection, $code = 200){
            if($collection->isEmpty()){ // En caso de collection este vacia
                return $this->successResponse(['data' => $collection], $code);
            }
            $transformer = $collection->first()->transformer;   // Para obtener el transformer de la clase adecuada
            $collection = $this->filterData($collection, $transformer);
            $collection = $this->sortData($collection, $transformer);
            $collection = $this->paginate($collection);
            $collection = $this->transformData($collection, $transformer);
            return $this->successResponse($collection, $code);
        }

        ≡

        protected function paginate(Collection $collection){
            $page = LengthAwarePaginator::resolveCurrentPage();
        
            $perPage = 15;
            $results = $collection->slice(($page -1) * $perPage, $perPage)->values();
            $paginated = new LengthAwarePaginator($results, $collection->count(), $perPage, $page, [
                'path' => LengthAwarePaginator::resolveCurrentPath()
            ]);
            $paginated->appends(request()->all());
            return $paginated;
        }

        ≡
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users
    **Nota**: debe mostrar los primeros 15 usuarios y la información de la página.
3. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users?page=2
    **Nota**: debe mostrar la página 2 de usuarios.
4. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users?page=2&order_by=nombre
    **Nota**: debe mostrar la página 2 de usuarios de una colección ordenada por nombres.

### Video 148. Permitiendo Tamaño de Página Personalizado
1. Modificar el método **paginate** del trait **app\Traits\ApiResponser.php**:
    ```php
    protected function paginate(Collection $collection){
        $rules = [
            'per_page' => 'integer|min:2|max:100'
        ];
        Validator::validate(request()->all(), $rules);
        $page = LengthAwarePaginator::resolveCurrentPage();
       
        $perPage = 15;
        if (request()->has('per_page')) {
            $perPage = (int) request()->per_page;
        }
        $results = $collection->slice(($page -1) * $perPage, $perPage)->values();
        $paginated = new LengthAwarePaginator($results, $collection->count(), $perPage, $page, [
            'path' => LengthAwarePaginator::resolveCurrentPath()
        ]);
        $paginated->appends(request()->all());
        return $paginated;
    }
    ```
    Importar el facade **Validator**:
    ```php
    use Illuminate\Support\Facades\Validator;
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users?per_page=5
    **Nota**: debe mostrar 5 usuarios por página.

## Sección 32: Caché de Resultados

### Video 149. Implementando el Sistema de Caché
**URL**: https://elbauldelprogramador.com/buenas-practicas-para-el-diseno-de-una-api-restful-pragmatica/#20-cacheo
1. Modificar el método **showAll** del trait **app\Traits\ApiResponser.php** y crear el método **cacheResponse**:
    ```php
    <?php

    namespace App\Traits;

    ≡
    use Illuminate\Support\Facades\Cache;

    trait ApiResponser{
        ≡

        protected function showAll(Collection $collection, $code = 200){
            if($collection->isEmpty()){ // En caso de collection este vacia
                return $this->successResponse(['data' => $collection], $code);
            }
            $transformer = $collection->first()->transformer;   // Para obtener el transformer de la clase adecuada
            $collection = $this->filterData($collection, $transformer);
            $collection = $this->sortData($collection, $transformer);
            $collection = $this->paginate($collection);
            $collection = $this->transformData($collection, $transformer);
            $collection = $this->cacheResponse($collection);
            return $this->successResponse($collection, $code);
        }

        ≡

        protected function cacheResponse($data){
            $url = request()->url();
            return Cache::remember($url, 15/60, function () use($data) {
                return $data;
            });
        }
    }
    ```

### Video 150. El Sistema de Caché y los Parámetros de
1. Modificar el método **cacheResponse** del trait **app\Traits\ApiResponser.php**:
    ```php
    protected function cacheResponse($data){
        $url = request()->url();
        $queryParams = request()->query();  // Obtener los parámetros da la url
        ksort($queryParams);    // Ordena los parámetros de la url
        $queryString = http_build_query($queryParams);  // Recontruir la forma en que la url lee el arreglo de parámetros
        $fullUrl = "{$url}?{$queryString}";  // Reconstruir la url completa
        return Cache::remember($url, 15/60, function () use($data) {
            return $data;
        });
    }
    ```

## Sección 33: Implementando HATEOAS Hypermedia Controls

### Video 151. ¿Qué es HATEOAS y Por Qué Usarlo?
**URL**: https://www.adictosaltrabajo.com/2013/12/02/spring-hateoas/#03
**Contenido**: Importancia de implementar HATEOAS.

### Video 152. Implementando HATEOAS para Instancias de Category
1. Modificar el método **transform** del transformador **app\Transformers\CategoryTransformer.php** para implementar HATEOAS:
    ```php
    public function transform(Category $category)
    {
        return [
            ≡
            'fechaEliminacion' => isset($category->deleted_at) ? (string) $category->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('categories.show', $category->id),
                ],
                [
                    'rel' => 'category.buyers',
                    'href' => route('categories.buyers.index', $category->id),
                ],
                [
                    'rel' => 'category.products',
                    'href' => route('categories.products.index', $category->id),
                ],
                [
                    'rel' => 'category.sellers',
                    'href' => route('categories.sellers.index', $category->id),
                ],
                [
                    'rel' => 'category.transactions',
                    'href' => route('categories.transactions.index', $category->id),
                ],
            ],
        ];
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/cetogories
    **Nota**: debe mostrar todas las categorías pero ahora incluyendo enlaces relacionados.

### Video 153. Implementando HATEOAS para Instancias de Product
1. Modificar el método **transform** del transformador **app\Transformers\ProductTransformer.php** para implementar HATEOAS:
    ```php
    public function transform(Product $product)
    {
        return [
            ≡
            'fechaEliminacion' => isset($product->deleted_at) ? (string) $product->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('products.show', $product->id),
                ],
                [
                    'rel' => 'product.buyers',
                    'href' => route('products.buyers.index', $product->id),
                ],
                [
                    'rel' => 'product.categories',
                    'href' => route('products.categories.index', $product->id),
                ],
                [
                    'rel' => 'product.transactions',
                    'href' => route('products.transactions.index', $product->id),
                ],
                [
                    'rel' => 'seller',
                    'href' => route('sellers.show', $product->seller_id),
                ],
            ],
        ];
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/products
    **Nota**: debe mostrar todas los productos pero ahora incluyendo enlaces relacionados.

### Video 154. Implementando HATEOAS para Instancias de Transaction
1. Modificar el método **transform** del transformador **app\Transformers\TransactionTransformer.php** para implementar HATEOAS:
    ```php
    public function transform(Transaction $transaction)
    {
        return [
            ≡
            'fechaEliminacion' => isset($transaction->deleted_at) ? (string) $transaction->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('transactions.show', $transaction->id),
                ],
                [
                    'rel' => 'transaction.categories',
                    'href' => route('transactions.categories.index', $transaction->id),
                ],
                [
                    'rel' => 'transaction.seller',
                    'href' => route('transactions.sellers.index', $transaction->id),
                ],
                [
                    'rel' => 'buyer',
                    'href' => route('buyers.show', $transaction->buyer_id),
                ],
                [
                    'rel' => 'product',
                    'href' => route('products.show', $transaction->product_id),
                ],
            ],
        ];
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/transactions
    **Nota**: debe mostrar todas las transacciones pero ahora incluyendo enlaces relacionados.

### Video 155. Implementando HATEOAS para Instancias de User
1. Modificar el método **transform** del transformador **app\Transformers\UserTransformer.php** para implementar HATEOAS:
    ```php
    public function transform(User $user)
    {
        return [
            ≡
            'fechaEliminacion' => isset($user->deleted_at) ? (string) $user->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('users.show', $user->id),
                ],
            ],
        ];
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/users
    **Nota**: debe mostrar todos los usuarios pero ahora incluyendo enlaces relacionados.

### Nota 156. (Ejercicio) Implementando HATEOAS para Instancias de Buyer
1. Modificar el método **transform** del transformador **app\Transformers\BuyerTransformer.php** para implementar HATEOAS:
    ```php
    public function transform(Buyer $buyer)
    {
        return [
            ≡
            'fechaEliminacion' => isset($buyer->deleted_at) ? (string) $buyer->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('buyers.show', $buyer->id),
                ],
                [
                    'rel' => 'buyer.categories',
                    'href' => route('buyers.categories.index', $buyer->id),
                ],
                [
                    'rel' => 'buyer.products',
                    'href' => route('buyers.products.index', $buyer->id),
                ],
                [
                    'rel' => 'buyer.sellers',
                    'href' => route('buyers.sellers.index', $buyer->id),
                ],
                [
                    'rel' => 'buyer.transactions',
                    'href' => route('buyers.transactions.index', $buyer->id),
                ],
                [
                    'rel' => 'user',
                    'href' => route('users.show', $buyer->id),
                ],
            ],
        ];
    }
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/buyers
    **Nota**: debe mostrar todos los compradores pero ahora incluyendo enlaces relacionados.

### Nota 157. (Ejercicio) Implementando HATEOAS para Instancias de Seller
1. Modificar el método **transform** del transformador **app\Transformers\SellerTransformer.php** para implementar HATEOAS:
    ```php
    public function transform(Seller $seller)
    {
        return [
            ≡
            'fechaEliminacion' => isset($seller->deleted_at) ? (string) $seller->deleted_at : null,

            'links' => [
                [
                    'rel' => 'self',
                    'href' => route('sellers.show', $seller->id),
                ],
                [
                    'rel' => 'seller.buyers',
                    'href' => route('sellers.buyers.index', $seller->id),
                ],
                [
                    'rel' => 'seller.categories',
                    'href' => route('sellers.categories.index', $seller->id),
                ],
                [
                    'rel' => 'seller.products',
                    'href' => route('sellers.products.index', $seller->id),
                ],
                [
                    'rel' => 'seller.transactions',
                    'href' => route('sellers.transactions.index', $seller->id),
                ],
                [
                    'rel' => 'user',
                    'href' => route('users.show', $seller->id),
                ],
            ],
        ];
    } 
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: GET
    + URL: apirestful.dev/sellers
    **Nota**: debe mostrar todos los vendedores pero ahora incluyendo enlaces relacionados.

## Sección 34: Las Transformaciones y las Validaciones

### Video 158. Comprendiendo Dos Problemas con Transformaciones y Validaciones
**Contenido**: problematica con las transforamciones.

### Video 159. Creando y Usando un Middleware para Resolver el Problema
1. Crear middleware **TransformInput**:
    + $ php artisan make:middleware TransformInput
2. Registrar el middleware **TransformInput** en el archivo kernel **app\Http\Kernel.php**:
    ```php
    <?php
    ≡
    class Kernel extends HttpKernel
    {
        ≡
        protected $routeMiddleware = [
            ≡
            'transform.input' => \App\Http\Middleware\TransformInput::class,
        ];
    }
    ```
3. Implementar el middleware **TransformInput** en el controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    ≡
    use App\Transformers\UserTransformer;

    class UserController extends ApiController
    {
        public function __construct(){
            parent::__construct();
            $this->middleware('transform.input' . UserTransformer::class)->only(['store', 'update']);
        }
        ≡
    }
    ```
4. Implementar el middleware **TransformInput** en el controlador **app\Http\Controllers\User\SellerProductController.php**:
    ```php
    ≡
    use App\Transformers\ProductTransformer;

    class SellerProductController extends ApiController
    {    
        public function __construct(){
            parent::__construct();
            $this->middleware('transform.input' . ProductTransformer::class)->only(['store', 'update']);
        }
        ≡
    }
    ```
5. Implementar el middleware **TransformInput** en el controlador **app\Http\Controllers\Product\ProductBuyerTransactionController.php**:
    ```php
    ≡
    use App\Transformers\TransactionTransformer;

    class ProductBuyerTransactionController extends ApiController
    {   
        public function __construct(){
            parent::__construct();
            $this->middleware('transform.input' . TransactionTransformer::class)->only(['store']);
        }
        ≡
    }
    ```
6. Implementar el middleware **TransformInput** en el controlador **app\Http\Controllers\Category\CategoryController.php**:
    ```php
    ≡
    use App\Transformers\CategoryTransformer;

    class CategoryController extends ApiController
    {    
        public function __construct(){
            parent::__construct();
            $this->middleware('transform.input' . CategoryTransformer::class)->only(['store', 'update']);
        }
        ≡
    }
    ```
7. Modificar el controlador **app\Http\Controllers\ApiController.php** para definir un constructor vacio.
    ```php
    <?php

    namespace App\Http\Controllers;

    use App\Traits\ApiResponser;
    use Illuminate\Http\Request;

    class ApiController extends Controller
    {
        use ApiResponser;

        public function __construct(){
            
        }
    }
    ```

### Video 160. Implementando la Solución al Primer Problema Usando el Middleware
1. Implementar el método **handle** del middleware **app\Http\Middleware\TransformInput.php**:
    ```php
    public function handle(Request $request, Closure $next, $transformer)
    {
        $transformedInput = [];
        foreach($request->request->all() as $input => $value){
            $transformedInput[$transformer::originalAttribute($input)] = $value;
        }
        $request->replace($transformedInput);
        return $next($request);
    }
    ```

### Video 161. Mejorando las Transformaciones para Resolver el Segundo Problema
1. Crear el método **transformedAttribute** en el transformador **app\Transformers\UserTransformer.php**:
    ```php
    public static function transformedAttribute($index){
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'email' => 'correo',
            'verified' => 'esVerificado',
            'admin' => 'esAdministrador',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizaciln',
            'deleted_at' => 'fechaEliminacion'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```
2. Crear el método **transformedAttribute** en el transformador **app\Transformers\TransactionTransformer.php**:
    ```php
    public static function transformedAttribute($index){
        $attributes = [
            'id' => 'identificador',
            'quantity' => 'cantidad',
            'buyer_id' => 'comprador',
            'product_id' => 'producto',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizaciln',
            'deleted_at' => 'fechaEliminacion'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```
3. Crear el método **transformedAttribute** en el transformador **app\Transformers\SellerTransformer.php**:
    ```php
    public static function transformedAttribute($index){
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'email' => 'correo',
            'verified' => 'esVerificado',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizaciln',
            'deleted_at' => 'fechaEliminacion'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```
4. Crear el método **transformedAttribute** en el transformador **app\Transformers\ProductTransformer.php**:
    ```php
    public static function transformedAttribute($index){
        $attributes = [
            'id' => 'identificador',
            'name' => 'titulo',
            'description' => 'detalles',
            'quantity' => 'cantidad',
            'status' => 'estado',
            'image' => 'imagen',
            'seller_id' => 'vendedor',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizaciln',
            'deleted_at' => 'fechaEliminacion'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```
5. Crear el método **transformedAttribute** en el transformador **app\Transformers\CategoryTransformer.php**:
    ```php
    public static function transformedAttribute($index){
        $attributes = [
            'id' => 'identificador',
            'name' => 'titulo',
            'description' => 'detalles',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizaciln',
            'deleted_at' => 'fechaEliminacion'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```
6. Crear el método **transformedAttribute** en el transformador **app\Transformers\CategoryTransformer.php**:
    ```php
    public static function transformedAttribute($index){
        $attributes = [
            'id' => 'identificador',
            'name' => 'nombre',
            'email' => 'correo',
            'verified' => 'esVerificado',
            'created_at' => 'fechaCreacion',
            'updated_at' => 'fechaActualizaciln',
            'deleted_at' => 'fechaEliminacion'
        ];

        // Si se encuentra el indice que buscamos, lo retornamos, sino, devolvemos null
        return isset($attributes[$index]) ? $attributes[$index] : null; 
    }
    ```

### Video 162. Mejorando el Middleware para Resolver el Segundo Problema
1. Modificar el método **handle** del middleware **app\Http\Middleware\TransformInput.php**:
    ```php
    public function handle(Request $request, Closure $next, $transformer)
    {
        $transformedInput = [];
        foreach($request->request->all() as $input => $value){
            $transformedInput[$transformer::originalAttribute($input)] = $value;
        }
        $request->replace($transformedInput);
        $response = $next($request);
        if(isset($response->exception) && $response->exception instanceof ValidationException){
            $data = $response->getData();
            $transformedErrors = [];
            foreach ($data->error as $field => $error) {
                $transformedField = $transformer::transformedAttribute($field);
                $transformedErrors[$transformedField] = str_replace($field, $transformedField, $error);
            }
            $data->error = $transformedErrors;
            $response->setData($data);
        }
        return $response;
    }
    ```
    Importar la definición de **ValidationException**:
    ```php
    use Illuminate\Validation\ValidationException;
    ```
2. Prueba de endpoint mediante una petición http:
    + Petición: POST
    + URL: apirestful.dev/cetogories
    **Nota**: debe mostrar un mensaje de error con los campos de los parámetros no enviados transformados.

## Sección 35: Preparando la API para Autenticación de Usuarios Usando Sesiones
**Nota**: Para esta sección se realizarán los mejores esfuerzos para adaptarla a la versión de Laravel 8.

### Video 163. ¿Por Qué es Requerido en la API?
**Contenido**: necesidad de solicitar la autenticación de usuario.

### NOta 164. Laravel 6 (o superior): Antes de continuar...
>
    Laravel 6 (o superior): Antes de continuar...
    A partir de Laravel 6, construir los componentes de autenticación, sigue siendo posible pero con algunos cambios, debido a que ahora los componentes visuales están en un paquete aparte (el que instalaste en la clase 13).

    En la clase que vendrá, haré uso de un comando llamado make:auth. Sin embargo, a partir de Laravel 6.0, este comando NO existe y ha sido reemplazado por lo siguiente:

    ui vue --auth, quedando entonces php artisan ui vue --auth

    Este comando hace dos cosas importantes:

    La primera, agrega Vue.js, junto con Bootstrap, para los componentes visuales y con el parámetro de --auth agrega los mismos componentes relacionados con la autenticación de usuarios: los controladores de Auth (ahora estarán en tu proyecto), las vistas, y los layouts relacionados con todo esto.

    ---- Opcional:

    En este punto vas a tener los mismos componentes. Sin embargo, como Laravel ya no viene por defecto con Boostrap ni Vue.js, tendrás que compilar de nuevo los "assets" (es decir el CSS y el JS) para poder usarlos sin problemas (tal como se hace en el curso).

    Para ello debes ejecutar npm install (para instalar las dependencias del frontend, así como hace composer) y luego, ejecutar  npm run dev para generar todos los componentes.

    Estos pasos son opcionales, pues en una clase posterior los llevaremos a cabo (Clase 181: "Preparando la API para Usar los Componentes de Passport").

    Sé que parece un tanto engorroso, pero es un proceso que puede tomar menos de 10 minutos y además solo debes realizarlo una vez.

    Por supuesto, acá estaré en caso de cualquier duda.

    RECUERDA: Si estás en Laravel 6, a en la clase siguiente, debes usar php artisan ui vue --auth en lugar de php artisan make:auth

### Video 165. Creando la Estructura Adicional para Autenticación
1. Instalar Laravel Breeze:
    + $ composer require laravel/breeze --dev
    + $ php artisan breeze:install
    + $ npm install
    + $ npm run dev
    + $ php artisan migrate:fresh --seed

### Video 166. Afinando Algunas Estructuras para Evitar Inconsistencias
1. Modificar la vista **resources\views\welcome.blade.php** para que no muestre el menú de registro y eliminar del cuerpo todo lo que no sea necesario, dejar solo un texto que indique algo así: **Bienvenido al Frontend de la API**.
2. Modificar el archivo de rutas **routes\auth.php** para comentar las rutas de registro de usuario, también se podrian eliminar o comentar su método en su controlador.
 
### Video 167. Acerca de CSRF y Manejando Excepciones de CSRF
**Nota**: Esta sección no es compatible con Larvel 8.

### Video 168. Retornando HTML y Redirecciones Cuando Sea Requerido
**Nota**: Esta sección no es compatible con Larvel 8.
Como saber si una pateción requiere una respuesta HTML y proviene de nuestra API:
```php
private function isFrontend($request){
    return $request->acceptsHtml() && collect($request->route()->middleware())->contains('web');
}
```

## Sección 36: Implementando la Capa Inicial de Seguridad con Laravel Passport (OAuth2)

### Video 169. Acerca de OAuth2 y la Seguridad en las APIs
**URL**: https://ahorasomos.izertis.com/solidgear/oauth2-protocolo-de-autorizacion/?lang=es
+ **Contenido**: información de OAuth2 para seguridad de las API's.

### Video 170. ¿Qué es Laravel Passport?
+ **Contenido**: información de Laravel Passport para seguridad de las API's.

### Video 171. Preparando el Proyecto para Usar Laravel Passport
1. Instalar dependencias de Laravel Passport:
    + $ composer require laravel/passport
2. Registrar el provider en el archivo de configuración **config\app.php**:
    ```php
    <?php

    return [
        ≡
        'providers' => [
            ≡
            /*
            * Package Service Providers...
            */
            Laravel\Passport\PassportServiceProvider::class,
            ≡
        ],
        ≡
    ];
    ```
3. Validar el correcto funcionamiento de Laravel Passport:
    + $ php artisan
    + Verificar que existen comandos relacionados con **passport**.

### Video 172. Usando las Migraciones de Laravel Passport
1. Ejecutar las migraciones:
    + $ php artisan migrate

### Video 173. Instalando Passport de Forma Definitiva en la API
1. Instalar Laravel Passport:
    + $ php artisan passport:install
    + Salida:
    ```
    Personal access client created successfully.
    Client ID: 1
    Client secret: YLUG2iP5ohvJKeMPxoHWLLCTYflOlHsEvy8dvm4b
    Password grant client created successfully.
    Client ID: 2
    Client secret: EiKaMWLxblQQECjvubbbXgh0dPKNoYb50OzbWzL2
    ```
    + Se generan dos archivos con claves:
        + storage\oauth-private.key
        + storage\oauth-public.key

### Video 174. Autenticando Usuarios por Medio de Tokens de la API
1. En el modelo **app\Models\User.php** agregar el trait **HasApiTokens**:
    ```php
    <?php

    namespace App\Models;

    ≡
    use Laravel\Sanctum\HasApiTokens;
    ≡

    class User extends Authenticatable
    {
        use HasApiTokens, HasFactory, Notifiable, HasApiTokens, SoftDeletes;

        ≡
    }
    ```
    **Nota**: ahora podemos validar usuarios por medio de un **AccessToken**.

### Video 175. Registrando las Rutas Requeridas
1. Registrar las rutas requeridas en el método **boot** del provider **app\Providers\AuthServiceProvider.php**:
    ```php
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
    }
    ```
    Importar la definición de **Passport**:
    ```php
    use Laravel\Passport\Passport;
    ```    
    + **Nota**: genera las rutas de tipo: oauth/*** 
2. Registrar la ruta **oauth/token** en el archivo de rutas **routes\api.php**:
    ```php
    Route::post('oauth.token', [AccessTokenController::class, 'issueToken']);
    ```
    Importar la definición de **AccessTokenController**:
    ```php
    use Laravel\Passport\Http\Controllers\AccessTokenController;
    ```

### Video 176. Configurando el Sistema de Autenticación
1. Modificar el archivo de configuración **config\auth.php** para difinir el **guard** para el **drive** de **api**:
    ```php
    <?php

    return [
        ≡
        'guards' => [
            'web' => [
                'driver' => 'session',
                'provider' => 'users',
            ],

            'api' => [
                'driver' => 'passport',
                'provider' => 'users',
            ],
        ],
        ≡
    ];
    ```

### Video 177. Definiendo el Tiempo de Expiración de los Tokens
1. Modificar el método **boot** del provider **app\Providers\AuthServiceProvider.php**:
    ```php
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
        Passport::tokensExpireIn(Carbon::now()->addMinutes(30));
        Passport::refreshTokensExpireIn(Carbon::now()->addDays(30));
    }
    ```
    Importar la definición de **Carbon**:
    ```php
    use Carbon\Carbon;
    ```

### Video 178. Usando client_credentials para Proteger Algunas Rutas
1. Registrar el middleware **client.credentials** en el kernel **app\Http\Kernel.php**:
    ```php
    ≡
    class Kernel extends HttpKernel
    {
        ≡
        protected $routeMiddleware = [
            ≡
            'can' => \Illuminate\Auth\Middleware\Authorize::class,
            'client.credentials' => \Laravel\Passport\Http\Middleware\CheckClientCredentials::class,
            'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
            ≡
        ];
    }
    ```
2. Registrar el middlawere **client.credentials** en el controlador **app\Http\Controllers\Category\CategoryController.php** modificando el método **__construct**:
    ```php
    public function __construct(){
        $this->middleware('client.credentials')->only(['index', 'show']);
        $this->middleware('transform.input' . CategoryTransformer::class)->only(['store', 'update']);
    }
    ```
3. Registrar el middlawere **client.credentials** en el controlador **app\Http\Controllers\Category\CategoryProductController.php** creando el método **__construct**:
    ```php
    public function __construct(){
        $this->middleware('client.credentials')->only(['index']);
    }
    ```
4. Registrar el middlawere **client.credentials** en el controlador **app\Http\Controllers\Product\ProductController.php** creando el método **__construct**:
    ```php
    public function __construct(){
        $this->middleware('client.credentials')->only(['index', 'show']);
    }
    ```
5. Registrar el middlawere **client.credentials** en el controlador **app\Http\Controllers\Product\ProductCategoryController.php** creando el método **__construct**:
    ```php
    public function __construct(){
        $this->middleware('client.credentials')->only(['index']);
    }
    ```
6. Registrar el middlawere **client.credentials** en el controlador **app\Http\Controllers\Transaction\TransactionCategoryController.php** creando el método **__construct**:
    ```php
    public function __construct(){
        $this->middleware('client.credentials')->only(['index']);
    }
    ```
7. Registrar el middlawere **client.credentials** en el controlador **app\Http\Controllers\User\UserController.php** creando el método **__construct**:
    ```php
    public function __construct(){
        $this->middleware('client.credentials')->only(['store']);
        $this->middleware('transform.input' . UserTransformer::class)->only(['store', 'update']);
    }
    ```






### Video 179. Cómo Obtener y Usar un Token Usando Client Credentials
1. Crear cliente:
    + $ php artisan passport:client
    + Which user ID should the client be assigned to?: > 0
    + What should we name the client?: > Cliente
    + Where should we redirect the request after authorization? [http://apirestful.dev/auth/callback]: [ENTER]
    + Resultado:
        ```
        New client created successfully.
        Client ID: 3
        Client secret: 7fwfIqLAChhy1MGRBdkbY6NenHKrQwIVbkoPdkt3
        ```
2. Enviar petición http:
    + Método: POST
    + URL: apirestful.dev/oauth/token
    + Body:
        + Form:
            + Field name: grant_type    | Value: client_credentials
            + Field name: client_id     | Value: 3
            + Field name: client_secret | Value: 7fwfIqLAChhy1MGRBdkbY6NenHKrQwIVbkoPdkt3
    **Nota**: esta petición devolverá un token:
    ```json
    {
        "token_type": "Bearer",
        "expires_in": 1800,
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMTljZGQ4M2NjM2RkY2JiZmIxZDUzNjQ0MmUyMjViN2Y1YjkwNThkMmRhODJmNDUwZThlMWNiYWQ4ZmNmYTQwZWYxNWY0MjJhNzNiZDI0ODQiLCJpYXQiOjE2MzE5MjIxNDguMTk5MDYxLCJuYmYiOjE2MzE5MjIxNDguMTk5MDY3LCJleHAiOjE2MzE5MjM5NDguMTM4ODIzLCJzdWIiOiIiLCJzY29wZXMiOltdfQ.d33CMNYrNttWQASm0XaDQHP04Qt3trgnu66EOVUx4EKWi4W2FuNFJV6H80H1RKP7-D9PX317Ra84sk9WmW4Q5e5HDxdoSJ0u2kpZ1SXAdszlfLFg1OlAxAclW-W0rG_99duNZFe3c24FrCgStOclwl9rYsV13by2fsxkwlpLC-XQRs393Mfcwgmx4lQ-_r4ER5epScuZ0UOQXaWrEW16sjBsnh1x0P2OMNGM0jJ3v4DooCg77Q_gef08NpHld8a4XpX_zyDpmhF5YJwE2d7SYEWs4Y4MaNFP4wgjaVzFJA0mJQltzqJ4Jsn48Kp4UdluZT1kmD97UOVWZlbWcQS8upDgVOyIVXZ4UapBQCaEdjj_YpXUc3AY-kEpH6usgNVxp2Yf9VVVZ5C1yZZdmZNdUPBKo13WhgTee05WbpCh4g9nQyYYiSKCV_ID6Zc-WA7_7TbU-vFQcIcFSsw2YQObfTs1_IhODgmLpHBqlfSLF6ekAZUf6ZRzHGfLqSMYp42HMSOl1OD0KOAPRccyT6Iow2vr42vjUQzesqm_tbb2xunRjYxjiM8djRKxWO5BpC39zAw4BQdSA5F-nbn3ciZcaQuGsWorlj8iQcO1zky2Bj3QZTVhaY6_5qSSzFq_mvy0nmgHceqKNCZ5LLIOgW11C7grl9Gq-PdRDYIeZ-DYHVI"
    }
    ```
3. Usaremos el token obtenido para ver las categorías con la siguiente petición:
    + Método: GET
    + URL: apirestful.dev/categories
    + Headers:
        + Header: Authorization     | Value: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIzIiwianRpIjoiMTljZGQ4M2NjM2RkY2JiZmIxZDUzNjQ0MmUyMjViN2Y1YjkwNThkMmRhODJmNDUwZThlMWNiYWQ4ZmNmYTQwZWYxNWY0MjJhNzNiZDI0ODQiLCJpYXQiOjE2MzE5MjIxNDguMTk5MDYxLCJuYmYiOjE2MzE5MjIxNDguMTk5MDY3LCJleHAiOjE2MzE5MjM5NDguMTM4ODIzLCJzdWIiOiIiLCJzY29wZXMiOltdfQ.d33CMNYrNttWQASm0XaDQHP04Qt3trgnu66EOVUx4EKWi4W2FuNFJV6H80H1RKP7-D9PX317Ra84sk9WmW4Q5e5HDxdoSJ0u2kpZ1SXAdszlfLFg1OlAxAclW-W0rG_99duNZFe3c24FrCgStOclwl9rYsV13by2fsxkwlpLC-XQRs393Mfcwgmx4lQ-_r4ER5epScuZ0UOQXaWrEW16sjBsnh1x0P2OMNGM0jJ3v4DooCg77Q_gef08NpHld8a4XpX_zyDpmhF5YJwE2d7SYEWs4Y4MaNFP4wgjaVzFJA0mJQltzqJ4Jsn48Kp4UdluZT1kmD97UOVWZlbWcQS8upDgVOyIVXZ4UapBQCaEdjj_YpXUc3AY-kEpH6usgNVxp2Yf9VVVZ5C1yZZdmZNdUPBKo13WhgTee05WbpCh4g9nQyYYiSKCV_ID6Zc-WA7_7TbU-vFQcIcFSsw2YQObfTs1_IhODgmLpHBqlfSLF6ekAZUf6ZRzHGfLqSMYp42HMSOl1OD0KOAPRccyT6Iow2vr42vjUQzesqm_tbb2xunRjYxjiM8djRKxWO5BpC39zAw4BQdSA5F-nbn3ciZcaQuGsWorlj8iQcO1zky2Bj3QZTVhaY6_5qSSzFq_mvy0nmgHceqKNCZ5LLIOgW11C7grl9Gq-PdRDYIeZ-DYHVI
    **Nota**: de este modo obtenemos la autorización para ver las categorías.





### Video 180. Protegiendo las Demás Rutas
1. Implementar el método **__construct** del controlador **app\Http\Controllers\ApiController.php**:
    ```php
    public function __construct(){
        $this->middleware('auth:api');
    }
    ```
2. En los siguientes controladores:
    + **app\Http\Controllers\Buyer\BuyerCategoryController.php**.
    + **app\Http\Controllers\Buyer\BuyerController.php**.
    + **app\Http\Controllers\Buyer\BuyerProductController.php**.
    + **app\Http\Controllers\Buyer\BuyerSellerController.php**.
    + **app\Http\Controllers\Buyer\BuyerTransactionController.php**.
    + **app\Http\Controllers\Category\CategoryBuyerController.php**.
    + **app\Http\Controllers\Category\CategorySellerController.php**.
    + **app\Http\Controllers\Category\CategoryTransactionController.php**.
    + **app\Http\Controllers\Product\ProductBuyerController.php**.
    + **app\Http\Controllers\Product\ProductTransactionController.php**.
    + **app\Http\Controllers\Seller\SellerBuyerController.php**.
    + **app\Http\Controllers\Seller\SellerCategoryController.php**.
    + **app\Http\Controllers\Seller\SellerController.php**.
    + **app\Http\Controllers\Seller\SellerTransactionController.php**.
    + **app\Http\Controllers\Transaction\TransactionController.php**.
    + **app\Http\Controllers\Transaction\TransactionSellerController.php**.
    Escribir al principio de la clase el siguiente método constructor:
    ```php
    public function __construct(){
        parent::__construct();
    }
    ```
3. Modificar el contructor del controlador **app\Http\Controllers\Category\CategoryController.php**:
    ```php
    public function __construct(){
        $this->middleware('client.credentials')->only(['index', 'show']);
        $this->middleware('auth:api')->except(['index', 'show']);
        $this->middleware('transform.input' . CategoryTransformer::class)->only(['store', 'update']);
    }
    ```
4. Modificar el contructor del controlador **app\Http\Controllers\Product\ProductCategoryController.php**:
    ```php
    public function __construct(){
        $this->middleware('client.credentials')->only(['index']);
        $this->middleware('auth.api')->except(['index']);
    }
    ```
5. Modificar el contructor del controlador **app\Http\Controllers\User\UserController.php**:
    ```php
    public function __construct(){
        $this->middleware('client.credentials')->only(['store']);
        $this->middleware('auth:api')->except(['store', 'verify']);
        $this->middleware('transform.input' . UserTransformer::class)->only(['store', 'update']);
    }
    ```

### Video 181. Usando el Grant Type Password
1. Crear un cliente tipo password:
    + $ php artisan passport:client --password
    + What should we name the password grant client? [APIRestful Password Grant Client]: > password2
    + Which user provider should this client use to retrieve users? [users]:
        + [0] users
        + > [ENTER]
    + Salida:
    ```
    Password grant client created successfully.
    Client ID: 5
    Client secret: fuEOTfbuuncZriV7euoeuBosLPmiJyKjOzrbemex
    ```
2. Enviar petición http:
    + Método: POST
    + URL: apirestful.dev/oauth/token
    + Body:
        + Form:
            + Field name: grant_type    | Value: password
            + Field name: client_id     | Value: 5
            + Field name: client_secret | Value: fuEOTfbuuncZriV7euoeuBosLPmiJyKjOzrbemex
            + Field name: username      | Value: sunny62@example.com (debe ser un usuario cualquiera de la tabla users)
            + Field name: password      | Value: password (esta es la contraseña para todos los usuarios establecida en el seeder)
    **Nota**: esta petición devolverá un token:
    ```json
    {
        "token_type": "Bearer",
        "expires_in": 1800,
        "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiM2FhOGRhZjI2NWFiYjMyZWYwNjk3NzlkMjE5NTkxM2FhZDFlMDE3ODZjMWExY2Y0MjFlOWNlMWViNGFiYTAxNGZhNjM0ZjlkM2I3MzQ1ODQiLCJpYXQiOjE2MzE5Njc2MTQuNzQyOTIzLCJuYmYiOjE2MzE5Njc2MTQuNzQyOTI4LCJleHAiOjE2MzE5Njk0MTQuNjczMDQ2LCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.UCfZ-yHVEE8gEEP8yGf02VsUP6jIbmxajKJam5DYZl2KHWa6qYtuwUw0SoVBnI72ppOeotdMlzrwS4Hr4KF7q4E-CV2Td6CI-V5QD_zkR7-sOKNsJNVSUXzQvqyUKsDAYmI4CoXxzLlsosHtIwuc2nUauZOFO-hdQYyH7wnJ__5nDmTPmNUaZu-mKs97HZA8jlWP4fLW8MEQK1Khh0e6cgsjgiV9P_p3sq3Yn-7KfTojf6hfBEbmpGewQYWZ_fsMCCSN7qJWDTYwf24CCCv9L5gxpYG494MXKRYnvrPt6kBpMrzA4C5scejjzh_qHjRsFXQzYgGgG7RQLBRw-eOv_zdAXcc2HJIMcRzT6rYmlIa_Ml3ez8fQUp0KR8URrZvgw-MJxTUpf1mUeJpqkL1D-4qcCh5yxbFWIMsJ3lgZ4F0gt231N0GCRtS_UEvFnCBsul6uQAClHWJuvYUJYSwDHvJagczXrwgJJg5PRJ9YLAu-5ZLHrMOBu8v9udSjRj8QLMnZblYGbVux0koFkWXTV25jv7SAc0JvsUujJDD4PjjODIh3jsxLaT9-4E2Bc1xu5LejByTHC8KPs6PC14oSpEyGQzDcwqxw9Zz6c3Fb7O1pN_878dGOL9zpzEk5qUrjUItW5uDpNBUvN0Pj5KtSBOLWMl85AlsWzGP5B8E3tso",
        "refresh_token": "def50200f5d8ebd3c019b04e02d69837797624f98fcf2d0b792e35345c1e3d3b9c1ece8d8e28549372fa0a27db8a2036dc757e3cac5670fe8b5dca9e43b5319751f95c8b927a26ccbad844f6b87fce08e5c8c8f75828c98458bc1ee65234ce673c3fdd396507a44bbf8831ac118b4c386fa5ea848670752e93cf6f8a35968968292bff4137909c60e83337b2e93fcc353fa3280e687651b4b7ecd1c5cfc3e3c06bc6e2986b5771e77536c157df1034342061587d19a8575744689157db864181eb7c1f7b7d360b51866f1b70bd45f1b0b100bd337b5437af042f51c038167e3955b37c6cb99e60a8c017bfe44e01d84a17d711349ab5fe28d9b9b5dd7ab165ab0765568fddcdaf169faf6847a7c89a9d242180b7f2aa318af6d3030e06361ab14adfe7f9ee2c6b8fe972787800ea9a571f542dec13ac8dc9f17f0dc702e3de94db9393c83e0d17cce6ab4608aba1d94de00d49509a3ca9d0737177815240fd41c1"
    }
    ```
3. Usaremos el token obtenido para ver los usuarios con la siguiente petición:
    + Método: GET
    + URL: apirestful.dev/users
    + Headers:
        + Header: Authorization     | Value: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiI1IiwianRpIjoiM2FhOGRhZjI2NWFiYjMyZWYwNjk3NzlkMjE5NTkxM2FhZDFlMDE3ODZjMWExY2Y0MjFlOWNlMWViNGFiYTAxNGZhNjM0ZjlkM2I3MzQ1ODQiLCJpYXQiOjE2MzE5Njc2MTQuNzQyOTIzLCJuYmYiOjE2MzE5Njc2MTQuNzQyOTI4LCJleHAiOjE2MzE5Njk0MTQuNjczMDQ2LCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.UCfZ-yHVEE8gEEP8yGf02VsUP6jIbmxajKJam5DYZl2KHWa6qYtuwUw0SoVBnI72ppOeotdMlzrwS4Hr4KF7q4E-CV2Td6CI-V5QD_zkR7-sOKNsJNVSUXzQvqyUKsDAYmI4CoXxzLlsosHtIwuc2nUauZOFO-hdQYyH7wnJ__5nDmTPmNUaZu-mKs97HZA8jlWP4fLW8MEQK1Khh0e6cgsjgiV9P_p3sq3Yn-7KfTojf6hfBEbmpGewQYWZ_fsMCCSN7qJWDTYwf24CCCv9L5gxpYG494MXKRYnvrPt6kBpMrzA4C5scejjzh_qHjRsFXQzYgGgG7RQLBRw-eOv_zdAXcc2HJIMcRzT6rYmlIa_Ml3ez8fQUp0KR8URrZvgw-MJxTUpf1mUeJpqkL1D-4qcCh5yxbFWIMsJ3lgZ4F0gt231N0GCRtS_UEvFnCBsul6uQAClHWJuvYUJYSwDHvJagczXrwgJJg5PRJ9YLAu-5ZLHrMOBu8v9udSjRj8QLMnZblYGbVux0koFkWXTV25jv7SAc0JvsUujJDD4PjjODIh3jsxLaT9-4E2Bc1xu5LejByTHC8KPs6PC14oSpEyGQzDcwqxw9Zz6c3Fb7O1pN_878dGOL9zpzEk5qUrjUItW5uDpNBUvN0Pj5KtSBOLWMl85AlsWzGP5B8E3tso
    **Nota**: de este modo obtenemos la autorización para ver los usuarios.

### Video 182. Preparando la API para Usar los Componentes de Passport
1. Publicar los componente de Laravel Passport:
    + $ php artisan vendor:publish --tag=passport-config
        + El archivo de configuración se creará en **config\passport.php**.
    + $ php artisan vendor:publish --tag=passport-views
        + La vista se creará en **resources\views\vendor\passport**.
2. Ejecutar:
    + $ npm install
    + $ npm run dev

### Video 183. Usando el Componente para Gestionar Tokens Personales
**Nota**: esta lección no es compatible con Laravel 8.
1. Crear controlador **HomeController**:
    + $ php artisan make:controller HomeController
2. Crear ruta **home.my-tokens** en el archivo de rutas **routes\web.php**:
    ```php
    Route::get('home.my-tokens', [HomeController::class, 'getTokens'])->name('personal-tokens');
    ```
    Importar el controlador **kkkk**:
    ```php
    use App\Http\Controllers\HomeController;
    ```
3. Crear el método **getTokens** en el controlador **app\Http\Controllers\HomeController.php**:
    ```php
    ***
    ```
<!-- 4. Crear vista **resources\views\home\personal-token.blade.php**:
    ```php
    ***
    ``` -->
5. Modificar la plantilla **resources\views\layouts\app.blade.php**:
    ```php
    ***
    ```

### Video 184. Acerca de los Tokens Personales y Cómo Usarlos







### Video 185. Usando los Componentes para Gestionar Clientes de la API
### Video 186. Obteniendo un Token con un Código de Autorización
### Video 187. Usando el Grant Type Implícito
### Video 188. Usando los Refresh Tokens







    ```php
    ***
    ```

≡


app\Http\Controllers\Controller.php

## Tareas comunes para la máquina virtual:
+ Para ver los comandos de vagrant:
    + $ vagrant
+ Para crear/encender la máquina virtual
    + $ vagrant up
+ Para apagar la máquina virtual
    + $ vagrant halt
+ Para destruir la máquina virtual
    + $ vagrant destroy
+ Para ver el estatus de la máquina virtual
    + $ vagrant status
+ Para establecer conexión con la máquina virtual:
    + $ vagrant ssh

## Tareas comunes para MySQL de la máquina virtual:
+ Primero se debe ingresar al terminal de la máquina virtual.
+ Ingresar a MySQL:
    + $ mysql
+ Selecconar la base de datos **apirestful**:
    + mysql> use apirestful
+ Mostrar todos los nombres y emails de los usuarios de la tabla **users**:
    + mysql> select name, email from users;
+ Salir de MySQL:
    + mysql> exit

## Parámetros para conectar de forma remota con la base de datos de nuestro proyecto **APIRestful**:
DB_HOST=192.168.10.10
DB_PORT=3306
DB_DATABASE=apirestful
DB_USERNAME=homestead
DB_PASSWORD=secret

## **Reposotorio del proyecto**: https://github.com/JuanDMeGon/API-RESTful-con-Laravel-Guia-Definitiva

## REVISAR: Secciones 15 y 17.