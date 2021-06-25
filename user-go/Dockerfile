FROM golang:1.16-buster AS build
CMD ["/app/app"]
EXPOSE 8080/tcp
WORKDIR /app
COPY . .
RUN go mod download && \
    go build -v -o app

FROM debian:buster
CMD ["gosu", "app:app", "/app"]
EXPOSE 8080/tcp
RUN apt-get update && \
    apt-get install -y gosu && \
    addgroup --gid 31337 --system app && \
    adduser --uid 31337 --system --group app --shell /bin/false
COPY --from=build /app/app /app

