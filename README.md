# GraphQL
Implemement GraphQL using laravel

## How to run this project?

1. Clone this repo `https://github.com/yemiwebby/lara-bookstore.git`
2. `cd lara-bookstore && composer install`
3. `cp .env.example .env`
4. Set your database
5. Generate app key `php artisan key:generate`
6. Run migration `php artisan migrate`
7. Run database seeder `php artisan db:seed`
8. Last steps `php artisan serve`
9. You can test graphql endpoint on http://localhost:8000/graphql

## Testing

Before you start, make sure you have 1 of tools here:

 - Postman https://learning.postman.com/docs/sending-requests/supported-api-frameworks/graphql/
 - GraphiQL https://www.electronjs.org/apps/graphiql
 - Insomnia https://support.insomnia.rest/article/176-graphql-queries

### 1. Get list books
![enter image description here](https://twilio-cms-prod.s3.amazonaws.com/images/KxQN09OYSKsdInZcsm0WDkmgojIcswwRg-AW58qQUBXpQ.width-1600.png)

 ### 2. Get specific book id
 ![enter image description here](https://twilio-cms-prod.s3.amazonaws.com/images/DC3Y3tY3Hz8pC_jxVbmJFZ9Q6hHqFGPW4JpIeUy2BF0HK.width-1600.png)

### 3. Create a book
![enter image description here](https://twilio-cms-prod.s3.amazonaws.com/images/yB7pd65vJACOHuUG9Yr_xHEg2JE3sz49MXUFZ-PPXVl02.width-1600.png)

### 4. Update a book
![enter image description here](https://twilio-cms-prod.s3.amazonaws.com/images/MU8ML7LIeT8QD3zaDivf6RqyVxrwNDBdZz0fSugbar3WM.width-1600.png)

Updated by : Widada
