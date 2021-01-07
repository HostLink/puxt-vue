<?php

return function ($context) {
    if (substr($context->route->path, 0, 5) == "_vue/") {
        $vue = substr($context->route->path, 5) . ".vue";

        $vue_file = $this->root . DIRECTORY_SEPARATOR . "pages" . DIRECTORY_SEPARATOR . $vue;

        if (file_exists($vue_file)) {
            $vue_content = file_get_contents($vue_file);

            echo str_replace("export default", "exports =", $vue_content);

            die();
        }
    }
};
