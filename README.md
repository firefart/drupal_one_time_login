# Generate Drupal one time logins (tested with Drupal 7.x)

If you gain access to a Drupal installation this script can generate a one time login link for you.

Data needed:
- `$drupal_hash_salt` from `sites/default/settings.php`
User info you want to impersonate (`users` database table):
- uid
- password hash
- login (timestamp of last login)

Simply fill in the values of the PHP script and it will generate a one time login link for you
