<?php

return function () {

    $head = $this->config["head"] ?? [];

    $head["script"] = $head["script"] ?? [];

    $head["script"][] = [
        "src" => "https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"
    ];
    $head["script"][] = [
        "src" => "https://cdn.jsdelivr.net/npm/http-vue-loader@1.4.2/src/httpVueLoader.min.js"
    ];

    $this->config["head"] = $head;

    $this->addPlugin(__DIR__ . "/plugins.php");
};
