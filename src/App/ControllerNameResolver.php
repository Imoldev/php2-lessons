<?php

/**
 * Class ControllerNameResolver
 *
 * Отвечает за обработку запроса и возврат полного имени класса
 * контроллера
 */
class ControllerNameResolver
{
    protected string $root;

    protected string $name_space_pref;

    protected string $default_class_name;

    /**
     * ControllerNameResolver constructor.
     * @param string $default_class_name - класс по умолчанию, например 'Article\Index'
     * @param string $root - задавать с ведущим слешем, напрмер '/admin'
     * @param string $name_space_pref - префикс пространства имен, напрмер '\\Controllers'
     */
    public function __construct(string $default_class_name, string $root = '', string $name_space_pref = '')
    {
        $this->default_class_name = $default_class_name;
        $this->root = $root;
        $this->name_space_pref = $name_space_pref;
    }

    public function __invoke(): string
    {
        return $this->getFullClassName();
    }

    protected function getRequestPath(): string
    {
        $path = parse_url($_SERVER['REQUEST_URI'])['path'];
        return str_ireplace($this->root, '', $path);
    }

    protected function getFullClassName()
    {
        $requestPath = $this->getRequestPath();

        if ($requestPath === '/') {
            return $this->name_space_pref . '\\' . $this->default_class_name;
        }

        $requestPathArr = explode('/', $requestPath);

        $className = $this->name_space_pref;
        foreach ($requestPathArr as $namespaceComponent) {
            if (!empty($namespaceComponent)) {
                $className .= '\\' . ucfirst($namespaceComponent);
            }
        }
        return $className;
    }
}