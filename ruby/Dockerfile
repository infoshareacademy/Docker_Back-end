FROM ruby:3-buster
CMD ["bundle", "exec", "puma", "app.ru", "-p", "8080"]
EXPOSE 8080/tcp
WORKDIR /app
COPY Gemfile* /app/
RUN bundle install
COPY . .

