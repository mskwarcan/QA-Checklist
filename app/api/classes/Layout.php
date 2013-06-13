<?php
class Layout
{
    public function __construct($includeJs = true)
    {
        require_once('views/layouts/header.php');
    }

    public function renderFooter()
    {
        require_once('views/layouts/footer.php');
    }
}
?>