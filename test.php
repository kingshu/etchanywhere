<?php

		echo 'DB_HOST '. getenv('OPENSHIFT_MYSQL_DB_HOST');
        echo 'DB_USER '. getenv('OPENSHIFT_MYSQL_DB_USERNAME');
        echo 'DB_PASS '. getenv('OPENSHIFT_MYSQL_DB_PASSWORD');
        echo 'DB_BASE '. 'etch';
        echo 'DB_PORT '. getenv('OPENSHIFT_MYSQL_DB_PORT');

?>