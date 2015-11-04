process.env.DISABLE_NOTIFIER = true;

var elixir = require('laravel-elixir');

var bowerPath = './bower_components';

var paths = {
    'jquery': bowerPath + '/jquery/dist',
    'bootstrap': bowerPath + '/bootstrap-sass-official/assets',
    'mediumeditor': bowerPath + '/medium-editor/dist',
    'datetimepicker': './bower_components/datetimepicker'//,
    //'fontawesome': bowerPath + '/fontawesome',
    //'html5shiv': bowerPath + '/html5shiv',
    //'respond': bowerPath + '/respond'
}

elixir(function(mix) {
    mix
        .sass(
            [
                paths.datetimepicker + '/jquery.datetimepicker.css',
                '*.scss',
                paths.mediumeditor + '/css/medium-editor.css',
                paths.mediumeditor + '/css/themes/bootstrap.css'
            ],
            'public/css/app.css',
            {
                includePaths: [
                    paths.bootstrap + '/stylesheets'
                ]
            }
        )
        // , paths.fontawesome + '/scss'
        .scripts(
            [
                paths.jquery + '/jquery.js',
                paths.datetimepicker + '/jquery.datetimepicker.js',
                paths.mediumeditor + '/js/medium-editor.js',
                'app.js'
            ],
            'public/js/app.js'
        )
        .version([
            'css/app.css',
            'js/app.js'
        ]);
});
