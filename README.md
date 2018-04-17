# Generate Drupal one time logins (tested with Drupal 7.x)

If you gain access to a Drupal installation this script can generate a one time login link for you.

Data needed:
- `$drupal_hash_salt` from `sites/default/settings.php`

User info you want to impersonate (`users` database table):
- `uid`
- `pass` (password hash)
- `login` (timestamp of last login)

Simply fill in the values of the PHP script and it will generate a one time login link for you

Example:
```
root@notebook:~/# php otl.php
http://site.com/user/reset/0/1523956596/HCG1v5obUgBo5MLOR9tDzLNkj98UpOHbdVYSm3DwS88/login
```
