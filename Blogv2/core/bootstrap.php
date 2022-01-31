<?php

$connection = require 'config.php';

/*require 'function.php';*/
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
require 'core/Request.php';

$pdo = Connection::make($connection['blogwicc']);

return new QueryBuilder($pdo);
