FROM nginx:1.26.1-alpine3.19

COPY . /app

RUN rm /etc/nginx/conf.d/default.conf
COPY ./default.conf /etc/nginx/conf.d/default.conf
