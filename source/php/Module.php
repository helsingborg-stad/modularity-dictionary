<?php

namespace ModularityDictionary;

class Module extends \Modularity\Module
{
    public $args = array(
        'id' => 'dictionary',
        'nameSingular' => 'Dictionary',
        'namePlural' => 'Dictionary',
        'description' => 'A dictionary with matched words from the dictionary settings',
        'supports' => array(),
        'icon' => 'data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE2LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPCFET0NUWVBFIHN2ZyBQVUJMSUMgIi0vL1czQy8vRFREIFNWRyAxLjEvL0VOIiAiaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkIj4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4PSIwcHgiIHk9IjBweCINCgkgd2lkdGg9IjQyNC42NTJweCIgaGVpZ2h0PSI0MjQuNjUycHgiIHZpZXdCb3g9IjAgMCA0MjQuNjUyIDQyNC42NTIiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQyNC42NTIgNDI0LjY1MjsiDQoJIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik0yNDAuOTYxLDIyOC42MjJjLTUuODg2LDAtMTEuMTg3LDQuNTMxLTEyLjYwNSwxMC43NzRsLTAuMDE4LDIxLjIzNGMxLjUwNiw2LjE3NCw2LjU3NiwxMC4zMDksMTIuNjIzLDEwLjMwOQ0KCQkJYzkuNzg2LDAsMTUuMzk5LTcuNzc4LDE1LjM5OS0yMS4zNEMyNTYuMzYsMjQ0LjY4LDI1NS4yNSwyMjguNjIyLDI0MC45NjEsMjI4LjYyMnoiLz4NCgkJPHBvbHlnb24gcG9pbnRzPSIxMTcuNzc2LDIzOC45MDIgMTM1LjMwNSwyMzguOTAyIDEyNi4yNTYsMjA3LjQ2MyAJCSIvPg0KCQk8cGF0aCBkPSJNNzIuMDU3LDBMMzUuMTQsNTQuMjcybC0wLjAzMSwzNDIuMjc5bDAuMDMxLDAuMDAzdjI4LjA5OWgyOTguNDg2di0wLjM4bDAuOTI0LDAuMDg2bDU0Ljk5My00Mi4wNjdWMEg3Mi4wNTd6DQoJCQkgTTE1MC42OTgsMjk3LjU1OWwtOS4zNTktMzEuMTM5aC0yOS40NzVsLTguNjQsMzEuMTM5aC0zNS44M2wzOS4yMTktMTI4LjMxM2g0MS4xNjdsMzkuNzg5LDEyOC4zMTNIMTUwLjY5OHogTTI3Ny42OTIsMjg2LjU3Ng0KCQkJYy03Ljk3OSw4LjM1OS0xOC43MjQsMTIuOTYzLTMwLjI1MSwxMi45NjNjLTkuNzYyLDAtMTcuOTQxLTMuMTA3LTI0LjA2OS05LjA3MmwtMC42MjUsNy4wOTJoLTI5LjI0OWwwLjA0NS0xMzQuNzk1aDM0LjM1OXY0NS4yNzUNCgkJCWM2LjEwMS00Ljg2OCwxNC4xOC03LjQ3NiwyMy40OTgtNy40NzZjMTAuMzEsMCwxOS41MDQsMy43NywyNi41ODgsMTAuOTAxYzguNjU5LDguNzE2LDEzLjM3MiwyMS44ODYsMTMuMjcxLDM3LjA4Mg0KCQkJQzI5MS4yNiwyNjQuMTE4LDI4Ni41NjgsMjc3LjI3NywyNzcuNjkyLDI4Ni41NzZ6IE0zNTkuNTQzLDM2Ny40NjlsLTI1LjkxNywxOS44MjVWNTQuMjcySDcxLjU5Mkw4Ny45OTMsMzBoMjcxLjU1VjM2Ny40NjkNCgkJCUwzNTkuNTQzLDM2Ny40Njl6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPC9zdmc+DQo='
    );

    public function __construct()
    {
        // This will register the module
        $this->register(
            $this->args['id'],
            $this->args['nameSingular'],
            $this->args['namePlural'],
            $this->args['description'],
            $this->args['supports'],
            $this->args['icon']
        );

        // Add our template folder as search path for templates
        add_filter('Modularity/Module/TemplatePath', function ($paths) {
            $paths[] = MODULARITYDICTIONARY_PATH . 'templates/';
            return $paths;
        });

        add_action('wp', function () {

            global $post;
            $matching = \ModularityDictionary\Dictionary::getMatchingWords($post);

            add_filter('Modularity/Display/' . $this->moduleSlug . '/Markup', function ($markup, $module) use ($matching) {
                if (!$matching || count($matching) === 0) {
                    return '';
                }

                return $markup;
            }, 10, 2);

        });
    }
}
