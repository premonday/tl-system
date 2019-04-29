# Tierlist.gg Design System
Point of management for new global features and styling.

### When setting up a new project

- Make a new laravel project
- Add global styling as a submodule in resources/global
- Make an `img` folder in `/resources`
- Change webpack.mix.js to below

```swagger codegen
mix.js('resources/js/app.js', 'public/js')
    .js('resources/global/js/bootstrap.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .browserSync({
        proxy: '127.0.0.1:8000/',
        notify: false
    })
    .copyDirectory('resources/img', 'public/img')
    .copyDirectory('resources/global/img', 'public/global/img')
    .copyDirectory('resources/global/views', 'resources/views')
    .version();
```
