// Se importan funciones esenciales de Gulp
import { src, dest, watch, parallel } from 'gulp';

//Se importa el plugin gulp-sass y se especifica que use sass en lugar de node-sass
import * as sass from 'sass';
import gulpSass from 'gulp-sass';
const sassCompiler = gulpSass(sass); // Usamos Dart Sass
//Se importan varios plugins de Gulp para diferentes tareas:

//Añadir prefijos de navegador automáticamente.
import autoprefixer from 'autoprefixer'
//Procesar CSS con plugins.
import postcss from 'gulp-postcss';
//Crear mapas de origen para depuración.
import sourcemaps from 'gulp-sourcemaps';
//Minificar css
import cssnano from 'cssnano';
//Concatenar archivos
import concat from 'gulp-concat';
//Minificar JavaScript
import terser from 'gulp-terser';
//Renombrar archivos
import rename from 'gulp-rename';
//Optimizar imagenes
import imagemin from 'gulp-imagemin';
//Enivar notificaciones
import notify from 'gulp-notify';
// Importar fs para manejo de archivos
import fs from 'fs'; 
//Cachear archivos
import cache from 'gulp-cache';
//Convertir imagenes a formato WebP
import webp from 'webp-converter';
webp.grant_permission();


//Se definen las rutas de los archivos que se van a procesar
const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*'
}

//Funcion CSS
function css() {
    return src('src/scss/main.scss') // Obtiene el archivo main.scss.
    .pipe(sourcemaps.init()) //Inicializa la creación de mapas de origen.
    .pipe(sassCompiler().on('error', sassCompiler.logError)) //Compila Sass a CSS y muestra errores en caso de que existan.
    .pipe(postcss([autoprefixer(), cssnano()])) //Procesa el CSS con Autoprefixer y lo minifica con CSSNano.
    .pipe(sourcemaps.write('.')) //Escribe los mapas de origen en la misma carpeta.
    .pipe(dest('./build/css')) //Especifica la carpeta de destino para el CSS compilado.
    .pipe(notify({ message: 'CSS compilado' })); //Envía una notificación al terminar.
}

//Funcion javascript
function javascript() {
    return src(paths.js) //Obtiene todos los archivos JavaScript.
        .pipe(sourcemaps.init()) //Inicializa la creación de mapas de origen
        .pipe(concat('bundle.js')) // Concatenar todos los archivos en uno solo.
        .pipe(terser()) //Minifica el JavaScript.
        .pipe(sourcemaps.write('.')) //Escribe los mapas de origen en la misma carpeta.
        .pipe(rename({ suffix: '.min '})) //Añade el sufijo .min al archivo.
        .pipe(dest('./build/js')) //Especifica la carpeta de destino para el JavaScript compilado.
        .pipe(notify({ message: 'Javascript compilado'})); //Envía una notificación al terminar.
}

function imagenes() {
    return src(paths.imagenes) //Obtiene todos los archivos de imágenes.
    .pipe(cache(imagemin({ optimizationLevel: 3 }))) //Optimiza las imágenes y las almacena en caché.
    .pipe(dest('build/img')) //Especifica la carpeta de destino para las imágenes optimizadas.
    .pipe(notify({ message: 'Imagenes optimizadas '})); //Envía una notificación al terminar.
}

async function versionWebp() {
    const imagenesPath = 'src/img';
    const salidaPath = 'build/img';

    // Crear el directorio de salida si no existe
    if (!fs.existsSync(salidaPath)) {
        fs.mkdirSync(salidaPath, { recursive: true });
    }

    const files = fs.readdirSync(imagenesPath).filter(file => /\.(jpg|jpeg|png)$/i.test(file));

    for (const file of files) {
        const inputPath = `${imagenesPath}/${file}`;
        const outputPath = `${salidaPath}/${file.replace(/\.(jpg|jpeg|png)$/i, '.webp')}`;
        await webp.cwebp(inputPath, outputPath, '-q 80');
    }

    console.log('Imágenes convertidas a WebP');
    notify({ message: 'Imágenes convertidas a WebP' });
}

function watchArchivos() {
    //Observa los cambios en los archivos y ejecuta la función
    watch(paths.scss, css);
    watch(paths.js, javascript);
    watch(paths.imagenes, imagenes);
    watch(paths.imagenes, versionWebp);
}

//Ejecuta todas las tareas en paralelo.
export default parallel(css, javascript, imagenes, versionWebp, watchArchivos);