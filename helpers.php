<?php


/**
 * Get the base route
 * 
 * @param string $path
 * @return string
 */
function basePath ($path = '') 
{
    return __DIR__ . '/' . $path;
}


/**
 * Load a view
 * 
 * @param string $name
 * @return void
 */
function loadView($name)
{
    $viewPath = basePath("views/{$name}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "Path {$name} does not exist!";
    }
}

/**
 * Load a partial
 * 
 * @param string $name
 * @return void
 */
function loadPartial($name) {
    $partialPath = basePath("views/partials/{$name}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial {$name} does not exist!";
    }
}

/**
 * Inspect (a) value(s)
 * 
 * @param mixed $value
 * @return void
 */
function inspect($value) 
{
    echo "<br>";
    var_dump($value);
    echo "</br>";
}

/**
 * Inspect (a) value(s) and die
 * 
 * @param mixed $value
 * @return void
 */
function inspectAndDie($value) 
{
    echo "<br>";
    die(var_dump($value));
    echo "</br>";
}