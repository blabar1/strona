<?php
function get_element($fileName, $variables = [])
{
    extract($variables);
    include($fileName);
}
