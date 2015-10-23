process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');

var paths = {
    'jquery': './bower_components/jquery/dist',
    'bootstrap': './bower_components/bootstrap-sass-official/assets',
    //'fontawesome': './vendor/bower_components/fontawesome',
    //'html5shiv': './vendor/bower_components/html5shiv',
    //'respond': './vendor/bower_components/respond'
    'datetimepicker': './bower_components/datetimepicker'//,
}

elixir(function(mix) {
    mix
        .sass(
            [paths.datetimepicker + '/jquery.datetimepicker.css', '*.scss'],
            'public/css/app.css',
            {
                includePaths: [
                    paths.bootstrap + '/stylesheets'
                ]
            }
        )
        // , paths.fontawesome + '/scss'
        .scripts([
            paths.jquery + '/jquery.js',
            paths.datetimepicker + '/jquery.datetimepicker.js',
            'app.js'
        ], 'public/js/app.js')
        .version([
            'css/app.css',
            'js/app.js'
        ]);
});

/*
elixir(function(mix){
    mix
        .sass('*.scss', 'public/css', {includePaths: [paths.bootstrap + '/stylesheets', paths.fontawesome + '/scss']})
        .scripts([
            paths.jquery + '/jquery.js',
            paths.bootstrap + '/javascripts/bootstrap.js',
            './resources/assets/js/** / *.js',
        ], 'public/js/app.js', './')
        .copy(paths.bootstrap + '/fonts/bootstrap/**', 'public/fonts/bootstrap')
        .copy(paths.fontawesome + '/fonts/**', 'public/fonts/fontawesome')
        .copy(paths.html5shiv + '/dist/html5shiv.min.js', 'public/js')
        .copy(paths.respond + '/dest/respond.min.js', 'public/js')
        .copy('./resources/assets/copy/img/**', 'public/img')
        .copy('./resources/assets/copy/js/**', 'public/js')
        .version([
            'css/app.css',
            'js/app.js'
        ])
    ;
});
// */
