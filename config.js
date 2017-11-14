/* ======== КОНФИГУРАЦИЯ GULP ======================================================================================= */

module.exports = {

/* =========== НАСТРОЙКИ ПРОЕКТА ==================================================================================== */



    use: {  // Использование шаблонов и препроцессоров (По умолчанию LESS+HTML)
        less: true,
        sass: false,
        pug: false
    },


    compress: { // Настройки сжатия. (по умолчанию в разработке css и js не минифицируем)
        // html: false,
        css: true,
        js: true
        // img: true
    },
/* ================================================================================================================== */


/* =========== ПАПКИ И ФАЙЛЫ ПРОЕКТА ================================================================================ */

    paths: {
        project: './',

        build: { // Папки готового проекта
            // html: 'build/',
            js: 'public/js/',
            css: 'public/css/'
            // img: 'public/img/',
            // fonts: 'public/fonts/',
            // sprites: 'public/img/sprites/',
            // svg: 'public/svg/'
        },

        src: { // Папки и файлы исходников
            // html: 'resources/pages/*.html', //  "*.html" говорит gulp что мы хотим взять все файлы с расширением .html
            // pug: 'resources/pages/*.pug',
            js: 'resources/assets/js/main.js', // В стилях и скриптах нам понадобятся только один исходный файлы
            less: 'resources/assets/less/styles.less'
            // sass: 'src/styles/styles.scss',
            // img: 'resources/assets/img/**/*.*', // img/**/*.*  - взять все файлы всех расширений из папки и из вложенных папок
            // fonts: 'resources/assets/fonts/**/*.*',
            // sprites: 'resources/assets/img/sprites/*.png',
            // svg: 'resources/assets/img/svg/**/*.svg'
        },


        watch: { // Файлы за изменением которых мы наблюдаем
            // html: 'src/pages/**/*.html',
            // pug: 'src/pages/**/*.pug',
            js: 'resources/assets/js/**/*.js',
            less: 'resources/assets/less/**/*.less'
            // sass: 'src/styles/**/*.scss',
            // img: 'frontend/images/**/*.*',
            // fonts: 'frontend/fonts/**/*.*',
            // sprites: 'src/images/sprites/*.png',
            // svg: 'src/images/svg/**/*.svg'
        },


        clean: './assets' // Папка которая может очищаться
    },


    names: { // Имена основных файлов в готовом проекте
        css: 'main.css',
        js: 'main.js'
        // vendorjs: 'vendor.min.js'
    },
/* ================================================================================================================== */


/* ============= НАСТРОЙКИ ПЛАГИНОВ ================================================================================= */


    // browserSync: { // Параметры локального сервера
    //     server: {
    //         baseDir: './build'  // Корневая папка локального сервера
    //     },
    //     tunnel: false,
    //     host: 'localhost',
    //     port: 9000, // Порт локального сервера
    //     logPrefix: 'frontend',
    //     logLevel: "info",
    //     online: true,
    //     open: true  // Открывать в браузере автоматически?
    // },
    //
    // pug: { // Настройки pug
    //     pretty: true // false = на выходе минифицированный HTML
    // },
    //
    // htmlmin: {
    //     collapseWhitespace: true //  Сжимать пробелы
    // },
    //
    // sass: {
    //     outputStyle: 'expanded' // Формат вывода готового CSS. По умолчанию выводится расширенный
    // },

    autoprefixer: {
        browsers: [
            '> 2%',
            'last 5 versions',
            'firefox >= 4',
            'safari 7',
            'safari 8',
            'IE 10',
            'IE 11'
        ],
        cascade: true
    }

};
