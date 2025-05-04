const{src, dest, watch, parallel} = require("gulp");

//CSS
const sass = require('gulp-sass')(require('sass'));
const plumber = require('gulp-plumber');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps')


//Imagenes
const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

//JavaScript
const terser = require('gulp-terser-js');

function css (done){
    src('src/scss/**/*.scss')    // Identificar todos los archivos SASS
    .pipe(sourcemaps.init())    
    .pipe(plumber())            // CSS
    .pipe(sass())               // Compilarlo 
    .pipe(postcss([autoprefixer(), cssnano()])) //Mejora codigo css(lo "comprime")
    .pipe(sourcemaps.write('.')) // nos permite saber donde esta el scss de cada propiedad
    .pipe(dest('build/css'))    //Almacenar en el disco duro

    done(); // Callback: Indica a gulp el final de la función
}

function imagenes(done){
    const opciones = {
        optimizationLevel: 3
    }
    src('src/img/**/*.{png, jpg}') //Identificar todas las img con formato {png, jpg}
        .pipe(cache(imagemin(opciones)))// optimiza las imagenes
        .pipe(dest('build/img'))   //Las almacena en disco duro
    done();
}

function versionWebp(done){
    const opciones = {
        quality:50   //Calidad 50 (nada mal)
    };

    src('src/img/**/*.{png, jpg}') //Identificar todas las img con formato {png, jpg}
        .pipe(webp(opciones))      //Las covierte a webp con el parametro opciones
        .pipe(dest('build/img'))   //Las almacena en disco duro
    done()
}

function versionAvif(done){
    const opciones = {
        quality:50   //Calidad 50 (nada mal)
    };

    src('src/img/**/*.{png, jpg}') //Identificar todas las img con formato {png, jpg}
        .pipe(avif(opciones))      //Las covierte a webp con el parametro opciones
        .pipe(dest('build/img'))   //Las almacena en disco duro
    done()
}

function javascript(done){
    src('src/js/**/*.js')
    .pipe(sourcemaps.init())
        .pipe(terser())
        .pipe(sourcemaps.write('.'))
        .pipe(dest('build/js'));
    done();
}

function dev(done){
    watch('src/scss/**/*.scss', css); // watch('Ubicacion de archivo del que se espera
    watch('src/js/**/*.js', javascript);
    done();                          //cambios', que se va ejecutar cuando haya un cambio)
};


exports.css = css;
exports.js = javascript;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.imagenes = imagenes;
exports.dev = parallel(imagenes, versionWebp , versionAvif, javascript, dev);