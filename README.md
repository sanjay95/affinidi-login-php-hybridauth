## Seamless Affinidi Login Integration in PHP

Building a simple PHP Application with Affinidi Login Integration using HybridAuth.

## Prerequisites
Your local machine should have [PHP 8.1](https://www.php.net/downloads) and [Composer](https://getcomposer.org/download/) installed.

**HybridAuth**

https://hybridauth.github.io/

<br>

## Setup & Run application

Open the generated app in VS code or your favourite editor

 1. Install the dependencies by executing the below command in terminal
    ```
    composer install
    ```
 2. Create the `.env` file in the sample application by running the following command
    ```
    cp .env.example .env
    ```
 3. Create [Affinidi Login Configuration](https://docs.affinidi.com/docs/affinidi-login/login-configuration/#create-login-configuration) by giving name as `PHP App` and `Redirect URIs` as `http://localhost:8000/callback.php`. Sample response is given below
    ```
    {
        ...
        "auth": {
            "clientId": "<AUTH.CLIENT_ID>",
            "clientSecret": "<AUTH.CLIENT_SECRET>",
            "issuer": "https://<PROJECT_ID>.apse1.login.affinidi.io"
        }
        ...
    }
    ```
    **Important**: Safeguard the Client ID and Client Secret and Issuer; you'll need them for setting up your environment variables. Remember, the Client Secret will be provided only once.


 4. Update below environment variables in `.env` based on the auth credentials received from the Login Configuration created earlier:
    ```
    PROVIDER_CLIENT_ID="<AUTH.CLIENT_ID>"
    PROVIDER_CLIENT_SECRET="<AUTH.CLIENT_SECRET>"
    PROVIDER_ISSUER="<AUTH.CLIENT_ISSUER>"
    ```
    Sample values looks like below
    ```
    PROVIDER_CLIENT_ID="xxxxx-xxxxx-xxxxx-xxxxx-xxxxx"
    PROVIDER_CLIENT_SECRET="xxxxxxxxxxxxxxx"
    PROVIDER_ISSUER="https://yyyy-yyy-yyy-yyyy.apse1.login.affinidi.io"
    ```
5. Run the application
    ```
    php -S localhost:8000 router.php
    ```
6. Open the [http://localhost:8000/](http://localhost:8000/), which displays login page 
    **Important**: You might error on redirect URL mismatch if you are using `http://127.0.0.1:8000/` instead of `http://localhost:8000/`. 
7. Click on `Affinidi Login` button to initiate OAuth2 login flow with Affinidi Vault
