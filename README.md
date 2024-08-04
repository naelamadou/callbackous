# CALLBACK OUSEYNOU

La sortie réussie du tunnel de paiement ne signifie pas que le paiement est terminé et reçu. En effet, certains paiements sont asynchrones et sont effectués en dehors du tunnel de paiement. Une url pour recevoir la notification de fin de paiement est requise. Le résultat (Échec ou Succès) sera alors envoyé au règlement de la transaction. Il doit répondre à certaines spécifications.
Mettre en œuvre une méthode Web service
Type : POST
Contenu : application/json
NB
Paramètres à récupérer par une méthode webservice GET.
La méthode ne doit pas avoir d’authentification (Basic, Bearer, etc...) le corps de la requête doit ressembler à ceci :

http ://your_url_callback?payment_mode=INTOUCH_SERVICE_CODE&pa id_sum=22200.0&paid_amount=22200.0&payment_token=1565251468191 &payment_status=200&command_number=14526&payment_validation_dat e=1565251499748


## Prerequisites


- PHP 7 ou 8

## Setup

1. **Clone the repository:**

    ```sh
    git clone https://github.com/naelamadou/callbackous.git
    
    ```


## Running the Application

- **POST http://localhost/callback/payment_callback.php)**
    
      ```json
     {
        "payment_mode": "INTOUCH_SERVICE_CODE",
        "paid_sum": 22200.0,
        "paid_amount": 22200.0,
        "payment_token": "1565251468191",
        "payment_status": 400,
        "command_number": 14526,
        "payment_validation_date": 1565251499748
    }


## Postman CURL

curl --request POST \
  --url http://localhost/callback/payment_callback.php \
  --data '{
    "payment_mode": "INTOUCH_SERVICE_CODE",
    "paid_sum": 22200.0,
    "paid_amount": 22200.0,
    "payment_token": "1565251468191",
    "payment_status": 400,
    "command_number": 14526,
    "payment_validation_date": 1565251499748
}
'
## Postman CURL 2
curl --request POST \
  --url 'http://localhost/callback/payment_callbackv3.php?payment_mode=INTOUCH_SERVICE_CODE&paid_sum=22200.0&paid_amount=22200.0&payment_token=1565251468191&payment_status=200&command_number=20230C2W3-1736103-gzeL&payment_validation_date=1565251499748'

Happy coding!
