use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Inicio
Breadcrumbs::for('inicio', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('inicio'));
});

// Misión
Breadcrumbs::for('mision', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Misión', route('mision'));
});

// Visión
Breadcrumbs::for('vision', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Visión', route('vision'));
});

// Valores
Breadcrumbs::for('valores', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Valores', route('valores'));
});

// Productos
Breadcrumbs::for('productos', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Productos', route('productos'));
});

// Contacto
Breadcrumbs::for('contacto', function (BreadcrumbTrail $trail) {
    $trail->parent('inicio');
    $trail->push('Contacto', route('contacto'));
});
