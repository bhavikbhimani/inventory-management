Installation Details

Step 1:  git clone https://github.com/bhavikbhimani/inventory-management.git

Step 2:  Copy ".env.example" and rename to ".env" and put your system's Database details in .env

Step 3: create a database in MySQL with the name "inventory-management" 

Step 4: composer install && php artisan key:generate && php artisan jwt:secret && php artisan config:cache && php artisan cache:clear && php artisan route:clear && php artisan view:clear && composer clear-cache && composer dump-autoload && php artisan migrate && php artisan db:seed && php artisan serve

Step 5: "http://127.0.0.1:8000/" open this URL in the browser

Step 6: Register a new user OR login with the below credentials
        Email: bhavik@example.com
        Password: 12345678


================================================================================================================================================================================================================

API Details

PostMan collection: https://api.postman.com/collections/15750146-7ecaf95c-7c83-4f5c-84b8-6749070fabb1?access_key=PMAT-01HV31MK20AWNX7ZT0WX3RF6DQ
API End Point: http://127.0.0.1:8000/api/

Step 1: Import the Postman collection using the above link 

Step 2: In the Postman collection, there are 2 folders
            Collection name: inventory-management
                Folder 1: Auth
                    API 1: login (http://127.0.0.1:8000/api/login) (POST)
                    API 2: signup (http://127.0.0.1:8000/api/signup) (POST)
                    API 3: logout (http://127.0.0.1:8000/api/logout) (POST)
                Folder 2: Products
                    API 1: get products (http://127.0.0.1:8000/api/products?category_id={category_id}&min_price={min_price}&max_price={max_price}) (GET)
                    API 2: get product by ID (http://127.0.0.1:8000/api/products/{id}) (GET)
                    API 3: create product (http://127.0.0.1:8000/api/products/store) (POST)
                    API 4: update product by ID (http://127.0.0.1:8000/api/products/{id}) (POST)
                    API 5: delete product by ID (http://127.0.0.1:8000/api/products/{id}) (DELETE)

Step 3: first hit login (http://127.0.0.1:8000/api/login) API and in response get token

Step 4: set this token to a Bearer token in the authorization

Step 5: now hit any API.
