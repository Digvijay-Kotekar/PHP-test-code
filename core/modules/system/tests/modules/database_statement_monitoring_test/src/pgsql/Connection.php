<?php

namespace Drupal\database_statement_monitoring_test\pgsql;

use Drupal\pgsql\Driver\Database\pgsql\Connection as BaseConnection;
use Drupal\database_statement_monitoring_test\LoggedStatementsTrait;

@trigger_error('\Drupal\database_statement_monitoring_test\pgsql\Connection is deprecated in drupal:10.1.0 and is removed from drupal:11.0.0. There is no replacement. See https://www.drupal.org/node/3318162', E_USER_DEPRECATED);

/**
 * PostgreSQL Connection class that can log executed queries.
 *
 * @deprecated in drupal:10.1.0 and is removed from drupal:11.0.0. There is no
 *   replacement.
 *
 * @see https://www.drupal.org/node/3318162
 */
class Connection extends BaseConnection {
  use LoggedStatementsTrait;

}
