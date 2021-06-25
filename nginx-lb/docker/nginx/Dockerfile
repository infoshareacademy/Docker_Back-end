FROM nginx:1.19
COPY . /app
RUN rm -rf /etc/nginx/nginx.conf /etc/nginx/conf.d && \
    mkdir -p /etc/nginx/conf.d && \
    cp -f /app/docker/nginx/nginx.conf /etc/nginx/nginx.conf && \
    cp -f /app/docker/nginx/web.conf /etc/nginx/conf.d/web.conf

