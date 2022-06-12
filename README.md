# Requirements

* PHP
* MySQL
* PostMan
* MITM Proxy

# Installation (Docker)

```bash
docker-compose up -d
```

# Installation (Manual)

## Copying the Code

```bash
cd <your-hosting-directory>
```

```bash
git clone https://github.com/roottusk/vapi.git
```

## Setting up the Database

Import `vapi.sql` into MySQL Database

Configure the DB Credentials in the `vapi/.env`


## Starting MySQL service

Run following command (Linux)

```bash
service mysqld start
```

## Starting Laravel Server

Go to `vapi` directory and Run 

```bash
php artisan serve
```

## Setting Up Postman

- Import `vAPI.postman_collection.json` in Postman
- Import `vAPI_ENV.postman_environment.json` in Postman



# Usage

Browse `http://localhost/vapi/` for Documentation

After Sending requests, refer to the Postman Tests or Environment for Generated Tokens

# Deployment

[Helm](https://helm.sh/) can be used to deploy to a Kubernetes namespace. The chart is in the `vapi-chart` folder. The chart requires one secret named `vapi` with the following values:

```
DB_PASSWORD: <database password to use>
DB_USERNAME: <database username to use>
```

Sample Helm Install Command: `helm upgrade --install vapi ./vapi-chart --values=./vapi-chart/values.yaml`

*** Important *** 

The MYSQL_ROOT_PASSWORD on line 232 in the `values.yaml` must match that on line 184 in order to work. 

# Presented At
[OWASP 20th Anniversary](https://owasp20thanniversaryevent20.sched.com/event/ll1k)

[Blackhat Europe 2021 Arsenal](https://www.youtube.com/watch?v=7_Q5Rlm7Too)

[HITB Cyberweek 2021, Abu Dhabi, UAE](https://cyberweek.ae/2021/hitb-armory/)

[@Hack, Riyadh, KSA](https://athack.com/speakers?keys=Tushar)


# Upcoming

[APISecure.co](https://apisecure.co/)

# Mentions and References
[1] https://apisecurity.io/issue-132-experian-api-leak-breaches-digitalocean-geico-burp-plugins-vapi-lab/

[2] https://dsopas.github.io/MindAPI/references/

[3] https://dzone.com/articles/api-security-weekly-issue-132

[4] https://owasp.org/www-project-vulnerable-web-applications-directory/

[5] https://github.com/arainho/awesome-api-security

[6] https://portswigger.net/daily-swig/introducing-vapi-an-open-source-lab-environment-to-learn-about-api-security

[7] https://apisecurity.io/issue-169-insecure-api-wordpress-plugin-tesla-3rd-party-vulnerability-introducing-vapi/



