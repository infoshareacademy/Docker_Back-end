FROM nginx:1.19
COPY ./docker/lb /nginx
RUN rm -rf /etc/nginx/nginx.conf /etc/nginx/conf.d && \
    mkdir -p /etc/nginx/conf.d && \
    cp -f /nginx/nginx.conf /etc/nginx/nginx.conf && \
    cp -f /nginx/web.conf /etc/nginx/conf.d/web.conf
COPY ./src /app


