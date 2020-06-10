# codeigniter3-news-CMS

A web app built using the codeigniter for adding, editing, removing news articles. It uses a MySQL database in order to save and retrieve articles

## Installation

- (Optional?) Run `composer install`
- Make sure you have MySQL or the XAMPP or LAMPP server application.
- Run migrations using `php index.php migrate` (You might have to disable some paths in `application/config/routes.php`)
- (Optional?) `chmod +x server.sh`
- Run `./server.sh` or just use any server application to start the server
- Go to `http://localhost/{the name of the project}` and you should see an empty page showing "News articles"
