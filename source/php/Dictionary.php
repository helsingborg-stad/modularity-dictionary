<?php

namespace ModularityDictionary;

class Dictionary
{
    public function __construct()
    {
        add_action('init', array($this, 'addDictionaryPage'));
    }

    public function addDictionaryPage()
    {
        if (function_exists('acf_add_options_page')) {
            acf_add_options_page(array(
                'page_title' => 'Dictionary',
                'menu_title' => 'Dictionary',
                'menu_slug' => 'dictionary',
                'capability' => 'edit_posts',
                'position' => 300,
                'icon_url' => 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB2aWV3Qm94PSIwIDAgNDI0LjY1MiA0MjQuNjUyIj48ZyBmaWxsPSIjRkZGIj48cGF0aCBkPSJNMjQwLjk2IDIyOC42MjJjLTUuODg1IDAtMTEuMTg2IDQuNTMtMTIuNjA0IDEwLjc3NGwtLjAxOCAyMS4yMzRjMS41MDYgNi4xNzQgNi41NzYgMTAuMzEgMTIuNjIzIDEwLjMxIDkuNzg4IDAgMTUuNC03Ljc4IDE1LjQtMjEuMzQgMC00LjkyLTEuMTEtMjAuOTc4LTE1LjQtMjAuOTc4em0tMTIzLjE4NCAxMC4yOGgxNy41M2wtOS4wNS0zMS40NHoiLz48cGF0aCBkPSJNNzIuMDU3IDBMMzUuMTQgNTQuMjcybC0uMDMgMzQyLjI4LjAzLjAwMnYyOC4xaDI5OC40ODZ2LS4zOGwuOTI0LjA4NSA1NC45OTMtNDIuMDdWMEg3Mi4wNTd6bTc4LjY0IDI5Ny41NmwtOS4zNTgtMzEuMTRoLTI5LjQ3N2wtOC42NCAzMS4xNGgtMzUuODNsMzkuMjItMTI4LjMxNGg0MS4xNjZsMzkuNzkgMTI4LjMxM2gtMzYuODczem0xMjYuOTk1LTEwLjk4NGMtNy45OCA4LjM2LTE4LjcyNCAxMi45NjMtMzAuMjUgMTIuOTYzLTkuNzYzIDAtMTcuOTQyLTMuMTEtMjQuMDctOS4wNzRsLS42MjUgNy4wOTJoLTI5LjI1bC4wNDYtMTM0Ljc5NmgzNC4zNnY0NS4yNzVjNi4xLTQuODcgMTQuMTgtNy40NzcgMjMuNDk3LTcuNDc3IDEwLjMxIDAgMTkuNTA0IDMuNzcgMjYuNTg4IDEwLjkgOC42NiA4LjcxNyAxMy4zNzIgMjEuODg3IDEzLjI3IDM3LjA4My4wMDIgMTUuNTcyLTQuNjkgMjguNzMtMTMuNTY2IDM4LjAzem04MS44NSA4MC44OTNsLTI1LjkxNiAxOS44MjNWNTQuMjczSDcxLjU5Mkw4Ny45OTIgMzBoMjcxLjU1djMzNy40N3oiLz48L2c+PC9zdmc+'
            ));
        }
    }
}
