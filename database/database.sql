-- sudo apt-get install postgresql-contrib
-- sudo /etc/init.d/postgresql restart
-- Se connecter en psql:
-- #sudo -i -u postgres;
-- #psql
-- #\connect infoconcession;
--  #CREATE EXTENSION hstore;
--

CREATE TABLE country (
  country_id SERIAL PRIMARY KEY,
  created_at TIMESTAMP WITHOUT TIME ZONE NOT NULL DEFAULT now(),
  updated_at TIMESTAMP WITHOUT TIME ZONE NOT NULL DEFAULT now(),
  deleted_at TIMESTAMP WITHOUT TIME ZONE NOT NULL DEFAULT now(),
  label      CHARACTER VARYING           NOT NULL
);

CREATE TABLE author (
  author_id  SERIAL PRIMARY KEY,
  created_at TIMESTAMP WITHOUT TIME ZONE                                 NOT NULL DEFAULT now(),
  updated_at TIMESTAMP WITHOUT TIME ZONE                                 NOT NULL DEFAULT now(),
  deleted_at TIMESTAMP WITHOUT TIME ZONE                                 NOT NULL DEFAULT now(),
  gender     INTEGER                                                     NOT NULL,
  first_name CHARACTER VARYING                                           NOT NULL,
  last_name  CHARACTER VARYING                                           NOT NULL,
  street     TEXT                                                        NULL,
  street2    TEXT                                                        NULL,
  postcode   CHARACTER VARYING                                           NULL,
  city       CHARACTER VARYING                                           NULL,
  country_id INTEGER REFERENCES country                                  NULL,
);


CREATE TABLE product (
  product_id    SERIAL PRIMARY KEY,
  author_id     INTEGER REFERENCES author                                  NOT NULL,
  created_at    TIMESTAMP WITHOUT TIME ZONE                                NOT NULL DEFAULT now(),
  updated_at    TIMESTAMP WITHOUT TIME ZONE                                NOT NULL DEFAULT now(),
  deleted_at    TIMESTAMP WITHOUT TIME ZONE                                NOT NULL DEFAULT now(),
  status        INTEGER                                                    NOT NULL,
  reference     CHARACTER VARYING                                          NOT NULL,
  title         CHARACTER VARYING                                          NOT NULL,
  description   TEXT                                                       NOT NULL,
  caracteristic hstore                                                     NOT NULL,
  price         DOUBLE PRECISION                                           NOT NULL,
  UNIQUE (reference)
);