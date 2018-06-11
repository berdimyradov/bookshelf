Тестовое задание для PHP-разработчика.
 
Используя нативный php (без фреймворков)
 
1. Реализовать сущности авторы и книги
 
2. Реализовать административную часть
    a. CRUD операции для авторов и книг
    b. вывести список книг с обязательным указанием имени автора в списке
    c. вывести список авторов с указанием кол-ва книг
 
3.    Реализовать публичную часть сайта с отображение авторов и их книг (простой вывод списка на странице)
 
4.    Реализовать выдачу данных в формате json по RESTful протоколу отдельным контроллером
    a. GET /api/v1/books/list получение списка книг с именем автора 
    b. GET /api/v1/books/by-id получение данных книги по id 
    c. POST /api/v1/books/update обновление данных книги 
    d. DELETE /api/v1/books/id удаление записи книги из бд 
 