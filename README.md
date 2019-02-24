# Alpha Tau Lambdas Website

## Setup
Requires one-time setup of a MySQL database container.

1. In your terminal, `cd` to the directory you'd like to keep the database in.

2. Start a MySQL container:
`docker run --name lphie_db -d -e MYSQL_ROOT_PASSWORD='0lympi@ns' -v $(pwd):/var/lib/mysql mysql:5.7.23`

3. Start a MySQL command-line container:
`docker run -it --name mysql_cmdline --link lphie_db:db mysql:5.7.23 bash`

4. Inside the previous container, start the MySQL monitor:
`mysql -uroot -p'0lympi@ns' -h db`

5. Inside the monitor, create the database and grant permissions:
```
create user 'www'@'%' identified by '0lympi@ns';
create database alphatau character set utf8;
grant all on *.* to 'www'@'%';
```

6. CTRL+D to exit the monitor.

7. Quit the command-line container: `exit`

8. Back in your terminal, `cd` to the directory containing `docker-compose.yml`

9. Start the server: `docker-compose up`