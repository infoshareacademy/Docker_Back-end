FROM golang:1.16-buster AS build
WORKDIR /app
COPY . .
RUN go mod download && \
    go build -v -o app

FROM debian:buster
CMD ["/app"]
EXPOSE 8080/tcp
COPY --from=build /app/app /app
